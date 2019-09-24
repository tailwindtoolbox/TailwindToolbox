
<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Toolbox - Free Starter Templates and Components for Tailwind CSS</title>
	<meta name="description" content="Free open source Tailwind CSS starter templates and components to get you started quickly to creating websites in Tailwind CSS!">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free templates,admin templates, admin template, admin dashboard, admin console, free tailwind css templates, tailwind example, tailwind skeleton">
	<?php include 'includes/head.php';?>
	
	<script type="application/ld+json">
		{
		  "@context": "http://schema.org",
		  "@type": "Organization",
		  "url": "https://www.tailwindtoolbox.com",
		  "name": "Tailwind Toolbox",
		  "logo": "https://www.tailwindtoolbox.com/monitor.svg",
		  "sameAs": [
			"http://www.twitter.com/tailwindtoolbox",
			"http://www.github.com/tailwindtoolbox"
		  ]
		}
	</script>

	<?php include 'includes/analytics.php';?>
	
</head>
<body class="bg-brand-white leading-normal tracking-normal nunito h-full overflow-x-hidden">
	
	<?php include 'includes/nav.php';?>
	
	<!--Hero-->
	<div class="z-20 mt-6 flex items-center" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">	
		<div class="flex flex-col w-full justify-center items-center pt-6 md:pt-16">
			<div class="px-3">
				<h1 class="pt-6">
					<span class="bg-brand font-bold text-center text-white text-3xl sm:text-4xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Free Tailwind CSS Templates, Components and Resources</span></span>
				</h1>
				<p class="max-w-3xl mx-auto leading-normal my-6 font-bold text-base lg:text-xl text-left lg:text-center">Open source starter <a href="https://www.tailwindtoolbox.com/starter-templates">templates</a> and <a href="https://www.tailwindtoolbox.com/starter-components">components</a>, a <a href="https://www.tailwindtoolbox.com/plugins">plugins</a> directory and useful <a href="https://www.tailwindtoolbox.com/tools">tools/utilities</a> to kick start your Tailwind CSS project</p>
			</div>

			<!--Search-->

			<div class="w-full mx-auto mt-2">
		
				<div class="relative max-w-3xl mx-auto px-6">
					<div class="absolute h-10 mt-1 left-0 top-0 flex items-center pl-10">
						<svg class="h-4 w-4 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/></svg>
					</div>
					<input id="search-toggle" type="search" placeholder="Enter search term ('/' to focus)" class="block w-full bg-gray-100 focus:outline-none focus:bg-white focus:shadow text-gray-700 font-bold rounded-lg pl-12 pr-4 py-3" onkeyup="updateSearchResults(this.value);">
					<div class="mt-1">	
					<div id="search-content" class="hidden z-50 w-full  text text-gray-600 rounded-lg overflow-y-auto" style="max-height: 500px;">
							<div id="searchresults"></div>

							<!-- No search results message-->
							<div id="nosearchresults" class="hidden flex pb-6 px-6 bg-white">
								<svg class="fill-current text-indigo-600 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/></svg>
								<span class="ml-4 font-bold"> Oops, no search results!!!1</span>
							</div>
							<!-- / No search results -->
						</div>
					</div>
				</div>
				<!--Wave-->
				<svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<g transform="translate(-2.000000, 44.000000)" fill="#3b7977" fill-rule="nonzero">
						<path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
						<path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
						<path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
					</g>
					<g transform="translate(-4.000000, 76.000000)" fill="#ecf4f3" fill-rule="nonzero">
					<path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
					</g>
					</g>
				</svg>
			

			</div>
			<!--End Search-->




		</div>


	</div>

	
	<div class="container mx-auto mb-8 flex inline-block flex-wrap">


		<div class="w-full pb-6 mt-6 md:mt-12 md:w-1/5">
			<div class="sticky pin-t" style="top:8em;">
				<p class="text-brand text-center font-bold mb-2">Advertisment</p>
				<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
			</div>

			<div></div>

				

		</div>

		<div class="w-full md:w-4/5 px-0">

		
			<?php 
				$show_section = "Template";
				$show_home = true;
				include 'includes/render-home.php';
			?>

			<?php 
				$show_section = "Component";
				$show_home = true;
				include 'includes/render-home.php';
			?>
						





		</div>

	</div>

	<?php include 'includes/footer.php';?>

<div class="hover:bg-teal-100 text-indigo-300 font-normal"></div>


	<script src='https://cdnjs.cloudflare.com/ajax/libs/fuse.js/2.5.0/fuse.min.js'></script>

