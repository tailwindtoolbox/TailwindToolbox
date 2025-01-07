<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tailwind Starter Template - Hero Product : Windy Toolbox</title>
	<meta name="description"
		content="(Formerly Tailwind Toolbox) (Formerly Tailwind Toolbox) Free open source Tailwind CSS starter template (Hero Product) to use with node.js/npm, postcss+purgecss!">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,hero, product">
	<?php include '../includes/head-templates.php'; ?>

	<link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
	<!--Replace with your tailwind.css once created-->
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
	<!--Totally optional :) -->

</head>

<body class="font-sans leading-normal tracking-normal bg-gray-400">

	<!--Nav-->
	<nav class="w-full p-2 mt-0 bg-gray-800">
		<!-- Add this to make the nav fixed: "fixed z-10 top-0" -->
		<div class="container flex flex-wrap items-center mx-auto">
			<div class="flex justify-center w-full font-extrabold text-white md:w-1/2 md:justify-start">
				<a class="text-white no-underline hover:text-white hover:no-underline" href="#">
					<span class="pl-2 text-2xl"><i class="em em-grinning"></i> Brand McBrandface</span>
				</a>
			</div>
			<div class="flex content-center justify-between w-full pt-2 md:w-1/2 md:justify-end">
				<ul class="flex items-center justify-between flex-1 list-reset md:flex-none">
					<li class="mr-3">
						<a class="inline-block px-4 py-2 text-white no-underline" href="#">Active</a>
					</li>
					<li class="mr-3">
						<a class="inline-block px-4 py-2 text-gray-600 no-underline hover:text-gray-200 hover:text-underline"
							href="#">link</a>
					</li>
					<li class="mr-3">
						<a class="inline-block px-4 py-2 text-gray-600 no-underline hover:text-gray-200 hover:text-underline"
							href="#">link</a>
					</li>
					<li class="mr-3">
						<a class="inline-block px-4 py-2 text-gray-600 no-underline hover:text-gray-200 hover:text-underline"
							href="#">link</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!--Hero-->
	<div class="container flex flex-col items-center mx-auto my-12 md:flex-row md:my-24">
		<!--Left Col-->
		<div class="flex flex-col items-start justify-center w-full px-6 pt-12 pb-24 lg:w-1/2">
			<p class="uppercase tracking-loose">Witty Tagline</p>
			<h1 class="my-4 text-3xl font-bold">My Super App</h1>
			<p class="mb-4 leading-normal">Enter your super app's description here... The key is to find the right
				length. Don't want it to be too long, but then don't want it to be too short so that it looks weird
				between the title and button below.</p>
			<button
				class="px-4 py-2 text-gray-900 bg-transparent border border-gray-900 rounded shadow hover:bg-gray-900 hover:text-white hover:shadow-lg hover:border-transparent">Super
				Button</button>
		</div>
		<!--Right Col-->
		<div class="w-full text-center lg:w-1/2 lg:py-6">
			<!--Add your product image here-->
			<svg class="w-3/5 mx-auto text-gray-900 fill-current" xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 20 20">
				<path
					d="M17 6V5h-2V2H3v14h5v4h3.25H11a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6zm-5.75 14H3a2 2 0 0 1-2-2V2c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v4a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-5.75zM11 8v8h6V8h-6zm3 11a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
			</svg>
		</div>

	</div>



	<!--Container-->
	<div class="h-screen bg-white">
		<div class="container px-6 pt-24 mx-auto md:pt-16">
			<p class="py-4"><i class="em em-wave"></i> <i class="em em-world_map"></i></p>
		</div>

	</div>


</body>

</html>