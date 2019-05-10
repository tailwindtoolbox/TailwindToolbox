
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Toolbox - Free Starter Components</title>
	<meta name="description" content="Free open source Tailwind CSS starter components to quickly plug into your next project">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter components,free code snippets, free tailwind snippets, tailwind examples">
	<?php include 'includes/head.php';?>
	
	<?php include 'includes/analytics.php';?>
		
</head>
<body class="bg-brand-white leading-normal tracking-normal nunito">

	<?php include 'includes/nav.php';?>

	<!--header-->
	<div class="h-64 md:h-half mt-6 bg-cover bg-right flex items-center" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">	
		<div class="flex-1 text-center">
			<span class="bg-brand font-bold text-center text-white text-3xl md:text-5xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;">Tailwind Starter Components</span>
		</div>
	</div>



	<div class="container mx-auto mb-8" id="post-content">
		<div class="w-full -mt-12 md:-mt-32 px-0">

			<div class="bg-white rounded overflow-hidden shadow mx-1">
				<div class="flex flex-wrap p-3 sm:p-6 text-grey-darker leading-normal text-base md:text-xl">
						<p class="my-2 font-bold">These components are all open source and built using the standard Tailwind CSS configuration. Feel free to use them for any purpose, even commercially!</p>
				</div>
			</div>
		</div>
	</div>


		<div class="container mx-auto mb-8 flex inline-block flex-wrap">


			<div class="w-full md:w-1/5">
				<div class="sticky pin-t" style="top:8em;">
					<p class="text-brand text-center font-bold mb-2">Advertisment</p>
					<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
					<div class="w-full p-6 text-center">
					<p class="text-brand text-center font-bold mb-2">Find something useful?</p>
					 <a href="https://www.buymeacoffee.com/tailwindtoolbox" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/custom_images/white_img.png" alt="Buy Me A Coffee" style="height: auto !important;width: auto !important;" class="mx-auto"></a>
				</div>
			</div>
				<div></div>
	
					
		
			</div>

			<div class="w-full md:w-4/5 px-0">
				<?php include 'includes/components.php';?>
			</div>

		</div>


			

	<?php include 'includes/footer.php';?>


<script>



	/*Toggle dropdown list*/
	/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

	var navMenuDiv = document.getElementById("nav-content");
	var navMenu = document.getElementById("nav-toggle");
	
	document.onclick = check;

	function check(e){
	  var target = (e && e.target) || (event && event.srcElement);

	  //Nav Menu
	  if (!checkParent(target, navMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, navMenu)) {
		  // click on the link
		  if (navMenuDiv.classList.contains("hidden")) {
			navMenuDiv.classList.remove("hidden");
		  } else {navMenuDiv.classList.add("hidden");}
		} else {
		  // click both outside link and outside menu, hide menu
		  navMenuDiv.classList.add("hidden");
		}
	  }
	  
	}

	function checkParent(t, elm) {
	  while(t.parentNode) {
		if( t == elm ) {return true;}
		t = t.parentNode;
	  }
	  return false;
	}



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
	var filterMsg = document.getElementById('filterMsg');

	//Loop through and set the criteria filter button to active
	for (var i = 0; i < btns.length; ++i) {
		if (btns[i].dataset.twfilter == filterVal) {
			btns[i].classList.add('active-tab');
		} else {
			btns[i].classList.remove('active-tab');
		}
	}
	
	//Hide message if showing all
	if (filterVal == "all") {
		filterMsg.classList.add('invisible');
	} else {
		filterMsg.classList.remove('invisible');
		filterMsg.innerHTML = 'Showing: ' + filterVal + " templates - Click here to show all templates!";
	}

}

</script>

</body>
</html>