<!--section-->
<div class="flex flex-wrap mx-auto pt-12 mb-2 md:px-3">

	<?php
				// Store Card template
				$card ='
				<!--{{title}}-->
				<div class="w-full md:w-1/2 lg:w-1/3 mb-4 md:mb-12 pb-3 sm:pb-0" data-twcat="{{category}}">
					<a href="{{url}}" class="no-underline hover:no-underline">
						<div class="bg-white rounded overflow-hidden shadow mx-1 sm:mx-2 hover:shadow-lg">
							<img src="{{url_image}}" class="h-full w-full rounded shadow">
							<div class="p-2 lg:px-5 lg:pt-0 mb-2 text-center">
								<div class="font-bold text-xl pt-2 my-1">{{title}}</div>
								<div class="mx-auto border-t border-grey-light w-12 pt-2"></div>
								<p class="text-grey-darker text-sm mb-5">
									{{description}}
								</p>
								<p class="text-sm mb-5"><a class="no-underline" href="{{url_author}}" target="_blank" rel="noopener"><span><svg class="inline h-2 pr-2 fill-current text-brand" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg></span> {{author}}</a></p>

								<a href="{{url}}" target="_blank" rel="noopener"><button class="block w-full bg-brand hover:bg-teal text-white text-sm border-none rounded font-bold fixed p-3 mt-2 relative pin-x pin-b"><svg class="inline fill-current h-3 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg> Visit/Download</button></a>
								
							</div>
						</div>
					</a>
				</div>
				';

				// Read JSON file
				$json = file_get_contents("includes/tools.json");
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



