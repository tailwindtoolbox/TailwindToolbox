
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

	<?php include 'includes/nav-templates.php';?>

	<!--header-->
	<div class="h-64 md:h-half mt-6 bg-cover bg-right flex items-center" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">	
		<div class="flex-1 text-center">
			<span class="bg-brand font-bold text-center text-white text-3xl md:text-5xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;">Tailwind Starter Templates</span>
		</div>
	</div>


	<div class="container mx-auto mb-8" id="post-content">
			<div class="w-full -mt-12 md:-mt-32 px-0">
				<div class="bg-white rounded overflow-hidden shadow mx-1">
					<div class="flex flex-wrap p-3 sm:p-6 lg:p-8 text-grey-darker leading-normal text-base md:text-xl">
							
						<div class="w-full lg:w-3/5">
							<p class="my-6 font-bold">These templates are all free to download and are built with Tailwind CSS. They are all open source and feel free to use them for any purpose, even commercially!</p>
						</div>
						<div class="w-full lg:w-1/5">
						<p class="text-brand font-bold">Advertisment</p>
                            <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
                        </div>
			

					</div>
				</div>
			</div>
		</div>


	<?php include 'includes/templates.php';?>

	<?php include 'includes/footer.php';?>


<script>


function filterTemplates(filterVal) {
	//Get all the templates
	var divs = document.querySelectorAll("[data-twcat]");

	//Loop through and show (block) all which match the criteira and hide (none) the rest
	for (var i = 0; i < divs.length; ++i) {
		if (divs[i].dataset.twcat.indexOf(filterVal) >= 0) { //includes(filterVal)) {
			divs[i].style.display='block';
		} else {
			divs[i].style.display='none';
		}
	}
	
	//Reset the all filter to be "all" instead of ""
	if (filterVal == '') filterVal = "all";
	
	//Get all the filter buttons
	var btns = document.querySelectorAll("[data-twfilter]");
	
	//Loop through and set the criteria filter button to active
	for (var i = 0; i < btns.length; ++i) {
		if (btns[i].dataset.twfilter == filterVal) {
			btns[i].classList.add('active-tab');
		} else {
			btns[i].classList.remove('active-tab');
		}
	}
	

		
}

</script>

</body>
</html>