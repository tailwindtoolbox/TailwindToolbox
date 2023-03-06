<?php
$pageID     = basename(__FILE__, '.php'); //Pick up from filename; 
$pageTITLE     = str_replace('Tailwind Css', 'Tailwind CSS', ucwords(str_replace("-", " ", $pageID))); //'Convert $pageID to title case e.g. Fixed Header';
$pageTITLE     = str_replace('Vs', 'VS', $pageTITLE);
$pageDESC     =  $pageTITLE . ' - a beginner guide to help you replicate the syntax highlighting theme from the Tailwind CSS website to your project';
$pageURL     = 'https://www.tailwindtoolbox.com/guides/' . $pageID;
$pageImage    = 'https://www.tailwindtoolbox.com/guides/' . $pageID . '.png';

$pageCODE     = ''; //$pageID.'-code.php';
$pageSRC     = $pageID . '.md';
$pageGIT     = 'https://github.com/tailwindtoolbox/TailwindToolbox/blob/master/dist/guides/' . $pageSRC;
$pageDL     = 'https://github.com/tailwindtoolbox/' . str_replace(" ", "-", $pageTITLE) . '/archive/master.zip';

$pageOFFSET = '0';
$pageINTRO    = 'Looking to replicate the syntax highlighting theme from the Tailwind CSS website?';

?>
<?php include '_template.php'; ?>