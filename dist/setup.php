<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Toolbox - Setup Tailwind CSS starter template</title>
	<meta name="description" content="Step by step instructions to setup the Tailwind CSS starter template to use with node.js/npm, postcss+purgecss!">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template, setup tailwind, newbie guide, step by step, instructions">
	<?php include 'includes/head.php';?>
	
	<?php include 'includes/analytics.php';?>

</head>
<body class="bg-brand-white leading-normal tracking-normal nunito">

	<?php include 'includes/nav.php';?>

	<!--header-->
	<div class="h-64 md:h-half mt-6 bg-cover bg-right flex items-center" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">	
		<div class="flex-1 text-center">
			<span class="bg-brand font-bold text-center text-white text-3xl md:text-5xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;">Setting up Tailwind</span>
		</div>
	</div>

	<!--section-->
	<div class="container mx-auto mb-16" id="post-content">
		<div class="w-full -mt-12 md:-mt-32 px-0">
			<div class="flex flex-wrap bg-white rounded overflow-hidden shadow mx-1">
				<div class="w-full lg:w-1/5">
					<div class="p-6">
						<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
					</div>
				</div>
				<div class="w-full lg:w-3/5 p-3 sm:p-6 lg:p-8 text-grey-darker leading-normal text-base md:text-xl">
							
					<p class="text-xl md:text-2xl my-6 font-bold">It's pretty straight forward to <a href="https://tailwindcss.com/docs/installation" target="_blank" rel="noopener">setup Tailwind</a> and give it a test spin using the CDN version.  However, as mentioned on the Tailwind site, you need to setup Tailwind using npm in order to start customising Tailwind.</p>
					
					<p>This guide will help beginners get to grasp with: </p>
					
					 <div class="flex items-center pt-2">
						<svg class="flex-none m-2 h-6 fill-current text-brand" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM6.7 9.29L9 11.6l4.3-4.3 1.4 1.42L9 14.4l-3.7-3.7 1.4-1.42z" />
						</svg>
						<span class="flex-1 py-1 pl-3 m-1">Setting up <b>Node.js/npm</b> and Tailwind on their own local environment</span>
					</div>
					<div class="flex items-center">
						<svg class="flex-none m-2 h-6 fill-current text-brand" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM6.7 9.29L9 11.6l4.3-4.3 1.4 1.42L9 14.4l-3.7-3.7 1.4-1.42z" />
						</svg>
						<span class="flex-1 py-1 pl-3 m-1">Download the <a href="https://github.com/tailwindtoolbox/StarterTemplate/archive/master.zip" target="_blank" rel="noopener">Tailwind Starter Template</a> ready for development</span>
					</div>
					<div class="flex items-center">
						<svg class="flex-none m-2 h-6 fill-current text-brand" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM6.7 9.29L9 11.6l4.3-4.3 1.4 1.42L9 14.4l-3.7-3.7 1.4-1.42z" />
						</svg>
						<span class="flex-1 py-1 pl-3 m-1">Customise the <b>tailwind.config.js</b> and <b>tailwind.config.css</b> to create the tailwind.css for your project</span>
					</div>
					<div class="flex items-center">
						<svg class="flex-none m-2 h-6 fill-current text-brand" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM6.7 9.29L9 11.6l4.3-4.3 1.4 1.42L9 14.4l-3.7-3.7 1.4-1.42z" />
						</svg>
						<span class="flex-1 py-1 pl-3 m-1">Use <a href="https://github.com/FullHuman/purgecss" target="_blank" rel="noopener">purgecss</a>/<a href="https://github.com/cssnano/cssnano" target="_blank" rel="noopener">cssnano</a> to remove unused CSS and minify the final CSS file</span>
					</div>

					
					<p class="bg-teal-lightest text-sm p-2 mt-4 text-center">Huge thanks to <a href="https://flaviocopes.com/tailwind-setup/" target="_blank" rel="noopener">https://flaviocopes.com/tailwind-setup/</a> for the excellent setup guide which helped create the starter template.</p>

					<div class="py-4">

						
						
					</div>
					
					
					<h2 class="text-xl md:text-3xl text-brand pt-12 pb-4">Setup Node.js/npm</h2>
					<hr class="border border-grey-lighter">
					
					<p>Download and install Node.js/npm</p>
				
					<p class="my-6 pb-2"><a href="https://nodejs.org/en/download/" class="btn">
					<svg class="fill-current h-3 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z"/></svg> Download Node.js + npm</a></p>
					
					<p>Open your node command prompt/terminal and check if you have Node.js / npm installed:</p>

					<p><span class="code">node -v</span> and then <span class="code">npm -v</span></p>


					<div class="rounded-b overflow-hidden max-w-sm mt-4 mb-4">
						<div class="window-nav">
							<div class="text-right">
								<span class="window-nav-dot"></span> <span class="window-nav-dot"></span> <span class="window-nav-dot"></span>
							</div> 
						</div> 
						<div class="window-bg">
							<p class="text-grey">&gt;>node -v</p>
							<p>v8.12.0</p>
							<p class="text-grey">&gt;>npm -v</p>
							<p>6.4.1</p>
						</div>
					</div>
					
					
					
									
					<p class="leading-normal">Update your npm:</p>

					<p><span class="code">npm install -g npm</span></p>

					<div class="rounded-b overflow-hidden max-w-sm mt-4 mb-4">
						<div class="window-nav">
							<div class="text-right">
								<span class="window-nav-dot"></span> <span class="window-nav-dot"></span> <span class="window-nav-dot"></span>
							</div> 
						</div> 
						<div class="window-bg">
							<p class="text-grey">&gt;>npm install -g npm</p>
							<p>(some npm messages)<br>
							+ npm@6.4.1<br>
							added 387 packages from 770 contributors in 86.554s</p>
						</div>
					</div>

					<h2 class="text-xl md:text-3xl text-brand pt-12 pb-4">Tailwind-Starter Setup</h2>
					<hr class="border border-grey-lighter">
					
					<p>Create your 'project-name' folder and download the Tailwind-Starter zip file and extract the contents.</p>

					<p class="my-6 pb-2"><a href="https://github.com/tailwindtoolbox/StarterTemplate/archive/master.zip" class="btn">
					<svg class="fill-current h-3 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg> Download Tailwind-Starter (zip)</a></p>

					<p>Open package.json and then edit the follow section of the file to match your project</p>

					<p><div class="code text-sm">
					"name": "TailwindStarterTemplate",<br>
					"version": "1.0.0",<br>
					"description": "Tailwind Starter Template",<br>
					"license" : "MIT",<br>
					"repository": {<br>
					&nbsp;&nbsp;&nbsp;&nbsp;"type" : "git",<br>
					&nbsp;&nbsp;&nbsp;&nbsp;"url" : "https://github.com/tailwindtoolbox/StarterTemplate.git"<br>
					},
					</div></p>
					
					<p class="text-sm">Refer to <a href="https://docs.npmjs.com/files/package.json" target="_blank" rel="noopener">https://docs.npmjs.com/files/package.json</a> for guidance</p>
					
					<p>Open your node command prompt/terminal and navigate to your 'project-name' folder and create the `node_modules` directory</p>

					<p><span class="code">npm install</span> or <span class="code">npm update</span></p>

					<div class="rounded-b overflow-hidden max-w-sm mt-4 mb-4">
						<div class="window-nav">
							<div class="text-right">
								<span class="window-nav-dot"></span> <span class="window-nav-dot"></span> <span class="window-nav-dot"></span>
							</div>
						</div> 
						<div class="window-bg">
							<p class="text-grey">&gt;>npm update</p>
							<p>(some npm messages)<br>
							+ cssnano@4.1.7<br>
							+ postcss-cli@6.0.1<br>
							+ tailwindcss@0.7.3<br>
							+ autoprefixer@9.3.1<br>
							+ @fullhuman/postcss-purgecss@1.1.0<br>
							added 472 packages from 355 contributors and audited 4131 packages in 122.868s<br>
							found 0 vulnerabilities</p>
						</div>
					</div>
					
					<p>Create the initial css file</p>

					<p><span class="code">npm run dev:css</span></p>

					<div class="rounded-b overflow-hidden max-w-sm mt-4 mb-4">
						<div class="window-nav">
							<div class="text-right">
								<span class="window-nav-dot"></span> <span class="window-nav-dot"></span> <span class="window-nav-dot"></span>
							</div> 
						</div> 
						<div class="window-bg">
							<p class="text-grey">&gt;>npm run dev:css</p>
							<p>> TailwindStarterTemplate@1.0.0 dev:css C:\project-name<br>
							> tailwind build tailwind.config.css -c tailwind.config.js -o dist/css/tailwind.css<br>
							Building Tailwind!<br>
							Finished building Tailwind!</p>
						</div>
					</div>	

							
					<p>Start building your website using the starter template in the <span class="code">dist</span> folder.</p>

				
					<h2 class="text-xl md:text-3xl text-brand pt-12 pb-4">Customising Tailwind</h2>
					<hr class="border border-grey-lighter">

					<h3 class="text-base md:text-2xl pt-6 pb-3">Customise tailwind.config.js</h3>
					
					<p>To make changes to the configuration, go to your 'project-name' folder and open <span class="code">tailwind.config.js</span> and make amendments for your website (e.g. update the colour palette, fonts etc).</p>
					
					<p>Refer to the Tailwind documentation for more information: <a href="https://tailwindcss.com/docs/configuration" target="_blank" rel="noopener">Configure tailwind.js</a></p>
					
					<p class="text-sm font-bold">Example: Adding two new colour classes 'primary' and 'secondary'</p>
					<p><div class="code text-sm">
					let colors = {<br>
				   'transparent': 'transparent',<br><br>

				   <span class="text-red-dark">'primary': '#57a99a',<br>
				   'secondary': '#76dbd1',</span><br><br>			   
				   
				   'black': '#22292f',<br>
				   'grey-darkest': '#3d4852',<br>
				   'grey-darker': '#606f7b',<br>
				   ...
					</div></p>
					
					
					<h3 class="text-base md:text-2xl pt-6 pb-3">Customise tailwind.config.css</h3>			
									
					<p>As your development goes on and you start getting a lot of repetition of CSS classes, you can create your own utilities and components</p>
					
					<p>Refer to the Tailwind documentation for more information: <a href="https://tailwindcss.com/docs/adding-new-utilities" target="_blank" rel="noopener">Add new Utilities</a> and <a href="https://tailwindcss.com/docs/extracting-components" target="_blank" rel="noopener">Extract Components</a></p>
					
					<p class="text-sm font-bold pt-6">Example: Creating a component class for a button</p>
					
					<p><div class="code text-sm">
					<br>
					@tailwind components;<br><br>
					<span class="text-red-dark">
					.btn {<br>
					&nbsp;&nbsp;&nbsp;&nbsp;@apply bg-brand text-white text-sm border-none rounded font-bold p-3 mt-2;<br>
					}<br>
					.btn:hover {<br>
					&nbsp;&nbsp;&nbsp;&nbsp;@apply hover:bg-teal-dark<br>
					}</span><br>
					...
					</div></p>
					
					<p>This will allow you to setup a button using:<br>
					
					<span class="code text-sm">&lt;a href="#" class="btn"&gt;Click Me!&lt;/a&gt;</span> instead of<br>
					<span class="code text-sm">&lt;a href="#" class="bg-brand text-white text-sm border-none rounded font-bold p-3 mt-2"&gt;Click Me!&lt;/a&gt;</span>
					
			
					<h3 class="text-base md:text-2xl pt-12 pb-3">Updating tailwind.css for your project</h3>
					
					<p>After any changes to tailwind.config.js and tailwind.css, you <b>must</b> recreate the tailwind css file in order to get the updated classes/utilities for use in your project.</p>
					<p>Open your node command prompt/terminal run:</p>
					
					<p><span class="code">npm run dev:css</span></p>
					
					<div class="rounded-b overflow-hidden max-w-sm mt-4 mb-4">
						<div class="window-nav">
							<div class="text-right">
								<span class="window-nav-dot"></span> <span class="window-nav-dot"></span> <span class="window-nav-dot"></span>
							</div> 
						</div> 
						<div class="window-bg">
							<p class="text-grey">&gt;>npm run dev:css</p>
							<p>> TailwindStarterTemplate@1.0.0 dev:css C:\project-name<br>
							> tailwind build tailwind.config.css -c tailwind.config.js -o dist/css/tailwind.css<br>
							Building Tailwind!<br>
							Finished building Tailwind!</p>
						</div>
					</div>				
					
					<h2 class="text-xl md:text-3xl text-brand pt-12 pb-4">Create purged and minified css</h2>
					<hr class="border border-grey-lighter">
					
					<p>Once you have finalised your project you can build the final minified version (<span class="code">tailwind.min.css</span> in the <span class="code">/dist/css</span> folder) which will remove all of the classes which you have not used within your project.</p>
					<p>Open your node command prompt/terminal run:</p>
					
					<p><span class="code">npm run build:css</span></p>

					<div class="rounded-b overflow-hidden max-w-sm mt-4 mb-4">
						<div class="window-nav">
							<div class="text-right">
								<span class="window-nav-dot"></span> <span class="window-nav-dot"></span> <span class="window-nav-dot"></span>
							</div> 
						</div> 
						<div class="window-bg">
							<p class="text-grey">&gt;>npm run build:css</p>
							<p>> TailwindStarterTemplate@1.0.0 build:css C:\project-name<br>
							> postcss tailwind.config.css -o dist/css/tailwind.min.css</p>
						</div>
					</div>
					
					
				</div>
				<div class="w-full lg:w-1/5">
					
				</div>
			</div>
		</div>
	</div>

	<?php include 'includes/footer.php';?>

</body>
</html>