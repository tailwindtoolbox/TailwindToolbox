<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Windy Toolbox - Submit</title>
	<meta name="description"
		content="(Formerly Tailwind Toolbox) Free open source Tailwind CSS starter templates to quickly start your next project">
	<meta name="keywords"
		content="Tailwind Toolbox,tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
	<?php include 'includes/head.php'; ?>
	<?php include 'includes/analytics.php'; ?>
	<style>
		.form-checkbox-availability {
			height: 2em;
			width: 2em;
			color: #3b7977;
			border-radius: 9999px;
		}

		:checked+label {
			background: #fff;
			border-color: #57a99a;
			/* bg-purple-200*/
		}
	</style>
</head>

<body class="leading-normal tracking-normal bg-brand-white nunito">

	<?php include 'includes/nav.php'; ?>

	<!--header-->
	<div class="z-20 flex items-center pb-6 mt-24 mb-6 text-center bg-cover" style="background-image: url(bg.svg)">
		<div class="flex flex-col items-center justify-center w-full pt-6 md:pt-16">
			<div class="px-3">
				<h1 class="pt-6">
					<span class="px-3 mb-5 text-3xl font-bold text-center text-white bg-brand sm:text-4xl sm:mb-16"
						style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Submit to
							Windy Toolbox</span></span>
				</h1>
				<p
					class="max-w-3xl mx-auto my-6 text-base font-bold leading-normal text-left lg:text-xl lg:text-center">
					Happy to add anything open source you have created or found which will help the Tailwind CSS
					community.</p>
			</div>
		</div>
	</div>

	<div class="container flex flex-wrap mx-auto mb-8">
		<div class="w-full pb-6 lg:w-1/5">
			<div class="sticky flex flex-col pin-t" style="top:9em;">
				<div class="order-1 md:order-2">
					<p class="mb-2 font-bold text-center text-brand md:pt-3">Advertisment</p>
					<script async type="text/javascript"
						src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom"
						id="_carbonads_js"></script>
					<script src="//m.servedby-buysellads.com/monetization.custom.js" type="text/javascript"></script>
					<div id="native-card-js" class="mx-auto mt-4"></div>
					<script>
						_bsa.init('custom', 'CESDV27N', 'placement:tailwindtoolboxcom', {
							target: '#native-card-js',
							template: `
  <a href="##statlink##" class="native-card" style="background: ##backgroundColor##; color: ##textColor##;">
	<img class="native-logo" src="##logo##">
	<div class="native-tagline"> ##tagline##</div>
	<div class="native-desc"> ##description##</div>
	<div class="native-cta" style="background-color: ##ctaBackgroundColor##; color: ##ctaTextColor##">##callToAction##</div>
	<div style="background-color: ##textColor##; color: ##backgroundColor##" class="native-sponsored">Sponsored</div>
  </a>
	`
						});
					</script>
				</div>
			</div>

		</div>

		<div class="w-full px-4 lg:w-3/5">

			<form id="requestForm">

				<div class="mt-4">
					<span class="text-gray-700">What would you like to suggest?</span>
					<div class="flex flex-wrap justify-center w-full mx-auto mt-6 lg:w-4/5">

						<div class="flex flex-col items-center pr-4 mb-2 transition duration-300 ease-in-out transform">
							<input id="Template" type="radio" name="section"
								class="z-50 order-last w-16 h-16 -mt-4 form-checkbox form-checkbox-availability">
							<label for="Template"
								class="flex flex-col items-center w-32 px-6 py-6 text-center border-2 border-gray-400 rounded-lg hover:bg-white">
								<span class="mb-3">
									<svg class="w-8 h-8 text-brand" fill="none" viewBox="0 0 24 24"
										stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
									</svg>

								</span>
								<span class="block mb-5">Template</span>
							</label>
						</div>

						<div class="flex flex-col items-center pr-4 mb-2 transition duration-300 ease-in-out transform">
							<input id="Component" type="radio" name="section"
								class="z-50 order-last w-16 h-16 -mt-4 form-checkbox form-checkbox-availability">
							<label for="Component"
								class="flex flex-col items-center w-32 px-6 py-6 text-center border-2 border-gray-400 rounded-lg hover:bg-white">
								<span class="mb-3">
									<svg class="w-8 h-8 text-brand" fill="none" viewBox="0 0 24 24"
										stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
									</svg>
								</span>
								<span class="block mb-5">Component</span>
							</label>
						</div>

						<div class="flex flex-col items-center pr-4 mb-2 transition duration-300 ease-in-out transform">
							<input id="Kit" type="radio" name="section"
								class="z-50 order-last w-16 h-16 -mt-4 form-checkbox form-checkbox-availability">
							<label for="Kit"
								class="flex flex-col items-center w-32 px-6 py-6 text-center border-2 border-gray-400 rounded-lg hover:bg-white">
								<span class="mb-3">
									<svg class="w-8 h-8 text-brand" fill="none" viewBox="0 0 24 24"
										stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
									</svg>

								</span>
								<span class="block mb-5">Kit</span>
							</label>
						</div>

						<div class="flex flex-col items-center pr-4 mb-2 transition duration-300 ease-in-out transform">
							<input id="Generator" type="radio" name="section"
								class="z-50 order-last w-16 h-16 -mt-4 form-checkbox form-checkbox-availability">
							<label for="Generator"
								class="flex flex-col items-center w-32 px-6 py-6 text-center border-2 border-gray-400 rounded-lg hover:bg-white">
								<span class="mb-3">
									<svg class="inline h-8 fill-stroke text-brand" fill="none" viewBox=" 0 0 24 24"
										stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
									</svg>

								</span>
								<span class="block mb-5">Generator</span>
							</label>
						</div>

						<div class="flex flex-col items-center pr-4 mb-2 transition duration-300 ease-in-out transform">
							<input id="Tool" type="radio" name="section"
								class="z-50 order-last w-16 h-16 -mt-4 form-checkbox form-checkbox-availability">
							<label for="Tool"
								class="flex flex-col items-center w-32 px-6 py-6 text-center border-2 border-gray-400 rounded-lg hover:bg-white">
								<span class="mb-3">
									<svg class="w-8 h-8 text-brand" viewBox="0 0 24 24" stroke-width="2"
										stroke="currentColor" fill="none" stroke-linecap="round"
										stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" />
										<path
											d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
										<circle cx="12" cy="12" r="3" />
									</svg>
								</span>
								<span class="block mb-5">Tool/Utility</span>
							</label>
						</div>

						<div class="flex flex-col items-center pr-4 mb-2 transition duration-300 ease-in-out transform">
							<input id="Plugin" type="radio" name="section"
								class="z-50 order-last w-16 h-16 -mt-4 form-checkbox form-checkbox-availability">
							<label for="Plugin"
								class="flex flex-col items-center w-32 px-6 py-6 text-center border-2 border-gray-400 rounded-lg hover:bg-white">
								<span class="mb-3">
									<svg class="w-8 h-8 text-brand" fill="none" viewBox="0 0 24 24"
										stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
									</svg>
								</span>
								<span class="block mb-5">Plugin</span>
							</label>
						</div>

						<div class="flex flex-col items-center pr-4 mb-2 transition duration-300 ease-in-out transform">
							<input id="Guide" type="radio" name="section"
								class="z-50 order-last w-16 h-16 -mt-4 form-checkbox form-checkbox-availability">
							<label for="Guide"
								class="flex flex-col items-center w-32 px-6 py-6 text-center border-2 border-gray-400 rounded-lg hover:bg-white">
								<span class="mb-3">
									<svg class="w-8 h-8 text-brand" fill="none" viewBox="0 0 24 24"
										stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
									</svg>
								</span>
								<span class="block mb-5">Guide</span>
							</label>
						</div>



					</div>
				</div>

				<label class="block pb-3 mt-3">
					<span class="pb-3 text-gray-700">Title</span>
					<input id="srcTitle" name="title" class="block w-full mt-1 form-input" placeholder="Short title"
						onKeyUp="change(this.value,'outputTitle','Add Title')">
				</label>

				<label class="block pb-3 mt-3">
					<span class="pb-3 text-gray-700">Short Description</span>
					<textarea id="srcDesc" name="description" class="block w-full mt-1 form-textarea" rows="3"
						placeholder="Enter short description (will appear on hover)"
						onKeyUp="change(this.value,'outputDesc','Short Description which appears on hover')"></textarea>
				</label>

				<label class="block pb-3 mt-3">
					<span class="pb-3 text-gray-700">URL for Image</span>
					<input id="srcImgUrl" name="imgurl" class="block w-full mt-1 form-input"
						placeholder="I'll create one for you if you leave it blank"
						onKeyUp="changeImage(this.value,'outputImg','placeholder.png')">
				</label>


				<label class="block pb-3 mt-3">
					<span class="pb-3 text-gray-700">URL</span>
					<input id="srcUrl" name="url" class="block w-full mt-1 form-input"
						placeholder="Preferably GitHub Repo link">
				</label>

				<label class="block pb-3 mt-3">
					<span class="pb-3 text-gray-700">Author</span>
					<input id="srcAuthor" name="author" class="block w-full mt-1 form-input"
						placeholder="Author's Name / GitHub username"
						onKeyUp="change(this.value,'outputAuthor','Author')">
				</label>

				<label class="block pb-3 mt-3">
					<span class="pb-3 text-gray-700">Author Link</span>
					<input id="srcAuthorLink" name="author-link" class="block w-full mt-1 form-input"
						placeholder="Author's link">
				</label>

				<button onclick="postStuff()" type="button" name="submit_btn"
					class="flex items-center justify-center w-full max-w-xs px-5 py-3 mx-auto mt-12 font-extrabold text-white rounded shadow outline-none bg-brand hover:bg-teal-500 focus:border-teal-900"><svg
						class="inline h-4 pr-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						<path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"></path>
					</svg> Submit</button>

				<div id="status" class="py-3 my-6 font-bold"></div>
				<input id="formreset" type="reset" value="Reset the form"
					class="flex items-center justify-center hidden w-full max-w-xs px-5 py-3 font-extrabold bg-transparent rounded outline-none hover:bg-brand hover:text-white focus:border-teal-900 text-brand">

			</form>

		</div>

		<div class="w-1/2 mx-auto lg:w-1/5">

			<div class="sticky flex flex-col pin-t" style="top:9em;">
				<p class="mb-2 font-bold text-center text-brand md:pt-3">Preview</p>

				<div>
					<div class="card">
						<div class="relative">
							<img src="placeholder.png" id="outputImg" alt="Image will go here">
						</div>

						<div class="card-title text-brand" id="outputTitle">
							Add Title
						</div>
						<p class="card-description" id="outputDesc">
							Short Description which appears on hover
						</p>
						<p class="card-author text-brand"><svg class="inline h-2 pr-2 fill-current text-teal"
								xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
								<path
									d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z">
								</path>
							</svg><span id="outputAuthor">Author</a></p>

					</div>

				</div>
			</div>





		</div>


	</div>

	</div>

	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/js.php'; ?>

	<script>
		function change(content, divtoaffect, defaultText) {

			if (content === '') {
				document.getElementById(divtoaffect).innerHTML = defaultText;
			} else {
				document.getElementById(divtoaffect).innerHTML = content;
			}
		}

		function changeLink(content, divtoaffect, defaultText) {

			if (content === '') {
				document.getElementById(divtoaffect).href = '#';
			} else {
				document.getElementById(divtoaffect).href = content;
			}
		}

		function changeImage(content, divtoaffect, defaultImg) {

			if (content === '') {
				document.getElementById(divtoaffect).src = defaultImg;
			} else {
				document.getElementById(divtoaffect).src = content;
			}
		}

		function postStuff() {
			var hr = new XMLHttpRequest();
			var url = "submit-suggestion.php";
			var radios = document.querySelectorAll('input[name=section]:checked');
			var section = radios.length > 0 ? radios[0].id : null;
			var srcTitle = document.getElementById("srcTitle").value;
			var srcDesc = document.getElementById("srcDesc").value;
			var srcUrl = document.getElementById("srcUrl").value;
			var srcAuthor = document.getElementById("srcAuthor").value;
			var srcAuthorLink = document.getElementById("srcAuthorLink").value;
			var srcImgUrl = document.getElementById("srcImgUrl").value;
			var vars = "section=" + section + "&title=" + srcTitle + "&desc=" + srcDesc + "&url=" + srcUrl + "&author=" + srcAuthor + "&authorLink=" + srcAuthorLink + "&image=" + srcImgUrl;

			if (srcTitle != '' && srcDesc != '' && srcUrl != '' && srcAuthor != '' && srcAuthorLink != '') {
				hr.open("POST", url, true);
				hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

				hr.onreadystatechange = function () {
					if (hr.readyState == 4 && hr.status == 200) {
						var return_data = hr.response;
						document.getElementById("status").innerHTML = return_data;
						document.getElementById("formreset").classList.remove("hidden");
					}
				}
				hr.send(vars);
				document.getElementById("status").innerHTML = "processing...";
				return false;
			} else {
				document.getElementById("status").innerHTML = '<p style="color:red;">🚫 Please ensure all fields are completed!</p>';
				return false;
			}

		}
	</script>

</body>

</html>