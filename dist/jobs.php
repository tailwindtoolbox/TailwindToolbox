<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Toolbox - Job Board</title>
	<meta name="description" content="Looking for a Tailwind CSS related job? Or interested in posting a job/">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,jobs, tailwind css consultant, tailwind css job">
	<?php include 'includes/head.php';?>
	<?php include 'includes/analytics.php';?>
	<style>
         /* Tab content - closed */
         .tab-content {
         max-height: 0;
         -webkit-transition: max-height .35s;
         -o-transition: max-height .35s;
         transition: max-height .35s;
         }
         /* :checked - resize to full height */
         .tab input:checked ~ .tab-content {
         max-height: 100vh;
         }
         /* Label formatting when open */
         .tab input:checked + label{
         /*@apply text-xl p-5 border-l-2 border-indigo-500 bg-gray-100 text-indigo*/
         font-size: 1.25rem; /*.text-xl*/
         padding: 1.25rem; /*.p-5*/
         border-left-width: 2px; /*.border-l-2*/
         border-color: #6574cd; /*.border-indigo*/
         background-color: #f8fafc; /*.bg-gray-100 */
         color: #6574cd; /*.text-indigo*/
         }
         /* Icon */
         .tab label::after {
         float:right;
         right: 0;
         top: 0;
         display: none;
         width: 1.5em;
         height: 1.5em;
         line-height: 1.5;
         font-size: 1.25rem;
         text-align: center;
         -webkit-transition: all .35s;
         -o-transition: all .35s;
         transition: all .35s;
         }
         /* Icon formatting - closed */
         .tab input[type=checkbox] + label::after {
         content: "+";
         font-weight:bold; /*.font-bold*/
         border-width: 1px; /*.border*/
         border-radius: 9999px; /*.rounded-full */
         border-color: #b8c2cc; /*.border-grey*/
         }
         .tab input[type=radio] + label::after {
         content: "\25BE";
         font-weight:bold; /*.font-bold*/
         border-width: 1px; /*.border*/
         border-radius: 9999px; /*.rounded-full */
         border-color: #b8c2cc; /*.border-grey*/
         }
         /* Icon formatting - open */
         .tab input[type=checkbox]:checked + label::after {
         transform: rotate(315deg);
         background-color: #6574cd; /*.bg-indigo*/
         color: #f8fafc; /*.text-grey-lightest*/
         }
         .tab input[type=radio]:checked + label::after {
         transform: rotateX(180deg);
         background-color: #6574cd; /*.bg-indigo*/
         color: #f8fafc; /*.text-grey-lightest*/
         }
	  </style>
	  
</head>

<body class="bg-brand-white leading-normal tracking-normal nunito">

	<?php include 'includes/nav.php';?>

	<!--header-->
	<div class="z-20 mt-24 pb-6 mb-6 flex items-center text-center" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">	
		<div class="flex flex-col w-full justify-center items-center pt-6 md:pt-16">
			<div class="px-3">
				<h1 class="pt-6">
					<span class="bg-brand font-bold text-center text-white text-3xl sm:text-4xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Tailwind CSS Jobs</span></span>
				</h1>
				<p class="max-w-3xl mx-auto leading-normal my-6 font-bold text-base lg:text-xl text-left lg:text-center">These templates are all open source and built using the standard Tailwind CSS configuration. Feel free to use them for any purpose, even commercially!</p>
			</div>
		</div>
	</div>

	<div class="container mx-auto mb-8 flex inline-block flex-wrap">
		<div class="w-full pb-6 md:w-1/5">
			<div class="sticky pin-t flex flex-col" style="top:9em;">
				<!--Filters-->
				<div class="w-full bg-brand-white pl-3 pt-6 md: pl-0 md:pt-0  order-2 md:order-1">
					<p class="text-brand text-center font-bold mb-2">Filters</p>
					<ul class="container scroll mx-auto list-reset flex flex-row md:flex-col border-b md:pb-4 text-sm md:text-base bounce-in-right">
						<li class="mr-1">
							<button class="tab -mb-px active-tab" onclick="javascript:filterTemplates('');" data-twfilter="all">All</button>
						</li>	
						<?php 
							$filters = array('Admin', 'Home', 'Blog', 'Support', 'Profile', 'Nav', 'WebApp', 'Javascript', 'CMS');
							foreach($filters as $filter) {
								echo "\t\t\t\t\t\t<li class=\"mr-1\">";
								echo "\t\t\t\t\t\t\t<button class=\"tab -mb-px\" onclick=\"javascript:filterTemplates('" . $filter . "');\" data-twfilter=\"" . $filter . "\">" . $filter . "</button>\n";
								echo "\t\t\t\t\t\t</li>";
							}
						?>
					</ul>
				</div>
				<!--/filters-->
				<div class="order-1 md:order-2">
					<p class="text-brand text-center font-bold mb-2 md:pt-3">Advertisment</p>
					<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
				</div>
			</div>
		</div>

		<div class="w-full md:w-4/5 px-0">
			<?php 
			/*
				$show_section = "Template";
				$show_home = false;
				include 'includes/render-data.php';
				*/
			?>


