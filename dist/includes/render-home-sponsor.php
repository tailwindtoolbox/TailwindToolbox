<!--section-->
<div class="container mx-auto mt-6 mb-16" id="home-<?= strtolower($show_section); ?>s">
	<div class="w-full px-1 md:px-0">

		<h2 class="pb-4 text-xl font-bold text-center md:text-3xl text-brand md:pb-8">Popular
			<?= $show_section ?>s
		</h2>

		<div class="flex flex-wrap items-stretch mb-2 md:px-3">

			<?php
			// Store Card template
			$card = '
				<!--{{title}} Template-->
				<div class="w-1/2 pb-0 mb-4 lg:w-1/4 md:mb-6" data-twcat="{{category}}">
					<a href="{{url}}" class="no-underline hover:no-underline">
						<div class="card">
							<div class="relative">
								<img src="{{url_image}}" alt="{{title}}">
								{{new}}
								{{affiliate}}
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
			$affiliateBadge = '<span class="absolute bottom-0 w-full py-1 text-xs font-bold tracking-wider text-center text-gray-800" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);opacity:0.75;">AFFILIATE SCHEME</span>';

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

			//Print data Sponsors
			foreach ($json_data as $template) {

				$isHome = $template['home'];
				$isNew = $template['new'];
				$isAffiliate = $template['affiliate'];
				$isSponsor = $template['sponsor'];

				$site_section = $template['site_section'];
				$url = $template['url'];
				$url_image = $template['url_image'];
				$title = str_replace('[$]', '', $template['title']);
				$description = $template['description'];
				$download = ''; //$template['download'];
				$url_Author = $template['url_author'];
				$author = $template['author'];
				$category = $template['category'];

				//Only output if it's the required section
				if ($isSponsor) {

					$cardOutput = str_replace(
						array('{{url}}', '{{url_image}}', '{{title}}', '{{description}}', '{{download}}', '{{url_author}}', '{{author}}', '{{category}}', '{{new}}', '{{affiliate}}'),
						array($url, $url_image, $title, $description, $download, $url_Author, $author, $category, ($isNew) ? $newBadge : '', ($isAffiliate) ? $affiliateBadge : ''),
						$card
					);

					echo $cardOutput;

				}
			}

			//Print data (home)
			foreach ($json_data as $template) {

				$isHome = $template['home'];
				$isNew = $template['new'];
				$isAffiliate = $template['affiliate'];
				$isSponsor = $template['sponsor'];

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
							array('{{url}}', '{{url_image}}', '{{title}}', '{{description}}', '{{download}}', '{{url_author}}', '{{author}}', '{{category}}', '{{new}}', '{{affiliate}}'),
							array($url, $url_image, $title, $description, $download, $url_Author, $author, $category, ($isNew) ? $newBadge : '', ($isAffiliate) ? $affiliateBadge : ''),
							$card
						);

						echo $cardOutput;
					}
				}
			}

			?>

			<div class="flex-grow w-full pb-3 my-10 text-center sm:pb-0">
				<a href="https://www.tailwindtoolbox.com/starter-<?= strtolower($show_section); ?>s"
					class="p-4 text-xl font-bold text-white no-underline border-none rounded bg-brand hover:bg-teal-dark hover:text-white">Show
					all <?= strtolower($show_section); ?>s</a>
			</div>


		</div>


	</div>
</div>