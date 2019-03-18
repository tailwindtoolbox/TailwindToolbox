<!--section-->
<div class="container mx-auto mb-16" id="html-templates">
		<div class="w-full px-0">
		
			<!--<a name="HTML"></a>
			<div class="bg-transparent rounded overflow-hidden mx-1 text-center pt-6">
			
			<h1 class="text-brand pt-12"><span class="bg-brand font-bold text-center text-white text-3xl sm:text-4xl md:text-5xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>HTML Starter Templates</span></span></h1>
			<p class="p-6 nunito text-grey-darkest">These templates are not finished articles, they are just a starting point skeleton template using the default Tailwind CSS styling (served via the CDN) - which you can turn into your own creation.</p>
-->		

			<div class="flex flex-wrap items-stretch mb-2 md:px-3">				
				
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
				<div class="w-full md:w-1/3 mb-12 pb-3 sm:pb-0" data-twcat="{{category}}">
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
							$category = $template['category'];
													

							$cardOutput = str_replace(
											array('{{url}}','{{url_image}}','{{title}}', '{{description}}', '{{download}}', '{{source}}', '{{category}}'),
											array($url,$url_image,$title,$description,$download,$source,$category),
											$card);
							
							echo $cardOutput;
						}
									
					?>

<div class="w-full mb-12 pb-3 sm:pb-0 flex-grow text-center">
<a href="https://www.tailwindtoolbox.com/starter-templates" class="bg-brand hover:bg-teal-dark no-underline text-white hover:text-white text-xl border-none rounded font-bold p-4">Show all templates</a>
</div>

                <!--Carbon-->
                <div class="w-full md:w-1/3 mb-12  pb-3 sm:pb-0 flex-grow">
                    <div class="bg-white rounded overflow-hidden shadow mx-5 sm:mx-2 hover:shadow-lg h-full">
                        <div class="p-5 text-center h-full items-center">
							<p class="py-4 text-brand font-bold">Advertisment</p>
                            <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
                        </div>
                    </div>
				</div>
				

			</div>




			</div>
		</div>
	</div>