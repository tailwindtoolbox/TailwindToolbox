
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Toolbox - Useful Tools and Utilities for Tailwind CSS</title>
	<meta name="description" content="Useful Tools and Utilities for Tailwind CSS to help you setup for your next project">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
	<?php include 'includes/head.php';?>
	
	<?php include 'includes/analytics.php';?>
		
</head>
<body class="bg-brand-white leading-normal tracking-normal nunito">

	<?php include 'includes/nav.php';?>

	<!--header-->
	<div class="h-64 md:h-half mt-6 bg-cover bg-right flex items-center" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">	
		<div class="flex-1 text-center">
			<span class="bg-brand font-bold text-center text-white text-3xl md:text-5xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;">Tailwind CSS Tools & Utilities</span>
		</div>
	</div>


	<div class="container mx-auto mb-8" id="post-content">
			<div class="w-full -mt-12 md:-mt-32 px-0">
				<div class="bg-white rounded overflow-hidden shadow mx-1">
					<div class="flex flex-wrap p-3 sm:p-6 lg:p-8 text-gray-800 leading-normal text-base md:text-xl">
							
						

						<div class="w-full lg:w-3/5 mx-auto">
							<p class="text-xl md:text-2xl my-6 font-bold">Some useful development tools and utilities to help you setup your IDE environment and become more familiar with Tailwind CSS.</p>
						</div>
		


						<div class="flex flex-wrap mx-auto pt-12 mb-2 md:px-3">

				
							<!--Atom Auto complete-->
							<div class="w-full md:w-1/3 mb-12 pb-3 sm:pb-0">
								<a href="https://github.com/vinkla/autocomplete-tailwind" class="no-underline hover:no-underline">
									<div class="card">
										<div class="p-5">
											<div class="flex justify-between content-center items-center">
												<span class="text-gray text-base">IDE</span>
												<svg role="img" class="h-6 fill-current text-brand" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Atom icon</title><path d="M20.496 9.026c-2.183-.93-5.116-1.53-8.25-1.695-.5-.03-.987-.04-1.45-.04 2.318-2.83 4.802-4.73 6.437-4.79.322-.013.595.055.813.196.706.458.905 1.768.545 3.59-.04.25.12.493.36.54.25.05.49-.11.54-.36.45-2.28.12-3.846-.94-4.538-.38-.248-.84-.365-1.35-.346-2.05.077-4.94 2.3-7.59 5.72-1.154.035-2.24.13-3.232.287-.646-2.897-.39-4.977.594-5.477.138-.073.285-.11.457-.124.697-.054 1.66.395 2.71 1.27.194.16.486.14.646-.06.163-.195.134-.48-.06-.645C9.466 1.51 8.304 1 7.354 1.07c-.286.025-.556.098-.803.22-1.19.607-1.67 2.327-1.37 4.838.07.52.16 1.062.29 1.62C2.19 8.404.1 9.718.01 11.372c-.06 1.17.865 2.284 2.68 3.222.224.115.502.03.62-.2.114-.224.03-.5-.2-.616C1.66 13.032.88 12.19.927 11.42c.05-1.08 1.772-2.19 4.76-2.78.27.994.62 2.032 1.05 3.09-1.018 1.888-1.756 3.747-2.137 5.4-.56 2.465-.26 4.22.86 4.948.36.234.78.35 1.247.35.935 0 2.067-.46 3.347-1.372.21-.15.256-.435.11-.64-.147-.206-.433-.256-.64-.106-1.544 1.103-2.844 1.472-3.562 1.003-.76-.495-.926-1.943-.46-3.976.32-1.386.907-2.93 1.708-4.52.2.438.41.876.63 1.313 1.425 2.796 3.17 5.227 4.91 6.845 1.386 1.29 2.674 1.963 3.735 1.963.35 0 .68-.075.976-.223 1.145-.585 1.64-2.21 1.398-4.575-.224-2.213-1.06-4.91-2.354-7.6-.11-.227-.384-.323-.61-.216-.23.11-.33.385-.22.612 2.69 5.602 2.88 10.19 1.37 10.96-1.59.813-5.424-2.355-8.39-8.18-.34-.655-.637-1.3-.9-1.93.34-.608.7-1.22 1.095-1.83.395-.604.806-1.188 1.224-1.745h.394c.54 0 1.126.01 1.734.048 6.53.343 10.975 2.56 10.884 4.334-.04.765-.924 1.538-2.425 2.12-.234.096-.352.36-.26.596.07.18.24.292.426.292.058 0 .114-.01.167-.03 1.905-.74 2.95-1.756 3.01-2.93.07-1.33-1.17-2.61-3.5-3.6v-.01zM8.08 9.45c-.27.415-.52.827-.764 1.244-.292-.768-.532-1.51-.723-2.215.713-.11 1.485-.19 2.31-.24-.28.39-.554.794-.82 1.21v-.01z"/><circle cx="12.005" cy="12" r="1.375"/></svg>
											</div>

											<p class="font-bold text-xl -mt-2">
												Atom Auto Complete
											</p>
											
											<p class="text-gray-800 text-base mb-2 pr-6">
												Tailwind CSS Autocompletion provider for Atom 
											</p>
											<p class="text-gray-800 text-xs mb-5"><a class="no-underline" href="https://github.com/vinkla" target="_blank" rel="noopener"><span><svg class="h-3 fill-current text-teal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg></span> Vincent Klaiber / @vinkla</a></p>

											<a href="https://github.com/vinkla/autocomplete-tailwind" target="_blank" rel="noopener"><button class="template-btn"><svg class="fill-current h-3 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z"/></svg> Visit</button></a>
													
										</div>
									</div>
								</a>
							</div>

							<!--VSC Intellisense-->
							<div class="w-full md:w-1/3 mb-12 pb-3 sm:pb-0">
								<a href="https://marketplace.visualstudio.com/items?itemName=bradlc.vscode-tailwindcss" class="no-underline hover:no-underline">
									<div class="card">
										<div class="p-5">
											<div class="flex justify-between content-center items-center">
												<span class="text-gray text-base">IDE</span>
												<svg role="img" class="h-6 fill-current text-brand" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Visual Studio Code icon</title><path d="M24 2.5v19L18 24 0 18.5v-.561l18 1.545V0zM1 13.111L4.385 10 1 6.889l1.418-.827L5.853 8.65 12 3l3 1.456v11.088L12 17l-6.147-5.65-3.434 2.589zM7.644 10L12 13.283V6.717z"/></svg>
											</div>

											<p class="font-bold text-xl -mt-2">
												Tailwind CSS IntelliSense
											</p>
											
											<p class="text-gray-800 text-base mb-2 pr-6">
												Tailwind CSS class name completion for VS Code
											</p>
											<p class="text-gray-800 text-xs mb-5"><a class="no-underline" href="https://github.com/bradlc" target="_blank" rel="noopener"><span><svg class="h-3 fill-current text-teal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg></span> Brad Cornes / @bradlc</a></p>

											<a href="https://marketplace.visualstudio.com/items?itemName=bradlc.vscode-tailwindcss" target="_blank" rel="noopener"><button class="template-btn"><svg class="fill-current h-3 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z"/></svg> Visit</button></a>
													
										</div>
									</div>
								</a>
							</div>

							<!--Sublime Autocomplete-->
							<div class="w-full md:w-1/3 mb-12 pb-3 sm:pb-0">
								<a href="https://packagecontrol.io/packages/TailwindCSSAutocomplete" class="no-underline hover:no-underline">
									<div class="card">
										<div class="p-5">
											<div class="flex justify-between content-center items-center">
												<span class="text-gray text-base">IDE</span>
												<svg role="img" class="h-6 fill-current text-brand" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Sublime Text icon</title><path d="M12 20.916h9.523c.598 0 1.094-.339 1.094-.75v-1.921c-.25.251-.646.408-1.094.408H2.479c-.445 0-.841-.157-1.095-.405v1.915c0 .413.49.75 1.095.75H12v.003z"/><path d="M12 22.369h10.443c.859 0 1.557-.516 1.557-1.148 0-.05-.008-.1-.016-.148l-1.605-17.01c-.051-.398-.355-.715-.695-.846L22.9 17.623v2.543c0 .569-.615 1.034-1.381 1.034H2.48c-.758 0-1.377-.469-1.377-1.034v-2.543L2.316 3.217c-.34.133-.645.45-.695.847L.015 21.068c-.012.051-.015.097-.015.15 0 .63.695 1.151 1.556 1.151H12z"/><path d="M21.383 2.965l-.029-.315c0-.021 0-.037-.004-.061l-.006-.07c-.061-.504-.475-.89-1.082-.89H3.735c-.604 0-1.016.384-1.08.885l-.003.076-.003.06-.03.314-1.23 14.661c0 .412.489.75 1.092.75h19.045c.602 0 1.09-.338 1.094-.75l-1.237-14.66zm-5.686 9.306c-.266.698-.878 1.196-1.545 1.5-.725.333-1.535.462-2.332.474-.844.012-1.695-.075-2.517-.27-.416-.094-.847-.207-1.241-.379-.354-.155-.645-.506-.637-.904.008-.404.299-.741.669-.888.387-.154.759-.09 1.137.045.84.29 1.731.411 2.619.381.505-.015 1.39-.285 1.248-1.067-.03-.173-.169-.416-.345-.58-.138-.137-.428-.271-.615-.32-.414-.113-.84-.198-1.26-.289-.846-.186-1.297-.326-2.047-.781-.661-.394-.803-.648-.905-1.24-.133-.775.246-1.389.87-1.859 1.395-1.06 2.732-1.023 4.381-.721.404.075.889.143 1.244.359.35.211.546.637.395 1.033-.141.375-.498.432-.885.39-.416-.044-.586-.154-.979-.228-.822-.15-1.125-.276-1.916-.051-.314.09-.74.389-.58.782.135.325.631.431.927.511.813.217 1.448.467 2.257.705.759.221 1.334.641 1.807 1.309.421.596.511 1.416.256 2.095l-.004-.005-.002-.002z"/></svg>
											</div>

											<p class="font-bold text-xl -mt-2">
												Tailwind ​CSS Autocomplete
											</p>
											
											<p class="text-gray-800 text-base mb-2 pr-6">
												Tailwind CSS class name completion for Sublime Text
											</p>
											<p class="text-gray-800 text-xs mb-5"><a class="no-underline" href="https://github.com/bradlc" target="_blank" rel="noopener"><span><svg class="h-3 fill-current text-teal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg></span> Brad Cornes / @bradlc</a></p>

											<a href="https://packagecontrol.io/packages/TailwindCSSAutocomplete" target="_blank" rel="noopener"><button class="template-btn"><svg class="fill-current h-3 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z"/></svg> Visit</button></a>
													
										</div>
									</div>
								</a>
							</div>

							<!--Cheat sheet-->
							<div class="w-full md:w-1/3 mb-12 pb-3 sm:pb-0">
								<a href="https://nerdcave.com/tailwind-cheat-sheet" class="no-underline hover:no-underline">
									<div class="card">
										<div class="p-5">
											<div class="flex justify-between content-center items-center">
												<span class="text-gray text-base">DOCS</span>
												<svg role="img" class="h-6 fill-current text-brand" viewBox="0 0 20 20"><path d="M6 4H5a1 1 0 1 1 0-2h11V1a1 1 0 0 0-1-1H4a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V5a1 1 0 0 0-1-1h-7v8l-2-2-2 2V4z"/></svg>
											</div>

											<p class="font-bold text-xl -mt-2">
												Tailwind CSS Cheat Sheet
											</p>
											
											<p class="text-gray-800 text-base mb-2">
												Cheat sheet to search the Tailwind CSS utility classes and CSS properties
											</p>
											<p class="text-gray-800 text-xs mb-5"><a class="no-underline" href="https://github.com/nerdcave" target="_blank" rel="noopener"><span><svg class="h-3 fill-current text-teal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg></span> Jay Elaraj / @nerdcafe</a></p>

											<a href="https://nerdcave.com/tailwind-cheat-sheet" target="_blank" rel="noopener"><button class="template-btn"><svg class="fill-current h-3 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z"/></svg> Visit</button></a>
													
										</div>
									</div>
								</a>
							</div>

							<!--Refactor CSS-->
							<div class="w-full md:w-1/3 mb-12 pb-3 sm:pb-0">
								<a href="https://github.com/urbantrout/refactor-css" class="no-underline hover:no-underline">
									<div class="card">
										<div class="p-5">
											<div class="flex justify-between content-center items-center">
												<span class="text-gray text-base">CODE</span>
												<svg role="img" class="h-6 fill-current text-brand" viewBox="0 0 20 20"><path d="M0.707106781,10.7071068 L-2.00988464e-13,10 L5.48528137,4.51471863 L6.89949494,5.92893219 L2.82842712,10 L6.89949494,14.0710678 L5.48528137,15.4852814 L0.707106781,10.7071068 Z M19.2928932,10.7071068 L20,10 L14.5147186,4.51471863 L13.1005051,5.92893219 L17.1715729,10 L13.1005051,14.0710678 L14.5147186,15.4852814 L19.2928932,10.7071068 Z"/></svg>
											</div>

											<p class="font-bold text-xl -mt-2">
												Refactor CSS
											</p>
											
											<p class="text-gray-800 text-base mb-2">
												Helps you identify reoccurring CSS class name combinations in your markup.
											</p>
											<p class="text-gray-800 text-xs mb-5"><a class="no-underline" href="https://github.com/urbantrout" target="_blank" rel="noopener"><span><svg class="h-3 fill-current text-teal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg></span> Harald Atteneder / @urbantrout</a></p>

											<a href="https://github.com/urbantrout/refactor-css" target="_blank" rel="noopener"><button class="template-btn"><svg class="fill-current h-3 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z"/></svg> Visit</button></a>
													
										</div>
									</div>
								</a>
							</div>
							
							<!--Sketch Tailwind-->
							<div class="w-full md:w-1/3 mb-12 pb-3 sm:pb-0">
								<a href="https://github.com/jan-dh/sketch-tailwind" class="no-underline hover:no-underline">
									<div class="card">
										<div class="p-5">
											<div class="flex justify-between content-center items-center">
												<span class="text-gray text-base">SKETCH</span>
												<svg role="img" class="h-6 fill-current text-brand" viewBox="0 0 20 20"><path d="M0.707106781,10.7071068 L-2.00988464e-13,10 L5.48528137,4.51471863 L6.89949494,5.92893219 L2.82842712,10 L6.89949494,14.0710678 L5.48528137,15.4852814 L0.707106781,10.7071068 Z M19.2928932,10.7071068 L20,10 L14.5147186,4.51471863 L13.1005051,5.92893219 L17.1715729,10 L13.1005051,14.0710678 L14.5147186,15.4852814 L19.2928932,10.7071068 Z"/></svg>
											</div>

											<p class="font-bold text-xl -mt-2">
												Sketch Tailwind
											</p>
											
											<p class="text-gray-800 text-base mb-2">
												 Export aspects of a design made in Sketch into Tailwind CSS ready javascript files.
											</p>
											<p class="text-gray-800 text-xs mb-5"><a class="no-underline" href="https://github.com/jan-dh" target="_blank" rel="noopener"><span><svg class="h-3 fill-current text-teal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg></span> Jan DH / @jan-dh</a></p>

											<a href="https://github.com/jan-dh/sketch-tailwind" target="_blank" rel="noopener"><button class="template-btn"><svg class="fill-current h-3 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z"/></svg> Visit</button></a>
													
										</div>
									</div>
								</a>
							</div>

							<!--Carbon Ad-->
							<div class="w-full md:w-1/3 mb-12 pb-3 sm:pb-0">
								<div class="card">
									<div class="p-5 text-center h-full items-center">
										<p class="py-4 text-brand font-bold">Advertisment</p>
										<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
									</div>
								</div>
							</div>


						</div>


						
					</div>


					<p class="my-8 p-6 w-full container mx-auto text-center text-gray-dark">If you have any useful tools or extensions which will make your Tailwind CSS experience better, please drop us a tweet: <a class="font-extrabold text-teal-dark hover:text-teal-darkest" href="https://www.twitter.com/tailwindtoolbox" target="_blank" rel="noopener">@TailwindToolbox</a></p>	
					

				</div>
			</div>
		</div>

		


	<?php include 'includes/footer.php';?>

</body>
</html>
