<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tailwind Starter Template - Responsive Header : Windy Toolbox</title>
	<meta name="description"
		content="(Formerly Tailwind Toolbox) (Formerly Tailwind Toolbox) Free open source Tailwind CSS starter template with a toggle button responsive menu">
	<meta name="keywords"
		content="Tailwind Toolbox,tailwind,tailwindcss,tailwind css,css,starter template,free template,responsive menu">
	<?php include '../includes/head-templates.php'; ?>

	<link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
	<!--Replace with your tailwind.css once created-->
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
	<!--Totally optional :) -->

</head>

<body class="font-sans leading-normal tracking-normal bg-gray-400">

	<nav class="fixed top-0 z-10 flex flex-wrap items-center justify-between w-full p-6 bg-gray-800">
		<div class="flex items-center flex-shrink-0 mr-6 text-white">
			<a class="text-white no-underline hover:text-white hover:no-underline" href="#">
				<span class="pl-2 text-2xl"><i class="em em-grinning"></i> Brand McBrandface</span>
			</a>
		</div>

		<div class="block lg:hidden">
			<button id="nav-toggle"
				class="flex items-center px-3 py-2 text-gray-500 border border-gray-600 rounded hover:text-white hover:border-white">
				<svg class="w-3 h-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<title>Menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
				</svg>
			</button>
		</div>

		<div class="flex-grow hidden w-full pt-6 lg:flex lg:items-center lg:w-auto lg:block lg:pt-0" id="nav-content">
			<ul class="items-center justify-end flex-1 list-reset lg:flex">
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
	</nav>

	<!--Container-->
	<div class="container mx-auto mt-24 bg-white shadow-lg md:mt-18">

	</div>

	<script>
		//Javascript to toggle the menu
		document.getElementById('nav-toggle').onclick = function () {
			document.getElementById("nav-content").classList.toggle("hidden");
		}
	</script>

</body>

</html>