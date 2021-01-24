<!--section-->
<div class="container mx-auto mb-16 mt-0">
	<div class="w-full px-1 md:px-0">

		<div id="filterMsg" class="w-full mb-4 bg-teal-200 border-brand leading-loose text-brand text-center font-bold cursor-pointer" onclick="javascript:filterTemplates('');" data-twfilter="all"></div>

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
								{{sticky}}
							</div>

							<div class="card-title">
								{{title}}
							</div>
							<p class="card-description">
								{{description}}
							</p>
							<p class="card-author"><a class="no-underline" href="{{url_author}}" target="_blank" rel="noopener"><svg class="inline h-2 pr-2 fill-current text-teal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg>{{author}}</a></p>

						</div>
					</a>
				</div>
			
				';


			// Store new indicator
			$newBadge = '<span class="new-badge">NEW!</span>';
			$stickyBadge = '<span class="sticky-badge"><svg class="h-6 w-6 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M7 11v 8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3" /></svg></span>';

			// Read JSON file
			$json = file_get_contents("includes/data.json");
			//Decode JSON
			$json_data = json_decode($json, true);

			if ($show_section === 'Plugin')
			{
				//Sort Alpha
				usort($json_data, function ($a, $b)
				{
					return strnatcasecmp($a['title'], $b['title']);
				});
			}

			if ($show_section === 'Kit' || $show_section === 'Generator' || $show_section === 'Tool')
			{
				usort($json_data, function ($a, $b)
				{
					if ($a['sticky'] != $b['sticky'])
					{
						return $b['sticky'] <=> $a['sticky'];
					}

					return strnatcasecmp($a['title'], $b['title']);
				});
			}




			//Print data
			foreach ($json_data as $template)
			{

				$isHome = $template['home'];
				$isNew = $template['new'];
				$isSticky = $template['sticky'];

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
				if ($site_section === $show_section)
				{

					//If we are showing on home page, ignore if we don't want it on home
					if ($show_home && !$isHome)
					{
						//do nothing
					}
					else
					{
						$cardOutput = str_replace(
							array('{{url}}', '{{url_image}}', '{{title}}', '{{description}}', '{{download}}', '{{url_author}}', '{{author}}', '{{category}}', '{{new}}', '{{sticky}}'),
							array($url, $url_image, $title, $description, $download, $url_Author, $author, $category, ($isNew) ? $newBadge : '', ($isSticky) ? $stickyBadge : ''),
							$card
						);

						echo $cardOutput;
					}
				}
			}

			?>

		</div>

	</div>

</div>
</div>