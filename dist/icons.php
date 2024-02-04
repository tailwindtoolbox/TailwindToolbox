<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tailwind Toolbox - Icon Generator for Tailwind CSS</title>
	<meta name="description"
		content="Icon Viewer for Heroicons, Tabler and Feather Icons - set the size and colour for your icon and copy the code for your Tailwind CSS project">
	<meta name="keywords"
		content="tailwind,tailwindcss,heroicons, heroicons viewer,tabler, tabler viewer, feather icons, feather viewer">
	<?php include 'includes/head.php'; ?>
	<?php include 'includes/analytics.php'; ?>
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	<script src="https://unpkg.com/clipboard@2/dist/clipboard.min.js"></script>
	<script src="icons.min.json"></script>
</head>

<body class="leading-normal tracking-normal bg-brand-white nunito">

	<?php include 'includes/nav.php'; ?>

	<!--header-->
	<div class="z-20 flex items-center pb-6 mt-24 mb-6 text-center bg-cover" style="background-image: url(bg.svg)">
		<div class="flex flex-col items-center justify-center w-full pt-6 md:pt-16">
			<div class="px-3">
				<h1 class="pt-6">
					<span class="px-3 mb-5 text-3xl font-bold text-center text-white bg-brand sm:text-4xl sm:mb-16"
						style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Icons for
							Tailwind CSS</span></span>
				</h1>
				<p
					class="max-w-3xl mx-auto my-6 text-base font-bold leading-normal text-left lg:text-xl lg:text-center">
					A simple viewer for some Open Source icon packs to customise and copy/paste into your Tailwind CSS
					project.<br>
			</div>
		</div>
	</div>
	<div class="container flex flex-wrap pb-16 mx-auto mb-8" x-data="loadIcons()">



		<div class="w-full px-4 mb-2 md:w-3/5 md:px-3">
			<div class="sticky w-full mt-6 mb-8 top-icon bg-brand-white z-5">

				<input x-model="search" placeholder="Search for an icon..." type="search"
					class="block w-full px-4 py-3 font-bold text-gray-700 bg-white rounded-lg focus:outline-none focus:bg-white focus:shadow">

				<div class="mt-2">
					<a class="tab" href="#" @click.prevent="pack = 'all'"
						:class="{ 'active-tab' : pack === 'all' }">All</a>
					<a class="tab" href="#" @click.prevent="pack = 'Heroicons'"
						:class="{ 'active-tab' : pack === 'Heroicons' }">Heroicons</a>
					<a class="tab" href="#" @click.prevent="pack = 'Tabler'"
						:class="{ 'active-tab' : pack === 'Tabler' }">Tabler</a>
					<a class="tab" href="#" @click.prevent="pack = 'Feather'"
						:class="{ 'active-tab' : pack === 'Feather' }">Feather</a>
				</div>

			</div>
			<div class="flex flex-wrap">

				<template x-for="icon in filteredIcons" :key="icon.filename">
					<div x-show="pack === icon.pack || pack === 'all'"
						class="flex flex-grow-0 p-2 transition duration-150 ease-in-out transform hover:bg-white hover:shadow hover:rounded hover:scale-125 ">
						<div class="w-8 h-8 mx-auto overflow-hidden"
							x-html="'<svg class=&quot' + previewClasses + '&quot ' + icon.svg" x-on:click="currentSVG = icon.svg;
					
														$refs.code.value =  needsWeight(classColor) ? 
															'<svg class=&quot' + classSize + ' ' + classColor + classColorWeight + '&quot ' + icon.svg : 
															'<svg class=&quot' + classSize + ' ' + classColor +  '&quot ' + icon.svg;
				
														$refs.code1.innerHTML  = $refs.code.value;
														
														currentName = icon.filename.charAt(0).toUpperCase() + icon.filename.slice(1).replace('.svg','')">
						</div>
					</div>
				</template>


			</div>

			<p class="pt-8 font-bold">Icon Credits:</p>
			<a class="font-bold text-brand" href="https://github.com/refactoringui/heroicons" target="_blank"
				rel="nofollow">Heroicons</a> (<a class="text-brand" href="https://twitter.com/steveschoger"
				target="_blank" rel="nofollow">Steve Schoger</a>)
			<a class="font-bold text-brand" href="https://github.com/tabler/tabler-icons" target="_blank"
				rel="nofollow">Tabler</a> (<a class="text-brand" href="https://twitter.com/codecalm" target="_blank"
				rel="nofollow">Paweł Kuna</a>) and
			<a class="font-bold text-brand" href="https://github.com/feathericons/feather" target="_blank"
				rel="nofollow">Feather</a> (<a class="text-brand" href="https://twitter.com/colebemis" target="_blank"
				rel="nofollow">Cole Bemis'</a>)

			<p class="mb-2 font-bold text-center text-brand md:pt-8">Advertisment</p>
			<script async type="text/javascript"
				src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom"
				id="_carbonads_js"></script>
		</div>
		<div class="sticky z-50 w-full h-full px-2 mx-auto md:w-2/5 top-40 bg-brand-white"
			x-show.transition="currentSVG != ''">

			<button type="button" class="float-right md:hidden" x-on:click="currentSVG = ''">

				<svg class="inline w-8 h-8 text-brand" viewBox="0 0 24 24" fill="none" stroke="currentColor"
					stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
					<circle cx="12" cy="12" r="10" />
					<line x1="15" y1="9" x2="9" y2="15" />
					<line x1="9" y1="9" x2="15" y2="15" />
				</svg>

			</button>

			<div class="flex items-center justify-center p-2 font-semibold text-brand" x-text="currentName"></div>
			<div class="flex items-center justify-center flex-grow-0 w-full max-w-sm p-2 mx-auto" id="iconPreview"
				x-ref="code1" x-html="needsWeight(classColor) ? 
																'<svg class=&quot' + classSize + ' ' + classColor + classColorWeight + '&quot ' + currentSVG : 
																'<svg class=&quot' + classSize + ' ' + classColor + '&quot ' + currentSVG "></div>
			<div class="flex flex-wrap justify-center w-full">

				<div id="control-textsize" class="mt-4 mb-6">
					<label class="block mb-2 text-xs font-bold tracking-wider text-gray-700" for="textsize">
						Icon Size
					</label>
					<div class="relative">
						<select class="block w-full mt-1 form-input" x-model="classSize" x-on:change="$refs.code.value  =  needsWeight(classColor) ? 
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
							<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
								<path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
							</svg>
						</div>
					</div>
				</div>

				<div id="control-text-color" class="mt-4 mb-6 ml-4">
					<label class="block mb-2 text-xs font-bold tracking-wider text-gray-700" for="padding">
						Icon Color
					</label>
					<div class="relative">
						<select class="block w-full mt-1 form-input" x-model="classColor" x-on:change="$refs.code.value  =  needsWeight(classColor) ? 
															'<svg class=&quot' + classSize + ' ' + classColor + classColorWeight + '&quot ' + currentSVG : 
															'<svg class=&quot' + classSize + ' ' + classColor + '&quot ' + currentSVG ">
							<option value="text-slate-" selected>text-slate</option>
							<option value="text-gray-">text-gray</option>
							<option value="text-zinc-">text-zinc</option>
							<option value="text-neutral-">text-coolGray</option>
							<option value="text-stone-">text-stone</option>
							<option value="text-red-">text-red</option>
							<option value="text-orange-">text-orange</option>
							<option value="text-amber-">text-amber</option>
							<option value="text-yellow-">text-yellow</option>
							<option value="text-lime-">text-lime</option>
							<option value="text-green-">text-green</option>
							<option value="text-emerald-">text-emerald</option>
							<option value="text-teal-">text-teal</option>
							<option value="text-cyan-">text-cyan</option>
							<option value="text-sky-">text-sky</option>
							<option value="text-blue-">text-blue</option>
							<option value="text-indigo-">text-indigo</option>
							<option value="text-violet-">text-violet</option>
							<option value="text-purple-">text-purple</option>
							<option value="text-fuchsia-">text-fuchsia</option>
							<option value="text-pink-">text-pink</option>
							<option value="text-rose-">text-rose</option>

						</select>

						<div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
							<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
								<path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
							</svg>
						</div>
					</div>
					<div class="flex" x-show="needsWeight(classColor)">
						<input type="range" min="100" max="900" value="800" step="100" class="mr-2 slider"
							id="textcolor" x-model="classColorWeight" x-on:change="$refs.code.value  =  needsWeight(classColor) ? 
															'<svg class=&quot' + classSize + ' ' + classColor + classColorWeight + '&quot ' + currentSVG : 
															'<svg class=&quot' + classSize + ' ' + classColor +  '&quot ' + currentSVG " />
						<span x-text="classColorWeight"></span>
					</div>
				</div>
			</div>

			<textarea rows="6" readonly class="hidden w-full p-4 border rounded shadow md:block" id="codeSrc"
				x-ref="code"></textarea>

			<button type="button" id="clipboardBtn" data-clipboard-target="#codeSrc"
				class="flex items-center justify-center w-full max-w-xs px-5 py-3 mx-auto mt-0 font-extrabold text-white rounded shadow outline-none md:mt-6 hover:bg-brand-alt focus:border-teal-900"
				style="background:#3b7977">
				<svg class="inline h-4 pr-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
					fill="currentColor">
					<path d="M8 2a1 1 0 000 2h2a1 1 0 100-2H8z" />
					<path
						d="M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293-1.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L10.414 13H15v3a2 2 0 01-2 2H5a2 2 0 01-2-2V5zM15 11h2a1 1 0 110 2h-2v-2z" />
				</svg>
				Copy to clipboard
			</button>
			<div class="w-full mt-4 font-bold text-center text-brand" id="clipboardMessage"></div>

		</div>
	</div>





	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/js.php'; ?>




	<script>
		function loadIcons() {
			return {
				search: '',
				pack: 'all',
				icons: icondata,
				classSize: 'h-8 w-8',
				classColor: 'text-red-',
				classColorWeight: '500',
				myClasses: ' text-red-800',
				previewClasses: 'h-8 w-8 fill-stroke text-gray-800 hover:text-blue-500',
				currentSVG: '',
				currentName: '',
				get filteredIcons() {
					if (this.search === '') {
						return this.icons
					}

					return this.icons.filter(item => {
						return item.filename.toLowerCase().includes(this.search.toLowerCase())
					})
				}
			}
		}



		function needsWeight(color) {
			//In order to not put weight on black / white
			return (color === 'text-white' || color === 'text-black' ? false : true);
		}


		var clipboard = new ClipboardJS('#clipboardBtn');


		clipboard.on('success', function (e) {

			document.getElementById('clipboardMessage').innerHTML = "Copied!!!!!!";

			setTimeout(function () {
				document.getElementById('clipboardMessage').innerHTML = "";
			}.bind(this), 1000);


			e.clearSelection();
		});

		clipboard.on('error', function (e) {
			document.getElementById('clipboardMessage').innerHTML = "Something went wrong!";

			setTimeout(function () {
				document.getElementById('clipboardMessage').innerHTML = "";
			}.bind(this), 2000);


		});
	</script>

</body>

</html>