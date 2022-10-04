<?php
/*NAMING CONVENTION
		This page 	=> lowercase with - (e.g. fixed-header)
		Github link => titlecase with - (e.g. Fixed-Header)
	*/

$pageID 	= basename(__FILE__, '.php'); //Pick up from filename; 
$pageTITLE 	= ucwords(str_replace("-", " ", $pageID)); //'Convert $pageID to title case e.g. Fixed Header';
$pageDESC 	= 'Free open source Tailwind CSS ' . $pageTITLE . ' starter template';
$pageURL 	= 'https://www.tailwindtoolbox.com/templates/' . $pageID;
$pageImage	= 'https://www.tailwindtoolbox.com/templates/' . $pageID . '.png';

$pageCODE 	= ''; //$pageID.'-code.php';
$pageSRC 	= $pageID . '-demo.php';
$pageGIT 	= 'https://github.com/tailwindtoolbox/' . str_replace(" ", "-", $pageTITLE);
$pageDL 	= 'https://github.com/tailwindtoolbox/' . str_replace(" ", "-", $pageTITLE) . '/archive/master.zip';

$pageOFFSET = '-100';
$pageINTRO	= 'This starter template contains:<br>
				   <p>*Fixed Header</p>
				   <p>*Hero section - two columns for large screens and two rows for small screens</p>
				   <p>*Promo and card content sections</p>  
				   <p>*Pricing Table</p>  
				   <p>*Call to Action</p><br>
				   <div class="text-sm"><a href="https://gumroad.com/a/633271411"><img src="../robhopelandingpage.png" class="w-32 mr-4" style="float:left;"></a> As you are about to build a landing page, then <a href="https://robhope.com?ref=tailwindtoolbox">Rob Hope</a> (from <a href="https://onepagelove.com?ref=tailwindtoolbox">OnePageLove.com</a>) is your best bet in helping you make the most out of your landing page.<br>
				   He has written an ebook "<a href="https://gumroad.com/a/633271411">Landing Page Hot Tips</a>" and has given an <b>exclusive</b> code to get the book for $29 (rather than $49) <span class="text-brand">(Affiliate link)</span><br>
				   <br>
				   <a class="no-underline" href="https://gumroad.com/a/633271411?offer_code=amrit"><button class="no-underline w-full max-w-sm flex items-center justify-center bg-transparent hover:bg-teal-500 border border-brand outline-none focus:border-teal-900 hover:text-white font-extrabold py-3 px-5 rounded shadow">Buy Rob\'s Book for <span class="line-through px-1">$49</span> $29</button></a></div>';

$bulletCode = '<svg class="inline flex-none mb-1 mr-4 h-6 fill-current text-brand" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
				   <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM6.7 9.29L9 11.6l4.3-4.3 1.4 1.42L9 14.4l-3.7-3.7 1.4-1.42z" />
			   </svg>';
?>

	<?php include '_template.php'; ?>