<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tailwind Toolbox - Useful Tools and Utilities for Tailwind CSS</title>
	<meta name="description" content="Useful Tools and Utilities for Tailwind CSS to help you setup for your next project">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
	<?php include 'includes/head.php'; ?>
	<?php include 'includes/analytics.php'; ?>
</head>

<body class="bg-brand-white leading-normal tracking-normal nunito">

	<?php include 'includes/nav.php'; ?>

	<!--header-->
	<div class="z-20 mt-24 pb-6 mb-6 flex items-center text-center" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">
		<div class="flex flex-col w-full justify-center items-center pt-6 md:pt-16">
			<div class="px-3">
				<h1 class="pt-6">
					<span class="bg-brand font-bold text-center text-white text-3xl sm:text-4xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Tailwind Tools and Utilities</span></span>
				</h1>
				<p class="max-w-3xl mx-auto leading-normal my-6 font-bold text-base lg:text-xl text-left lg:text-center">Some useful tools and utilities to help you setup your development environment and become more familiar with Tailwind CSS</p>
			</div>
		</div>
	</div>

	<div class="container mx-auto mb-8 flex inline-block flex-wrap">
		<div class="w-full pb-6 md:w-1/5">
			<div class="sticky pin-t flex flex-col" style="top:9em;">
				<!--Filters-->
				<div class="w-full bg-brand-white pl-3 pt-6 md: pl-0 md:pt-0 order-2 md:order-1">
					<p class="text-brand text-center font-bold mb-2">Filters</p>
					<ul class="container scroll mx-auto list-reset flex flex-row md:flex-col border-b md:pb-4 text-sm md:text-base">
						<li class="mr-1">
							<button class="tab -mb-px active-tab" onclick="javascript:filterTemplates('');" data-twfilter="all">All</button>
						</li>
						<?php
						$filters = array('Browser', 'IDE', 'Design', 'Help');
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
					<p class="text-brand text-center font-bold mb-2 md:pt-3">Ads/Affiliates</p>
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
					<div class="supporter bg-white border rounded-lg mx-auto mt-4 flex flex-wrap">
						<div class="w-1/2 md:w-full">
							<a href="https://a.paddle.com/v2/click/37973/124350?link=3167" target="_blank" rel="noopener">
								<img src="tails.png" alt="Tails" border="0" width="180" height="100">
							</a>
						</div>
						<div class="w-1/2 md:w-full md:text-center text-sm py-2 px-2">
							<a class=" text-black no-underline hover:text-black hover:no-underline" href="https://a.paddle.com/v2/click/37973/124350?link=3167" target="_blank" rel="noopener">Tails is the ultimate drag'n drop page creator built for TailwindCSS</a>
						</div>
						<div class="w-full py-1 tracking-wider text-gray-800 text-center font-bold" style="font-size:7pt;background:repeating-linear-gradient(-45deg,transparent,transparent 5px,hsla(0,0%,0%,.025) 5px,hsla(0,0%,0%,.025) 10px) hsla(203,11%,95%,.4);">AFFILIATE SCHEME</div>
					</div>
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

	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/js.php'; ?>


</body>

</html>