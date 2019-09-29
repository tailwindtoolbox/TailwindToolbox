<nav id="header" class="bg-brand fixed w-full z-10 top-0 shadow ">
	<div class="w-full container mx-auto flex justify-between flex-wrap items-center mt-0 px-3 py-3">
		<!--Logo-->
		<div class="w-full md:w-1/2 pl-4 lg:pl-0 flex items-center justify-between">
				<a class="font-extrabold text-white no-underline hover:text-white hover:no-underline" href="https://www.tailwindtoolbox.com">
					<svg class="inline fill-current text-white h-6 mb-2 md:mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M7 3H2v14h5V3zm2 0v14h9V3H9zM0 3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm3 1h3v2H3V4zm0 3h3v2H3V7zm0 3h3v2H3v-2z"></path></svg> 
					<span class="text-2xl xl:text-3xl pl-2">Tailwind Toolbox</span>
				</a>
				<div class="flex justify-end block md:hidden">
					<button class="p-2 outline:none" onclick="toggleSearch();" id="nav-toggle">
						<svg class="h-6 w-6 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/></svg>
					</button>
				</div>
		</div>
		<!--/Logo-->

		<!--Search-->
		<div id="search-container" class="hidden pt-3 md:pt-0 md:block w-full md:w-1/2 max-w-md mx-auto md:ml-auto order-3">			
			<div class="relative max-w-3xl mx-auto px-6">
				<div class="absolute h-10 mt-1 left-0 top-0 flex items-center pl-10">
					<svg class="h-4 w-4 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/></svg>
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
					<a href="https://www.tailwindtoolbox.com/setup" class="<?php echo (strpos($_SERVER[REQUEST_URI], 'setup') !== false ? 'active-tab' : 'tab');?>">
					<svg class="inline fill-current text-teal-lightest h-4 pr-2 md:pr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2,1.99079514 C2,0.891309342 2.89706013,0 4.00585866,0 L14.9931545,0 C15.5492199,0 16,0.443864822 16,1 L16,2 L5.00247329,2 C4.44882258,2 4,2.44386482 4,3 C4,3.55228475 4.44994876,4 5.00684547,4 L16.9931545,4 C17.5492199,4 18,4.44463086 18,5.00087166 L18,18.0059397 C18,19.1072288 17.1054862,20 16.0059397,20 L3.99406028,20 C2.8927712,20 2,19.1017876 2,18.0092049 L2,1.99079514 Z M6,4 L10,4 L10,12 L8,10 L6,12 L6,4 Z"></path></svg>	
					Setup</a>
				</li>
				<li class="mr-1">
					<a href="https://www.tailwindtoolbox.com/starter-templates" class="<?php echo (strpos($_SERVER[REQUEST_URI], 'template') !== false ? 'active-tab' : 'tab');?>">
					<svg class="inline fill-current text-teal-lightest h-4 pr-2 md:pr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6 6V2c0-1.1.9-2 2-2h10a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-4v4a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8c0-1.1.9-2 2-2h4zm2 0h4a2 2 0 0 1 2 2v4h4V2H8v4zM2 8v10h10V8H2z"></path></svg>
					Templates</a>
				</li>
				<li class="mr-1">
					<a href="https://www.tailwindtoolbox.com/starter-components" class="<?php echo (strpos($_SERVER[REQUEST_URI], 'component') !== false ? 'active-tab' : 'tab');?>">
					<svg class="inline fill-current text-teal-lightest h-4 pr-2 md:pr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M3.94 6.5L2.22 3.64l1.42-1.42L6.5 3.94c.52-.3 1.1-.54 1.7-.7L9 0h2l.8 3.24c.6.16 1.18.4 1.7.7l2.86-1.72 1.42 1.42-1.72 2.86c.3.52.54 1.1.7 1.7L20 9v2l-3.24.8c-.16.6-.4 1.18-.7 1.7l1.72 2.86-1.42 1.42-2.86-1.72c-.52.3-1.1.54-1.7.7L11 20H9l-.8-3.24c-.6-.16-1.18-.4-1.7-.7l-2.86 1.72-1.42-1.42 1.72-2.86c-.3-.52-.54-1.1-.7-1.7L0 11V9l3.24-.8c.16-.6.4-1.18.7-1.7zM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path></svg>
					Components</a>
				</li>
				<li class="mr-1">
					<a href="https://www.tailwindtoolbox.com/plugins" class="<?php echo (strpos($_SERVER[REQUEST_URI], 'plugins') !== false ? 'active-tab' : 'tab');?>">
					<svg class="inline fill-current text-teal-lightest h-4 pr-2 md:pr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM7.88 7.88l-3.54 7.78 7.78-3.54 3.54-7.78-7.78 3.54zM10 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"></path></svg>
					Plugins</a>
				</li>	
				<li class="mr-1">
					<a href="https://www.tailwindtoolbox.com/tools" class="<?php echo (strpos($_SERVER[REQUEST_URI], 'tools') !== false ? 'active-tab' : 'tab');?>">
					<svg class="inline fill-current text-teal-lightest h-4 pr-2 md:pr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6.47 9.8A5 5 0 0 1 .2 3.22l3.95 3.95 2.82-2.83L3.03.41a5 5 0 0 1 6.4 6.68l10 10-2.83 2.83L6.47 9.8z"></path></svg>
					Tools</a>
				</li>

			</ul>
		</div>
		<!--/Main Nav-->

		<!--Search Content-->
		<div id="search-content" class="relative w-full z-50">
			<div id="searchresults" class="h-auto max-w-3xl mx-auto"></div>
			<!-- No search results message-->
			<div id="nosearchresults" class="hidden flex px-6 bg-white">
				<svg class="fill-current text-indigo-600 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/></svg>
				<span class="ml-4 font-bold"> Oops, no search results!!!1</span>
			</div>
			<!-- / No search results -->
		</div>
		<!--/Search Content-->

	</div>

</nav>

