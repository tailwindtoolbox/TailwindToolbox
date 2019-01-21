
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Hero Product : Tailwind Toolbox</title>
		<meta name="description" content="Free open source Tailwind CSS starter template (Hero Product) to use with node.js/npm, postcss+purgecss!">
		<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,hero, product">
		<?php include '../includes/head-templates.php';?>
	
		<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> <!--Replace with your tailwind.css once created-->
		<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
		
</head>
<body class="bg-grey-light font-sans leading-normal tracking-normal">

	<!--Nav-->
	<nav class="bg-grey-darkest p-2 mt-0 w-full"> <!-- Add this to make the nav fixed: "fixed z-10 pin-t" -->
        <div class="container mx-auto flex flex-wrap items-center">
		    <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
				<a class="text-white no-underline hover:text-white hover:no-underline" href="#">
					<span class="text-2xl pl-2"><i class="em em-grinning"></i> Brand McBrandface</span>
				</a>
            </div>
			<div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
				<ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
				  <li class="mr-3">
					<a class="inline-block py-2 px-4 text-white no-underline" href="#">Active</a>
				  </li>
				  <li class="mr-3">
					<a class="inline-block text-grey-dark no-underline hover:text-grey-lighter hover:text-underline py-2 px-4" href="#">link</a>
				  </li>
				  <li class="mr-3">
					<a class="inline-block text-grey-dark no-underline hover:text-grey-lighter hover:text-underline py-2 px-4" href="#">link</a>
				  </li>
					<li class="mr-3">
					<a class="inline-block text-grey-dark no-underline hover:text-grey-lighter hover:text-underline py-2 px-4" href="#">link</a>
				  </li>
				</ul>
			</div>
        </div>
    </nav>

	<!--Hero-->
	<div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
		<!--Left Col-->
		<div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-12 pb-24 px-6">
			<p class="uppercase tracking-loose">Witty Tagline</p>
			<h1 class="my-4">My Super App</h1>
			<p class="leading-normal mb-4">Enter your super app's description here... The key is to find the right length.  Don't want it to be too long, but then don't want it to be too short so that it looks weird between the title and button below.</p>
			<button class="bg-transparent hover:bg-black text-black hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-black hover:border-transparent">Super Button</button>
		</div>
		<!--Right Col-->
		<div class="w-full lg:w-1/2 lg:py-6 text-center">
			<!--Add your product image here-->
			<svg class="fill-current text-black w-3/5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M17 6V5h-2V2H3v14h5v4h3.25H11a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6zm-5.75 14H3a2 2 0 0 1-2-2V2c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v4a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-5.75zM11 8v8h6V8h-6zm3 11a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>
		</div>
		
	  </div>
	
	<!--Container-->
	<div class="container">
		<!--Filler-->
			<div style="height:500px;">
		<!--End Filler-->
	</div>


</body>
</html>