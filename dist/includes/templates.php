<!--section-->
<div class="container mx-auto mb-16" id="html-templates">
		<div class="w-full px-0">
		
			<!--<a name="HTML"></a>
			<div class="bg-transparent rounded overflow-hidden mx-1 text-center pt-6">
			
			<h1 class="text-brand pt-12"><span class="bg-brand font-bold text-center text-white text-3xl sm:text-4xl md:text-5xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>HTML Starter Templates</span></span></h1>
			<p class="p-6 nunito text-grey-darkest">These templates are not finished articles, they are just a starting point skeleton template using the default Tailwind CSS styling (served via the CDN) - which you can turn into your own creation.</p>
-->		
			<div id="filterMsg" class="w-full px-6 mb-2 text-brand text-center font-bold cursor-pointer" onclick="javascript:filterTemplates('');" data-twfilter="all"></div>
		

			<div class="flex flex-wrap items-stretch mb-2 md:px-3">				
				
				<?php
				// Store Card template
				$card ='
				<!--{{title}} Template-->
				<div class="w-full md:w-1/2 lg:w-1/3 mb-4 md:mb-12 pb-3 sm:pb-0" data-twcat="{{category}}">
					<a href="{{url}}" class="no-underline hover:no-underline">
						<div class="bg-white rounded overflow-hidden shadow mx-1 sm:mx-2 hover:shadow-lg">
							<img src="{{url_image}}" class="h-full w-full rounded shadow">
							<div class="p-2 lg:px-5 lg:pt-0 mb-2 text-center">
								<div class="font-bold text-xl my-1">{{title}}</div>
								<div class="mx-auto border-t border-grey-light w-12 pt-2"></div>
								<p class="text-grey-darker text-sm mb-5">
									{{description}}
								</p>

								<a href="{{url}}" target="_blank" rel="noopener"><button class="block w-full bg-brand hover:bg-teal text-white text-sm border-none rounded font-bold fixed p-3 mt-2 relative pin-x pin-b"><svg class="fill-current h-3 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg> Download</button></a>
								
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
							$category = $template['category'];
													

							$cardOutput = str_replace(
											array('{{url}}','{{url_image}}','{{title}}', '{{description}}', '{{download}}', '{{source}}', '{{category}}'),
											array($url,$url_image,$title,$description,$download,$source,$category),
											$card);
							
							echo $cardOutput;
						}
									
					?>


				
				<?php
				// Store Card template
				$card ='
				<!--{{title}} Template-->
				<div class="w-full md:w-1/2 lg:w-1/3 mb-4 md:mb-12 pb-3 sm:pb-0" data-twcat="{{category}}">
					<a href="{{url}}" class="no-underline hover:no-underline">
						<div class="bg-white rounded overflow-hidden shadow mx-1 sm:mx-2 hover:shadow-lg">
							<img src="{{url_image}}" class="h-full w-full rounded shadow">
							<div class="p-2 lg:px-5 lg:pt-0 mb-2 text-center">
								<div class="font-bold text-xl my-1">{{title}}</div>
								<div class="mx-auto border-t border-grey-light w-12 pt-2"></div>
								<p class="text-grey-darker text-sm mb-2">
									{{description}}
								</p>
								<p class="text-grey-darker text-sm mb-5"><a class="no-underline" href="{{url_author}}" target="_blank" rel="noopener"><span><svg class="h-2 fill-current text-teal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg></span> {{author}}</a></p>

								<a href="{{url}}" target="_blank" rel="noopener"><button class="template-btn"><svg class="fill-current h-3 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z"/></svg> Visit Template</button></a>
										
							</div>
						</div>
					</a>
				</div>
				';

				// Read JSON file
				$json = file_get_contents("includes/html-third-party.json");
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
							$category = $template['category'];

							$cardOutput = str_replace(
											array('{{url}}','{{url_image}}','{{title}}', '{{description}}', '{{url_author}}', '{{author}}', '{{category}}'),
											array($url,$url_image,$title,$description,$url_author,$author,$category),
											$card);
							
							echo $cardOutput;
						}
									
					?>




