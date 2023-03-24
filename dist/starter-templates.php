<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tailwind Toolbox - Free Starter Templates</title>
	<meta name="description"
		content="Free open source Tailwind CSS starter templates to quickly start your next project">
	<meta name="keywords"
		content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
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
						style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Tailwind Starter
							Templates</span></span>
				</h1>
				<p
					class="max-w-3xl mx-auto my-6 text-base font-bold leading-normal text-left lg:text-xl lg:text-center">
					These templates are all open source and built using the standard Tailwind CSS configuration. Feel
					free to use them for any purpose, even commercially!</p>
			</div>
		</div>
	</div>

	<div class="container flex flex-wrap inline-block mx-auto mb-8" id="filter">
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
						$filters = array('Admin', 'Landing', 'Blog', 'Store', 'Support', 'Portfolio', 'Nav', 'Login', 'Starter');

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
						$icon['Support'] = '<svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
			   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
			   <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4"></path>
			   <path d="M9.5 9h.01"></path>
			   <path d="M14.5 9h.01"></path>
			   <path d="M9.5 13a3.5 3.5 0 0 0 5 0"></path>
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
						$icon['Login'] = '<svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
						<path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z"></path>
						<path d="M8 11m0 1a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-6a1 1 0 0 1 -1 -1z"></path>
						<path d="M10 11v-2a2 2 0 1 1 4 0v2"></path>
					 </svg>';
						$icon['Starter'] = '<svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
<path d="M9 12l6 0"></path>
<path d="M12 9l0 6"></path>
<path d="M4 6v-1a1 1 0 0 1 1 -1h1m5 0h2m5 0h1a1 1 0 0 1 1 1v1m0 5v2m0 5v1a1 1 0 0 1 -1 1h-1m-5 0h-2m-5 0h-1a1 1 0 0 1 -1 -1v-1m0 -5v-2m0 -5"></path>
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
			$show_section = "Template";
			$show_home = false;
			include 'includes/render-data.php';
			?>
		</div>

	</div>

	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/js.php'; ?>


</body>

</html>