<!--section-->
<div class="container mx-auto mb-16" id="html-templates">
		<div class="w-full px-5 md:px-0">
	
			<h2 class="font-bold text-xl md:text-3xl text-brand text-center pb-4 md:pb-8">Popular Templates</h2>

			<div class="flex flex-wrap items-stretch mb-2 md:px-3">				
				
				<!--Skeleton Template-->		
				<div class="w-full md:w-1/2 lg:w-1/3 mb-4 md:mb-12 pb-3 sm:pb-0" data-twcat="{{category}}">
					<a href="https://www.tailwindtoolbox.com/skeleton" class="no-underline hover:no-underline">
						<div class="bg-white rounded overflow-hidden shadow mx-1 sm:mx-2 hover:shadow-lg">
							<img src="skeleton.png" class="h-full w-full rounded shadow">
							<div class="p-2 lg:px-5 lg:pt-0 mb-2 text-center">
								<div class="font-bold text-xl pt-2 my-1">Skeleton Template</div>
								<div class="mx-auto border-t border-grey-light w-12 pt-2"></div>
								<p class="text-grey-darker text-sm mb-5 whitespace-normal">
									Simple skeleton/boilerplate template to copy/paste into your editor
								</p>

								<a href="https://www.tailwindtoolbox.com/skeleton" target="_blank" rel="noopener"><button class="block w-full bg-brand hover:bg-teal text-white text-sm border-none rounded font-bold fixed p-3 mt-2 relative pin-x pin-b"><svg class="inline fill-current h-3 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg> Download</button></a>
								
							</div>
						</div>
					</a>
				</div>

				<?php
				// Store Card template
				$card ='
				<!--{{title}} Template-->
				<div class="w-full md:w-1/2 lg:w-1/3 mb-4 md:mb-12 pb-3 sm:pb-0" data-twcat="{{category}}">
					<a href="{{url}}" class="no-underline hover:no-underline">
						<div class="bg-white rounded overflow-hidden shadow mx-1 sm:mx-2 hover:shadow-lg">
							<img src="{{url_image}}" class="h-full w-full rounded shadow">
							<div class="p-2 lg:px-5 lg:pt-0 mb-2 text-center">
								<div class="font-bold text-xl pt-2 my-1">{{title}}</div>
								<div class="mx-auto border-t border-grey-light w-12 pt-2"></div>
								<p class="text-grey-darker text-sm mb-5 whitespace-normal">
									{{description}}
								</p>

								<a href="{{url}}" target="_blank" rel="noopener"><button class="block w-full bg-brand hover:bg-teal text-white text-sm border-none rounded font-bold fixed p-3 mt-2 relative pin-x pin-b"><svg class="inline fill-current h-3 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg> Download</button></a>
								
							</div>
						</div>
					</a>
				</div>
				';

				// Read JSON file
				$json = file_get_contents("includes/html-home.json");
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
				

			</div>




			</div>
		</div>
	</div>