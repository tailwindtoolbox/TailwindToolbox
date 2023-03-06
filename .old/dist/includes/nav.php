<nav id="header" class="fixed top-0 z-10 w-full shadow bg-brand" style="background-image: linear-gradient(120deg, #3b7977 0%, #72b1bb 100%);">
	<div class="container flex flex-wrap items-center justify-between w-full px-3 py-3 mx-auto mt-0">
		<!--Logo-->
		<div class="flex items-center justify-between w-full pl-2 md:w-1/2 xl:pl-0">
			<a class="flex items-center font-extrabold text-white no-underline hover:text-white hover:no-underline" href="https://www.tailwindtoolbox.com">
				<svg class="inline h-6 text-white fill-current md:h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
					<path d="M7 3H2v14h5V3zm2 0v14h9V3H9zM0 3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm3 1h3v2H3V4zm0 3h3v2H3V7zm0 3h3v2H3v-2z"></path>
				</svg>
				<span class="pl-4 text-2xl md:text-3xl">Tailwind Toolbox</span>
			</a>
			<div class="flex justify-end md:hidden">
				<button class="p-2 outline:none" onclick="toggleSearch();" id="nav-toggle">
					<svg class="w-6 h-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						<path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
					</svg>
				</button>
			</div>
		</div>
		<!--/Logo-->

		<!--Search-->
		<div id="search-container" class="order-3 hidden w-full max-w-md pt-3 mx-auto md:pt-0 md:block md:w-1/2 md:ml-auto">
			<div class="relative max-w-3xl px-6 mx-auto">
				<div class="absolute top-0 left-0 flex items-center h-10 pl-10 mt-1">
					<svg class="w-4 h-4 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						<path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
					</svg>
				</div>
				<input id="search-toggle" type="search" placeholder="Enter search term ('/' to focus)" class="block w-full py-3 pl-12 pr-4 font-bold text-gray-700 rounded-lg bg-brand-white focus:outline-none focus:bg-white focus:shadow" onkeyup="updateSearchResults(this.value);">
			</div>
		</div>
	</div>
	<!--End Search-->

	<!--Main Nav-->
	<div class="w-full shadow-md bg-brand-white scroll">
		<ul class="container flex mx-auto text-base border-b list-reset bounce-in-right">
			<li class="mr-1">
				<a href="https://www.tailwindtoolbox.com/starter-templates" class="flex items-center justify-center px-5 py-2 my-2 font-bold text-gray-700 no-underline bg-transparent rounded hover:no-underline hover:text-white hover:bg-brand focus:border-teal-900">
					<svg class="w-6 h-6 fill-stroke" fill="none" viewBox=" 0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
					</svg>
					<span class="pl-2">Templates</span></a>
			</li>
			<li class="mr-1">
				<a href="https://www.tailwindtoolbox.com/starter-components" class="flex items-center justify-center px-5 py-2 my-2 font-bold text-gray-700 no-underline bg-transparent rounded hover:no-underline hover:text-white hover:bg-brand focus:border-teal-900">
					<svg class="w-6 h-6 fill-stroke" fill="none" viewBox=" 0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
					</svg>
					<span class="pl-2">Components</span></a>
			</li>
			<li class="mr-1">
				<a href="https://www.tailwindtoolbox.com/kits" class="flex items-center justify-center px-5 py-2 my-2 font-bold text-gray-700 no-underline bg-transparent rounded hover:no-underline hover:text-white hover:bg-brand focus:border-teal-900">
					<svg class="w-6 h-6 fill-stroke" fill="none" viewBox=" 0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
					</svg>
					<span class="pl-2">Kits</span></a>
			</li>
			<li class="mr-1">
				<a href="https://www.tailwindtoolbox.com/generators" class="flex items-center justify-center px-5 py-2 my-2 font-bold text-gray-700 no-underline bg-transparent rounded hover:no-underline hover:text-white hover:bg-brand focus:border-teal-900">
					<svg class="w-6 h-6 fill-stroke" fill="none" viewBox=" 0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
					</svg>
					<span class="pl-2">Generators</span></a>
			</li>
			<li class="mr-1">
				<a href="https://www.tailwindtoolbox.com/marketplace" class="flex items-center justify-center px-5 py-2 my-2 font-bold text-gray-700 no-underline bg-transparent rounded hover:no-underline hover:text-white hover:bg-brand focus:border-teal-900">
					<svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<circle cx="9" cy="21" r="1" />
						<circle cx="20" cy="21" r="1" />
						<path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
					</svg>
					<span class="pl-2">Marketplace</span></a>
			</li>
			<li class="mr-1">
				<a href="https://www.tailwindtoolbox.com/guides" class="flex items-center justify-center px-5 py-2 my-2 font-bold text-gray-700 no-underline bg-transparent rounded hover:no-underline hover:text-white hover:bg-brand focus:border-teal-900">
					<svg class="w-6 h-6 fill-stroke" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
					</svg>
					<span class="pl-2">Guides</span></a>
			</li>
			<li class="mr-1">
				<a href="https://www.tailwindtoolbox.com/tools" class="flex items-center justify-center px-5 py-2 my-2 font-bold text-gray-700 no-underline bg-transparent rounded hover:no-underline hover:text-white hover:bg-brand focus:border-teal-900">
					<svg class="w-6 h-6 fill-stroke" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" />
						<path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
						<circle cx="12" cy="12" r="3" />
					</svg>
					<span class="pl-2">Tools</span></a>
			</li>
			<li class="mr-1">
				<a href="https://www.tailwindtoolbox.com/plugins" class="flex items-center justify-center px-5 py-2 my-2 font-bold text-gray-700 no-underline bg-transparent rounded hover:no-underline hover:text-white hover:bg-brand focus:border-teal-900">
					<svg class="w-6 h-6 fill-stroke" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
					</svg>
					<span class="pl-2">Plugins</span></a>
			</li>

		</ul>
	</div>
	<!--/Main Nav-->

	<!--Search Content-->
	<div id="search-content" class="relative z-50 w-full">
		<div id="searchresults" class="h-auto max-w-3xl mx-auto"></div>
		<!-- No search results message-->
		<div id="nosearchresults" class="flex hidden px-6 bg-white">
			<svg class="w-6 h-6 text-indigo-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
				<path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
			</svg>
			<span class="ml-4 font-bold"> Oops, no search results!!!1</span>
		</div>
		<!-- / No search results -->
	</div>
	<!--/Search Content-->

	</div>

</nav>