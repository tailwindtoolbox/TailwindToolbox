<?php
	$pageURL = 'https://www.tailwindtoolbox.com/templates/fixed-header';
	$pageID = 'fixed-header';
	$pageTITLE = 'Fixed Header';
	$pageSRC = 'templates/SRC-fixed-header.php';
	$pageOFFSET = '-100';
	$pageDL = 'https://github.com/tailwindtoolbox/Fixed-Header/archive/master.zip';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Toolbox - <?= $pageTITLE;?></title>
	<meta name="description" content="Free open source Tailwind CSS starter template">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
	<?php include 'includes/head.php';?>

	<?php include 'includes/analytics.php';?>

	<?php include 'includes/ads.php';?>
		
</head>
<body class="bg-brand-white leading-normal tracking-normal nunito">

	<nav class="bg-brand p-2 mt-0 fixed w-full z-10 pin-t">
        <div class="container mx-auto flex flex-wrap items-center">
		    <div class="flex w-full sm:w-2/3 justify-center sm:justify-start text-white font-extrabold pl-3">
				<a class="text-white no-underline hover:text-white hover:no-underline" href="https://www.tailwindtoolbox.com/starter-templates">
				<svg class="fill-current text-white h-5 mt-1 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 13h8V7h-8V2l-8 8 8 8v-5z"/></svg>
					<svg class="fill-current text-white h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M7 3H2v14h5V3zm2 0v14h9V3H9zM0 3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm3 1h3v2H3V4zm0 3h3v2H3V7zm0 3h3v2H3v-2z"></path></svg> 
					<span class="text-2xl pl-2">Tailwind Toolbox</span>
				</a>
            </div>
			<div class="flex w-full pt-2 content-center justify-between sm:w-1/3 sm:justify-end">
				<div class="flex-1 sm:flex-none hidden sm:block">
					<a href="<?= $pageDL;?>" target="_blank" rel="noopener"><button class="w-full sm:w-auto bg-teal hover:bg-teal-dark text-white font-extrabold -mt-2 py-3 px-5 rounded shadow hover:shadow-lg"><svg class="fill-current h-4 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg> Download</button></a>			
				</div>
			</div>
        </div>
    </nav>
	<!--Download link for mobile-->
	<div class="bg-brand p-2 fixed w-full z-10 pin-b sm:hidden">
		<a href="<?= $pageTITLE;?>" target="_blank" rel="noopener"><button class="w-full bg-teal hover:bg-teal-dark text-white font-extrabold py-3 px-5 rounded shadow hover:shadow-lg"><svg class="fill-current h-4 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg> Download</button></a>			
    </div>

	<!--header-->
	<div class="h-64 md:h-half mt-6 bg-cover bg-right flex items-center" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">	
		<div class="flex-1 text-center">
			<span class="bg-brand font-bold text-center text-white text-3xl md:text-5xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;">Starter Template - Fixed Header</span>
		</div>
	</div>


	<div class="container mx-auto mb-8" id="post-content">
		<div class="w-full -mt-12 md:-mt-32 px-0">
			<div class="bg-white rounded overflow-hidden shadow mx-1">
				<div class="p-3 sm:p-6 lg:p-8 text-grey-darker leading-normal text-base md:text-xl">

		
					
					<div class="rounded-b overflow-hidden w-full mt-12 mb-4 shadow-lg">
						<div class="window-nav">
							<div class="text-right">
								<span class="window-nav-dot"></span> <span class="window-nav-dot"></span> <span class="window-nav-dot"></span>
							</div> 
						</div> 
						
						<iframe id="iframecontent" src="<?= $pageSRC;?>" style="width:100%;" onLoad="calcIframeHeight(<?= $pageOFFSET;?>);window.scroll(0,0);"></iframe>
					
					</div>

					<p class="my-16 p-6 w-full container mx-auto bg-teal-lightest text-center text-grey-dark">Find more templates at: <a class="font-extrabold text-teal-dark hover:text-teal-darkest" href="https://www.tailwindtoolbox.com/starter-templates" target="_blank" rel="noopener">www.TailwindToolbox.com/starter-templates</a></p>	
					
					<div id="disqus_thread" class="max-w-lg mx-auto"></div>
					<script>

					var disqus_config = function () {
						this.page.url = '<?= $pageURL;?>';
						this.page.identifier = '<?= $pageID;?>'; 
					};

					(function() { // DON'T EDIT BELOW THIS LINE
						var d = document, s = d.createElement('script');
						s.src = 'https://tailwindtoolbox.disqus.com/embed.js';
						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
						})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

				</div>
			</div>
		</div>
	</div>



	<?php include 'includes/footer-templates.php';?>


<script>
	function calcIframeHeight(offset) {
		var the_height = document.getElementById('iframecontent').contentWindow.document.body.scrollHeight;
		document.getElementById('iframecontent').height = the_height + offset;
	}

</script>

</body>
</html>