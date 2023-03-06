<?php
$pageID 	= basename(__FILE__, '.php'); //Pick up from filename; 
$pageTITLE 	= str_replace('Tailwind Css', 'Tailwind CSS', ucwords(str_replace("-", " ", $pageID))); //'Convert $pageID to title case e.g. Fixed Header';
$pageDESC 	=  $pageTITLE . ' - a beginner guide to help you add your own font utilities to your project';
$pageURL 	= 'https://www.tailwindtoolbox.com/guides/' . $pageID;
$pageImage	= 'https://www.tailwindtoolbox.com/guides/' . $pageID . '.png';

$pageCODE 	= ''; //$pageID.'-code.php';
$pageSRC 	= $pageID . '.md';
$pageGIT 	= 'https://github.com/tailwindtoolbox/TailwindToolbox/blob/master/dist/guides/' . $pageSRC;
$pageDL 	= 'https://github.com/tailwindtoolbox/' . str_replace(" ", "-", $pageTITLE) . '/archive/master.zip';

$pageOFFSET = '0';
$pageINTRO	= 'Looking to add webfonts to your Tailwind CSS project?<br>This guide will help you add your own fonts to your project - by giving you three options to create font utilities';

?>
<?php include '_template.php'; ?>