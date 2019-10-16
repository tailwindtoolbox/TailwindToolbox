<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Toolbox - <?=$pageTITLE;?></title>
	<meta name="description" content="<?=$pageDESC;?>">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
	<link rel="manifest" href="../site.webmanifest">
	<link rel="mask-icon" href="../safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#00aba9">
	<meta name="theme-color" content="#3b7977">

	<!-- Primary Meta Tags -->
	<title>Tailwind Toolbox - Tailwind CSS <?=$pageTITLE;?> starter template"</title>
	<meta name="title" content="<?=$pageDESC;?>">
	<meta name="description" content="Free open source Tailwind CSS starter templates to get you started quickly to creating websites in Tailwind CSS!">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.tailwindtoolbox.com/">
	<meta property="og:title" content="<?=$pageDESC;?>">
	<meta property="og:description" content="Free open source Tailwind CSS starter templates to get you started quickly to creating websites in Tailwind CSS!">
	<meta property="og:image" content="<?=$pageImage;?>">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://www.tailwindtoolbox.com/">
	<meta property="twitter:title" content="<?=$pageDESC;?>">
	<meta property="twitter:description" content="Free open source Tailwind CSS starter templates to get you started quickly to creating websites in Tailwind CSS!">
	<meta property="twitter:image" content="<?=$pageImage;?>">

	<!-- Stylesheets -->
	<link href="../css/tailwind.min.css?v=20190709" rel="stylesheet">
	<link href="../css/carbon.min.css?v=20190709" rel="stylesheet">

	<?php include '../includes/analytics.php';?>

</head>

