<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Windy Toolbox - Free Starter Templates and Components for Tailwind CSS</title>
	<meta name="description"
		content="(Formerly Tailwind Toolbox) Free open source Tailwind CSS starter templates and components to get you started quickly to creating websites in Tailwind CSS!">
	<meta name="keywords"
		content="Tailwind Toolbox,tailwind,tailwindcss,tailwind css,css,starter template,free templates,admin templates, admin template, admin dashboard, admin console, free tailwind css templates, tailwind example, tailwind skeleton">
	<meta name="google-site-verification" content="9RGTznjgMPYBXPe1D2mq2CTQ8Ad5zK6dqXWkaxYUzBU" />
	<?php include 'includes/head.php'; ?>

	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Organization",
			"url": "https://www.tailwindtoolbox.com",
			"name": "Windy Toolbox",
			"logo": "https://www.tailwindtoolbox.com/monitor.svg",
			"sameAs": [
				"http://www.twitter.com/tailwindtoolbox",
				"http://www.github.com/tailwindtoolbox"
			]
		}
	</script>

	<?php include 'includes/analytics.php'; ?>

</head>

<body class="h-full overflow-x-hidden leading-normal tracking-normal bg-cover bg-brand-white nunito"
	style="background-image: url(mesh.svg)">

	<!--Nav-->
	<?php include 'includes/nav-home.php'; ?>
	<!--/Nav-->

	<!--Hero-->
	<div class="z-20 flex items-center mt-24 bg-cover " style="background-image: url(bg.svg)">
		<div class="flex flex-col items-center justify-center w-full pt-6 sm:pt-16">
			<div class="max-w-3xl px-3 mx-auto lg:max-w-full">
				<h1 class="pt-6">
					<span
						class="px-3 mb-5 text-3xl font-bold text-center text-white rounded-lg bg-brand sm:text-4xl sm:mb-16"
						style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Free Tailwind CSS
							Templates, Components and Resources</span></span>
				</h1>
				<p
					class="max-w-3xl mx-auto my-6 text-base font-bold leading-normal text-left lg:text-xl lg:text-center">
					Open source starter <a href="https://www.tailwindtoolbox.com/starter-templates">templates</a> and <a
						href="https://www.tailwindtoolbox.com/starter-components">components</a>, a directory of handy
					<a href="https://www.tailwindtoolbox.com/kits">building kits</a>, <a
						href="https://www.tailwindtoolbox.com/generators">generators</a>, <a
						href="https://www.tailwindtoolbox.com/plugins">plugins</a> and useful <a
						href="https://www.tailwindtoolbox.com/tools">tools</a> to kick start your Tailwind CSS project
				</p>
			</div>

			<!--Search-->

			<div class="w-full mx-auto mt-2">
				<div class="relative max-w-3xl px-6 mx-auto">
					<div class="absolute top-0 left-0 flex items-center h-10 pl-10 mt-1">
						<svg class="w-4 h-4 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 20 20">
							<path
								d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
						</svg>
					</div>
					<input id="search-toggle" type="search" placeholder="Enter search term ('/' to focus)"
						class="block w-full py-3 pl-12 pr-4 font-bold text-gray-700 bg-gray-100 rounded-lg shadow focus:outline-none focus:bg-white"
						onkeyup="updateSearchResults(this.value);">
					<div class="mt-1">
						<div id="search-content" class="z-50 w-full overflow-y-auto text-gray-600 rounded-lg text"
							style="max-height: 500px;">
							<div id="searchresults" class="h-auto max-w-3xl mx-auto"></div>

							<!-- No search results message-->
							<div id="nosearchresults" class="flex hidden px-6 pb-6 bg-white">
								<svg class="w-6 h-6 text-indigo-600 fill-current" xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 20 20">
									<path
										d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
								</svg>
								<span class="ml-4 font-bold"> Oops, no search results!!!1</span>
							</div>
							<!-- / No search results -->
						</div>
					</div>
				</div>

				<!--Wave-->
				<svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink">

				</svg>

			</div>
			<!--End Search-->




		</div>


	</div>


	<div class="container flex flex-wrap inline-block mx-auto mb-8">


		<div class="w-full pb-6 mt-6 md:mt-12 md:w-1/5">
			<div class="sticky pin-t" style="top:8em;">
				<p class="mb-2 font-bold text-center text-brand">Advertisment</p>
				<script async type="text/javascript"
					src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom"
					id="_carbonads_js"></script>
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
		<div class="w-full px-0 md:w-4/5">
			<?php
			$show_section = "Template";
			$show_home = true;
			include 'includes/render-home-sponsor.php';
			?>
			<?php
			include 'includes/render-home-affiliate.php';
			?>
			<?php
			$show_section = "Component";
			$show_home = true;
			include 'includes/render-home.php';
			?>
		</div>
	</div>
	<?php include 'includes/footer.php'; ?>
	<div class="font-normal text-indigo-300 hover:bg-teal-100"></div><span
		class="flex items-center justify-between hidden p-4 border-b group hover:bg-teal-100"><a
			class="flex-1 block no-underline" href="#">
			<p class="text-sm font-bold text-indigo-600 hover:text-indigo-500"><span
					class="mr-2 text-teal-500">#</span><span class="font-normal text-indigo-300">by author <svg
						class="inline-block h-4 pl-2 fill-current text-brand" xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 20 20">
						<path
							d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z" />
					</svg></span></p>
			<p class="hidden text-xs text-teal-600 md:block">result</p>
			<p class="py-1 text-sm">description</p>
		</a><a href="#"><img class="hidden h-16 border-none md:block" src="https://www.tailwindtoolbox.com/"></a></span>
	<?php include 'includes/js.php'; ?>
</body>

</html>