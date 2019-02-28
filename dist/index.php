
<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Toolbox - Free Starter Templates for Tailwind CSS</title>
	<meta name="description" content="Free open source Tailwind CSS starter templates to get you started quickly to creating websites in Tailwind CSS!">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free templates,admin templates, admin template, admin dashboard, admin console, free tailwind css templates, tailwind example, tailwind skeleton">
	<?php include 'includes/head.php';?>
	
	<script type="application/ld+json">
		{
		  "@context": "http://schema.org",
		  "@type": "Organization",
		  "url": "https://www.tailwindtoolbox.com",
		  "name": "Tailwind Toolbox",
		  "logo": "https://www.tailwindtoolbox.com/monitor.svg",
		  "sameAs": [
			"http://www.twitter.com/tailwindtoolbox",
			"http://www.github.com/tailwindtoolbox"
		  ]
		}
	</script>

	<?php include 'includes/analytics.php';?>
	
</head>
<body class="bg-brand-white leading-normal tracking-normal nunito h-full" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">
	
	<?php include 'includes/nav.php';?>
	
	<!--Hero-->
	<div class="container mx-auto flex flex-col md:flex-row items-center my-12" >
		<!--Left Col-->
		<div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-12 pb-24 px-6">
			<div class="pt-12">
				<span class="bg-brand font-bold text-center text-white text-3xl sm:text-4xl md:text-5xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Free Starter Templates for your next Tailwind CSS project!</span></span>
			</div>

			<p class="leading-normal my-6 font-bold text-base lg:text-xl">Open source HTML and Javascript framework starter templates to help you get started building with Tailwind CSS</p>
			<button onclick="showMeThe('templates');" class="bg-brand hover:bg-teal-dark no-underline text-white hover:text-white text-xl border-none rounded font-bold p-4">Show me the templates!!</button>
			<p class="pt-6 font-bold">Or jump directly: <span onclick="showMeThe('templates');" class="text-brand hover:text-teal underline" style="cursor:pointer;">HTML</span> | <span onclick="showMeThe('JS');" class="text-brand hover:text-teal underline" style="cursor:pointer;">Javascript Framework</span> | <span onclick="showMeThe('CMS');" class="text-brand hover:text-teal underline" style="cursor:pointer;">CMS</span></p>
		</div>
		<!--Right Col-->
		<div class="w-full lg:w-1/2 lg:py-6 text-center">
			<img src="tw.svg" alt="Tailwind Toolbox :)">
		</div>
	
	</div>
	

	<div class="diagonal-bg fixed h-full w-full pin-t" style="z-index:-1;">
		<svg xmlns='http://www.w3.org/2000/svg' width='100%' height='100%'><line x1='100%' y1='0' x2='1' y2='100%' stroke='#f5f5f5' stroke-width='30%'/></svg>
	</div>

	
	<div id="templates" class="mt-6"></div>
	<?php include 'includes/templates-home.php';?>


	<div class="container mx-auto pb-12">
			
			<div class="w-full mb-2 md:mb-0 pb-3 sm:pb-0">
				<div class="p-6">
					<p class="text-brand font-bold">What's New?</p>
					<p class="text-grey-dark">21 Feb - Added new template - <a href="https://www.tailwindtoolbox.com/templates/ghostwind-home">Ghostwind Home page</a> (Clone of home page from the Casper theme for Ghost)</p>
					<p class="text-grey-dark">19 Feb - Added new template - <a href="https://www.tailwindtoolbox.com/templates/minimal-blog">Minimal Blog</a> (minimalistic monochrome blog layout)</p>
					<p class="text-grey-dark">13 Feb - Added new section -  <a href="https://www.tailwindtoolbox.com/tools">Tools</a></p>
					<p class="text-grey-dark">12 Feb - Added new template - <a href="https://www.tailwindtoolbox.com/templates/ghostwind">Ghostwind</a> (Clone of Casper theme for Ghost)</p>
				</div>
			</div>
		
	</div>


	<?php include 'includes/footer-home.php';?>



</body>
</html>