<!--
			</div>
			
			<div class="bg-transparent rounded overflow-hidden mx-1 text-center pt-24" id="JS">
			
				<h1 class="text-brand pt-12"><span class="bg-brand font-bold text-center text-white text-3xl sm:text-4xl md:text-5xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Javascript Framework Starter Templates</span></span></h1>

				<p class="p-6 nunito text-grey-darkest">These templates are from around the web for those of you who are more technical and use Javascript Frameworks.<br>
				All content is external to Tailwind Toolbox, so please read the licence terms before continuing!</p>
							

				<div class="flex flex-wrap mb-2 md:px-3">
-->
				<?php
				// Store Card template
				$card ='
				<!--{{title}} Template-->
				<div class="w-full md:w-1/2 lg:w-1/3 mb-4 md:mb-12 pb-3 sm:pb-0" data-twcat="{{category}}">
					<a href="{{url}}" class="no-underline hover:no-underline">
						<div class="bg-white rounded overflow-hidden shadow mx-1 sm:mx-2 hover:shadow-lg">
							<img src="{{url_image}}" class="h-full w-full rounded shadow">
							<div class="p-2 lg:px-5 lg:pt-0 mb-2 text-center">
								<div class="font-bold text-xl my-1">{{title}}</div>
								<div class="mx-auto border-t border-grey-light w-12 pt-2"></div>
								<p class="text-grey-darker text-sm mb-2">
									{{description}}
								</p>
								<p class="text-grey-darker text-sm mb-5"><a class="no-underline" href="{{url_author}}" target="_blank" rel="noopener"><span><svg class="h-2 fill-current text-teal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg></span> {{author}}</a></p>

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
							$category = $template['category'];

							$cardOutput = str_replace(
											array('{{url}}','{{url_image}}','{{title}}', '{{description}}', '{{url_author}}', '{{author}}', '{{category}}'),
											array($url,$url_image,$title,$description,$url_author,$author,$category),
											$card);
							
							echo $cardOutput;
						}
									
					?>
<!--
				</div>

			</div>

				
	
			<div class="bg-transparent rounded overflow-hidden mx-1 text-center pt-24" id="CMS">
			
				<h1 class="text-brand pt-12"><span class="bg-brand font-bold text-center text-white text-3xl sm:text-4xl md:text-5xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>CMS Framework Starter Templates</span></span></h1>

				<p class="p-6 nunito text-grey-darkest">These templates are from around the web for those of you who are using a CMS platform.<br>
				All content is external to Tailwind Toolbox, so please read the licence terms before continuing!</p>
							

				<div class="flex flex-wrap mb-2 md:px-3">
-->
				<?php
				// Store Card template
				$card ='
				<!--{{title}} Template-->
				<div class="w-full md:w-1/2 lg:w-1/3 mb-12 pb-3 sm:pb-0" data-twcat="{{category}}">
					<a href="{{url}}" class="no-underline hover:no-underline">
						<div class="bg-white rounded overflow-hidden shadow mx-1 sm:mx-2 hover:shadow-lg">
							<img src="{{url_image}}" class="h-full w-full rounded shadow">
							<div class="p-2 lg:px-5 lg:pt-0 mb-2 text-center">
								<div class="font-bold text-xl my-1">{{title}}</div>
								<div class="mx-auto border-t border-grey-light w-12 pt-2"></div>
								<p class="text-grey-darker text-sm mb-2">
									{{description}}
								</p>
								<p class="text-grey-darker text-sm mb-5"><a class="no-underline" href="{{url_author}}" target="_blank" rel="noopener"><span><svg class="h-2 fill-current text-teal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg></span> {{author}}</a></p>

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
							$category = $template['category'];

							$cardOutput = str_replace(
											array('{{url}}','{{url_image}}','{{title}}', '{{description}}', '{{url_author}}', '{{author}}', '{{category}}'),
											array($url,$url_image,$title,$description,$url_author,$author,$category),
											$card);
							
							echo $cardOutput;
						}
									
					?>
	
				</div>

			</div>




			</div>

		</div>
	</div>