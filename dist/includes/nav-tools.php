<nav id="header" class="bg-brand fixed w-full z-10 top-0 shadow ">

	<div class="w-full container mx-auto flex justify-between flex-wrap items-center mt-0 py-4">
	

		<!--Logo-->
		<div class="flex-1 pl-4 lg:pl-0">
			<a class="font-extrabold text-white no-underline hover:text-white hover:no-underline" href="https://www.tailwindtoolbox.com">
				<svg class="inline fill-current text-white h-4 md:h-6 mb-2 md:mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M7 3H2v14h5V3zm2 0v14h9V3H9zM0 3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm3 1h3v2H3V4zm0 3h3v2H3V7zm0 3h3v2H3v-2z"></path></svg> 
				<span class="text-xl lg:text-2xl xl:text-3xl pl-2">Tailwind Toolbox</span>
			</a>
		</div>
		<!--/Logo-->

	
		
		<!--Search-->
		<div class="flex-1 w-full max-w-md mx-auto order-3">
			
			<div class="relative max-w-3xl mx-auto px-6">
				<div class="absolute h-10 mt-1 left-0 top-0 flex items-center pl-10">
					<svg class="h-4 w-4 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/></svg>
				</div>
				<input id="search-toggle" type="search" placeholder="Enter search term ('/' to focus)" class="block w-full bg-brand-white focus:outline-none focus:bg-white focus:shadow text-gray-700 font-bold rounded-lg pl-12 pr-4 py-3" onkeyup="updateSearchResults(this.value);">

				</div>
			</div>

		</div>
		<!--End Search-->

		<!--Filters-->
		<div class="w-full bg-brand-white shadow-md scroll" >
			<ul class="container mx-auto list-reset flex border-b text-sm md:text-base">

				<li class="mr-1">
					<a href="https://www.tailwindtoolbox.com/setup"><button class="tab -mb-px">Setup</button></a>
				</li>
				<li class="mr-1">
					<a href="https://www.tailwindtoolbox.com/starter-templates"><button class="tab -mb-px">Templates</button></a>
				</li>
				<li class="mr-1">
					<a href="https://www.tailwindtoolbox.com/starter-components"><button class="tab -mb-px">Components</button></a>
				</li>
				<li class="mr-1">
				<a href="https://www.tailwindtoolbox.com/plugins"><button class="tab -mb-px">Plugins</button></a>
				</li>	
				<li class="mr-1 active-tab">
					<a href="https://www.tailwindtoolbox.com/tools"><button class="tab -mb-px">Tools</button></a>
				</li>

			</ul>
		</div>
		<!--/Filters-->

			
		<div id="search-content" class="relative w-full hidden z-50">
			<div id="searchresults" class="h-auto max-w-3xl mx-auto"></div>

			<!-- No search results message-->
			<div id="nosearchresults" class="hidden flex px-6 bg-white">
				<svg class="fill-current text-indigo-600 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/></svg>
				<span class="ml-4 font-bold"> Oops, no search results!!!1</span>
			</div>
			<!-- / No search results -->
		</div>


	</div>


	





</nav>

