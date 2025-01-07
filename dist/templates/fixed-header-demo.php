<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tailwind Starter Template - Fixed Header : Windy Toolbox</title>
	<meta name="description"
		content="(Formerly Tailwind Toolbox) (Formerly Tailwind Toolbox) Free open source Tailwind CSS starter template with a fixed nav header">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,fixed header">
	<?php include '../includes/head-templates.php'; ?>

	<link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
	<!--Replace with your tailwind.css once created-->
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
	<!--Totally optional :) -->

</head>

<body class="font-sans leading-normal tracking-normal bg-gray-400">

	<!--Nav-->
	<nav class="fixed top-0 z-10 w-full p-2 mt-0 bg-gray-800">
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


	<!--Container-->
	<div class="container">
		<!--Filler-->
		<div style="height:500px;">
			<!--End Filler-->
		</div>


</body>

</html>