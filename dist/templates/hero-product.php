
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
	
		<?php include '../includes/analytics.php';?>

		<?php include '../includes/ads.php';?>
			
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
	<div class="bg-white">
		<div class="container mx-auto pt-24 md:pt-16 px-6">
			<p class="font-bold text-center text-grey-darkest text-2xl md:text-4xl px-3 mb-5 sm:mb-16">Tailwind Starter Templates - Hero Product</p>
			<p class="py-4"><i class="em em-wave"></i> <i class="em em-world_map"></i></p>
			<p class="text-grey-darkest">This starter template contains:</p>
			<p class="pt-4"></p>
			
			<div class="flex items-center pt-2">
				<svg class="flex-none m-2 h-6 fill-current text-green-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
					<path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM6.7 9.29L9 11.6l4.3-4.3 1.4 1.42L9 14.4l-3.7-3.7 1.4-1.42z" />
				</svg>
				<span class="flex-1 py-1 pl-3 m-1">Header</span>
			</div>
			<div class="flex items-center">
				<svg class="flex-none m-2 h-6 fill-current text-green-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
					<path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM6.7 9.29L9 11.6l4.3-4.3 1.4 1.42L9 14.4l-3.7-3.7 1.4-1.42z" />
				</svg>
				<span class="flex-1 py-1 pl-3 m-1">Nav List which wraps onto the next row for small screens</span>
			</div>
			<div class="flex items-center">
				<svg class="flex-none m-2 h-6 fill-current text-green-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
					<path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM6.7 9.29L9 11.6l4.3-4.3 1.4 1.42L9 14.4l-3.7-3.7 1.4-1.42z" />
				</svg>
				<span class="flex-1 py-1 pl-3 m-1">Hero section - two columns for large screens and two rows for small screens</span>
			</div>
			
			<p class="text-center no-underline hover:no-underline mt-8 mb-8"><a href="https://github.com/tailwindtoolbox/Hero-Product/archive/master.zip" target="_blank" rel="noopener"><button class="w-full sm:w-auto bg-teal hover:bg-teal-dark text-white text-xl font-extrabold py-3 px-5 rounded shadow hover:shadow-lg"><svg class="fill-current h-4 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg> Download Template</button></a></p>
			
			<p class="text-center no-underline hover:no-underline"><a href="https://github.com/tailwindtoolbox/Hero-Product" target="_blank" rel="noopener"><button class="w-full sm:w-auto bg-grey-lightest hover:bg-black text-grey-darkest hover:text-white text-xl font-extrabold py-3 px-5 rounded shadow hover:shadow-lg">View on GitHub</button></a></p>
			
			<p class="my-16 p-6 w-full container mx-auto bg-teal-lightest text-center text-grey-dark">Find more templates at: <a class="font-extrabold text-teal-dark hover:text-teal-darkest" href="https://www.tailwindtoolbox.com/templates" target="_blank" rel="noopener">www.TailwindToolbox.com/templates</a></p>	
		
			<p class="py-3 text-center">
				<a class="text-teal-dark hover:text-teal-darkest pr-3" href="https://www.github.com/tailwindtoolbox" target="_blank" rel="noopener"><svg class="fill-current text-brand-ondark w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>GitHub</title><path d="M10 0a10 10 0 0 0-3.16 19.49c.5.1.68-.22.68-.48l-.01-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.08 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.1.39-1.99 1.03-2.69a3.6 3.6 0 0 1 .1-2.64s.84-.27 2.75 1.02a9.58 9.58 0 0 1 5 0c1.91-1.3 2.75-1.02 2.75-1.02.55 1.37.2 2.4.1 2.64.64.7 1.03 1.6 1.03 2.69 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85l-.01 2.75c0 .26.18.58.69.48A10 10 0 0 0 10 0"></path></svg></a>
				
				<a class="text-teal-dark hover:text-teal-darkest" href="https://www.twitter.com/tailwindtoolbox" target="_blank" rel="noopener"><svg class="fill-current text-brand-ondark w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Twitter - @tailwindtoolbox</title><path d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"></path></svg></a>
			</p>
		
		</div>
		
	</div>


</body>
</html>