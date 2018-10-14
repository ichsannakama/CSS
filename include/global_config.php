<?PHP
require_once("./include/bsm_membersite.php");

$bsmmembersite = new BSMMembersite();

// $bsmmembersite->SetWebsiteName('bsm.com');

// $bsmmembersite->SetAdminEmail('admin@admin.com');

$bsmmembersite->InitDB(/*hostname*/'localhost',
                      /*username*/'root',
                      /*password*/'',
                      /*database name*/'bsm_web',
                      /*table name*/'user');

// $bsmmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>