<script src="includes/data.json"></script>


    <script>
	
		
		/*Fuse*/
		
		var options = {
		  shouldSort: true,
		  tokenize: true,
		  threshold: 0.8,
		  location: 0,
		  distance: 40,
		  maxPatternLength: 32,
		  minMatchCharLength: 1,
		  keys: [
			"title",
			"description",
			"category",
			"author"
		  ]
		};



			var obj;
			var fuse;

			fetch('./includes/data.json')
			.then(res => res.json())
			.then(data => obj = data)
			.then(() => fuse = new Fuse(obj, options))

			 // "list" is the item array
	  
	
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var searchMenuDiv = document.getElementById("search-content");
        var searchField = document.getElementById("search-toggle");
		let resultdiv = document.getElementById('searchresults');
		let noresultdiv = document.getElementById('nosearchresults');
			
        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //User Menu
            if (!checkParent(target, searchMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, searchField)) {
                    // Only toggle if blank
					  togglePanel()
					
                } else {
                    // click both outside link and outside menu, hide menu
                    searchMenuDiv.classList.add("hidden");
                }
            }


        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
		
		function togglePanel() {

		  if (searchMenuDiv.classList.contains("hidden")) {
			if (searchField.value === '') {
			  clearSearchResults();
			}
			searchMenuDiv.classList.remove("hidden");
			
		  } else {
			  searchMenuDiv.classList.add("hidden");
		  }

		}
		
		document.onkeydown = function(evt) {
		  evt = evt || window.event
//		  searchField = document.getElementById("search-toggle")
		  var isSlash = false
		  var isEscape = false
		  
		  if ("key" in evt) {
			isSlash = (evt.key === "/")
			isEscape = (evt.key === "Escape" || evt.key === "Esc")
		  } else {
			isSlash = (evt.keyCode === 191 || evt.keyCode === 111)
			isEscape = (evt.keyCode === 27)
		  }

		  if (isSlash && searchField.value == '' && searchField != document.activeElement) {
			evt.preventDefault()
			searchField.focus()
			togglePanel()
		  }
		  

		  if (isEscape && searchField === document.activeElement) {
			searchField.blur()
			togglePanel()
		  }

		};
		  
		  function clearSearchResults() {
			resultdiv.innerHTML = '';
		  }
		  
		  function updateSearchResults(value) {
    
			let result = fuse.search(value);
		
			  //check search results array
			  if (result.length === 0) {
				//if we have a search term, then display no search results message (no results found) - otherwise hide if nothing entered
				if (value != '') {
					clearSearchResults();
					noresultdiv.classList.remove("hidden");
					searchMenuDiv.classList.remove("bg-white");
					searchMenuDiv.classList.remove("shadow-lg");
				} else {
					resultdiv.style.display = 'none';
				}
			  } else {
				// clear results
				resultdiv.innerHTML = '';
				noresultdiv.classList.add("hidden");
				searchMenuDiv.classList.add("bg-white");
				searchMenuDiv.classList.add("shadow-lg");
		
				//generate results listing
				for (let item in result.slice(0,4)) {
				  //let searchitem = '<li><img style=\"height:75px;\" src=\"https://www.tailwindtoolbox.com/' + result[item].url_image +'\"><a href="/' + result[item].url + '">' + result[item].title + '</a> - ' + result[item].description + ' <span style="color:#c0c0c0;font-size:8pt;">(' + result[item].category + ')</span></li>';
				  
				  let searchitem = '<span class=\"p-4 border-b flex justify-between items-center group hover:bg-teal-100\"><a class="block flex-1 no-underline" href=\"' + result[item].url + '\"><p class=\"font-bold text-sm text-indigo-600 hover:text-indigo-500\"><span class=\"mr-2 text-teal-500\">' + result[item].site_section + '</span>' + result[item].title + (result[item].author  === "Tailwind Toolbox" ? "" : "<span class=\"text-indigo-300 font-normal\"> by " + result[item].author + '<svg class=\"inline-block pl-2  h-4 fill-current text-brand\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\"><path d=\"M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z\"/></svg>') + '</span></p><p class=\"hidden md:block text-xs text-teal-600\">' + result[item].url + '</p><p class=\"text-sm py-1\">' + result[item].description  + '</p></a><a href=\"' + result[item].url + '\"><img class=\"hidden md:block h-16 border-none\" src=\"https://www.tailwindtoolbox.com/' + result[item].url_image +'\"></a></span>';
				  resultdiv.innerHTML += searchitem;
				  
				}
				
				//show results;
				resultdiv.style.display = '';
	
			  }
			  
		}
		  
		searchField.addEventListener("search", 
		function(event){
		  if(event.type === "search"){
			if(event.currentTarget.value == ""){
			  console.log("clear")
			  clearSearchResults();
			  searchMenuDiv.classList.remove("bg-white");
			  searchMenuDiv.classList.remove("shadow-md");
			}
		  }
		});


    </script>






</body>
</html>
