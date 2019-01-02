<!--section-->
<div class="container mx-auto mb-16" id="html-templates">
		<div class="w-full px-0">
			<a name="HTML"></a>
			<div class="bg-transparent rounded overflow-hidden mx-1 text-center pt-12">
			
			<h1 class="text-brand pt-12"><span class="bg-brand font-bold text-center text-white text-3xl sm:text-4xl md:text-5xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>HTML Starter Templates</span></span></h1>
			<p class="p-6 nunito text-grey-darkest">These templates are not finished articles, they are just a starting point skeleton template using the default Tailwind CSS styling (served via the CDN) - which you can turn into your own creation.</p>
						

			<div class="flex flex-wrap mb-2 md:px-3">				
				
				<!--Skeleton Template-->
				<div class="w-full md:w-1/3 mb-12  pb-3 sm:pb-0">
					<a href="https://www.tailwindtoolbox.com/skeleton" class="no-underline hover:no-underline">
						<div class="bg-white rounded overflow-hidden shadow mx-5 sm:mx-2 hover:shadow-lg">
							<div class="p-5 text-center">
								<img src="skeleton.png" class="h-full w-4/5 md:w-full rounded shadow">
								<div class="font-bold text-xl my-3">Skeleton Template</div>
								<p class="text-grey-darker text-base mb-5">
									Simple skeleton/boilerplate template to copy/paste into your editor
								</p>
								<div>
									<a href="https://www.tailwindtoolbox.com/skeleton"><button class="block w-full bg-brand hover:bg-teal text-white text-sm border-none rounded font-bold fixed p-3 mt-2 relative pin-x pin-b"><svg class="fill-current h-3 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg> Download</button></a>
								</div>
								
							</div>
						</div>
					</a>
				</div>
				

				<?php
				// Store Card template
				$card ='
				<!--{{title}} Template-->
				<div class="w-full md:w-1/3 mb-12 pb-3 sm:pb-0">
					<a href="{{url}}" class="no-underline hover:no-underline">
						<div class="bg-white rounded overflow-hidden shadow mx-5 sm:mx-2 hover:shadow-lg">
							<div class="p-5 text-center">
								<img src="{{url_image}}" class="h-full w-3/5 md:w-full rounded shadow">
								<div class="font-bold text-xl my-3">{{title}}</div>
								<p class="text-grey-darker text-base mb-5">
									{{description}}
								</p>

								<a href="{{download}}" target="_blank" rel="noopener"><button class="block w-full bg-brand hover:bg-teal text-white text-sm border-none rounded font-bold fixed p-3 mt-2 relative pin-x pin-b"><svg class="fill-current h-3 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg> Download</button></a>
								<div class="flex flex-wrap justify-between">
									<a href="{{url}}" class="no-underline hover:no-underline"><button class="bg-white hover:bg-teal text-brand hover:text-white text-sm border border-grey-light rounded font-bold fixed p-3 mt-2 relative pin-x pin-b">Preview</button></a>
									<a href="{{source}}" target="_blank" rel="noopener"><button class="flex-1 bg-grey-lightest hover:bg-black text-grey-darkest hover:text-white text-sm border border-grey-light rounded font-bold fixed p-3 mt-2 relative pin-x pin-b">Source</button></a>
								</div>
								
							</div>
						</div>
					</a>
				</div>
				';

				// Read JSON file
				$json = file_get_contents("includes/html.json");
				//Decode JSON
				$json_data = json_decode($json,true);

				//Print data
						foreach($json_data as $template)
						{
							$url = $template['url'];
							$url_image = $template['url_image'];
							$title = $template['title'];
							$description = $template['description'];
							$download = $template['download'];
							$source = $template['source'];

							$cardOutput = str_replace(
											array('{{url}}','{{url_image}}','{{title}}', '{{description}}', '{{download}}', '{{source}}'),
											array($url,$url_image,$title,$description,$download,$source),
											$card);
							
							echo $cardOutput;
						}
									
					?>



                <!--Carbon-->
                <div class="w-full md:w-1/3 mb-12  pb-3 sm:pb-0">
                    <div class="bg-white rounded overflow-hidden shadow mx-5 sm:mx-2 hover:shadow-lg">
                        <div class="p-5 text-center">
                            <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
                        </div>
                    </div>
				</div>
				
			</div>
			

			<!--JAVASCRIPT-->
			<div class="bg-transparent rounded overflow-hidden mx-1 text-center pt-24" id="JS">
			
				<h1 class="text-brand pt-12"><span class="bg-brand font-bold text-center text-white text-3xl sm:text-4xl md:text-5xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Javascript Framework Starter Templates</span></span></h1>

				<p class="p-6 nunito text-grey-darkest">These templates are from around the web for those of you who are more technical and use Javascript Frameworks.<br>
				All content is external to Tailwind Toolbox, so please read the licence terms before continuing!</p>
							

				<div class="flex flex-wrap mb-2 md:px-3">

				<?php
				// Store Card template
				$card ='
				<!--{{title}} Template-->
				<div class="w-full md:w-1/3 mb-12 pb-3 sm:pb-0">
					<a href="{{url}}" class="no-underline hover:no-underline">
						<div class="card">
							<div class="p-5 text-center">
								<img src="{{url_image}}" class="h-full w-3/5 md:w-full rounded shadow">
								<div class="font-bold text-xl mt-3 mb-1">{{title}}</div>
								
								<p class="text-grey-darker text-base mb-2">
									{{description}}
								</p>
								<p class="text-grey-darker text-base mb-5"><a class="no-underline" href="{{url_author}}" target="_blank" rel="noopener"><span><svg class="h-4 fill-current text-teal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg></span> {{author}}</a></p>

								<a href="{{url}}" target="_blank" rel="noopener"><button class="template-btn"><svg class="fill-current h-3 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z"/></svg> Visit Template</button></a>
										
							</div>
						</div>
					</a>
				</div>
				';

				// Read JSON file
				$json = file_get_contents("includes/js.json");
				//Decode JSON
				$json_data = json_decode($json,true);

				//Print data
						foreach($json_data as $template)
						{
							$url = $template['url'];
							$url_image = $template['url_image'];
							$title = $template['title'];
							$description = $template['description'];
							$url_author = $template['url_author'];
							$author = $template['author'];

							$cardOutput = str_replace(
											array('{{url}}','{{url_image}}','{{title}}', '{{description}}', '{{url_author}}', '{{author}}'),
											array($url,$url_image,$title,$description,$url_author,$author),
											$card);
							
							echo $cardOutput;
						}
									
					?>

	                <!--Makerads-->
					<div class="w-full md:w-1/3 mb-12 h-auto pb-3 sm:pb-0">
						<div class="bg-white rounded overflow-hidden shadow mx-5 sm:mx-2 hover:shadow-lg">
							<div class="p-5 text-center">
							<iframe
								style="border:0;width:320px;height:144px;"
								src="https://makerads.xyz/ad"
								></iframe>
							</div>
						</div>
					</div>

				</div>

			</div>

				
			<!--CMS-->
			<div class="bg-transparent rounded overflow-hidden mx-1 text-center pt-24" id="CMS">
			
				<h1 class="text-brand pt-12"><span class="bg-brand font-bold text-center text-white text-3xl sm:text-4xl md:text-5xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>CMS Framework Starter Templates</span></span></h1>

				<p class="p-6 nunito text-grey-darkest">These templates are from around the web for those of you who are using a CMS platform.<br>
				All content is external to Tailwind Toolbox, so please read the licence terms before continuing!</p>
							

				<div class="flex flex-wrap mb-2 md:px-3">

				<?php
				// Store Card template
				$card ='
				<!--{{title}} Template-->
				<div class="w-full md:w-1/3 mb-12 pb-3 sm:pb-0">
					<a href="{{url}}" class="no-underline hover:no-underline">
						<div class="card">
							<div class="p-5 text-center">
								<img src="{{url_image}}" class="h-full w-3/5 md:w-full rounded shadow">
								<div class="font-bold text-xl mt-3 mb-1">{{title}}</div>
								
								<p class="text-grey-darker text-base mb-2">
									{{description}}
								</p>
								<p class="text-grey-darker text-base mb-5"><a class="no-underline" href="{{url_author}}" target="_blank" rel="noopener"><span><svg class="h-4 fill-current text-teal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg></span> {{author}}</a></p>

								<a href="{{url}}" target="_blank" rel="noopener"><button class="template-btn"><svg class="fill-current h-3 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z"/></svg> Visit Template</button></a>
										
							</div>
						</div>
					</a>
				</div>
				';

				// Read JSON file
				$json = file_get_contents("includes/cms.json");
				//Decode JSON
				$json_data = json_decode($json,true);

				//Print data
						foreach($json_data as $template)
						{
							$url = $template['url'];
							$url_image = $template['url_image'];
							$title = $template['title'];
							$description = $template['description'];
							$url_author = $template['url_author'];
							$author = $template['author'];

							$cardOutput = str_replace(
											array('{{url}}','{{url_image}}','{{title}}', '{{description}}', '{{url_author}}', '{{author}}'),
											array($url,$url_image,$title,$description,$url_author,$author),
											$card);
							
							echo $cardOutput;
						}
									
					?>
	
				</div>

			</div>




			</div>
		</div>
	</div>