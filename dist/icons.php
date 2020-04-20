<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tailwind Toolbox - Icon Generator for Tailwind CSS</title>
	<meta name="description" content="Steve Schoger's Heriocons and Paweł Kuna's Tabler Icons viewer - set the size and colour for your icon and copy the code">
	<meta name="keywords" content="tailwind,tailwindcss,heroicons, heroicons viewer,tabler, tabler viewer">
	<?php include 'includes/head.php'; ?>
	<?php include 'includes/analytics.php'; ?>
	<link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
	<script src="https://unpkg.com/clipboard@2/dist/clipboard.min.js"></script>
	<script src="heroicons.json"></script>

</head>

<body class="bg-brand-white leading-normal tracking-normal nunito">

	<?php include 'includes/nav.php'; ?>

	<!--header-->
	<div class="z-20 mt-24 pb-6 mb-6 flex items-center text-center" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">
		<div class="flex flex-col w-full justify-center items-center pt-6 md:pt-16">
			<div class="px-3">
				<h1 class="pt-6">
					<span class="bg-brand font-bold text-center text-white text-3xl sm:text-4xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Icons for Tailwind CSS</span></span>
				</h1>
				<p class="max-w-3xl mx-auto leading-normal my-6 font-bold text-base lg:text-xl text-left lg:text-center">A simple viewer for <a class="text-brand" href="https://twitter.com/steveschoger" target="_blank" rel="nofollow">Steve Schoger</a>'s <a class="text-brand" href="https://github.com/refactoringui/heroicons" target="_blank" rel="nofollow">Heroicons</a> and <a class="text-brand" href="https://twitter.com/codecalm" target="_blank" rel="nofollow">Paweł Kuna</a>'s <a class="text-brand" href="https://github.com/tabler/tabler-icons" target="_blank" rel="nofollow"> Tabler</a> icons.</p>
			</div>
		</div>
	</div>
	<div class="container mx-auto mb-8 flex flex-wrap pb-48" x-data="loadIcons()">

		<div class="mx-auto w-full md:w-2/5 px-2 h-full sticky top-0 bg-brand-white z-50" style="top:8em;">

			<div class=" flex items-center justify-center w-full max-w-sm mx-auto p-2" id="iconPreview" x-ref="code1" x-html="'<svg class=&quot' + classSize + ' ' + classColor + classColorWeight + '&quot ' + currentSVG"></div>

			<div class="w-full flex flex-wrap justify-center">

				<div id="control-textsize" class="mt-4 mb-6">
					<label class="block tracking-wider text-gray-700 text-xs font-bold mb-2" for="textsize">
						Icon Size
					</label>
					<div class="relative">
						<select class="form-input mt-1 block w-full" x-model="classSize" x-on:change="$refs.code.value  =  needsWeight(classColor) ? 
																'<svg class=&quot' + classSize + ' ' + classColor + classColorWeight + '&quot ' + currentSVG : 
																'<svg class=&quot' + classSize + ' ' + classColor + '&quot ' + currentSVG ">
							<option value="h-1 w-1">1 (0.25rem - 4px)</option>
							<option value="h-2 w-2">2 (0.5rem - 8px)</option>
							<option value="h-3 w-3">3 (0.75rem - 12px)</option>
							<option value="h-4 w-4">4 (1rem - 16px)</option>
							<option value="h-5 w-5">5 (1.25rem - 20px)</option>
							<option value="h-6 w-6" selected>6 (1.5rem - 24px)</option>
							<option value="h-8 w-8">8 (2rem - 32px)</option>
							<option value="h-10 w-10">10 (2.5rem - 40px)</option>
							<option value="h-12 w-12">12 (3rem - 48px)</option>
							<option value="h-16 w-16">16 (4rem - 64px)</option>
							<option value="h-20 w-20">20 (5rem - 80px)</option>
							<option value="h-24 w-24">24 (6rem - 96px)</option>
							<option value="h-32 w-32">32 (8rem - 128px)</option>
							<option value="h-40 w-40">40 (10rem - 160px)</option>
							<option value="h-48 w-48">48 (12rem - 192px)</option>
							<option value="h-56 w-56">56 (14rem - 224px)</option>
							<option value="h-64 w-64">64 (16rem - 256px)</option>
						</select>

						<div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
							<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
								<path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
							</svg>
						</div>
					</div>
				</div>

				<div id="control-text-color" class="ml-4 mt-4 mb-6">
					<label class="block tracking-wider text-gray-700 text-xs font-bold mb-2" for="padding">
						Icon Color
					</label>
					<div class="relative">
						<select class="form-input mt-1 block w-full" x-model="classColor" x-on:change="$refs.code.value  =  needsWeight(classColor) ? 
															'<svg class=&quot' + classSize + ' ' + classColor + classColorWeight + '&quot ' + currentSVG : 
															'<svg class=&quot' + classSize + ' ' + classColor + '&quot ' + currentSVG ">
							<option value="text-red-" selected>text-red</option>
							<option value="text-orange-">text-orange</option>
							<option value="text-yellow-">text-yellow</option>
							<option value="text-green-">text-green</option>
							<option value="text-teal-">text-teal</option>
							<option value="text-blue-">text-blue</option>
							<option value="text-indigo-">text-indigo</option>
							<option value="text-purple-">text-purple</option>
							<option value="text-pink-">text-pink</option>
							<option value="text-gray-">text-gray </option>
							<option value="text-black">text-black</option>
							<option value="text-white">text-white</option>
						</select>

						<div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
							<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
								<path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
							</svg>
						</div>
					</div>
					<div class="flex" x-show="needsWeight(classColor)">
						<input type="range" min="100" max="900" value="800" step="100" class="slider mr-2" id="textcolor" x-model="classColorWeight" x-on:change="$refs.code.value  =  needsWeight(classColor) ? 
															'<svg class=&quot' + classSize + ' ' + classColor + classColorWeight + '&quot ' + currentSVG : 
															'<svg class=&quot' + classSize + ' ' + classColor +  '&quot ' + currentSVG " />
						<span x-text="classColorWeight"></span>
					</div>
				</div>
			</div>

			<textarea rows="6" readonly class="hidden md:block w-full p-4 border shadow rounded" id="codeSrc" x-ref="code"></textarea>

			<button type="button" id="clipboardBtn" data-clipboard-target="#codeSrc" class="mx-auto mt-6 w-full max-w-xs flex items-center justify-center bg-brand hover:bg-teal-500 outline-none focus:border-teal-900 text-white font-extrabold py-3 px-5 rounded shadow">
				<svg class="inline fill-current h-4 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
					<path d="M8 2a1 1 0 000 2h2a1 1 0 100-2H8z" />
					<path d="M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293-1.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L10.414 13H15v3a2 2 0 01-2 2H5a2 2 0 01-2-2V5zM15 11h2a1 1 0 110 2h-2v-2z" /></svg>
				Copy to clipboard
			</button>
			<div class="w-full mt-4 text-brand font-bold text-center" id="clipboardMessage"></div>






			<p class="text-brand text-center font-bold mb-2 md:pt-8">Advertisment</p>
			<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>




		</div>

		<div class="px-4 w-full md:w-3/5 flex flex-wrap items-stretch mb-2 md:px-3">
			<div class="w-full mb-8">
				<a class="tab" href="#" @click.prevent="pack = 'all'" :class="{ 'active-tab' : pack === 'all' }">All</a>
				<a class="tab" href="#" @click.prevent="pack = 'Heroicons - Outline'" :class="{ 'active-tab' : pack === 'Heroicons - Outline' }">Heroicons (Outline)</a>
				<a class="tab" href="#" @click.prevent="pack = 'Heroicons - Solid'" :class="{ 'active-tab' : pack === 'Heroicons - Solid' }">Heroicons (Solid)</a>
				<a class="tab" href="#" @click.prevent="pack = 'Tabler'" :class="{ 'active-tab' : pack === 'Tabler' }">Tabler</a>
			</div>
			<template x-for="icon in icons" :key="icon.filename">
				<div x-show="pack === icon.pack || pack === 'all'" class="flex p-2 hover:bg-white hover:shadow hover:rounded transition duration-150 ease-in-out transform hover:scale-125 ">
					<div class="mx-auto h-8 w-8 overflow-hidden" x-html="'<svg class=&quot' + previewClasses + '&quot ' + icon.svg" x-on:click="currentSVG = icon.svg;
					
														$refs.code.value =  needsWeight(classColor) ? 
															'<svg class=&quot' + classSize + ' ' + classColor + classColorWeight + '&quot ' + icon.svg : 
															'<svg class=&quot' + classSize + ' ' + classColor +  '&quot ' + icon.svg;
				
														$refs.code1.innerHTML  = $refs.code.value;">
					</div>
				</div>
			</template>

		</div>

	</div>





	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/js.php'; ?>




	<script>
		function loadIcons() {
			return {
				pack: 'all',
				icons: icondata.icons,
				classSize: 'h-8 w-8',
				classColor: 'text-red-',
				classColorWeight: '500',
				myClasses: ' text-red-800',
				previewClasses: 'h-8 w-8 fill-stroke text-gray-800 hover:text-blue-500',
				currentSVG: '',
			}
		}


		function needsWeight(color) {
			//In order to not put weight on black / white
			return (color === 'text-white' || color === 'text-black' ? false : true);
		}


		var clipboard = new ClipboardJS('#clipboardBtn');


		clipboard.on('success', function(e) {

			document.getElementById('clipboardMessage').innerHTML = "Copied!!!!!!";

			setTimeout(function() {
				document.getElementById('clipboardMessage').innerHTML = "";
			}.bind(this), 1000);


			e.clearSelection();
		});

		clipboard.on('error', function(e) {
			document.getElementById('clipboardMessage').innerHTML = "Something went wrong!";

			setTimeout(function() {
				document.getElementById('clipboardMessage').innerHTML = "";
			}.bind(this), 2000);


		});
	</script>

</body>

</html>