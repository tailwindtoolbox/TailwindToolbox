<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tailwind Toolbox - Beginner Guides for Tailwind CSS</title>
	<meta name="description" content="Beginner guides for getting started with Tailwind CSS">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,beginner guides, getting started with tailwind css, tldr">
	<?php include '../includes/head-guides.php'; ?>
	<?php include '../includes/analytics.php'; ?>
</head>

<body class="leading-normal tracking-normal bg-brand-white nunito">

	<?php include '../includes/nav.php'; ?>

	<!--header-->
	<div class="z-20 flex items-center pb-6 mt-24 mb-6 text-center bg-cover" style="background-image: url(../bg.svg)">
		<div class="flex flex-col items-center justify-center w-full pt-6 md:pt-16">
			<div class="px-3">
				<h1 class="pt-6">
					<span class="px-3 mb-5 text-3xl font-bold text-center text-white bg-brand sm:text-4xl sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Tailwind CSS Guides</span></span>
				</h1>
				<p class="max-w-3xl mx-auto my-6 text-base font-bold leading-normal text-left lg:text-xl lg:text-center">Getting started guides, how-to's and tutorials for beginners who are just getting started with Tailwind CSS</p>
			</div>
		</div>
	</div>

	<div class="container flex flex-wrap inline-block mx-auto mb-8">
		<div class="w-full pb-6 md:w-1/5">
			<div class="sticky flex flex-col pin-t" style="top:9em;">
				<!--Filters-->
				<div class="order-2 w-full pt-6 pl-0 pl-3 bg-brand-white md: md:pt-0 md:order-1">
					<p class="mb-2 font-bold text-center text-brand">Filters</p>
					<ul class="container flex flex-row mx-auto text-sm border-b scroll list-reset md:flex-col md:pb-4 md:text-base">
						<li class="mr-1">
							<button class="-mb-px tab active-tab" onclick="javascript:filterTemplates('');" data-twfilter="all">All</button>
						</li>
						<?php
						$filters = array('Setup', 'Configuration', 'Newsletter');
						foreach ($filters as $filter)
						{
							echo "\t\t\t\t\t\t<li class=\"mr-1\">\n";
							echo "\t\t\t\t\t\t\t<button class=\"tab -mb-px\" onclick=\"javascript:filterTemplates('" . $filter . "');\" data-twfilter=\"" . $filter . "\">" . $filter . "</button>\n";
							echo "\t\t\t\t\t\t</li>\n";
						}
						?>
					</ul>
				</div>
				<!--/filters-->
				<div class="order-1 md:order-2">
					<p class="mb-2 font-bold text-center text-brand md:pt-3">Advertisment</p>
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
			</div>

		</div>

		<div class="w-full px-0 md:w-4/5">
			<?php
			$show_section = "Guide";
			$show_home = false;
			include '../includes/render-guides.php';
			?>
		</div>

	</div>

	<?php include '../includes/footer-templates.php'; ?>

	<?php include '../includes/js-templates.php'; ?>


</body>

</html>