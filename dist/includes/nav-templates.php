<nav class="bg-brand mt-0 fixed w-full z-10 pin-t">
  <div class="container mx-auto flex flex-wrap items-center h-auto lg:h-16">
		<div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold pl-3">
			<a class="text-white no-underline hover:text-white hover:no-underline" href="https://www.tailwindtoolbox.com">
				<svg class="fill-current text-white h-6 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M7 3H2v14h5V3zm2 0v14h9V3H9zM0 3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm3 1h3v2H3V4zm0 3h3v2H3V7zm0 3h3v2H3v-2z"></path></svg> 
				<span class="text-3xl pl-2">Tailwind Toolbox</span>
			</a>
		</div>
		<div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
			<a href="https://www.tailwindtoolbox.com/setup" class="flex-1 md:flex-none navlink md:text-xl">
			<svg class="fill-current text-teal-lightest h-3 md:h-4 pr-2 md:pr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M3.94 6.5L2.22 3.64l1.42-1.42L6.5 3.94c.52-.3 1.1-.54 1.7-.7L9 0h2l.8 3.24c.6.16 1.18.4 1.7.7l2.86-1.72 1.42 1.42-1.72 2.86c.3.52.54 1.1.7 1.7L20 9v2l-3.24.8c-.16.6-.4 1.18-.7 1.7l1.72 2.86-1.42 1.42-2.86-1.72c-.52.3-1.1.54-1.7.7L11 20H9l-.8-3.24c-.6-.16-1.18-.4-1.7-.7l-2.86 1.72-1.42-1.42 1.72-2.86c-.3-.52-.54-1.1-.7-1.7L0 11V9l3.24-.8c.16-.6.4-1.18.7-1.7zM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path></svg> Setup</a>
			<a href="https://www.tailwindtoolbox.com/tools" class="flex-1 md:flex-none navlink md:text-xl">
			<svg class="fill-current text-teal-lightest h-3 md:h-4 pr-2 md:pr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6.47 9.8A5 5 0 0 1 .2 3.22l3.95 3.95 2.82-2.83L3.03.41a5 5 0 0 1 6.4 6.68l10 10-2.83 2.83L6.47 9.8z"/></svg> Tools</a>
			<a href="https://www.tailwindtoolbox.com/starter-templates" class="flex-1 md:flex-none navlink md:text-xl">
			<svg class="fill-current text-teal-lightest h-3 md:h-4 pr-2 md:pr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6 6V2c0-1.1.9-2 2-2h10a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-4v4a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8c0-1.1.9-2 2-2h4zm2 0h4a2 2 0 0 1 2 2v4h4V2H8v4zM2 8v10h10V8H2z"></path></svg> Templates</a>
		</div>
	</div>
	<div class="bg-brand-white shadow-md">
		<ul class="container mx-auto list-reset flex border-b">
			<li class="mr-1">
				<button class="tab -mb-px active-tab" onclick="javascript:filterTemplates('');" data-twfilter="all">All</button>
			</li>
			<li class="mr-1">
				<button class="tab -mb-px" onclick="javascript:filterTemplates('Home');" data-twfilter="Home">Homepage</button>
			</li>
			<li class="mr-1">
				<button class="tab -mb-px" onclick="javascript:filterTemplates('Blog');" data-twfilter="Blog">Blog</button>
			</li>
			<li class="mr-1">
				<button class="tab -mb-px" onclick="javascript:filterTemplates('Nav');" data-twfilter="Nav">Nav</button>
			</li>
			<li class="mr-1">
				<button class="tab -mb-px" onclick="javascript:filterTemplates('Admin');" data-twfilter="Admin">Admin</button>
			</li>
			<li class="mr-1">
				<button class="tab -mb-px" onclick="javascript:filterTemplates('Store');" data-twfilter="Store">Store</button>
			</li>
			<li class="mr-1">
				<button class="tab -mb-px" onclick="javascript:filterTemplates('Javascript');" data-twfilter="Javascript">Javascript</button>
			</li>
			<li class="mr-1">
				<button class="tab -mb-px" onclick="javascript:filterTemplates('CMS');" data-twfilter="CMS">CMS</button>
			</li>
		</ul>
	</div>
</nav>
		