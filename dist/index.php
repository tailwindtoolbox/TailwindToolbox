<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tailwind Toolbox - Free Starter Templates and Components for Tailwind CSS</title>
	<meta name="description" content="Free open source Tailwind CSS starter templates and components to get you started quickly to creating websites in Tailwind CSS!">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free templates,admin templates, admin template, admin dashboard, admin console, free tailwind css templates, tailwind example, tailwind skeleton">
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

			<div class="w-full flex-grow flex items-center lg:w-1/2 mt-2 lg:mt-0 bg-brand z-20 scroll bounce-in-right" id="nav-content">
				<ul class="list-reset flex flex-1 items-center text-center lg:justify-end px-2 lg:px-0">
					<li class="flex md:mr-4 my-3 xl:my-0">
						<a href="https://www.tailwindtoolbox.com/guides" class="flex-1 md:flex-none navlink text-base xl:text-xl">
							<svg class="inline fill-current text-teal-lightest h-4 pr-2 md:pr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
								<path d="M2,1.99079514 C2,0.891309342 2.89706013,0 4.00585866,0 L14.9931545,0 C15.5492199,0 16,0.443864822 16,1 L16,2 L5.00247329,2 C4.44882258,2 4,2.44386482 4,3 C4,3.55228475 4.44994876,4 5.00684547,4 L16.9931545,4 C17.5492199,4 18,4.44463086 18,5.00087166 L18,18.0059397 C18,19.1072288 17.1054862,20 16.0059397,20 L3.99406028,20 C2.8927712,20 2,19.1017876 2,18.0092049 L2,1.99079514 Z M6,4 L10,4 L10,12 L8,10 L6,12 L6,4 Z"></path>
							</svg> Guides</a>
					</li>
					<li class="flex md:mr-4 my-3 xl:my-0">
						<a href="https://www.tailwindtoolbox.com/starter-templates" class="flex-1 md:flex-none navlink text-base xl:text-xl">
							<svg class="inline fill-current text-teal-lightest h-4 pr-2 md:pr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
								<path d="M6 6V2c0-1.1.9-2 2-2h10a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-4v4a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8c0-1.1.9-2 2-2h4zm2 0h4a2 2 0 0 1 2 2v4h4V2H8v4zM2 8v10h10V8H2z"></path>
							</svg> Templates</a>
					</li>
					<li class="flex md:mr-4 my-3 xl:my-0">
						<a href="https://www.tailwindtoolbox.com/starter-components" class="flex-1 md:flex-none navlink text-base xl:text-xl">
							<svg class="inline fill-current text-teal-lightest h-4 pr-2 md:pr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
								<path d="M3.94 6.5L2.22 3.64l1.42-1.42L6.5 3.94c.52-.3 1.1-.54 1.7-.7L9 0h2l.8 3.24c.6.16 1.18.4 1.7.7l2.86-1.72 1.42 1.42-1.72 2.86c.3.52.54 1.1.7 1.7L20 9v2l-3.24.8c-.16.6-.4 1.18-.7 1.7l1.72 2.86-1.42 1.42-2.86-1.72c-.52.3-1.1.54-1.7.7L11 20H9l-.8-3.24c-.6-.16-1.18-.4-1.7-.7l-2.86 1.72-1.42-1.42 1.72-2.86c-.3-.52-.54-1.1-.7-1.7L0 11V9l3.24-.8c.16-.6.4-1.18.7-1.7zM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
							</svg> Components</a>
					</li>
					<li class="flex md:mr-4 my-3 xl:my-0">
						<a href="https://www.tailwindtoolbox.com/generators" class="flex-1 md:flex-none navlink text-base xl:text-xl">
							<svg class="inline fill-current text-teal-lightest h-4 pr-2 md:pr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
							</svg>
							Generators</a>
					</li>
					<li class="flex md:mr-4 my-3 xl:my-0 text-center">
						<a href="https://www.tailwindtoolbox.com/tools" class="flex-1 md:flex-none navlink text-base xl:text-xl">
							<svg class="inline fill-current text-teal-lightest h-4 pr-2 md:pr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
								<path d="M6.47 9.8A5 5 0 0 1 .2 3.22l3.95 3.95 2.82-2.83L3.03.41a5 5 0 0 1 6.4 6.68l10 10-2.83 2.83L6.47 9.8z"></path>
							</svg> Tools</a>
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
					<span class="bg-brand font-bold text-center text-white text-3xl sm:text-4xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Free Tailwind CSS Templates, Components and Resources</span></span>
				</h1>
				<p class="max-w-3xl mx-auto leading-normal my-6 font-bold text-base lg:text-xl text-left lg:text-center">Open source starter <a href="https://www.tailwindtoolbox.com/starter-templates">templates</a> and <a href="https://www.tailwindtoolbox.com/starter-components">components</a>, a <a href="https://www.tailwindtoolbox.com/plugins">plugins</a> directory and useful <a href="https://www.tailwindtoolbox.com/tools">tools/utilities</a> to kick start your Tailwind CSS project</p>
			</div>

			<!--Search-->

			<div class="w-full mx-auto mt-2">

				<div class="relative max-w-3xl mx-auto px-6">
					<div class="absolute h-10 mt-1 left-0 top-0 flex items-center pl-10">
						<svg class="h-4 w-4 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" /></svg>
					</div>
					<input id="search-toggle" type="search" placeholder="Enter search term ('/' to focus)" class="block w-full bg-gray-100 focus:outline-none focus:bg-white focus:shadow text-gray-700 font-bold rounded-lg pl-12 pr-4 py-3" onkeyup="updateSearchResults(this.value);">
					<div class="mt-1">
						<div id="search-content" class="z-50 w-full text text-gray-600 rounded-lg overflow-y-auto" style="max-height: 500px;">
							<div id="searchresults" class="h-auto max-w-3xl mx-auto"></div>

							<!-- No search results message-->
							<div id="nosearchresults" class="hidden flex pb-6 px-6 bg-white">
								<svg class="fill-current text-indigo-600 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
									<path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" /></svg>
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
				<p class="text-brand text-center font-bold mb-2">Ads/Affiliates</p>
				<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>

				<div class="supporter bg-white border rounded-lg mx-auto mt-4 flex flex-wrap">
					<div class="w-1/2 md:w-full">
						<a href="https://a.paddle.com/v2/click/39438/124350?link=3113" target="_blank" rel="noopener">
							<img src="polypane.png" alt="Polypane" border="0" width="180" height="100">
						</a>
					</div>
					<div class="w-1/2 md:w-full md:text-center text-sm py-2 px-2">
						<a class=" text-black no-underline hover:text-black hover:no-underline" href="https://a.paddle.com/v2/click/39438/124350?link=3113" target="_blank" rel="noopener">Polypane is the ultimate browser for Tailwind developers</a>
					</div>
					<div class="w-full py-1 tracking-wider text-gray-800 text-center font-bold" style="font-size:7pt;background:repeating-linear-gradient(-45deg,transparent,transparent 5px,hsla(0,0%,0%,.025) 5px,hsla(0,0%,0%,.025) 10px) hsla(203,11%,95%,.4);">AFFILIATE SCHEME</div>
				</div>

			</div>

			<div></div>

		</div>

		<div class="w-full md:w-4/5 px-0">
			<?php
			$show_section = "Template";
			$show_home = true;
			include 'includes/render-home.php';
			?>

			<?php
			$show_section = "Component";
			$show_home = true;
			include 'includes/render-home.php';
			?>
		</div>

	</div>

	<?php include 'includes/footer.php'; ?>

	<div class="hover:bg-teal-100 text-indigo-300 font-normal"></div>

	<span class="hidden p-4 border-b flex justify-between items-center group hover:bg-teal-100"><a class="block flex-1 no-underline" href="#">
			<p class="font-bold text-sm text-indigo-600 hover:text-indigo-500"><span class="mr-2 text-teal-500">#</span><span class="text-indigo-300 font-normal"> by author <svg class="inline-block pl-2  h-4 fill-current text-brand" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						<path d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z" /></svg></span></p>
			<p class="hidden md:block text-xs text-teal-600">result</p>
			<p class="text-sm py-1">description</p>
		</a><a href="#"><img class="hidden md:block h-16 border-none" src="https://www.tailwindtoolbox.com/"></a></span>

	<?php include 'includes/js.php'; ?>

</body>

</html>