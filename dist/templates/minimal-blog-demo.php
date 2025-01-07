<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tailwind Starter Template - Minimal Blog: Windy Toolbox</title>
	<meta name="description"
		content="(Formerly Tailwind Toolbox) (Formerly Tailwind Toolbox) Free open source Tailwind CSS Minimalistic monochrome blog template">
	<meta name="keywords"
		content="Tailwind Toolbox,tailwind,tailwindcss,tailwind css,css,starter template,free template,blog template, blog layout, minimal, monochrome, minimalistic, theme">
	<?php include '../includes/head-templates.php'; ?>

	<link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
	<!--Replace with your tailwind.css once created-->

</head>

<body class="font-sans leading-normal tracking-normal bg-gray-100">

	<nav id="header" class="fixed top-0 z-10 w-full">

		<div id="progress" class="top-0 z-20 h-1"
			style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>

		<div class="flex flex-wrap items-center justify-between w-full py-3 mx-auto mt-0 md:max-w-4xl">

			<div class="pl-4">
				<a class="text-base text-xl font-extrabold text-gray-900 no-underline hover:no-underline" href="#">
					Minimal Blog
				</a>
			</div>

			<div class="block pr-4 lg:hidden">
				<button id="nav-toggle"
					class="flex items-center px-3 py-2 text-gray-500 border border-gray-600 rounded appearance-none hover:text-gray-900 hover:border-green-500 focus:outline-none">
					<svg class="w-3 h-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<title>Menu</title>
						<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
					</svg>
				</button>
			</div>

			<div class="z-20 flex-grow hidden w-full mt-2 bg-gray-100 lg:flex lg:items-center lg:w-auto lg:block lg:mt-0 md:bg-transparent"
				id="nav-content">
				<ul class="items-center justify-end flex-1 list-reset lg:flex">
					<li class="mr-3">
						<a class="inline-block px-4 py-2 font-bold text-gray-900 no-underline" href="#">Active</a>
					</li>
					<li class="mr-3">
						<a class="inline-block px-4 py-2 text-gray-600 no-underline hover:text-gray-900 hover:text-underline"
							href="#">link</a>
					</li>
					<li class="mr-3">
						<a class="inline-block px-4 py-2 text-gray-600 no-underline hover:text-gray-900 hover:text-underline"
							href="#">link</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!--Container-->
	<div class="container w-full pt-20 mx-auto md:max-w-3xl">

		<div class="w-full px-4 text-xl leading-normal text-gray-800 md:px-6" style="font-family:Georgia,serif;">

			<!--Title-->
			<div class="font-sans">
				<span class="text-base font-bold text-green-500 md:text-sm">&lt;<span> <a href="#"
							class="text-base font-bold text-green-500 no-underline md:text-sm hover:underline">BACK TO
							BLOG</a></p>
						<h1 class="pt-6 pb-2 font-sans text-3xl font-bold text-gray-900 break-normal md:text-4xl">
							Welcome to Minimal Blog</h1>
						<p class="text-sm font-normal text-gray-600 md:text-base">Published 19 February 2019</p>
			</div>


			<!--Post Content-->


			<!--Lead Para-->
			<p class="py-6">
				👋 Welcome fellow <a class="text-green-500 no-underline hover:underline"
					href="https://www.tailwindcss.com">Tailwind CSS</a> and miminal monochrome blog fan. This starter
				template provides a starting point to create your own minimal monochrome blog using Tailwind CSS and
				vanilla Javascript.
			</p>

			<p class="py-6">The basic blog page layout is available and all using the default Tailwind CSS classes
				(although there are a few hardcoded style tags). If you are going to use this in your project, you will
				want to convert the classes into components.</p>


			<h1 class="py-2 font-sans">Heading 1</h1>
			<h2 class="py-2 font-sans">Heading 2</h2>
			<h3 class="py-2 font-sans">Heading 3</h3>
			<h4 class="py-2 font-sans">Heading 4</h4>
			<h5 class="py-2 font-sans">Heading 5</h5>
			<h6 class="py-2 font-sans">Heading 6</h6>

			<p class="py-6">Sed dignissim lectus ut tincidunt vulputate. Fusce tincidunt lacus purus, in mattis tortor
				sollicitudin pretium. Phasellus at diam posuere, scelerisque nisl sit amet, tincidunt urna. Cras nisi
				diam, pulvinar ut molestie eget, eleifend ac magna. Sed at lorem condimentum, dignissim lorem eu,
				blandit massa. Phasellus eleifend turpis vel erat bibendum scelerisque. Maecenas id risus dictum,
				rhoncus odio vitae, maximus purus. Etiam efficitur dolor in dolor molestie ornare. Aenean pulvinar diam
				nec neque tincidunt, vitae molestie quam fermentum. Donec ac pretium diam. Suspendisse sed odio risus.
				Nunc nec luctus nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
				himenaeos. Duis nec nulla eget sem dictum elementum.</p>

			<ol>
				<li class="py-3">Maecenas accumsan lacus sit amet elementum porta. Aliquam eu libero lectus. Fusce
					vehicula dictum mi. In non dolor at sem ullamcorper venenatis ut sed dui. Ut ut est quam.
					Suspendisse quam quam, commodo sit amet placerat in, interdum a ipsum. Morbi sit amet tellus
					scelerisque tortor semper posuere.</li>
				<li class="py-3">Morbi varius posuere blandit. Praesent gravida bibendum neque eget commodo. Duis auctor
					ornare mauris, eu accumsan odio viverra in. Proin sagittis maximus pharetra. Nullam lorem mauris,
					faucibus ut odio tempus, ultrices aliquet ex. Nam id quam eget ipsum luctus hendrerit. Ut eros
					magna, eleifend ac ornare vulputate, pretium nec felis.</li>
				<li class="py-3">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
					Nunc vitae pretium elit. Cras leo mauris, tristique in risus ac, tristique rutrum velit. Mauris
					accumsan tempor felis vitae gravida. Cras egestas convallis malesuada. Etiam ac ante id tortor
					vulputate pretium. Maecenas vel sapien suscipit, elementum odio et, consequat tellus.</li>
			</ol>

			<blockquote class="pl-8 my-8 italic border-l-4 border-green-500 md:pl-12">Example of blockquote - Lorem
				ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet
				ligula.</blockquote>

			<p class="py-6">Example code block:</p>
			<pre class="p-2 font-mono text-base text-white bg-gray-900 rounded md:p-4">
				<code class="break-words whitespace-pre-wrap">
