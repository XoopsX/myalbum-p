<?php

require_once XOOPS_TRUST_PATH.'/modules/d3forum/class/D3commentAbstract.class.php' ;

// a class for d3forum comment integration
if( !class_exists('myalbumD3commentContent') ) 
{
	class myalbumD3commentContent extends D3commentAbstract {

		function fetchSummary( $external_link_id )
		{
			$db =& Database::getInstance() ;
			(method_exists('MyTextSanitizer', 'sGetInstance') and $myts =& MyTextSanitizer::sGetInstance()) || $myts =& MyTextSanitizer::getInstance();

			$module_handler =& xoops_gethandler( 'module' ) ;
			$module =& $module_handler->getByDirname( $this->mydirname ) ;

			$myalbum_id = intval( $external_link_id ) ;
			$mydirname = $this->mydirname ;
			if( preg_match( '/[^0-9a-zA-Z_-]/' , $mydirname ) ) die( 'Invalid mydirname' ) ;

			$MOD_PATH = XOOPS_ROOT_PATH .'/modules/'. $mydirname;
			include $MOD_PATH .'/include/read_configs.php';

			$content_row = $db->fetchArray( $db->query( "SELECT p.lid, p.title, p.ext, p.res_x, p.res_y, t.description FROM $table_photos p, $table_text t WHERE p.lid=t.lid and p.lid=$myalbum_id" ) ) ;
			if( empty( $content_row ) ) return '' ;

			$title = $myts->makeTboxData4Show( $content_row['title'] ) ;
			$lid = intval( $content_row['lid']) ;
			$ext = $content_row['ext'];
			$window_x = intval( $content_row['res_x']) ;
			$window_y = intval( $content_row['res_y']) ;

			$image_target = $photos_url .'/'. $lid .'.'. $ext;
			$photos_image = $thumbs_dir .'/'. $lid .'.'. $ext;
			$icons_image = $MOD_PATH .'/icons/'. $ext .'.gif';

			if ( file_exists( $photos_image ) ){
				$image_url = $thumbs_url .'/'. $lid .'.'. $ext;
				$size = getimagesize( $photos_image );
				if ( $size ){
					$width  = intval( $size[0] );
					$height = intval( $size[1] );
					$image_tag =  "<a href=\"$image_target\" target=\"blank\" onClick=\"window.open('$image_target','','width=$window_x,height=$window_y');return(false);\"><img src=\"$image_url\" width=\"$width\" height=\"$height\" alt=\"$title\" title=\"$title\" align=\"left\" /></a>";
				}
			} elseif ( file_exists( $icons_image ) ){
				$image_url = XOOPS_URL .'/modules/'. $mydirname.'/icons/'. $ext .'.gif';
				$size = getimagesize( $icons_image ) ;
				if ( $size ){
					$width  = intval( $size[0] );
					$height = intval( $size[1] );
					$image_tag =  "<a href=\"$image_target\" target=\"blank\"><img src=\"$image_url\" width=\"$width\" height=\"$height\" alt=\"$title\" title=\"$title\" align=\"left\" /></a>";
				}
			}

			$desc = '';
			if ( $content_row['description'] ){
				$str = strip_tags( $myts->displayTarea( strip_tags($content_row['description'] )));
				$desc = xoops_substr( $str , 0 , 255 );
			}

			if ( $desc && $image_tag ){
				$summary = $image_tag . $desc;
			} elseif ( ! $desc && $image_tag ){
				$summary = $image_tag;
			}

			return array(
				'dirname' => $mydirname ,
				'module_name' => $module->getVar( 'name' ) ,
				'subject' => $title ,
				'uri' => XOOPS_URL.'/modules/'.$mydirname.'/photo.php?lid='.$myalbum_id ,
				'summary' => $summary,
			) ;
		}

		function validate_id( $link_id )
		{
			$myalbum_id = intval( $link_id ) ;
			$mydirname = $this->mydirname ;

			$MOD_PATH = XOOPS_ROOT_PATH .'/modules/'. $mydirname;
			include $MOD_PATH .'/include/read_configs.php';

			$db =& Database::getInstance() ;
	
			list( $count ) = $db->fetchRow( $db->query( "SELECT COUNT(*) FROM $table_photos WHERE lid=$myalbum_id AND status > 0" ) ) ;
			if( $count <= 0 ) return false ;
			else return $myalbum_id ;
		}

		function onUpdate( $mode , $link_id , $forum_id , $topic_id , $post_id = 0 )
		{
			$myalbum_id = intval( $link_id ) ;
			$mydirname = $this->mydirname ;

			$MOD_PATH = XOOPS_ROOT_PATH .'/modules/'. $mydirname;
			include $MOD_PATH .'/include/read_configs.php';

			$db =& Database::getInstance() ;

			list( $count ) = $db->fetchRow( $db->query( "SELECT COUNT(*) FROM ".$db->prefix($this->d3forum_dirname."_posts")." p LEFT JOIN ".$db->prefix($this->d3forum_dirname."_topics")." t ON t.topic_id=p.topic_id WHERE t.forum_id=$forum_id AND t.topic_external_link_id='$myalbum_id'" ) ) ;
			$db->queryF( "UPDATE ".$db->prefix($mydirname."_photos")." SET comments=$count WHERE lid=$myalbum_id" ) ;
			$db->queryF( "UPDATE $table_photos SET comments=$count WHERE lid=$myalbum_id" ) ;

			return true ;
		}
	}
	
	// set forum_dirname from config.comment_dirname
	function setD3forumDirname( $d3forum_dirname = '' )
	{
		if( ! empty($this->mod_config['comment_dirname'] ) ) {
    			$this->d3forum_dirname = $this->mod_config['comment_dirname'] ;
		} elseif( ! empty( $params['comment_dirname'] ) ) {
			$this->d3forum_dirname = $params['comment_dirname'] ;
		} elseif( $d3forum_dirname ) {
			$this->d3forum_dirname = $d3forum_dirname ;
		} else {
			$this->d3forum_dirname = 'd3forum' ;
		}
	}
}
?>