<div class="container mx-auto mb-16 mt-0">
	<div class="w-full px-1 md:px-0">
				
		<div id="filterMsg" class="w-full mb-4 bg-teal-200 border-brand leading-loose text-brand text-center font-bold cursor-pointer" onclick="javascript:filterTemplates('');" data-twfilter="all"></div>

			<div class="flex flex-wrap items-stretch mb-2 md:px-3">		

				
			<div class="mx-auto w-11/12 md:w-full mx-2">
				<div class="card tab w-full overflow-hidden border-t mb-4">
					<input class="absolute opacity-0" id="tab-single-one" type="radio" name="tabs2">
					<label class="block mr-2 p-5 leading-normal cursor-pointer" for="tab-single-one">
						<div class="flex flex-wrap items-center">
							<div class="flex items-center w-full md:w-1/2">
								<img src="placeholder.png" class="object-cover mr-4" style="width:75px; height:75px;">
								<div class="flex-1">
									<span class="text-xl font-bold">Job Title</span>
									<p class="text-gray-500 uppercase">Company Name Ltd</p>
								</div>
							</div>
							<div class="w-full md:w-1/2">
								<div class="flex items-center text-gray-500 justify-center md:justify-end my-2">
									<svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> United Kingdom or Remote
								</div>
								<div class="flex flex-wrap items-center justify-center md:justify-end mt-2">
									<button class="bg-transparent hover:bg-brand text-brand text-xs font-bold hover:text-white py-1 px-2 border border-brand hover:border-transparent rounded m-1">Javascript</button>
									<button class="bg-transparent hover:bg-brand text-brand text-xs font-bold hover:text-white py-1 px-2 border border-brand hover:border-transparent rounded m-1">Vue.js</button>
									<button class="bg-transparent hover:bg-brand text-brand text-xs font-bold hover:text-white py-1 px-2 border border-brand hover:border-transparent rounded m-1">Front End</button>
									<button class="bg-transparent hover:bg-brand text-brand text-xs font-bold hover:text-white py-1 px-2 border border-brand hover:border-transparent rounded m-1">Full Stack</button>
								</div>
							</div>
						</div>
					</label>
					<div class="tab-content overflow-auto border-l-2 bg-gray-100 border-brand leading-normal">
						
						<div class="flex flex-wrap">

							<div class="w-full lg:w-3/5 xl:w-3/4 text-gray-darker leading-normal text-base p-5">
								<p class="text-brand font-bold mt-2 py-2">Job Details</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
					
								<p class="text-brand font-bold mt-6 py-2">About Company</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
					
							</div>

							<div class="w-full lg:w-2/5 xl:w-1/4 p-8 my-8 lg:my-0 bg-gray-200 rounded text-center text-sm">

								<div class="flex flex-col pb-6 text-center">
									<a href="<?=$pageDL;?>" class="no-underline hover:no-underline text-base" target="_blank" rel="noopener" download><button class="w-full max-w-sm mx-auto flex items-center justify-center bg-brand hover:bg-teal-500 outline-none focus:border-teal-900 text-white font-extrabold py-3 px-5 rounded shadow"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg> Apply Now</button></a>

								</div>

								<p class="text-brand font-bold mx-2 pt-2">Company</p>
								<p>Company Name Ltd</p>

								<p class="text-brand font-bold mx-2 pt-2">Salary</p>
								<p>£80,000</p>

								<p class="text-brand font-bold mx-2 pt-2">Job Type</p>
								<p>Full Time</p>

								<p class="text-brand font-bold mx-2 pt-2">Website</p>
								<p><a href="#">CompanyNameLtd.com</a></p>



							</div>

						</div>




					</div>
				</div>

				<div class="card tab w-full overflow-hidden border-t mb-4">
					<input class="absolute opacity-0" id="tab-single-two" type="radio" name="tabs2">
					<label class="block p-5 leading-normal cursor-pointer" for="tab-single-two">Label Two</label>
					<div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
						<p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
					</div>
				</div>
				
				<div class="card tab w-full overflow-hidden border-t mb-4">
					<input class="absolute opacity-0" id="tab-single-three" type="radio" name="tabs2">
					<label class="block p-5 leading-normal cursor-pointer" for="tab-single-three">Label Three</label>
					<div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
						<p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
					</div>
				</div>
			</div>







			
				
				</div>

			</div>

		</div>


		</div>

	</div>

	<?php include 'includes/footer.php';?>

	<?php include 'includes/js.php';?>

	<script>
      /* Optional Javascript to close the radio button version by clicking it again */
      var myRadios = document.getElementsByName('tabs2');
      var setCheck;
      var x = 0;
      for(x = 0; x < myRadios.length; x++){
          myRadios[x].onclick = function(){
              if(setCheck != this){
                   setCheck = this;
              }else{
                  this.checked = false;
                  setCheck = null;
          }
          };
      }
   </script>
</body>
</html>