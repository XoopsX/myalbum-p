<?php
// Module Info

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'MYALBUM_MI_LOADED' ) ) {

define( 'MYALBUM_MI_LOADED' , 1 ) ;

// The name of this module
define("_ALBM_MYALBUM_NAME","��ï");

// A brief description of this module
define("_ALBM_MYALBUM_DESC","�إ߬ۤ�ï�Τ� //���� ���ɺجۤ�");

//slideshow
define( "_ALBM_CFG_lINTERVAL" , "�Ы��Ϫ���ܤ����覡" ) ;
define( "_ALBM_CFG_DESClINTERVAL" , "�Ϯɹ��ɤ������ɶ�5000=5��" ) ;
define( "_ALBM_CFG_TRANSITION" , "���Ϫ������覡" ) ;
define( "_ALBM_CFG_DESCTRANSITION" , "���Ϫ�����transition��23����" ) ;
//slideshow end
//slideshow
define( "_ALBM_OPT_TRANSITION0" , "������" ) ;
define( "_ALBM_OPT_TRANSITION1" , "������" ) ;
define( "_ALBM_OPT_TRANSITION2" , "��Τ���" ) ;
define( "_ALBM_OPT_TRANSITION3" , "��Ω���" ) ;
define( "_ALBM_OPT_TRANSITION4" , "�ѩ�" ) ;
define( "_ALBM_OPT_TRANSITION5" , "�ѩ�" ) ;
define( "_ALBM_OPT_TRANSITION6" , "�ѥ�" ) ;
define( "_ALBM_OPT_TRANSITION7" , "�ѥ�" ) ;
define( "_ALBM_OPT_TRANSITION8" , "�ʸ�����" ) ;
define( "_ALBM_OPT_TRANSITION9" , "�ʸ�������" ) ;
define( "_ALBM_OPT_TRANSITION10" , "���Ҧ���" ) ;
define( "_ALBM_OPT_TRANSITION11" , "���Ҧ�" ) ;
define( "_ALBM_OPT_TRANSITION12" , "�������Ҧ�" ) ;
define( "_ALBM_OPT_TRANSITION13" , "�Ѩⰼ������" ) ;
define( "_ALBM_OPT_TRANSITION14" , "�Ѩⰼ��������" ) ;
define( "_ALBM_OPT_TRANSITION15" , "�Ѩⰼ������" ) ;
define( "_ALBM_OPT_TRANSITION16" , "�Ѩⰼ����" ) ;
define( "_ALBM_OPT_TRANSITION17" , "�ר�����" ) ;
define( "_ALBM_OPT_TRANSITION18" , "�ר�������" ) ;
define( "_ALBM_OPT_TRANSITION19" , "�ר�������" ) ;
define( "_ALBM_OPT_TRANSITION20" , "�ר�����" ) ;
define( "_ALBM_OPT_TRANSITION21" , "������" ) ;
define( "_ALBM_OPT_TRANSITION22" , "����" ) ;
define( "_ALBM_OPT_TRANSITION23" , "��" ) ;
//slideshow end

// Names of blocks for this module (Not all module has blocks)
define("_ALBM_BNAME_RECENT","�̬ۤ�");
define("_ALBM_BNAME_HITS","�����ۤ�");
define("_ALBM_BNAME_RANDOM","���ۤ�");
define("_ALBM_BNAME_RECENT_P","�ۤ���");
define("_ALBM_BNAME_HITS_P","�����ۤ���");

// Config Items
define("_ALBM_CFG_PHOTOSPATH","�ۤ��񪺸�");
define("_ALBM_CFG_DESCPHOTOSPATH","�����Ӹ˨� XOOPS �Ϊ��ؿ���<br />(�������� '/'�Ӥ� '/' ����)<br />�ө�ۤ����ؿ����ݩ� UNIX �ά� 777 �� 707");
define("_ALBM_CFG_THUMBSPATH","�ϩ񪺸�");
define("_ALBM_CFG_DESCTHUMBSPATH","�����Ӹ˨� XOOPS �Ϊ��ؿ���<br />(�������� '/'�Ӥ� '/' ����)<br />�ө�ۤ����ؿ����ݩ� UNIX �ά� 777 �� 707.");
//define("_ALBM_CFG_USEIMAGICK","�ϥ� ImageMagick �ӹ���");
//define("_ALBM_CFG_DESCIMAGICK","��()��ܨϥ� GD (�ܧ����ۤ�)<br />�ҽкɯ�ϥ� ImageMagick");
define("_ALBM_CFG_IMAGINGPIPE","�ۤ���");
define("_ALBM_CFG_DESCIMAGINGPIPE"," PHP ���ү�ϥ� GD �� GD �����ӥ�<br />�̨ϥ� ImageMagick �Ϊ� NetPBM");
define("_ALBM_CFG_FORCEGD2","��ϥ� GD2 �ഫ");
define("_ALBM_CFG_DESCFORCEGD2","�� PHP ���� GD ������ GD2 (��) �ഫ<br />���� PHP �� GD2 �إ߹ϥ���<br />�Ӧ��ϥ� GD ����");
define("_ALBM_CFG_IMAGICKPATH","ImageMagick ����");
define("_ALBM_CFG_DESCIMAGICKPATH","'convert' �������<br />(���ٽФ� '/' ����)<br />�Ӧ��ϥ� ImageMagick ����");
define("_ALBM_CFG_NETPBMPATH","NetPBM ����");
define("_ALBM_CFG_DESCNETPBMPATH","\'pnmscale\' �������<br />(���ٽФ� \'/\' ����)<br />�Ӧ��ϥ� NetPBM ����");
define("_ALBM_CFG_POPULAR","���������ۤ�������");
define("_ALBM_CFG_NEWDAYS","�Хܬ�''&'��'�ϼЪ������");
define("_ALBM_CFG_NEWPHOTOS","�����ܬۤ�����");
define("_ALBM_CFG_DEFAULTORDER","�������ۤ��ܶ���");
define("_ALBM_CFG_PERPAGE","���ܬۤ�");
define("_ALBM_CFG_DESCPERPAGE","��ﶵ�ƨ� \'|\' �Ӥ�(�� 10|20|50|100)");
define("_ALBM_CFG_ALLOWNOIMAGE","�����ۤ�������");
define("_ALBM_CFG_MAKETHUMB","�إ߹�");
define("_ALBM_CFG_DESCMAKETHUMB","�� '' �אּ ''�̭����� '���ع�'");
//define("_ALBM_CFG_THUMBWIDTH","�ϫ�");
//define("_ALBM_CFG_DESCTHUMBWIDTH","�Ϫ����ר̾ګת��Ȧ۰ʧ���.");
define("_ALBM_CFG_THUMBSIZE","�Ϫ��� (pixel)");
define("_ALBM_CFG_THUMBRULE","�ϫإߪ���");
define("_ALBM_CFG_WIDTH","�ۤ��̫�");
define("_ALBM_CFG_DESCWIDTH","�ϥ� ImageMagick ��׭�<br />���ϥ� ImageMagick��׭���");
define("_ALBM_CFG_HEIGHT","�ۤ��̰���");
define("_ALBM_CFG_DESCHEIGHT","�ϥ� ImageMagick ���׭�<br />���ϥ� ImageMagick ���׭���");
define("_ALBM_CFG_FSIZE","���ɮ�");
define("_ALBM_CFG_DESCFSIZE","����Ǭۤ��ɮפ� (byte)<br />1048576 byte = 1 MB");
define("_ALBM_CFG_MIDDLEPIXEL","��ܬۤ����̤�");
define("_ALBM_CFG_DESCMIDDLEPIXEL","�� ()x(��)<br />��480x480");
define("_ALBM_CFG_ADDPOSTS","����Ӥ���,����ƩҼƬ�");
define("_ALBM_CFG_DESCADDPOSTS","�묰0 �� 1 (��0��0)");
define("_ALBM_CFG_CATONSUBMENU","��ܤ����󦸿��");
define("_ALBM_CFG_NAMEORUNAME","��ܪ̪���");
define("_ALBM_CFG_DESCNAMEORUNAME","�����ܹ�θ�");
define("_ALBM_CFG_VIEWCATTYPE","��������ܬۤ�������");
define("_ALBM_CFG_COLSOFTABLEVIEW","�Ϧ���ܪ�����");
define("_ALBM_CFG_ALLOWEDEXTS","���Ǫ�����");
define("_ALBM_CFG_DESCALLOWEDEXTS","����ɨ� \'|\' ��(��\'jpg|jpeg|gif|png\')<br />����������������(.)�Ϊť���");
define("_ALBM_CFG_ALLOWEDMIME","���Ǫ� MIME ����");
define("_ALBM_CFG_DESCALLOWEDMIME","�� MIME ������ \'|\' ��(��\'image/gif|image/jpeg|image/png\')<br />�̪ťծɪ� MIME ������");
define("_ALBM_CFG_USESITEIMG","�ϥ� [siteimg] �Ϯ׺ޭ�����");
define("_ALBM_CFG_DESCUSESITEIMG","�Ϯ׺ޭ����㤤 [siteimg] �� [img]<br />������ HACK module.textsanitizer.php �ҥ� [siteimg] ����<br />XOOPS�зǨæ���");

define("_ALBM_OPT_USENAME","��");
define("_ALBM_OPT_USEUNAME","��");

define("_ALBUM_OPT_CALCFROMWIDTH","��:��  ����:�۰�");
define("_ALBUM_OPT_CALCFROMHEIGHT","��:�۰�  ����:��");
define("_ALBUM_OPT_CALCWHINSIDEBOX","�ת����Ȥ�۰ʽվ�");

define("_ALBM_OPT_VIEWLIST","�Ԧ����");
define("_ALBM_OPT_VIEWTABLE","�Ϧ����");


// Sub menu titles
define("_ALBM_TEXT_SMNAME1","�Ǭۤ�");
define("_ALBM_TEXT_SMNAME2","�����ۤ�");
define("_ALBM_TEXT_SMNAME3","��ۤ�");
define("_ALBM_TEXT_SMNAME4","�ڪ��ۤ�");

// Names of admin menu items
define("_ALBM_MYALBUM_ADMENU0","�ֶǬۤ�");
define("_ALBM_MYALBUM_ADMENU1","�ۤ���");
define("_ALBM_MYALBUM_ADMENU2","��//�� �ۤ�����");
define("_ALBM_MYALBUM_ADMENU_GPERM","����");
define("_ALBM_MYALBUM_ADMENU3","�˲�����");
define("_ALBM_MYALBUM_ADMENU4","�ۤ��妸��");
define("_ALBM_MYALBUM_ADMENU5","���ع�");
define("_ALBM_MYALBUM_ADMENU_IMPORT","�׬ۤ�");
define("_ALBM_MYALBUM_ADMENU_EXPORT","�׬ۤ�");
define("_ALBM_MYALBUM_ADMENU_MYBLOCKSADMIN","�϶��βպ�");
define("_ALBM_MYALBUM_ADMENU_MYTPLSADMIN","�˺�");

// Text for notifications
define("_MI_MYALBUM_GLOBAL_NOTIFY","���쪾����");
define("_MI_MYALBUM_GLOBAL_NOTIFYDSC","myAlbum-P ���쪾����");
define("_MI_MYALBUM_CATEGORY_NOTIFY","�ۤ�����������");
define("_MI_MYALBUM_CATEGORY_NOTIFYDSC","�֥جۤ�������������");
define("_MI_MYALBUM_PHOTO_NOTIFY","�ۤ�������");
define("_MI_MYALBUM_PHOTO_NOTIFYDSC","�֥جۤ���������");

define("_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFY","�ۤ�");
define("_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYCAP","���ۤ��ɪ���");
define("_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYDSC","���ۤ��ɦ��쪾.");
define("_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: �۰ʪ� : �ۤ�");

define("_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFY","�ۤ�");
define("_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYCAP","���ۤ��ت������ɪ���");
define("_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYDSC","���ۤ��ت������ɦ��쪾");
define("_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE}: �۰ʪ� : �ۤ�");

//d3comment integration
define("_ALBM_COM_DIRNAME","Comment integration directory");
define("_ALBM_COM_DIRNAMEDSC","When use D3-comment integration system. <br/>write your d3forum (html) directory <br/>If you do not use comments or use xoops comment system, leave this in empty.");
define("_ALBM_COM_FORUM_ID","d3forum_id");
define("_ALBM_COM_FORUM_IDDSC","When you set above integration diredtory, write forum_id");
define("_ALBM_COM_ORDER","Order of comment integration");
define("_ALBM_COM_ORDERDSC","When you set comment integration, select display order of comment posts");
define("_ALBM_COM_VIEW","View of comment-integration");
define("_ALBM_COM_VIEWDSC","select flat or thread");
define("_ALBM_COM_POSTSNUM","'Max posts displayed in comment integration");

}

?>