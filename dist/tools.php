<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Toolbox - Free Starter Templates</title>
	<meta name="description" content="Free open source Tailwind CSS starter templates to quickly start your next project">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
	<?php include 'includes/head.php';?>
	<?php include 'includes/analytics.php';?>
</head>
<body class="bg-brand-white leading-normal tracking-normal nunito">

	<?php include 'includes/nav-tools.php';?>

	<!--header-->
	<div class="h-64 md:h-half mt-6 bg-cover bg-right flex items-center" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">	
		<div class="flex-1 text-center">
			<span class="bg-brand font-bold text-center text-white text-3xl md:text-5xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;">
				Tailwind Tools and Utilities
			</span>
		</div>
	</div>


	<div class="container mx-auto mb-8" id="post-content">
		<div class="w-full -mt-12 md:-mt-32 px-0">
			<div class="bg-white rounded overflow-hidden shadow mx-1">
				<div class="flex flex-wrap p-3 sm:p-6 text-grey-darker leading-normal text-base md:text-xl">
					<p class="my-2 font-bold">Some useful tools and utilities to help you setup your development environment and become more familiar with Tailwind CSS</p>
				</div>
			</div>
		</div>
	</div>


	<div class="container mx-auto mb-8 flex inline-block flex-wrap">

		<div class="w-full pb-6 md:w-1/5">
			<div class="sticky pin-t flex flex-col" style="top:9em;">

				<!--Filters-->
				<div class="w-full bg-brand-white scroll order-2 md:order-1">
					<p class="hidden md:block text-brand text-center font-bold mb-2">Filters</p>
					<ul class="container mx-auto list-reset flex flex-row md:flex-col border-b pb-2 text-sm md:text-base">


						<li class="mr-1">
							<button class="tab -mb-px active-tab" onclick="javascript:filterTemplates('');" data-twfilter="all">All</button>
						</li>
						<li class="mr-1">
							<button class="tab -mb-px" onclick="javascript:filterTemplates('IDE');" data-twfilter="IDE">IDE</button>
						</li>
						<li class="mr-1">
							<button class="tab -mb-px" onclick="javascript:filterTemplates('Generator');" data-twfilter="Generator">Generator</button>
						</li>
						<li class="mr-1">
							<button class="tab -mb-px" onclick="javascript:filterTemplates('Design');" data-twfilter="Design">Design</button>
						</li>
						<li class="mr-1">
							<button class="tab -mb-px" onclick="javascript:filterTemplates('Help');" data-twfilter="Help">Help</button>
						</li>		
					</ul>
				</div>
				<!--/filters-->
				<div class="order-1 md:order-2">
					<p class="text-brand text-center font-bold mb-2">Advertisment</p>
					<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
				</div>
			</div>
		
		</div>

		<div class="w-full md:w-4/5 px-0">


			<?php 
				$show_section = "Tool";
				$show_home = false;
				include 'includes/render-data.php';
			?>

		</div>

	</div>

	<?php include 'includes/footer.php';?>

	<?php include 'includes/js.php';?>


</body>
</html>