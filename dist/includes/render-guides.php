<!--section-->
<div class="container mx-auto mb-16 mt-0">
	<div class="w-full px-1 md:px-0">
				
		<div id="filterMsg" class="w-full mb-4 bg-teal-200 border-brand leading-loose text-brand text-center font-bold cursor-pointer" onclick="javascript:filterTemplates('');" data-twfilter="all"></div>

			<div class="flex flex-wrap mb-2 md:px-3">		

				<?php
				// Store Card template
				$card ='
				<!--{{title}} Template-->
				<div class="mx-auto md:ml-0 w-11/12 md:w-full mx-2 max-w-xl">
					
						<div class="card tab w-full overflow-hidden border-t mb-4 p-5 leading-normal flex">
						
							<div class="flex-0">
								<a href="{{url}}">
									<img src="../placeholder.png" class="object-cover mr-4 rounded shadow" style="width:75px; height:75px;">
								</a>
								
							</div>
	
							<div class="w-full flex-1">
								<a href="{{url}}" class="block no-underline hover:underline">
									<span class="card-title text-brand font-bold">{{title}}</span></a>
									<p class="text-gray-500 text-sm">{{description}}</p>
								</a>
								<a class="no-underline text-xs" href="{{url_author}}" target="_blank" rel="noopener"><svg class="inline h-2 pr-2 fill-current text-teal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"></path></svg>Tailwind Toolbox</a>
							</div>
					
						</div>
					
				</div>

				';


				

				// Store new indicator
				$newBadge = '<span class="new-badge">NEW!</span>';

				// Read JSON file
				$json = file_get_contents("../includes/data.json");
				//Decode JSON
				$json_data = json_decode($json,true);

				if ($show_section === 'Plugin') {
					//Sort Alpha
					usort($json_data,function($a,$b) {return strnatcasecmp($a['title'],$b['title']);});
				}


				//Print data
						foreach($json_data as $template)
						{

							$isHome = $template['home'];
							$isNew = $template['new'];
						
							$site_section = $template['site_section'];
							$url = $template['url'];
							$url_image = $template['url_image'];
							$title = $template['title'];
							$description = $template['description'];
							$download = $template['download'];
							$url_Author = $template['url_author'];
							$author = $template['author'];
							$category = $template['category'];
							
							//Only output if it's the required section
							if ($site_section === $show_section) {

								//If we are showing on home page, ignore if we don't want it on home
								if ($show_home && !$isHome) {
									//do nothing
								} else {
									$cardOutput = str_replace(
													array('{{url}}','{{url_image}}','{{title}}', '{{description}}', '{{download}}', '{{url_author}}', '{{author}}','{{category}}', '{{new}}'),
													array($url,$url_image,$title,$description,$download,$url_Author,$author,$category,($isNew) ? $newBadge : ''),
													$card);
									
									echo $cardOutput;
								}
							}
						}
									
					?>

				</div>

			</div>

		</div>
	</div>