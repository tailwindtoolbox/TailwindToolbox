
<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Toolbox - Free Starter Templates and Components for Tailwind CSS</title>
	<meta name="description" content="Free open source Tailwind CSS starter templates and components to get you started quickly to creating websites in Tailwind CSS!">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free templates,admin templates, admin template, admin dashboard, admin console, free tailwind css templates, tailwind example, tailwind skeleton">
	<?php include 'includes/head.php';?>
	
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

	<?php include 'includes/analytics.php';?>
	
</head>
<body class="bg-brand-white leading-normal tracking-normal nunito h-full" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">
	
	<?php include 'includes/nav.php';?>
	
	<!--Hero-->
	<div class="container mx-auto flex flex-col md:flex-row items-center mt-12 mb-6 md:mb-12">
		<div class="flex flex-col w-full justify-center items-center pt-6 md:pt-16 pb-0 md:pb-10 px-3">
			<h1 class="pt-6">
				<span class="bg-brand font-bold text-center text-white text-3xl sm:text-4xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Free Tailwind CSS Templates, Components and Resources</span></span>
			</h1>
			<p class="max-w-3xl leading-normal my-6 font-bold text-base lg:text-xl text-left lg:text-center">Open source starter <a href="https://www.tailwindtoolbox.com/starter-templates">templates</a> and <a href="https://www.tailwindtoolbox.com/starter-components">components</a>, a <a href="https://www.tailwindtoolbox.com/plugins">plugins</a> directory and useful <a href="https://www.tailwindtoolbox.com/tools">tools/utilities</a> to kick start your Tailwind CSS project</p>
		</div>
	</div>

	

	<div class="diagonal-bg fixed h-full w-full top-0" style="z-index:-1;">
		<svg xmlns='http://www.w3.org/2000/svg' width='100%' height='100%'><line x1='100%' y1='0' x2='1' y2='100%' stroke='#f5f5f5' stroke-width='30%'/></svg>
	</div>

	
	<div class="container mx-auto mb-8 flex inline-block flex-wrap">


		<div class="w-full pb-6 md:w-1/5">
			<div class="sticky pin-t" style="top:8em;">
				<p class="text-brand text-center font-bold mb-2">Advertisment</p>
				<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
			</div>

			<div></div>

				

		</div>

		<div class="w-full md:w-4/5 px-0">
			<?php include 'includes/templates-home.php';?>
		</div>

	</div>

	<?php include 'includes/footer.php';?>
	<script>

//Modifed version of : https://codepen.io/derekjp/pen/bpoRVK
window.addEventListener('scroll', function() {
		var scroll = window.pageYOffset;
		document.querySelector(".diagonal-bg svg line").setAttribute("stroke-width",  ((30 + scroll/10)  + "%"));
})

function showMeThe(thing) {
		var elmnt = document.getElementById(thing);
		elmnt.scrollIntoView();
}


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
