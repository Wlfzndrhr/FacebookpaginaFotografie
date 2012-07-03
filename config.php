<?php
/**
 * Configuration Should be Written In a single file
 * @global array $GLOBALS['fbconfig']
 * @name $fbconfig
 * @author Mahmud Ahsan
 */
$fbconfig['appid' ] = "373351179378257";
$fbconfig['api']    = "stephanekalmesfoto";
$fbconfig['secret'] = "a767c958cdbf53fcb8451a9e42a7c6b9";

$fbconfig['baseUrl']    =   "https://afternoon-snow-2535.herokuapp.com/";
$fbconfig['appBaseUrl'] =   "https://apps.facebook.com/stephanekalmesfoto/";
$fbconfig['pageUrl']    =   "https://www.facebook.com/StephaneKalmesfotografie";
$fbconfig['appPageUrl'] =   "{$fbconfig['pageUrl']}?sk=app_{$fbconfig['appid' ]}";

$tutorialLink           =   "<a href='http://thinkdiff.net/facebook/isimple-graph-api-iframe-base-facebook-page-application-development' target='_blank'>Tutorial: iSimple - Graph API & Iframe base Facebook Page App Development</a>";

?>