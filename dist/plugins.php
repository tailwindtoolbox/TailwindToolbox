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

	<?php include 'includes/nav-plugins.php';?>

	<!--header-->
	<div class="h-64 md:h-half mt-6 bg-cover bg-right flex items-center" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">	
		<div class="flex-1 text-center">
			<span class="bg-brand font-bold text-center text-white text-3xl md:text-5xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;">
				Tailwind Plugins
			</span>
		</div>
	</div>


	<div class="container mx-auto mb-8" id="post-content">
		<div class="w-full -mt-12 md:-mt-32 px-0">
			<div class="bg-white rounded overflow-hidden shadow mx-1">
				<div class="flex flex-wrap p-3 sm:p-6 text-grey-darker leading-normal text-base md:text-xl">
					<p class="my-2 font-bold">Some useful plugins for extending Tailwind CSS.  Find out more about writing your own plugin <a class="font-extrabold text-teal-dark hover:text-teal-darkest" href="https://tailwindcss.com/docs/plugins" target="_blank" rel="noopener">here</a></p>
				</div>
			</div>
		</div>
	</div>


	<div class="container mx-auto mb-8 flex inline-block flex-wrap">

		<div class="w-full pb-6 md:w-1/5">
			<div class="sticky pin-t" style="top:9em;">
				<p class="text-brand text-center font-bold mb-2">Advertisment</p>
				<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
			</div>
			<div></div>
		</div>

		<div class="w-full md:w-4/5 px-0">
			<?php 
				$show_section = "Plugin";
				$show_home = false;
				include 'includes/render-data.php';
			?>

			<p class="my-8 p-6 w-full container mx-auto text-center text-gray-dark">If you have any useful plugins which will make your Tailwind CSS experience better, please drop us a tweet: <a class="font-extrabold text-teal-dark hover:text-teal-darkest" href="https://www.twitter.com/tailwindtoolbox" target="_blank" rel="noopener">@TailwindToolbox</a></p>	

		</div>

	</div>

	<?php include 'includes/footer.php';?>

<script>
<?php include 'includes/js.php';?>
</script>

</body>
</html>