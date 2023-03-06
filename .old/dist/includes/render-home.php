	<!--section-->
	<div class="container mx-auto mb-16 mt-6" id="home-<?= strtolower($show_section); ?>s">
		<div class="w-full px-1 md:px-0">

			<h2 class="font-bold text-xl md:text-3xl text-brand text-center pb-4 md:pb-8">Popular <?= $show_section ?>s</h2>

			<div class="flex flex-wrap items-stretch mb-2 md:px-3">

				<?php
				// Store Card template
				$card = '
				<!--{{title}} Template-->
				<div class="w-1/2 lg:w-1/4 mb-4 md:mb-6 pb-0" data-twcat="{{category}}">
					<a href="{{url}}" class="no-underline hover:no-underline">
						<div class="card">
							<div class="relative">
								<img src="{{url_image}}" alt="{{title}}">
								{{new}}
							</div>

							<div class="card-title">
								{{title}}
							</div>
							<p class="card-description">
								{{description}}
							</p>

						</div>
					</a>
				</div>
			
				';


				// Store new indicator
				$newBadge = '<span class="new-badge">NEW!</span>';

				// Read JSON file
				$json = file_get_contents("includes/data.json");
				//Decode JSON
				$json_data = json_decode($json, true);

				if ($show_section === 'Plugin') {
					//Sort Alpha
					usort($json_data, function ($a, $b) {
						return strnatcasecmp($a['title'], $b['title']);
					});
				}


				//Print data
				foreach ($json_data as $template) {

					$isHome = $template['home'];
					$isNew = $template['new'];
					$isAffiliate = $template['affiliate'];

					$site_section = $template['site_section'];
					$url = $template['url'];
					$url_image = $template['url_image'];
					$title = $template['title'];
					$description = $template['description'];
					$download = ''; //$template['download'];
					$url_Author = $template['url_author'];
					$author = $template['author'];
					$category = $template['category'];

					//Only output if it's the required section
					if ($site_section === $show_section && !$isAffiliate) {

						//If we are showing on home page, ignore if we don't want it on home
						if ($show_home && !$isHome) {
							//do nothing
						} else {
							$cardOutput = str_replace(
								array('{{url}}', '{{url_image}}', '{{title}}', '{{description}}', '{{download}}', '{{url_author}}', '{{author}}', '{{category}}', '{{new}}'),
								array($url, $url_image, $title, $description, $download, $url_Author, $author, $category, ($isNew) ? $newBadge : ''),
								$card
							);

							echo $cardOutput;
						}
					}
				}

				?>

				<div class="w-full my-10 pb-3 sm:pb-0 flex-grow text-center">
					<a href="https://www.tailwindtoolbox.com/starter-<?= strtolower($show_section); ?>s" class="bg-brand hover:bg-teal-dark no-underline text-white hover:text-white text-xl border-none rounded font-bold p-4">Show all <?= strtolower($show_section); ?>s</a>
				</div>


			</div>


		</div>
	</div>