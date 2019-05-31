<!--section-->
<div class="container mx-auto mb-16 mt-6 md:-mt-12" id="html-templates">
		<div class="w-full px-5 md:px-0">
	
			<h2 class="font-bold text-xl md:text-3xl text-brand text-center pb-4 md:pb-8">Popular Templates</h2>

			<div class="flex flex-wrap items-stretch mb-2 md:px-3">				
				
				<?php
				// Store Card template
				$card ='
				<!--{{title}} Template-->
				<div class="w-1/2 lg:w-1/4 mb-4 md:mb-12 pb-3 sm:pb-0" data-twcat="{{category}}">
					<a href="{{url}}" class="no-underline hover:no-underline">
						<div class="bg-white rounded overflow-hidden shadow mx-1 sm:mx-2 hover:shadow-lg">
							<div class="relative">
								<img src="{{url_image}}" class="h-auto w-auto rounded-t shadow">
								{{new}}
							</div>
							<div class="p-2 lg:pt-2 lg:pt-0 text-center">
								<span class="font-bold text-sm sm:text-base pt-0 sm:pt-2 my-1">{{title}}</span>
							</div>
						</div>
					</a>
				</div>
				';

				// Store new indicator
				$newBadge = '<span class="ml-2 bg-brand-alt text-white text-sm border-none rounded font-bold p-1 absolute top-0 right-0">NEW!</span>';

				// Read JSON file
				$json = file_get_contents("includes/html-home.json");
				//Decode JSON
				$json_data = json_decode($json,true);

				//Print data
						foreach($json_data as $template)
						{
							$isHome = $template['home'];
							$isNew = $template['new'];

							if ($isHome) {
								$url = $template['url'];
								$url_image = $template['url_image'];
								$title = $template['title'];
								$description = $template['description'];
								$download = $template['download'];
								$source = $template['source'];
								$category = $template['category'];

								$cardOutput = str_replace(
												array('{{url}}','{{url_image}}','{{title}}', '{{description}}', '{{download}}', '{{source}}', '{{category}}', '{{new}}'),
												array($url,$url_image,$title,$description,$download,$source,$category,($isNew) ? $newBadge : ''),
												$card);
								
								echo $cardOutput;
							}
						}
									
					?>

				<div class="w-full my-10 pb-3 sm:pb-0 flex-grow text-center">
					<a href="https://www.tailwindtoolbox.com/starter-templates" class="bg-brand hover:bg-teal-dark no-underline text-white hover:text-white text-xl border-none rounded font-bold p-4">Show all templates</a>
				</div>
				

			</div>




			</div>
		</div>
	</div>