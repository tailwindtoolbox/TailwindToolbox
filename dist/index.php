<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tailwind Toolbox - Free Starter Templates and Components for Tailwind CSS</title>
	<meta name="description" content="Free open source Tailwind CSS starter templates and components to get you started quickly to creating websites in Tailwind CSS!">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free templates,admin templates, admin template, admin dashboard, admin console, free tailwind css templates, tailwind example, tailwind skeleton">
	<meta name="google-site-verification" content="9RGTznjgMPYBXPe1D2mq2CTQ8Ad5zK6dqXWkaxYUzBU" />
	<?php include 'includes/head.php'; ?>

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

	<?php include 'includes/analytics.php'; ?>

</head>

<body class="bg-brand-white leading-normal tracking-normal nunito h-full overflow-x-hidden">

	<!--Nav-->
	<nav id="header" class="bg-brand fixed w-full z-10 top-0 shadow ">
		<div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-0 lg:py-3">

			<div class="flex-1 pl-4 xl:pl-0">
				<a class="font-extrabold text-white no-underline hover:text-white hover:no-underline" href="https://www.tailwindtoolbox.com">
					<svg class="inline fill-current text-white h-4 md:h-6 mb-2 md:mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						<path d="M7 3H2v14h5V3zm2 0v14h9V3H9zM0 3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm3 1h3v2H3V4zm0 3h3v2H3V7zm0 3h3v2H3v-2z"></path>
					</svg>
					<span class="text-xl lg:text-2xl xl:text-3xl pl-2">Tailwind Toolbox</span>
				</a>
			</div>

			<div class="w-full flex-grow flex items-center lg:justify-end  lg:w-1/2 mt-2 lg:mt-0 bg-brand z-20 scroll bounce-in-right" id="nav-content">

				<ul class="list-reset flex text-base xl:text-xl bounce-in-right">
					<li class="mr-1">
						<a href="https://www.tailwindtoolbox.com/starter-templates" class="my-2 py-2 no-underline hover:no-underline text-gray-100 hover:text-white flex items-center justify-center bg-transparent hover:bg-teal-500 focus:border-teal-900 font-bold px-5 rounded">
							<svg class="h-6 w-6 fill-stroke" fill="none" viewBox=" 0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
							</svg>
							<span class="pl-2">Templates</span></a>
					</li>
					<li class="mr-1">
						<a href="https://www.tailwindtoolbox.com/starter-components" class="my-2 py-2 no-underline hover:no-underline text-gray-100 hover:text-white flex items-center justify-center bg-transparent hover:bg-teal-500 focus:border-teal-900 font-bold px-5 rounded">
							<svg class="h-6 w-6 fill-stroke" fill="none" viewBox=" 0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
							</svg>
							<span class="pl-2">Components</span></a>
					</li>
					<li class="mr-1">
						<a href="https://www.tailwindtoolbox.com/kits" class="my-2 py-2 no-underline hover:no-underline text-gray-100 hover:text-white flex items-center justify-center bg-transparent hover:bg-teal-500 focus:border-teal-900 font-bold px-5 rounded">
							<svg class="h-6 w-6 fill-stroke" fill="none" viewBox=" 0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
							</svg>
							<span class="pl-2">Kits</span></a>
					</li>
					<li class="mr-1">
						<a href="https://www.tailwindtoolbox.com/generators" class="my-2 py-2 no-underline hover:no-underline text-gray-100 hover:text-white flex items-center justify-center bg-transparent hover:bg-teal-500 focus:border-teal-900 font-bold px-5 rounded">
							<svg class="h-6 w-6 fill-stroke" fill="none" viewBox=" 0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
							</svg>
							<span class="pl-2">Generators</span></a>
					</li>
					<li class="mr-1">
						<a href="https://www.tailwindtoolbox.com/marketplace" class="my-2 py-2 no-underline hover:no-underline text-gray-100 hover:text-white flex items-center justify-center bg-transparent hover:bg-teal-500 focus:border-teal-900 font-bold px-5 rounded">
							<svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="9" cy="21" r="1" />
								<circle cx="20" cy="21" r="1" />
								<path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
							</svg>
							<span class="pl-2">Marketplace</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--/Nav-->


	<!--Hero-->
	<div class="z-20 mt-20 md:mt-16 lg:mt-6 flex items-center" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">
		<div class="flex flex-col w-full justify-center items-center pt-6 sm:pt-16">
			<div class="px-3 max-w-3xl lg:max-w-full mx-auto">
				<h1 class="pt-6">
					<span class="bg-brand font-bold text-center text-white text-3xl sm:text-4xl px-3 mb-5 sm:mb-16 rounded-lg" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Free Tailwind CSS Templates, Components and Resources</span></span>
				</h1>
				<p class="max-w-3xl mx-auto leading-normal my-6 font-bold text-base lg:text-xl text-left lg:text-center">Open source starter <a href="https://www.tailwindtoolbox.com/starter-templates">templates</a> and <a href="https://www.tailwindtoolbox.com/starter-components">components</a>, a directory of handy <a href="https://www.tailwindtoolbox.com/kits">building kits</a>, <a href="https://www.tailwindtoolbox.com/generators">generators</a>, <a href="https://www.tailwindtoolbox.com/plugins">plugins</a> and useful <a href="https://www.tailwindtoolbox.com/tools">tools</a> to kick start your Tailwind CSS project</p>
			</div>

			<!--Search-->

			<div class="w-full mx-auto mt-2">

				<div class="relative max-w-3xl mx-auto px-6">
					<div class="absolute h-10 mt-1 left-0 top-0 flex items-center pl-10">
						<svg class="h-4 w-4 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
						</svg>
					</div>
					<input id="search-toggle" type="search" placeholder="Enter search term ('/' to focus)" class="block w-full bg-gray-100 focus:outline-none focus:bg-white focus:shadow text-gray-700 font-bold rounded-lg pl-12 pr-4 py-3" onkeyup="updateSearchResults(this.value);">
					<div class="mt-1">
						<div id="search-content" class="z-50 w-full text text-gray-600 rounded-lg overflow-y-auto" style="max-height: 500px;">
							<div id="searchresults" class="h-auto max-w-3xl mx-auto"></div>

							<!-- No search results message-->
							<div id="nosearchresults" class="hidden flex pb-6 px-6 bg-white">
								<svg class="fill-current text-indigo-600 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
									<path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
								</svg>
								<span class="ml-4 font-bold"> Oops, no search results!!!1</span>
							</div>
							<!-- / No search results -->
						</div>
					</div>
				</div>

				<!--Wave-->
				<svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<g transform="translate(-2.000000, 44.000000)" fill="#3b7977" fill-rule="nonzero">
							<path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
							<path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
							<path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
						</g>
						<g transform="translate(-4.000000, 76.000000)" fill="#ecf4f3" fill-rule="nonzero">
							<path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
						</g>
					</g>
				</svg>


			</div>
			<!--End Search-->




		</div>


	</div>


	<div class="container mx-auto mb-8 flex inline-block flex-wrap">


		<div class="w-full pb-6 mt-6 md:mt-12 md:w-1/5">
			<div class="sticky pin-t" style="top:8em;">
				<p class="text-brand text-center font-bold mb-2">Advertisment</p>
				<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
				<script src="//m.servedby-buysellads.com/monetization.custom.js" type="text/javascript"></script>
				<div id="native-card-js" class="mx-auto mt-4"></div>
				<script>
					_bsa.init('custom', 'CESDV27N', 'placement:tailwindtoolboxcom', {
						target: '#native-card-js',
						template: `
  <a href="##statlink##" class="native-card" style="background: ##backgroundColor##; color: ##textColor##;">
    <img class="native-logo" src="##logo##">
    <div class="native-tagline"> ##tagline##</div>
    <div class="native-desc"> ##description##</div>
    <div class="native-cta" style="background-color: ##ctaBackgroundColor##; color: ##ctaTextColor##">##callToAction##</div>
    <div style="background-color: ##textColor##; color: ##backgroundColor##" class="native-sponsored">Sponsored</div>
  </a>
    `
					});
				</script>

			</div>
			<div></div>
		</div>
		<div class="w-full md:w-4/5 px-0"><?php
											$show_section = "Template";
											$show_home = true;
											include 'includes/render-home.php';
											?><?php
												include 'includes/render-home-affiliate.php';
												?><?php
													$show_section = "Component";
													$show_home = true;
													include 'includes/render-home.php';
													?></div>
	</div><?php include 'includes/footer.php'; ?><div class="hover:bg-teal-100 text-indigo-300 font-normal"></div><span class="hidden p-4 border-b flex justify-between items-center group hover:bg-teal-100"><a class="block flex-1 no-underline" href="#">
			<p class="font-bold text-sm text-indigo-600 hover:text-indigo-500"><span class="mr-2 text-teal-500">#</span><span class="text-indigo-300 font-normal">by author <svg class="inline-block pl-2  h-4 fill-current text-brand" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						<path d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z" />
					</svg></span></p>
			<p class="hidden md:block text-xs text-teal-600">result</p>
			<p class="text-sm py-1">description</p>
		</a><a href="#"><img class="hidden md:block h-16 border-none" src="https://www.tailwindtoolbox.com/"></a></span><?php include 'includes/js.php'; ?>
</body>

</html>