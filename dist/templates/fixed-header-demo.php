
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Fixed Header : Tailwind Toolbox</title>
		<meta name="description" content="Free open source Tailwind CSS starter template with a fixed nav header">
		<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,fixed header">
		<?php include '../includes/head-templates.php';?>
	
		<?php include '../includes/analytics.php';?>
			
		<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> <!--Replace with your tailwind.css once created-->
		<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
		
</head>
<body class="bg-grey-light font-sans leading-normal tracking-normal">

	<!--Nav-->
	<nav class="bg-grey-darkest p-2 mt-0 fixed w-full z-10 pin-t">
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


	<!--Container-->
	<div class="container">
		<!--Filler-->
			<div style="height:500px;">
		<!--End Filler-->
	</div>


</body>
</html>