<body class="bg-brand-white leading-normal tracking-normal nunito">

	<?php include '../includes/nav.php';?>

	<!--header-->
	<header>
		<div class="header__bg"></div>
	</header>

	<div class="relative container mx-auto mb-8 pt-24 lg:pt-32" id="post-content">
		<div class="w-full -mt-64 px-0">
			<div class="bg-white rounded overflow-hidden shadow mx-1">
				<div class="p-3 sm:p-6 lg:p-8 text-gray-darker leading-normal text-base md:text-xl">

					<div class="flex flex-wrap">

						<div class="w-full lg:w-3/5 xl:w-3/4 text-gray-darker leading-normal text-base ">

							<div class="flex flex-wrap">
								<div class="w-full">
									<h1><span class="bg-brand font-bold text-white text-3xl md:text-5xl px-3" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><?=$pageTITLE;?></span></h1>
								</div>
								<div class="py-6">
									<ul class="list-reset flex flex-wrap items-center">
										<li class="mr-2 pr-1">
											<span class="text-sm font-bold pb-3">Share:</span>
										</li>
										<li class="mr-2 pr-1">
											<a href="https://facebook.com/sharer/sharer.php?u=<?PHP echo urlencode($pageURL); ?>" target="_blank" aria-label=""  data-toggle="tooltip" data-placement="bottom" title="Share on Facebook">
												<svg viewBox="0 0 24 24" class="fill-current h-4 text-brand hover:text-teal" xmlns="http://www.w3.org/2000/svg"><path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"/></svg>
											</a>
										</li>
										<li class="mr-2 pr-1">
											<a href="https://twitter.com/intent/tweet/?text=<?PHP echo urlencode($pageDESC); ?>&amp;url=<?PHP echo urlencode($pageURL); ?>" target="_blank" aria-label="" data-toggle="tooltip" data-placement="bottom" title="Share on Twitter">
												<svg viewBox="0 0 24 24" class="fill-current h-4 text-brand hover:text-teal" xmlns="http://www.w3.org/2000/svg"><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
											</a>
										</li>
										<li class="mr-2 pr-1">
											<a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?PHP echo $pageURL; ?>&amp;title=TailwindToolbox.com - <?PHP echo urlencode($pageDESC); ?>&amp;summary=<?PHP echo urlencode($pageDESC); ?>&amp;source=<?PHP echo urlencode($pageURL); ?>" target="_blank" aria-label=""  data-toggle="tooltip" data-placement="bottom" title="Share on LinkedIn">
												<svg viewBox="0 0 24 24" class="fill-current h-4 text-brand hover:text-teal" xmlns="http://www.w3.org/2000/svg"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
											</a>
										</li>
										<li class="mr-2 pr-1">
											<a href="mailto:?subject=Check%20out%20this%20link%20on%20TailwindToolbox.com&amp;body=<?PHP echo $pageDESC; ?>%20(<?PHP echo urlencode($pageURL); ?>)" target="_self" aria-label="" data-toggle="tooltip" data-placement="bottom" title="Share on Email">
												<svg viewBox="0 0 20 20" class="fill-current h-4 text-brand hover:text-teal" xmlns="http://www.w3.org/2000/svg"><path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"/></svg>
											</a>
										</li>
										<li class="mr-2 pr-1">
											<a href="whatsapp://send?text=Check%20out%20this%20link%20on%20TailwindToolbox.com%20-%20<?PHP echo urlencode($pageURL); ?>%20(<?PHP echo urlencode($pageURL); ?>)" target="_blank" aria-label="" data-toggle="tooltip" data-placement="bottom" title="Share on WhatsApp">
												<svg viewBox="0 0 24 24" class="fill-current h-4 text-brand hover:text-teal" xmlns="http://www.w3.org/2000/svg"><path d="M17.498 14.382c-.301-.15-1.767-.867-2.04-.966-.273-.101-.473-.15-.673.15-.197.295-.771.964-.944 1.162-.175.195-.349.21-.646.075-.3-.15-1.263-.465-2.403-1.485-.888-.795-1.484-1.77-1.66-2.07-.174-.3-.019-.465.13-.615.136-.135.301-.345.451-.523.146-.181.194-.301.297-.496.1-.21.049-.375-.025-.524-.075-.15-.672-1.62-.922-2.206-.24-.584-.487-.51-.672-.51-.172-.015-.371-.015-.571-.015-.2 0-.523.074-.797.359-.273.3-1.045 1.02-1.045 2.475s1.07 2.865 1.219 3.075c.149.195 2.105 3.195 5.1 4.485.714.3 1.27.48 1.704.629.714.227 1.365.195 1.88.121.574-.091 1.767-.721 2.016-1.426.255-.705.255-1.29.18-1.425-.074-.135-.27-.21-.57-.345m-5.446 7.443h-.016c-1.77 0-3.524-.48-5.055-1.38l-.36-.214-3.75.975 1.005-3.645-.239-.375c-.99-1.576-1.516-3.391-1.516-5.26 0-5.445 4.455-9.885 9.942-9.885 2.654 0 5.145 1.035 7.021 2.91 1.875 1.859 2.909 4.35 2.909 6.99-.004 5.444-4.46 9.885-9.935 9.885M20.52 3.449C18.24 1.245 15.24 0 12.045 0 5.463 0 .104 5.334.101 11.893c0 2.096.549 4.14 1.595 5.945L0 24l6.335-1.652c1.746.943 3.71 1.444 5.71 1.447h.006c6.585 0 11.946-5.336 11.949-11.896 0-3.176-1.24-6.165-3.495-8.411"/></svg>
											</a>
										</li>

									</ul>
								</div>

							</div>


							<p><?=str_replace('*', $bulletCode, $pageINTRO);?></p>

							<div class="text-center">
								<p class="text-sm font-bold mt-3 mr-2">If this template helped you, why not </p>
								<a href="https://www.buymeacoffee.com/tailwindtoolbox" target="_blank"><img class="mx-auto" src="https://www.buymeacoffee.com/assets/img/custom_images/white_img.png" alt="Buy Me A Coffee" style="height: auto !important;width: auto !important;" ></a>
							</div>

						</div>

						<div class="w-full lg:w-2/5 xl:w-1/4 p-8 my-8 lg:my-0 bg-gray-200 rounded">

							<div class="flex flex-col pb-6 text-center">
								<a href="<?=$pageDL;?>" class="no-underline hover:no-underline" target="_blank" rel="noopener" download><button class="w-full max-w-sm mx-auto flex items-center justify-center bg-brand hover:bg-teal-500 outline-none focus:border-teal-900 text-white font-extrabold py-3 px-5 rounded shadow"><svg class="inline fill-current h-4 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"></path></svg> Download</button></a>

								<a href="<?=$pageGIT;?>" target="_blank" rel="noopener" class="w-full text-sm text-gray-darkest hover:font-bold no-underline hover:underline mt-3">View on GitHub</a>
							</div>

							<p class="text-brand text-center font-bold mb-2">Advertisment</p>
							<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>

						</div>

					</div>



					<div class="rounded-b overflow-hidden mx-auto w-full mt-3 sm:mt-6 lg:mt-8 mb-4 shadow-lg" id="device">
						<div class="window-nav flex justify-between">

							<div class="flex items-center">
								<span class="text-sm font-bold mr-2">Preview:</span>
								<button class="hidden md:block flex items-center hover:bg-teal-500 text-sm font-extrabold p-1 mr-2 rounded" onclick="goMobile()"> <svg class="h-6 w-6 fill-current text-teal-100 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M358.856 32H153.143C130.512 32 112 50.326 112 72.728v366.545C112 461.674 130.512 480 153.143 480h205.713C381.488 480 400 461.674 400 439.272V72.728C400 50.326 381.488 32 358.856 32zM364 400H148V112h216v288z"/></svg></button>
								<button class="hidden md:block flex items-center hover:bg-teal-500 text-sm font-extrabold p-1 mr-2 rounded" onclick="goTablet()"><svg class="h-6 w-6 fill-current text-teal-100 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M392 32H120c-13.3 0-24 10.7-24 24v400c0 13.3 10.7 24 24 24h272c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24zm-8 384H128V80h256v336zm-128 46c-7.7 0-14-6.5-14-14.1 0-7.5 6.2-14 14-14 7.7 0 14.1 6.4 14.1 14-.1 7.6-6.4 14.1-14.1 14.1z"/></svg></button>
								<button class="hidden md:block flex items-center hover:bg-teal-500 text-sm font-extrabold p-1 mr-2 rounded" onclick="goDesktop()"><svg class="h-6 w-6 fill-current text-teal-100 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M437.333 32H74.667C51.198 32 32 51.197 32 74.666v282.667C32 380.802 51.198 400 74.667 400h138.666l-42.666 48v32h170.666v-32l-42.666-48h138.666C460.802 400 480 380.802 480 357.333V74.666C480 51.197 460.802 32 437.333 32zm0 288H74.667V74.666h362.666V320z"/></svg></button>
								<a href="<?=$pageSRC;?>" class="flex items-center hover:bg-teal-500 text-sm font-extrabold p-1 mr-2 rounded" target="_blank" rel="noopener"><svg class="h-6 w-6 fill-current text-teal-100 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M405.34 405.332H106.66V106.668H240V64H106.66C83.191 64 64 83.197 64 106.668v298.664C64 428.803 83.191 448 106.66 448h298.68c23.469 0 42.66-19.197 42.66-42.668V272h-42.66v133.332zM288 64v42.668h87.474L159.999 322.133l29.866 29.866 215.476-215.47V224H448V64H288z"/></svg></a>
							</div>


							<div class="text-right">
								<span class="window-nav-dot"></span> <span class="window-nav-dot"></span> <span class="window-nav-dot"></span>
							</div>
						</div>

						<iframe id="iframecontent" src="https://tailwindtoolbox.github.io/Help-Article/" style="width:100%; height:600px;"></iframe>

					</div>

					<?php if ($pageCODE != '') {

    echo '
<div class="pt-12">
	<h2 class="font-bold text-xl md:text-3xl text-brand pb-4">Unstyled Code Snippet</h2>
	<hr class="border border-gray-lighter">
	<p>This snippet is a unstyled version of the starter template which you can drop into your existing project.</p>
	<div class="py-8">
		<button id="copyButton" onclick="copyClipboard()" class="w-full sm:w-auto bg-teal hover:bg-teal-dark text-white text-xl font-extrabold py-3 px-5 rounded shadow hover:shadow-lg">Copy to Clipboard</button>
		<span id="confirmation"></span>
	</div>

</div>

<div class="w-full lg:w-4/5 py-4 mx-auto">
	<div id="code" class="p-3 overflow-x-auto bg-gray-lightest text-sm md:text-base w-full border rounded shadow px-5 mb-5">
	<pre>';

    $code_snippet = file_get_contents($pageCODE);
    echo htmlentities($code_snippet);

    echo '</pre>

	</div>
</div>';
}
?>


					<p class="my-16 p-6 w-full container mx-auto bg-teal-lightest text-center text-gray-dark">Find more templates at: <a class="font-extrabold text-teal-dark hover:text-teal-darkest" href="https://www.tailwindtoolbox.com/starter-templates" target="_blank" rel="noopener">www.TailwindToolbox.com/starter-templates</a></p>

				</div>
			</div>
		</div>
	</div>


	<?php include '../includes/footer.php';?>

	<?php include '../includes/js-templates.php';?>

</body>
</html>