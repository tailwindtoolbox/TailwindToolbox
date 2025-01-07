<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tailwind Starter Template - Ghostwind CSS : Windy Toolbox</title>
	<meta name="author" content="name">
	<meta name="description"
		content="(Formerly Tailwind Toolbox) (Formerly Tailwind Toolbox) Free open source Tailwind CSS starter Ghost blog template (Casper theme)">
	<meta name="keywords"
		content="Tailwind Toolbox,tailwind,tailwindcss,tailwind css,css,starter template,free template,blog template, blog layout, ghost, casper, theme">
	<?php include '../includes/head-templates.php'; ?>

	<link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
	<!--Replace with your tailwind.css once created-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
	<style>
		.smooth {
			transition: box-shadow 0.3s ease-in-out;
		}
	</style>
</head>

<body class="font-sans leading-normal tracking-normal bg-white">

	<!--Nav-->
	<nav class="w-full p-4 mt-0 bg-gray-900">
		<div class="container flex items-center mx-auto">
			<div class="flex font-extrabold text-white">
				<a class="flex text-base text-white no-underline hover:text-white hover:no-underline" href="#">
					👻 <span class="hidden w-0 pl-1 md:w-auto md:block">Ghostwind CSS</span>
				</a>
			</div>
			<div class="flex pl-4 text-sm">
				<ul class="flex items-center justify-between flex-1 list-reset md:flex-none">
					<li class="mr-2">
						<a class="inline-block px-2 py-2 text-white no-underline" href="index.html">HOME</a>
					</li>
					<li class="mr-2">
						<a class="inline-block px-2 py-2 text-gray-600 no-underline hover:text-gray-200 hover:text-underline"
							href="#">LINK</a>
					</li>
					<li class="mr-2">
						<a class="inline-block px-2 py-2 text-gray-600 no-underline hover:text-gray-200 hover:text-underline"
							href="#">LINK</a>
					</li>
					<li class="mr-2">
						<a class="inline-block px-2 py-2 text-gray-600 no-underline hover:text-gray-200 hover:text-underline"
							href="#">LINK</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!--slide in nav-->
	<div id="header" class="fixed top-0 z-10 hidden w-full bg-white animated" style="opacity: .95;">
		<div class="bg-white">
			<div class="flex flex-wrap items-center content-center">
				<div class="flex justify-start w-1/2 font-extrabold text-white">
					<a class="flex pl-2 text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="#">
						👻 <span class="hidden w-0 pl-1 md:w-auto md:block">Ghostwind CSS</span>
					</a>
				</div>
				<div class="flex content-center justify-end w-1/2">
					<p class="hidden p-4 mr-3 text-xs text-center sm:block h-14"><span class="pr-2">Share this</span> 👉
					</p>
					<a class="inline-block w-10 h-10 p-2 text-center text-white no-underline hover:text-white hover:text-underline md:h-auto md:w-16 md:p-4"
						href="https://twitter.com/intent/tweet?url=#" style="background-color:#33b1ff;">
						<svg class="h-4 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
							<path
								d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z">
							</path>
						</svg>
					</a>
					<a class="inline-block w-10 h-10 p-2 text-center text-white no-underline hover:text-white hover:text-underline md:h-auto md:w-16 md:p-4"
						href="https://www.facebook.com/sharer/sharer.php?u=#" style="background-color:#005e99">
						<svg class="h-4 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
							<path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z">
							</path>
						</svg>
					</a>
				</div>
			</div>

		</div>
		<!--Progress bar-->
		<div id="progress" class="h-1 bg-white shadow"
			style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>
	</div>


	<!--Title-->
	<div class="pt-16 text-center md:pt-32">
		<p class="text-sm font-bold text-green-500 md:text-base">08 APRIL 2019 <span class="text-gray-900">/</span>
			GETTING STARTED</p>
		<h1 class="text-3xl font-bold break-normal md:text-5xl">Welcome to Ghostwind CSS</h1>
	</div>

	<!--image-->
	<div class="container w-full max-w-6xl mx-auto mt-8 bg-white bg-cover rounded"
		style="background-image:url('https://source.unsplash.com/collection/1118905/'); height: 75vh;"></div>

	<!--Container-->
	<div class="container max-w-5xl mx-auto -mt-32">

		<div class="mx-0 sm:mx-6">

			<div class="w-full p-8 text-xl leading-normal text-gray-800 bg-white md:p-24 md:text-2xl"
				style="font-family:Georgia,serif;">

				<!--Post Content-->


				<!--Lead Para-->
				<p class="mb-5 text-2xl md:text-3xl">
					👋 Welcome fellow <a
						class="text-gray-800 no-underline border-b-2 border-green-500 hover:text-green-500"
						href="https://www.tailwindcss.com">Tailwind CSS</a> and <a
						class="text-gray-800 no-underline border-b-2 border-green-500 hover:text-green-500"
						href="https://www.ghost.org">Ghost</a> fan. This starter template is an attempt to replicate the
					default Ghost theme <a
						class="text-gray-800 no-underline border-b-2 border-green-500 hover:text-green-500"
						href="https://demo.ghost.io/welcome">"Casper"</a> using Tailwind CSS and vanilla Javascript.
				</p>

				<p class="py-6">The basic blog page layout is available and all using the default Tailwind CSS classes
					(although there are a few hardcoded style tags). If you are going to use this in your project, you
					will want to convert the classes into components.</p>

				<p class="py-6">Sed dignissim lectus ut tincidunt vulputate. Fusce tincidunt lacus purus, in mattis
					tortor sollicitudin pretium. Phasellus at diam posuere, scelerisque nisl sit amet, tincidunt urna.
					Cras nisi diam, pulvinar ut molestie eget, eleifend ac magna. Sed at lorem condimentum, dignissim
					lorem eu, blandit massa. Phasellus eleifend turpis vel erat bibendum scelerisque. Maecenas id risus
					dictum, rhoncus odio vitae, maximus purus. Etiam efficitur dolor in dolor molestie ornare. Aenean
					pulvinar diam nec neque tincidunt, vitae molestie quam fermentum. Donec ac pretium diam. Suspendisse
					sed odio risus. Nunc nec luctus nisi. Class aptent taciti sociosqu ad litora torquent per conubia
					nostra, per inceptos himenaeos. Duis nec nulla eget sem dictum elementum.</p>

				<script async type="text/javascript"
					src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom"
					id="_carbonads_js"></script>

				<ol>
					<li class="py-3">Maecenas accumsan lacus sit amet elementum porta. Aliquam eu libero lectus. Fusce
						vehicula dictum mi. In non dolor at sem ullamcorper venenatis ut sed dui. Ut ut est quam.
						Suspendisse quam quam, commodo sit amet placerat in, interdum a ipsum. Morbi sit amet tellus
						scelerisque tortor semper posuere.</li>
					<li class="py-3">Morbi varius posuere blandit. Praesent gravida bibendum neque eget commodo. Duis
						auctor ornare mauris, eu accumsan odio viverra in. Proin sagittis maximus pharetra. Nullam lorem
						mauris, faucibus ut odio tempus, ultrices aliquet ex. Nam id quam eget ipsum luctus hendrerit.
						Ut eros magna, eleifend ac ornare vulputate, pretium nec felis.</li>
					<li class="py-3">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
						Curae; Nunc vitae pretium elit. Cras leo mauris, tristique in risus ac, tristique rutrum velit.
						Mauris accumsan tempor felis vitae gravida. Cras egestas convallis malesuada. Etiam ac ante id
						tortor vulputate pretium. Maecenas vel sapien suscipit, elementum odio et, consequat tellus.
					</li>
				</ol>

				<blockquote class="pl-8 my-8 italic border-l-4 border-green-500 md:pl-12">Example of blockquote - Lorem
					ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit
					amet ligula.</blockquote>

				<p class="py-6">Example code block:</p>
				<pre class="p-4 font-mono text-base text-white bg-gray-900 rounded">
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


			<!--Subscribe-->
			<div class="container p-4 mt-8 font-sans text-center bg-green-100 rounded md:p-24">
				<h2 class="text-2xl font-bold break-normal md:text-4xl">Subscribe to Ghostwind CSS</h2>
				<h3 class="text-base font-normal font-bold text-gray-600 break-normal md:text-xl">Get the latest posts
					delivered right to your inbox</h3>
				<div class="w-full pt-4 text-center">
					<form action="#">
						<div class="flex flex-wrap items-center max-w-sm p-1 pr-0 mx-auto">
							<input type="email" placeholder="youremail@example.com"
								class="flex-1 p-3 mr-2 text-gray-600 rounded shadow appearance-none focus:outline-none">
							<button type="submit"
								class="flex-1 block py-4 mt-4 text-base font-semibold tracking-wider text-white uppercase bg-green-500 rounded shadow appearance-none md:mt-0 md:inline-block hover:bg-green-400">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
			<!-- /Subscribe-->


			<!--Author-->
			<div class="flex items-center w-full p-8 font-sans md:p-24">
				<img class="w-10 h-10 mr-4 rounded-full" src="http://i.pravatar.cc/300" alt="Avatar of Author">
				<div class="flex-1">
					<p class="text-base font-bold leading-none md:text-xl">Ghostwind CSS</p>
					<p class="text-xs text-gray-600 md:text-base">Tailwind CSS version of Ghost's Casper theme by <a
							class="text-gray-800 no-underline border-b-2 border-green-500 hover:text-green-500"
							href="https://www.tailwindtoolbox.com">TailwindToolbox.com</a></p>
				</div>
				<div class="justify-end">
					<button
						class="px-4 py-2 text-xs font-bold text-gray-500 bg-transparent border border-gray-500 rounded-full hover:border-green-500 hover:text-green-500">Read
						More</button>
				</div>
			</div>
			<!--/Author-->

		</div>


	</div>




	<div class="bg-gray-200">

		<div class="container w-full max-w-6xl px-2 py-8 mx-auto">
			<div class="flex flex-wrap -mx-2">
				<div class="w-full px-2 pb-12 md:w-1/3">
					<div class="relative h-full overflow-hidden bg-white rounded shadow-md hover:shadow-lg smooth">
						<a href="#" class="no-underline hover:no-underline">
							<img src="https://source.unsplash.com/_AjqGGafofE/400x200"
								class="w-full h-48 rounded-t shadow-lg">
							<div class="h-auto p-6 md:h-48">
								<p class="text-xs text-gray-600 md:text-sm">GETTING STARTED</p>
								<div class="text-xl font-bold text-gray-900">Lorem ipsum dolor sit amet.</div>
								<p class="mb-5 font-serif text-base text-gray-800">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc
									commodo posuere et sit amet ligula.
								</p>
							</div>
							<div class="inset-x-0 bottom-0 flex items-center justify-between p-6">
								<img class="w-8 h-8 mr-4 rounded-full" src="http://i.pravatar.cc/300"
									alt="Avatar of Author">
								<p class="text-xs text-gray-600 md:text-sm">2 MIN READ</p>
							</div>
						</a>
					</div>
				</div>
				<div class="w-full px-2 pb-12 md:w-1/3">
					<div class="relative h-full overflow-hidden bg-white rounded shadow-md hover:shadow-lg smooth">
						<a href="#" class="no-underline hover:no-underline">
							<img src="https://source.unsplash.com/_AjqGGafofE/400x200"
								class="w-full h-48 rounded-t shadow">
							<div class="h-auto p-6 md:h-48">
								<p class="text-xs text-gray-600 md:text-sm">UNDERWATER</p>
								<div class="text-xl font-bold text-gray-900">Biolumini algae diatomeae ecology.</div>
								<p class="mb-5 font-serif text-base text-gray-800">
									Lorem ipsum dolor sit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
								</p>
							</div>
							<div class="inset-x-0 bottom-0 flex items-center justify-between p-6">
								<img class="w-8 h-8 mr-4 rounded-full" src="http://i.pravatar.cc/300"
									alt="Avatar of Author">
								<p class="text-xs text-gray-600 md:text-sm">4 MIN READ</p>
							</div>
						</a>
					</div>
				</div>
				<div class="w-full px-2 pb-12 md:w-1/3">
					<div class="relative h-full overflow-hidden bg-white rounded shadow-md hover:shadow-lg smooth">
						<a href="#" class="no-underline hover:no-underline">
							<img src="https://source.unsplash.com/DEa8_vxKlEo/400x200"
								class="w-full h-48 rounded-t shadow">
							<div class="h-auto p-6 md:h-48">
								<p class="text-xs text-gray-600 md:text-sm">FOREST</p>
								<div class="text-xl font-bold text-gray-900">What is life but a teardrop in the eye of
									infinity?</div>
								<p class="mb-5 font-serif text-base text-gray-800">
									Mollis pretium integer eros et dui orci, lectus nec elit sagittis neque. Dignissim
									ac nullam semper aliquet volutpat, ut scelerisque.
								</p>
							</div>
							<div class="inset-x-0 bottom-0 flex items-center justify-between p-6">
								<img class="w-8 h-8 mr-4 rounded-full" src="http://i.pravatar.cc/300"
									alt="Avatar of Author">
								<p class="text-xs text-gray-600 md:text-sm">7 MIN READ</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>


	</div>


	<footer class="bg-gray-900">
		<div class="container flex items-center max-w-6xl px-2 py-8 mx-auto">

			<div class="flex flex-wrap items-center w-full mx-auto">
				<div class="flex justify-center w-full font-extrabold text-white md:w-1/2 md:justify-start">
					<a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="#">
						👻 <span class="text-base text-gray-200">Ghostwind CSS</span>
					</a>
				</div>
				<div class="flex content-center justify-between w-full pt-2 md:w-1/2 md:justify-end">
					<ul class="flex items-center justify-center flex-1 list-reset md:flex-none">
						<li>
							<a class="inline-block px-3 py-2 text-white no-underline" href="index.html">HOME</a>
						</li>
						<li>
							<a class="inline-block px-3 py-2 text-gray-600 no-underline hover:text-gray-200 hover:text-underline"
								href="#">link</a>
						</li>
						<li>
							<a class="inline-block px-3 py-2 text-gray-600 no-underline hover:text-gray-200 hover:text-underline"
								href="#">link</a>
						</li>
						<li>
							<a class="inline-block px-3 py-2 text-gray-600 no-underline hover:text-gray-200 hover:text-underline"
								href="#">link</a>
						</li>
					</ul>
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

		document.addEventListener('scroll', function () {

			/*Refresh scroll % width*/
			scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
			progress.style.setProperty('--scroll', scroll + '%');

			/*Apply classes for slide in bar*/
			scrollpos = window.scrollY;

			if (scrollpos > 100) {
				header.classList.remove("hidden");
				header.classList.remove("fadeOutUp");
				header.classList.add("slideInDown");
			} else {
				header.classList.remove("slideInDown");
				header.classList.add("fadeOutUp");
				header.classList.add("hidden");
			}

		});
	</script>

</body>

</html>