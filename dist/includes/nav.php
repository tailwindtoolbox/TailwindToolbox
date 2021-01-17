<nav id="header" class="bg-brand fixed w-full z-10 top-0 shadow ">
	<div class="w-full container mx-auto flex justify-between flex-wrap items-center mt-0 px-3 py-3">
		<!--Logo-->
		<div class="w-full md:w-1/2 pl-4 xl:pl-0 flex items-center justify-between">
			<a class="flex items-center font-extrabold text-white no-underline hover:text-white hover:no-underline" href="https://www.tailwindtoolbox.com">
				<svg class="inline fill-current text-white h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
					<path d="M7 3H2v14h5V3zm2 0v14h9V3H9zM0 3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm3 1h3v2H3V4zm0 3h3v2H3V7zm0 3h3v2H3v-2z"></path>
				</svg>
				<span class="text-3xl pl-4">Tailwind Toolbox</span>
			</a>
			<div class="flex justify-end md:hidden">
				<button class="p-2 outline:none" onclick="toggleSearch();" id="nav-toggle">
					<svg class="h-6 w-6 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						<path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
					</svg>
				</button>
			</div>
		</div>
		<!--/Logo-->

		<!--Search-->
		<div id="search-container" class="hidden pt-3 md:pt-0 md:block w-full md:w-1/2 max-w-md mx-auto md:ml-auto order-3">
			<div class="relative max-w-3xl mx-auto px-6">
				<div class="absolute h-10 mt-1 left-0 top-0 flex items-center pl-10">
					<svg class="h-4 w-4 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						<path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
					</svg>
				</div>
				<input id="search-toggle" type="search" placeholder="Enter search term ('/' to focus)" class="block w-full bg-brand-white focus:outline-none focus:bg-white focus:shadow text-gray-700 font-bold rounded-lg pl-12 pr-4 py-3" onkeyup="updateSearchResults(this.value);">
			</div>
		</div>
	</div>
	<!--End Search-->

	<!--Main Nav-->
	<div class="w-full bg-brand-white shadow-md scroll">
		<ul class="container mx-auto list-reset flex border-b text-base bounce-in-right">
			<li class="mr-1">
				<a href="https://www.tailwindtoolbox.com/starter-templates" class="my-2 py-2 no-underline hover:no-underline text-gray-700 hover:text-white flex items-center justify-center bg-transparent hover:bg-brand focus:border-teal-900 font-bold px-5 rounded">
					<svg class="h-6 w-6 fill-stroke" fill="none" viewBox=" 0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
					</svg>
					<span class="pl-2">Templates</span></a>
			</li>
			<li class="mr-1">
				<a href="https://www.tailwindtoolbox.com/starter-components" class="my-2 py-2 no-underline hover:no-underline text-gray-700 hover:text-white flex items-center justify-center bg-transparent hover:bg-brand focus:border-teal-900 font-bold px-5 rounded">
					<svg class="h-6 w-6 fill-stroke" fill="none" viewBox=" 0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
					</svg>
					<span class="pl-2">Components</span></a>
			</li>
			<li class="mr-1">
				<a href="https://www.tailwindtoolbox.com/kits" class="my-2 py-2 no-underline hover:no-underline text-gray-700 hover:text-white flex items-center justify-center bg-transparent hover:bg-brand focus:border-teal-900 font-bold px-5 rounded">
					<svg class="h-6 w-6 fill-stroke" fill="none" viewBox=" 0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
					</svg>
					<span class="pl-2">Kits</span></a>
			</li>
			<li class="mr-1">
				<a href="https://www.tailwindtoolbox.com/generators" class="my-2 py-2 no-underline hover:no-underline text-gray-700 hover:text-white flex items-center justify-center bg-transparent hover:bg-brand focus:border-teal-900 font-bold px-5 rounded">
					<svg class="h-6 w-6 fill-stroke" fill="none" viewBox=" 0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
					</svg>
					<span class="pl-2">Generators</span></a>
			</li>
			<li class="mr-1">
				<a href="https://www.tailwindtoolbox.com/tools" class="my-2 py-2 no-underline hover:no-underline text-gray-700 hover:text-white flex items-center justify-center bg-transparent hover:bg-brand focus:border-teal-900 font-bold px-5 rounded">
					<svg class="h-6 w-6 fill-stroke" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" />
						<path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
						<circle cx="12" cy="12" r="3" />
					</svg>
					<span class="pl-2">Tools</span></a>
			</li>
			<li class="mr-1">
				<a href="https://www.tailwindtoolbox.com/plugins" class="my-2 py-2 no-underline hover:no-underline text-gray-700 hover:text-white flex items-center justify-center bg-transparent hover:bg-brand focus:border-teal-900 font-bold px-5 rounded">
					<svg class="h-6 w-6 fill-stroke" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
					</svg>
					<span class="pl-2">Plugins</span></a>
			</li>
			<li class="mr-1">
				<a href="https://www.tailwindtoolbox.com/guides" class="my-2 py-2 no-underline hover:no-underline text-gray-700 hover:text-white flex items-center justify-center bg-transparent hover:bg-brand focus:border-teal-900 font-bold px-5 rounded">
					<svg class="h-6 w-6 fill-stroke" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
					</svg>
					<span class="pl-2">Guides</span></a>
			</li>
			<li class="flex flex-1 justify-end">
				<a href="https://www.tailwindtoolbox.com/submit" class="my-2 py-2 no-underline hover:no-underline hover:text-white flex items-center justify-center bg-brand hover:bg-teal-500 outline-none focus:border-teal-900 text-white font-extrabold px-5 rounded shadow">
					<svg class="inline fill-current text-teal-lightest h-4 pr-2 md:pr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z" />
					</svg>
					Suggest a resource</a>
			</li>
		</ul>
	</div>
	<!--/Main Nav-->

	<!--Search Content-->
	<div id="search-content" class="relative w-full z-50">
		<div id="searchresults" class="h-auto max-w-3xl mx-auto"></div>
		<!-- No search results message-->
		<div id="nosearchresults" class="hidden flex px-6 bg-white">
			<svg class="fill-current text-indigo-600 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
				<path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
			</svg>
			<span class="ml-4 font-bold"> Oops, no search results!!!1</span>
		</div>
		<!-- / No search results -->
	</div>
	<!--/Search Content-->

	</div>

</nav>