&lt;header class="site-header outer"&gt;
&lt;div class="inner"&gt;
{{&gt; "site-nav"}}
&lt;/div&gt;
&lt;/header&gt;
				</code>
			</pre>


			<!--/ Post Content-->

		</div>

		<!--Tags -->
		<div class="px-4 py-6 text-base text-gray-500 md:text-sm">
			Tags: <a href="#" class="text-base text-green-500 no-underline md:text-sm hover:underline">Link</a> . <a
				href="#" class="text-base text-green-500 no-underline md:text-sm hover:underline">Link</a>
		</div>

		<!--Divider-->
		<hr class="mx-4 mb-8 border-b-2 border-gray-400">


		<!--Subscribe-->
		<div class="container px-4">
			<div class="p-4 font-sans text-center rounded-lg shadow-xl bg-gradient-to-b from-green-100 to-gray-100">
				<h2 class="text-xl font-bold break-normal md:text-3xl">Subscribe to my Newsletter</h2>
				<h3 class="text-sm font-bold text-gray-600 break-normal md:text-base">Get the latest posts delivered
					right to your inbox</h3>
				<div class="w-full pt-4 text-center">
					<form action="#">
						<div class="flex flex-wrap items-center max-w-xl p-1 pr-0 mx-auto">
							<input type="email" placeholder="youremail@example.com"
								class="flex-1 p-3 mt-4 mr-2 text-gray-600 border border-gray-400 rounded shadow-md appearance-none focus:outline-none">
							<button type="submit"
								class="flex-1 block py-4 mt-4 text-base font-semibold tracking-wider text-white uppercase bg-green-500 rounded shadow appearance-none md:inline-block hover:bg-green-400">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Subscribe-->



		<!--Author-->
		<div class="flex items-center w-full px-4 py-12 font-sans">
			<img class="w-10 h-10 mr-4 rounded-full" src="http://i.pravatar.cc/300" alt="Avatar of Author">
			<div class="flex-1 px-2">
				<p class="mb-2 text-base font-bold leading-none md:text-xl">Jo Bloggerson</p>
				<p class="text-xs text-gray-600 md:text-base">Minimal Blog Tailwind CSS template by <a
						class="text-green-500 no-underline hover:underline"
						href="https://www.tailwindtoolbox.com">TailwindToolbox.com</a></p>
			</div>
			<div class="justify-end">
				<button
					class="px-4 py-2 text-xs font-bold text-gray-500 bg-transparent border border-gray-500 rounded-full hover:border-green-500 hover:text-green-500">Read
					More</button>
			</div>
		</div>
		<!--/Author-->

		<!--Divider-->
		<hr class="mx-4 mb-8 border-b-2 border-gray-400">

		<!--Next & Prev Links-->
		<div class="flex content-center justify-between px-4 pb-12 font-sans">
			<div class="text-left">
				<span class="text-xs font-normal text-gray-600 md:text-sm">&lt; Previous Post</span><br>
				<p><a href="#"
						class="text-base font-bold text-green-500 no-underline break-normal md:text-sm hover:underline">Blog
						title</a></p>
			</div>
			<div class="text-right">
				<span class="text-xs font-normal text-gray-600 md:text-sm">Next Post &gt;</span><br>
				<p><a href="#"
						class="text-base font-bold text-green-500 no-underline break-normal md:text-sm hover:underline">Blog
						title</a></p>
			</div>
		</div>


		<!--/Next & Prev Links-->

	</div>
	<!--/container-->

	<footer class="bg-white border-t border-gray-400 shadow">
		<div class="container flex max-w-4xl py-8 mx-auto">

			<div class="flex flex-wrap w-full mx-auto">
				<div class="flex w-full md:w-1/2 ">
					<div class="px-8">
						<h3 class="font-bold text-gray-900">About</h3>
						<p class="py-4 text-sm text-gray-600">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus
							commodo nec id erat. Suspendisse consectetur dapibus velit ut lacinia.
						</p>
					</div>
				</div>

				<div class="flex w-full md:w-1/2">
					<div class="px-8">
						<h3 class="font-bold text-gray-900">Social</h3>
						<ul class="items-center pt-3 text-sm list-reset">
							<li>
								<a class="inline-block py-1 text-gray-600 no-underline hover:text-gray-900 hover:text-underline"
									href="#">Add social link</a>
							</li>
							<li>
								<a class="inline-block py-1 text-gray-600 no-underline hover:text-gray-900 hover:text-underline"
									href="#">Add social link</a>
							</li>
							<li>
								<a class="inline-block py-1 text-gray-600 no-underline hover:text-gray-900 hover:text-underline"
									href="#">Add social link</a>
							</li>
						</ul>
					</div>
				</div>
			</div>



		</div>
	</footer>

	<script>
		/* Progress bar */
		//Source: https://alligator.io/js/progress-bar-javascript-css-variables/
		var h = document.documentElement,
			b = document.body,
			st = 'scrollTop',
			sh = 'scrollHeight',
			progress = document.querySelector('#progress'),
			scroll;
		var scrollpos = window.scrollY;
		var header = document.getElementById("header");
		var navcontent = document.getElementById("nav-content");

		document.addEventListener('scroll', function () {

			/*Refresh scroll % width*/
			scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
			progress.style.setProperty('--scroll', scroll + '%');

			/*Apply classes for slide in bar*/
			scrollpos = window.scrollY;

			if (scrollpos > 10) {
				header.classList.add("bg-white");
				header.classList.add("shadow");
				navcontent.classList.remove("bg-gray-100");
				navcontent.classList.add("bg-white");
			} else {
				header.classList.remove("bg-white");
				header.classList.remove("shadow");
				navcontent.classList.remove("bg-white");
				navcontent.classList.add("bg-gray-100");

			}

		});


		//Javascript to toggle the menu
		document.getElementById('nav-toggle').onclick = function () {
			document.getElementById("nav-content").classList.toggle("hidden");
		}
	</script>

</body>

</html>