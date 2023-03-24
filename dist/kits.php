<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tailwind Toolbox - UI Kits and Page builders</title>
	<meta name="description"
		content="Tailwind CSS UI kits and website building tools to quickly start your next project">
	<meta name="keywords"
		content="tailwind,tailwindcss,tailwind css,css,starter template,free components, ui kits, ui components, website builder, builder">
	<?php include 'includes/head.php'; ?>
	<?php include 'includes/analytics.php'; ?>

</head>

<body class="leading-normal tracking-normal bg-brand-white nunito">

	<?php include 'includes/nav.php'; ?>

	<!--header-->
	<div class="z-20 flex items-center pb-6 mt-24 mb-6 text-center bg-cover" style="background-image: url(bg.svg)">
		<div class="flex flex-col items-center justify-center w-full pt-6 md:pt-16">
			<div class="px-3">
				<h1 class="pt-6">
					<span class="px-3 mb-5 text-3xl font-bold text-center text-white bg-brand sm:text-4xl sm:mb-16"
						style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Tailwind UI Kits
							and Building tools</span></span>
				</h1>
				<p
					class="max-w-3xl mx-auto my-6 text-base font-bold leading-normal text-left lg:text-xl lg:text-center">
					Tailwind CSS UI Kits, Component Kits and website building tools to speed up your development
					process.</p>
			</div>
		</div>
	</div>

	<div class="container flex flex-wrap inline-block mx-auto mb-8">
		<div class="w-full pb-6 md:w-1/5">
			<div class="sticky flex flex-col pin-t" style="top:9em;">
				<!--Filters-->
				<div class="order-2 w-full pt-6 pl-0 pl-3 bg-brand-white md: md:pt-0 md:order-1">
					<p class="mb-2 font-bold text-center text-brand">Filters</p>
					<ul
						class="container flex flex-row mx-auto text-sm border-b scroll list-reset md:flex-col md:pb-4 md:text-base bounce-in-right">
						<li class="mr-1">
							<button class="-mb-px tab active-tab" onclick="javascript:filterTemplates('');"
								data-twfilter="all"><span class="w-6">
									<svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24"
										viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
										stroke-linecap="round" stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
										<path d="M14 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
										<path d="M4 6l8 0"></path>
										<path d="M16 6l4 0"></path>
										<path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
										<path d="M4 12l2 0"></path>
										<path d="M10 12l10 0"></path>
										<path d="M17 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
										<path d="M4 18l11 0"></path>
										<path d="M19 18l1 0"></path>
									</svg></span>
								All</button>
						</li>
						<?php

						$icon['UI Kit'] = '<svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
						<path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25"></path>
						<path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
						<path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
						<path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
					 </svg>';
						$icon['Page Builder'] = '<svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
						<path d="M6 21l15 -15l-3 -3l-15 15l3 3"></path>
						<path d="M15 6l3 3"></path>
						<path d="M9 3a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path>
						<path d="M19 13a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path>
					 </svg>';

						$filters = array('UI Kit', 'Page Builder');
						foreach ($filters as $filter) {
							echo "\t\t\t\t\t\t<li class=\"mr-1\">";
							echo "\t\t\t\t\t\t\t<button class=\"tab -mb-px\" onclick=\"javascript:filterTemplates('" . $filter . "');\" data-twfilter=\"" . $filter . "\"><span class=\"w-6\">" . $icon[$filter] . "</span>" . $filter . "</button>\n";
							echo "\t\t\t\t\t\t</li>";
						}
						?>
					</ul>
				</div>
				<!--/filters-->
				<div class="order-1 md:order-2">
					<p class="mb-2 font-bold text-center text-brand md:pt-3">Advertisment</p>
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
			</div>
		</div>

		<div class="w-full px-0 md:w-4/5">
			<?php
			$show_section = "Kit";
			$show_home = false;
			include 'includes/render-data.php';
			?>


		</div>




	</div>


	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/js.php'; ?>


</body>

</html>