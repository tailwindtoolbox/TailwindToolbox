<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Toolbox - Submit</title>
	<meta name="description" content="Free open source Tailwind CSS starter templates to quickly start your next project">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
	<?php include 'includes/head.php';?>
	<?php include 'includes/analytics.php';?>
		
</head>
<body class="bg-brand-white leading-normal tracking-normal nunito">

	<?php include 'includes/nav.php';?>

	<!--header-->
	<div class="z-20 mt-24 pb-6 mb-6 flex items-center text-center" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">	
		<div class="flex flex-col w-full justify-center items-center pt-6 md:pt-16">
			<div class="px-3">
				<h1 class="pt-6">
					<span class="bg-brand font-bold text-center text-white text-3xl sm:text-4xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Submit to Tailwind Toolbox</span></span>
				</h1>
				<p class="max-w-3xl mx-auto leading-normal my-6 font-bold text-base lg:text-xl text-left lg:text-center">Happy to add anything open source you have created or found which will help the Tailwind CSS community.</p>
			</div>
		</div>
	</div>

	<div class="container mx-auto mb-8 flex inline-block flex-wrap">
		<div class="w-full pb-6 md:w-1/5">
			<div class="sticky pin-t flex flex-col" style="top:9em;">
				<div class="order-1 md:order-2">
					<p class="text-brand text-center font-bold mb-2 md:pt-3">Advertisment</p>
					<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
				</div>
			</div>
		
		</div>

			<div class="px-4 w-full md:w-3/5">
			
			<form id="requestForm">

				<div class="mt-4">
					<span class="text-gray-700">What would you like to suggest?</span>
					<div class="mt-2">
						<label class="inline-flex items-center">
						<input type="radio" class="form-radio text-brand" name="section" value="Template" checked>
						<span class="ml-2">Template</span>
						</label>
						<label class="inline-flex items-center ml-6">
						<input type="radio" class="form-radio text-brand" name="section" value="Component">
						<span class="ml-2">Component</span>
						</label>
						<label class="inline-flex items-center ml-6">
						<input type="radio" class="form-radio text-brand" name="section" value="Plugin">
						<span class="ml-2">Plugin</span>
						</label>
						<label class="inline-flex items-center ml-6">
						<input type="radio" class="form-radio text-brand" name="section" value="Tool">
						<span class="ml-2">Tool/Utility</span>
						</label>
					</div>
				</div>

				<label class="block mt-3">
					<span class="text-gray-700">Title</span>
					<input id="srcTitle" name="title" class="form-input mt-1 block w-full" placeholder="Short title" onKeyUp="change(this.value,'outputTitle','Add Title')">
				</label>

				<label class="block mt-3">
					<span class="text-gray-700">Short Description</span>
					<textarea id="srcDesc" name="description" class="form-textarea mt-1 block w-full" rows="3" placeholder="Enter short description (will appear on hover)" onKeyUp="change(this.value,'outputDesc','Short Description which appears on hover')"></textarea>
				</label>


				<label class="block mt-3">
					<span class="text-gray-700">URL</span>
					<input id="srcUrl" name="url" class="form-input mt-1 block w-full" placeholder="Preferably GitHub Repo link">
				</label>

				<label class="block mt-3">
					<span class="text-gray-700">Author</span>
					<input id="srcAuthor" name="author" class="form-input mt-1 block w-full" placeholder="Author's Name / GitHub username" onKeyUp="change(this.value,'outputAuthor','Author / @github')">
				</label>

				<button onclick="postStuff()" type="button" name="submit_btn" class="mt-6 w-full max-w-xs flex items-center justify-center bg-brand hover:bg-teal-500 outline-none focus:border-teal-900 text-white font-extrabold py-3 px-5 rounded shadow"><svg class="inline fill-current h-4 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"></path></svg> Submit</button>


				</form>
				<div id="status" class="py-3"></div>
			</div>

			<div class="mx-auto w-1/2 md:w-1/5">
				<p class="text-brand text-center font-bold mb-2 md:pt-3">Preview</p>

					<div>
					<div class="card">
							<div class="relative">
								<img src="placeholder.png" alt="Accessibility">
								
							</div>

							<div class="card-title text-brand" id="outputTitle">
								Add Title
							</div>
							<p class="card-description" id="outputDesc">
								Short Description which appears on hover
							</p>
							<p class="card-author text-brand"><svg class="inline h-2 pr-2 fill-current text-teal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"></path></svg><span id="outputAuthor">Author / @github</a></p>

						</div>
					
				</div>

				</div>


		</div>

	</div>

	<?php include 'includes/footer.php';?>

	<?php include 'includes/js.php';?>

<script>

function change(content,divtoaffect,defaultText) { 

  if (content === '') {
	document.getElementById(divtoaffect).innerHTML = defaultText; 
  } else {
    document.getElementById(divtoaffect).innerHTML = content; 
  }
}

function changeLink(content,divtoaffect,defaultText) { 

if (content === '') {
  document.getElementById(divtoaffect).href = '#'; 
} else {
  document.getElementById(divtoaffect).href = content; 
}
}



function postStuff(){
  // Create our XMLHttpRequest object
  var hr = new XMLHttpRequest();
  // Create some variables we need to send to our PHP file
  var url = "submit-suggestion.php";
  var section = document.querySelectorAll("input[name=section]:checked")[0].value;
  var srcTitle = document.getElementById("srcTitle").value;
  var srcDesc = document.getElementById("srcDesc").value;
  var srcUrl = document.getElementById("srcUrl").value;
  var srcAuthor = document.getElementById("srcAuthor").value;
  var vars = "section="+section+"&title="+srcTitle+"&desc="+srcDesc+"&url="+srcUrl+"&author="+srcAuthor;
  
 if (srcTitle != '' && srcDesc !='' && srcUrl != '' && srcAuthor != '') {
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		if(hr.readyState == 4 && hr.status == 200) {
			var return_data = hr.response;
			document.getElementById("status").innerHTML = return_data;
		}
	}
	// Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	document.getElementById("status").innerHTML = "processing...";
	return false;
 } else {
	 document.getElementById("status").innerHTML = '<span class="py-3 text-red-500">Please ensure all fields are completed!</span>';
	 return false;
 }


}

</script>

</body>
</html>