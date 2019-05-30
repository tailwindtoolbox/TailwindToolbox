
<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Toolbox - Free Starter Templates and Components for Tailwind CSS</title>
	<meta name="description" content="Free open source Tailwind CSS starter templates and components to get you started quickly to creating websites in Tailwind CSS!">
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
	<div class="container mx-auto flex flex-col md:flex-row items-center mt-12 mb-6 md:mb-12">
		<div class="flex flex-col w-full justify-center items-center pt-6 md:pt-16 pb-0 md:pb-10 px-3">
			<div class="pt-6">
				<span class="bg-brand font-bold text-center text-white text-3xl sm:text-4xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Free Tailwind CSS Templates, Components and Resources</span></span>
			</div>
			<p class="max-w-3xl leading-normal my-6 font-bold text-base lg:text-xl text-left lg:text-center">Open source starter <a href="https://www.tailwindtoolbox.com/starter-templates">templates</a> and <a href="https://www.tailwindtoolbox.com/starter-components">components</a>, a <a href="https://www.tailwindtoolbox.com/plugins">plugins</a> directory and useful <a href="https://www.tailwindtoolbox.com/tools">tools/utilities</a> to kick start your Tailwind CSS project</p>
		</div>
	</div>

	

	<div class="diagonal-bg fixed h-full w-full top-0" style="z-index:-1;">
		<svg xmlns='http://www.w3.org/2000/svg' width='100%' height='100%'><line x1='100%' y1='0' x2='1' y2='100%' stroke='#f5f5f5' stroke-width='30%'/></svg>
	</div>

	
	<div class="container mx-auto mb-8 flex inline-block flex-wrap">


		<div class="w-full pb-6 md:w-1/5">
			<div class="sticky pin-t" style="top:8em;">
				<p class="text-brand text-center font-bold mb-2">Advertisment</p>
				<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
				<div class="w-full p-6 text-center">
					<p class="text-brand text-center font-bold mb-2">Find something useful?</p>
					 <a href="https://www.buymeacoffee.com/tailwindtoolbox" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/custom_images/white_img.png" alt="Buy Me A Coffee" style="height: auto !important;width: auto !important;" class="mx-auto"></a>
				</div>
			</div>

			<div></div>

				

		</div>

		<div class="w-full md:w-4/5 px-0">
			<?php include 'includes/templates-home.php';?>
		</div>

	</div>


	<div class="container mx-auto pb-12">
			
			<div class="w-full mb-2 md:mb-0 pb-3 sm:pb-0">

				<div class="p-6">
					<p class="text-brand font-bold">What's New?</p>
					<p class="text-grey-dark">21 May - Added new template - <a href="https://www.tailwindtoolbox.com/templates/profile-card">Profile Card</a></p>
				</div>
			</div>
		
	</div>


	<?php include 'includes/footer-home.php';?>



</body>
</html>