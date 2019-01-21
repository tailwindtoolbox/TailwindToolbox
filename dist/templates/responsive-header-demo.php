
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Responsive Header : Tailwind Toolbox</title>
		<meta name="description" content="Free open source Tailwind CSS starter template with a toggle button responsive menu">
		<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,responsive menu">
		<?php include '../includes/head-templates.php';?>

		<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> <!--Replace with your tailwind.css once created-->
		<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
		
</head>
<body class="bg-grey-light font-sans leading-normal tracking-normal">

	<!--Nav-->
	<nav class="flex items-center justify-between flex-wrap bg-grey-darkest py-6 px-2 md:px-6 fixed w-full z-10 pin-t">
		<div class="flex items-center flex-no-shrink text-white mr-6">
			<a class="text-white no-underline hover:text-white hover:no-underline" href="#">
				<span class="text-xl lg:text-2xl pl-2"><i class="em em-grinning"></i> Brand McBrandface</span>
			</a>
		</div>

		<div class="block lg:hidden">
			<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-grey border-grey-dark hover:text-white hover:border-white">
				&#9776;
			</button>
		</div>

		<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
			<ul class="list-reset lg:flex justify-end flex-1 items-center">
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
	</nav>

	<!--Container-->
	<div class="container mt-24">
		<!--Filler-->
		<div style="height:500px;">
		<!--End Filler-->	
	</div>

	<script>
		//Javascript to toggle the menu
		document.getElementById('nav-toggle').onclick = function(){
			document.getElementById("nav-content").classList.toggle("hidden");
		}
	</script>

</body>
</html>
