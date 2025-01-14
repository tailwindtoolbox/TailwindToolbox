<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Windy Toolbox - Marketplace</title>
	<meta name="description"
		content="(Formerly Tailwind Toolbox) Tailwind CSS marketplace to purchase beautifully designed templates and dashboards from designers across the world">
	<meta name="keywords"
		content="Tailwind Toolbox,tailwind,tailwindcss,tailwind css,css,starter template,free components, ui kits, ui components, premium templates, professional templates">
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
						style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Tailwind
							Marketplace</span></span>
				</h1>
				<p
					class="max-w-3xl mx-auto my-6 text-base font-bold leading-normal text-left lg:text-xl lg:text-center">
					Premium templates, UI Kits, Component Kits for Tailwind CSS with the world.<br>All links below are
					affiliate schemes</p>
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
						class="container flex flex-row gap-0.5 mx-auto text-sm border-b scroll list-reset md:flex-col md:pb-4 md:text-base bounce-in-right">
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
						$filters = array('Bundle', 'UI Kit', 'Tool', 'Admin', 'Landing', 'Agency', 'Blog', 'Store', 'Portfolio', 'Nav');

						$icon['Bundle'] = '<svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<polyline points="20 12 20 22 4 22 4 12" />  <rect x="2" y="7" width="20" height="5" />  <line x1="12" y1="22" x2="12" y2="7" />  <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z" />  <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z" />
						</svg>';

						$icon['UI Kit'] = '<svg fill="none" viewBox=" 0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
					</svg>';

						$icon['Tool'] = '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
					  </svg>';

						$icon['Admin'] = '<svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
									<path d="M4 4h6v8h-6z"></path>
									<path d="M4 16h6v4h-6z"></path>
									<path d="M14 12h6v8h-6z"></path>
									<path d="M14 4h6v4h-6z"></path>
									</svg>';


						$icon['Landing'] = '<svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
						<path d="M3 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
						<path d="M15 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
						<path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
						<path d="M6 15v-1a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v1"></path>
						<path d="M12 9l0 3"></path>
					 </svg>';

						$icon['Agency'] = '<svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
				   </svg>
				   ';

						$icon['Blog'] = '<svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
					 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
					 <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
					 <path d="M7 8h10"></path>
					 <path d="M7 12h10"></path>
					 <path d="M7 16h10"></path>
				  </svg>';
						$icon['Store'] = '<svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
				  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
				  <path d="M7 10l5 -6l5 6"></path>
				  <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path>
				  <path d="M12 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
			   </svg>';

						$icon['Portfolio'] = '<svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
			<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
			<path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
			<path d="M6 21v-2a4 4 0 0 1 4 -4h4c.267 0 .529 .026 .781 .076"></path>
			<path d="M19 16l-2 3h4l-2 3"></path>
		 </svg>';
						$icon['Nav'] = '<svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
	<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
	<path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
	<path d="M4 9l16 0"></path>
 </svg>';


						foreach ($filters as $filter) {
							echo "\t\t\t\t\t\t<li class=\"mr-1\">";
							echo "\t\t\t\t\t\t\t<button class=\"tab\" onclick=\"javascript:filterTemplates('" . $filter . "');\" data-twfilter=\"" . $filter . "\"><span class=\"w-6\">" . $icon[$filter] . "</span>" . $filter . "</button>\n";
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
			$show_section = "Marketplace";
			$show_home = false;
			include 'includes/render-marketplace.php';
			?>

		</div>




	</div>


	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/js.php'; ?>


</body>

</html>