
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Toolbox - Components - Buttons Generator</title>
	<meta name="description" content="Free open source Tailwind CSS starter templates to quickly start your next project">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
	<?php include 'includes/head.php';?>

	<?php include 'includes/analytics.php';?>
		
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <style>
    :root {
        --grey: #b8c2cc;
        --before: '<button class="';
        --after: '">Submit</div>';
    }

    #ac::before {
        color: var(--grey);
        content: var(--before);
    }

    #ac::after {
        color: var(--grey);
        content: var(--after);
    }

    .text-xxs {
        font-size: 0.5rem;
    }

    .cursor-copy {
        cursor: copy;
    }

    </style>
</head>
<body class="leading-normal tracking-normal bg-brand-white nunito">

	<?php include 'includes/nav-templates.php';?>

	<!--header-->
    <div class="z-20 flex items-center pb-6 mt-24 mb-6 text-center bg-cover" style="background-image: url(bg.svg)">	
		<div class="flex-1 text-center">
			<span class="px-3 mb-5 text-3xl font-bold text-center text-white bg-brand md:text-5xl sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;">Tailwind Button Playground</span>
		</div>
	</div>



	<div class="container mx-auto mb-8" id="post-content">
		<div class="w-full px-0 -mt-12 md:-mt-32">

			<div class="mx-1 overflow-hidden bg-white rounded shadow">
				<div class="flex flex-wrap p-3 text-base leading-normal sm:p-6 text-grey-darker md:text-xl">
						<p class="my-2 font-bold">
							Interactive playground for creating Tailwind CSS buttons
							<br>Based on: <a href="https://github.com/minthemiddle/tailwind-button-playground">https://github.com/minthemiddle/tailwind-button-playground</a>
						</p>
				</div>
			</div>
		</div>
	</div>


		<div class="container flex flex-wrap inline-block mx-auto mb-8">


			<div class="w-full pb-6 md:w-1/5">
				<div class="sticky pin-t" style="top:9em;">
					<p class="mb-2 font-bold text-center text-brand">Advertisment</p>
					<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
			</div>
				<div></div>
	
					
		
			</div>

			<div class="w-full px-0 md:w-4/5">
				<!--Buttons-->

		<div class="mx-1 overflow-hidden text-center bg-white rounded shadow md:sticky md:pin-t md:z-50" style="top:9em;">
		
				<div class="flex items-center justify-center py-6">
            <!-- Start: Component -->
            <button id="button1" class="p-2 text-sm text-white no-underline bg-black hover:underline">Submit</button>
            <!-- end: Component -->
        </div>


        <div class="w-4/5 p-1 mx-auto bg-gray-100 border rounded shadow" onmouseover="this.classList.toggle('cursor-copy')" onclick="copyToClipboard(ac.innerHTML)">
            <pre><code id="ac" class="whitespace-normal"></code></pre>
				</div>
				
				<div class="flex flex-wrap items-center justify-center my-8">

					<label class="block mr-4 text-xs font-bold tracking-wider text-gray-700" for="buttontext">
							Set Button Text
					</label>
					<input id="buttontext" class="block w-32 p-4 mr-4 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded-lg appearance-none focus:outline-none focus:bg-white focus:border-gray-500" value="Submit" onchange="setButtonText();">
		
					<button class="p-4 mr-4 bg-gray-200 rounded-lg" onclick="copyToClipboard(ac.innerHTML)">Copy classes</button>
					<button class="p-4 mr-4 bg-gray-200 rounded-lg" onclick="copyToClipboard(`<div class='${ac.innerHTML}'>Submit</div>`)">Copy full tag</button>
		
					<div class="flex items-center">
					<button class="p-4 bg-gray-200 rounded-lg" id="r" onclick="getContrast()">Check Contrast Ratio</button>
						<div class="ml-4"><span id="c_ratio"></span></div> 
					</div>
						<!--<button class="p-4 ml-4 bg-gray-200 rounded-lg" id="r" onclick="setButtonText()">Change button text</button>-->
				</div>

		</div>
		


	
    <div class="flex flex-wrap justify-center mt-8">

        <div id="control-textsize" class="mt-4 mb-6">
            <label class="block mb-2 text-xs font-bold tracking-wider text-gray-700" for="textsize">
                Text Size
            </label>
            <div class="relative">
                <select id="textsize" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" onchange="resetComponentClasses('text-xs','text-sm','text-base','text-lg','text-xl','text-2xl','text-3xl','text-4xl','text-5xl','text-6xl');addComponentClass(value);">
                    <option value="text-xs">text-xs (default)</option>
                    <option value="text-sm">text-sm</option>
                    <option value="text-base" selected>text-base</option>
                    <option value="text-lg">text-lg</option>
                    <option value="text-xl">text-xl</option>
										<option value="text-2xl">text-2xl</option>
										<option value="text-3xl">text-3xl</option>
										<option value="text-4xl">text-4xl</option>
										<option value="text-5xl">text-5xl</option>
										<option value="text-6xl">text-6xl</option>
										
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                </div>
            </div>
        </div>
		
		
		<div id="control-decoration" class="mt-4 mb-6 ml-4">
            <label class="block mb-2 text-xs font-bold tracking-wider text-gray-700" for="decoration">
                Text Decoration
            </label>
            <div class="relative">
                <select id="decoration" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" onchange="resetComponentClasses('underline','line-through','no-underline');addComponentClass(value);">
                    <option value="underline">underline</option>
                    <option value="line-through">line-through</option>
                    <option value="no-underline" selected>no-underline (default)</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                </div>
            </div>
        </div>
		
		
		<div id="control-padding" class="mt-4 mb-6 ml-4">
            <label class="block mb-2 text-xs font-bold tracking-wider text-gray-700" for="padding">
                Text Size
            </label>
            <div class="relative">
                <select id="padding" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" onchange="clearFields('p-');addComponentClass(value);">
                    <option value="p-0">p-0 (default)</option>
                    <option value="p-1">p-1</option>
                    <option value="p-2" selected>p-2</option>
                    <option value="p-3">p-3</option>
                    <option value="p-4">p-4</option>
                    <option value="p-5">p-5</option>
										<option value="p-6">p-6</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                </div>
            </div>
        </div>
		
        <div id="control-background-color" class="mt-4 mb-6 ml-4">
            <label class="block mb-2 text-xs font-bold tracking-wider text-gray-700" for="padding">
                Background Color
            </label>
            <div class="relative">
                <select id="background" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" onchange="clearFields('bg-');addComponentClass(value,bgcolorvalue.innerHTML);">
                    <option value="bg-transparent">bg-transparent</option>
										<option value="bg-white">bg-white</option>
                    <option value="bg-black" selected>bg-black</option>
                    <option value="bg-gray-">bg-gray</option>
                    <option value="bg-red-">bg-red</option>
                    <option value="bg-orange-">bg-orange</option>
                    <option value="bg-yellow-">bg-yellow</option>
										<option value="bg-green-">bg-green</option>
										<option value="bg-teal-">bg-teal</option>
										<option value="bg-blue-">bg-blue</option>
										<option value="bg-indigo-">bg-indigo</option>
										<option value="bg-purple-">bg-purple</option>
										<option value="bg-pink-">bg-pink</option>

                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                </div>
            </div>
			<div class="flex">
				<input type="range" min="100" max="900" value="500" step="100" class="mr-2 slider" id="bgcolor" onchange="clearFields('bg-');addComponentClass(document.getElementById('background').value,bgcolorvalue.innerHTML);"><div id="bgcolorvalue"></div>
			</div>
        </div>
        <div id="control-text-color" class="mt-4 mb-6 ml-4">
            <label class="block mb-2 text-xs font-bold tracking-wider text-gray-700" for="padding">
                Text Color
            </label>
            <div class="relative">
                <select id="text" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" onchange="resetComponentClasses('text-black', 'text-white', 'text-gray', 'text-red', 'text-orange','text-yellow','text-green','text-teal','text-blue','text-indigo','text-purple','text-pink');addComponentClass(value,textcolorvalue.innerHTML)">
                    <option value="text-white" selected>text-white</option>
										<option value="text-black">text-black</option>
										<option value="text-gray-">text-gray </option>
                    <option value="text-red-">text-red</option>
                    <option value="text-orange-">text-orange</option>
                    <option value="text-yellow-">text-yellow</option>
										<option value="text-green-">text-green</option>
										<option value="text-teal-">text-teal</option>
										<option value="text-blue-">text-blue</option>
										<option value="text-indigo-">text-indigo</option>
										<option value="text-purple-">text-purple</option>   
										<option value="text-pink-">text-pink</option>

                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                </div>
            </div>
			<div class="flex">
				<input type="range" min="100" max="900" value="500" step="100" class="mr-2 slider" id="textcolor" onchange="resetComponentClasses('text-black', 'text-white', 'text-gray', 'text-red', 'text-orange','text-yellow','text-green','text-teal','text-blue','text-indigo','text-purple','text-pink');addComponentClass(document.getElementById('text').value,textcolorvalue.innerHTML);"><div id="textcolorvalue"></div>
			</div>
        </div>
        <div id="control-shadow" class="mt-4 mb-6 ml-4">
            <label class="block mb-2 text-xs font-bold tracking-wider text-gray-700" for="padding">
                Shadow
            </label>
            <div class="relative">
                <select id="padding" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" onchange="resetComponentClasses('shadow-none', 'shadow','shadow-md','shadow-lg','shadow-xl','shadow-2xl','shadow-inner','shadow-outline');addComponentClass(value);">
                    <option value="">shadow-none</option>
                    <option value="shadow">shadow</option>
                    <option value="shadow-md">shadow-md</option>
                    <option value="shadow-lg">shadow-lg</option>
										<option value="shadow-xl">shadow-xl</option>
										<option value="shadow-2xl">shadow-2xl</option>
                    <option value="shadow-inner">shadow-inner</option>
                    <option value="shadow-outline">shadow-outline</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                </div>
            </div>
        </div>
		
        <div id="control-border-rounding" class="mt-4 mb-6 ml-4">
            <label class="block mb-2 text-xs font-bold tracking-wider text-gray-700" for="padding">
                Rounded border
            </label>
            <div class="relative">
                <select id="padding" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" onchange="resetComponentClasses('rounded-sm', 'rounded', 'rounded-lg', 'rounded-full');addComponentClass(value);">
                    <option value="">rounded-none (default)</option>
                    <option value="rounded-sm">rounded-sm</option>
                    <option value="rounded">rounded</option>
                    <option value="rounded-lg">rounded-lg</option>
                    <option value="rounded-full">rounded-full</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                </div>
            </div>
        </div>


		<div id="hover-control-decoration" class="mt-4 mb-6 ml-4">
            <label class="block mb-2 text-xs font-bold tracking-wider text-gray-700" for="decoration">
                HOVER: Text Decoration
            </label>
            <div class="relative">
                <select id="hover-decoration" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" onchange="resetComponentClasses('hover:underline','hover:line-through','hover:no-underline');addComponentClass(value);">
                    <option value="hover:underline" selected>underline (default)</option>
                    <option value="hover:line-through">line-through</option>
                    <option value="hover:no-underline">no-underline</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                </div>
            </div>
        </div>
	
	
        <div id="hover-control-background-color" class="mt-4 mb-6 ml-4">
            <label class="block mb-2 text-xs font-bold tracking-wider text-gray-700" for="padding">
							HOVER: Background Color
            </label>
            <div class="relative">
                <select id="hover-background" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" onchange="clearFields('hover:bg-');addComponentClass(value,hoverbgcolorvalue.innerHTML);">
                    <option value="hover:bg-transparent">bg-transparent</option>
										<option value="hover:bg-white">bg-white</option>
                    <option value="hover:bg-black" selected>bg-black</option>
                    <option value="hover:bg-gray-">bg-gray</option>
                    <option value="hover:bg-red-">bg-red</option>
                    <option value="hover:bg-orange-">bg-orange</option>
                    <option value="hover:bg-yellow-">bg-yellow</option>
										<option value="hover:bg-green-">bg-green</option>
										<option value="hover:bg-teal-">bg-teal</option>
										<option value="hover:bg-blue-">bg-blue</option>
										<option value="hover:bg-indigo-">bg-indigo</option>
										<option value="hover:bg-purple-">bg-purple</option>
										<option value="hover:bg-pink-">bg-pink</option>

                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                </div>
            </div>
			<div class="flex">
				<input type="range" min="100" max="900" value="500" step="100" class="mr-2 slider" id="hoverbgcolor" onchange="clearFields('hover:bg-');addComponentClass(document.getElementById('hover-background').value,hoverbgcolorvalue.innerHTML);"><div id="hoverbgcolorvalue"></div>
			</div>
			<div id="srcHoverBackground"></div>
        </div>
        <div id="hover-control-text-color" class="mt-4 mb-6 ml-4">
            <label class="block mb-2 text-xs font-bold tracking-wider text-gray-700" for="padding">
							HOVER: Text Color
            </label>
            <div class="relative">
                <select id="hover-text" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" onchange="resetComponentClasses('hover:text-black', 'hover:text-white', 'hover:text-gray', 'hover:text-red', 'hover:text-orange','hover:text-yellow','hover:text-green','hover:text-teal','hover:text-blue','hover:text-indigo','hover:text-purple','hover:text-pink');addComponentClass(value,hovertextcolorvalue.innerHTML)">
                    <option value="hover:text-white" selected>text-white</option>
										<option value="hover:text-black">text-black</option>
										<option value="hover:text-gray-">text-gray </option>
                    <option value="hover:text-red-">text-red</option>
                    <option value="hover:text-orange-">text-orange</option>
                    <option value="hover:text-yellow-">text-yellow</option>
										<option value="hover:text-green-">text-green</option>
										<option value="hover:text-teal-">text-teal</option>
										<option value="hover:text-blue-">text-blue</option>
										<option value="hover:text-indigo-">text-indigo</option>
										<option value="hover:text-purple-">text-purple</option>   
										<option value="hover:text-pink-">text-pink</option>

                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                </div>
            </div>
			<div class="flex">
				<input type="range" min="100" max="900" value="500" step="100" class="mr-2 slider" id="hovertextcolor" onchange="resetComponentClasses('hover:text-black', 'hover:text-white', 'hover:text-gray', 'hover:text-red', 'hover:text-orange','hover:text-yellow','hover:text-green','hover:text-teal','hover:text-blue','hover:text-indigo','hover:text-purple','hover:text-pink');addComponentClass(document.getElementById('hover-text').value,hovertextcolorvalue.innerHTML);"><div id="hovertextcolorvalue"></div>
			</div>
        </div>
        <div id="hover-control-shadow" class="mt-4 mb-6 ml-4">
            <label class="block mb-2 text-xs font-bold tracking-wider text-gray-700" for="padding">
                HOVER: Shadow
            </label>
            <div class="relative">
                <select id="hover-padding" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" onchange="resetComponentClasses('hover:shadow-none', 'hover:shadow','hover:shadow-md','hover:shadow-lg','hover:shadow-xl','hover:shadow-2xl','hover:shadow-inner','hover:shadow-outline');addComponentClass(value);">
                    <option value="hover:">shadow-none</option>
                    <option value="hover:shadow">shadow</option>
                    <option value="hover:shadow-md">shadow-md</option>
                    <option value="hover:shadow-lg">shadow-lg</option>
										<option value="hover:shadow-xl">shadow-xl</option>
										<option value="hover:shadow-2xl">shadow-2xl</option>
                    <option value="hover:shadow-inner">shadow-inner</option>
                    <option value="hover:shadow-outline">shadow-outline</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                </div>
            </div>
        </div>
		
    </div>
	
	
	
	
	
	
	
	
	
	
	
    <div class="mt-4">

        <div class="mt-4"><em>About:</em> MIT license, <a href="https://github.com/minthemiddle/tailwind-button-playground" target="_blank">project on Github</a>, PR's very welcome!</div>
    </div>


				<!-- / BUttons-->
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

