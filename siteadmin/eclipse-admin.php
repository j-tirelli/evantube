<?php

include_once ('includes/login_check.php');
include_once ('thirdparty/lastRSS.php');
include_once ('eclipse_rss_news.php');


include_once ("includes/menuloader.php");

/////////////////////
//defaults settings /
/////////////////////
$show_hide = 1;
$show_notification = 0;
$todays_date = $config["date_format"];
$base_url = $config['site_base_url'];

////////////////////////////////
//display form with error message
////////////////////////////////
$template = "templates/main.html";
$inner_template1 = "templates/eclipse-admin.html"; //middle of page
$TBS = new clsTinyButStrong;
$TBS->NoErr = true; // no more error message displayed.
$TBS->LoadTemplate("$template");
$TBS->Render = TBS_OUTPUT;
$TBS->Show();
@mysql_close();
die();



?>