<script>
    let el = document.getElementById('button1');
    let ac = document.getElementById('ac');

    function showActiveClasses() {
        let activeClassList = el.classList.value;
        ac.innerHTML = activeClassList;
    }

    function toggleComponentClass(className) {
        el.classList.toggle(className);
        showActiveClasses();
    }

    function addComponentClass(className,outputValue) {
		if (className.substr(className.length - 1) === "-") {
			el.classList.add(className+outputValue);
		} else {
			el.classList.add(className);
		}
        showActiveClasses();
    }

    function removeComponentClass(className) {
        el.classList.remove(className);
        showActiveClasses();
    }

    function resetComponentClasses() {
        for (var i = 0; i < arguments.length; i++) {
            //removeComponentClass(arguments[i]);
			clearFields(arguments[i]);
        }
    }

    function hideElements() {
        let ph = document.getElementsByClassName('ph');
        for (let item of ph) {
            item.classList.toggle('hidden');
        }
    }

    function copyToClipboard(text) {
        window.prompt('Copy to clipboard: Ctrl+C, Enter', text);
    }

    function rgb2hex(rgb) {
        rgb = rgb.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+))?\)$/);

        function hex(x) {
            return ("0" + parseInt(x).toString(16)).slice(-2);
        }
        return hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
    }

    function getButtonColor(x) {
        let buttonColor = window.getComputedStyle(el).getPropertyValue(x);
        return rgb2hex(buttonColor);
    }
	

    function setContrastResults(x) {
        let ratio = document.getElementById('c_ratio');
		if (x >= 4.5) {
			ratio.innerHTML = x + " ✅ Pass";
		} else {
			ratio.innerHTML = x + " ❌ FAIL";
		}
    }

    function getContrast() {
        let fc = getButtonColor('color');
        let bc = getButtonColor('background-color');
		
        let url = `https://webaim.org/resources/contrastchecker/?fcolor=${fc}&bcolor=${bc}&api`
        fetch(url)
            .then(response => response.json())
            .then(data => setContrastResults(data['ratio']))
    }

    function setButtonText() {
        let oldText = getComputedStyle(document.body).getPropertyValue('--after');
        console.log(oldText);
        let re = /(\\\"\>)(.*)(<.*)/;
        let newText = document.getElementById('buttontext').value;
        let newAfterText = oldText.replace(re, `$1${newText}$3`);
        document.documentElement.style.setProperty('--after', newAfterText);
        el.innerHTML = newText;
    }

    window.onload = showActiveClasses();

    // Fathom

	var bgcolor = document.getElementById("bgcolor");
	var bgcolorvalue = document.getElementById("bgcolorvalue");
	// Display the default slider value
	bgcolorvalue.innerHTML = bgcolor.value; 

	// Update the current slider value (each time you drag the slider handle)
	bgcolor.oninput = function() {
	  bgcolorvalue.innerHTML = this.value;
	}

	var textcolor = document.getElementById("textcolor");
	var textcolorvalue = document.getElementById("textcolorvalue");
	// Display the default slider value
	textcolorvalue.innerHTML = textcolor.value; 

	// Update the current slider value (each time you drag the slider handle)
	textcolor.oninput = function() {
	  textcolorvalue.innerHTML = this.value;
	}

	var hoverbgcolor = document.getElementById("hoverbgcolor");
	var hoverbgcolorvalue = document.getElementById("hoverbgcolorvalue");
	// Display the default slider value
	hoverbgcolorvalue.innerHTML = hoverbgcolor.value; 

	// Update the current slider value (each time you drag the slider handle)
	hoverbgcolor.oninput = function() {
	  hoverbgcolorvalue.innerHTML = this.value;
	}

	var hovertextcolor = document.getElementById("hovertextcolor");
	var hovertextcolorvalue = document.getElementById("hovertextcolorvalue");
	// Display the default slider value
	hovertextcolorvalue.innerHTML = hovertextcolor.value; 

	// Update the current slider value (each time you drag the slider handle)
	hovertextcolor.oninput = function() {
	  hovertextcolorvalue.innerHTML = this.value;
	}



function clearFields(x) {

	var prefix = x;
	var classes = el.className.split(" ").filter(function(c) {
		return c.lastIndexOf(prefix, 0) !== 0;
	});
	el.className = classes.join(" ").trim();

}

    </script>


</body>
</html>