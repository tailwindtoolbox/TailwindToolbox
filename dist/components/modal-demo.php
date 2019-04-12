
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind CSS Starter Component - Modal : Tailwind Toolbox</title>
		<meta name="description" content="Tailwind CSS Modal | Tailwind Toolbox Free open source starter components">
		<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,modal">
		<?php include '../includes/head-templates.php';?>

	    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@next/dist/tailwind.min.css"> 
	    <!--Replace with your tailwind.css once created-->
	  
	    <style>
		  .modal {
		    transition: opacity 0.25s ease;
		  }
		    body.modal-active {
			  overflow-x: hidden;
			  overflow-y: visible !important;
		  }
	    </style>
 
</head>

<body class="relative bg-gray-100 font-sans leading-normal tracking-normal">

  <div class="container mx-auto text-center pt-12">
    
	<div class="py-12">
		<button class="modal-open bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Open Modal</button>
		<p class="py-4">or</p>
		<a href="#" class="modal-open text-indigo-500 underline hover:text-indigo-400">Open Modal</a>
	</div>
	
	  
	
	
	<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
	  <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50 top-0 left-0 cursor-pointer"></div>
	  <div class="modal-close absolute top-0 right-0 cursor-pointer mt-2 mr-4 text-white font-bold">[X] Close (or Esc)</div>
	  <div class="z-50 w-5/6 md:w-1/2 md:max-w-md bg-white rounded-lg shadow-2xl mx-2 md:mx-0 p-4">

		<div class="modal-title flex justify-between items-center pb-2">
			<p class="text-2xl font-bold">Simple Modal!</p>
			<div class="modal-close cursor-pointer font-bold text-3xl">x</div>
		</div>
		
		<div class="modal-body py-4 text-left">
			<p>Modal message can go here</p>
			<p>...</p>
		</div>

		<div class="modal-footer flex justify-end pt-2">
			<button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Action</button>
			<button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
		</div>
		
	  </div>
	</div>

  </div>

 <script>
 
	var openmodal = document.querySelectorAll('.modal-open')
	for (var i = 0; i < openmodal.length; i++) {
		openmodal[i].addEventListener('click', function(event){
		  event.preventDefault()
		  toggleModal()
		})
	}

	const overlay = document.querySelector('.modal-overlay')
	overlay.addEventListener('click', toggleModal)

	var closemodal = document.querySelectorAll('.modal-close')
	for (var i = 0; i < closemodal.length; i++) {
		closemodal[i].addEventListener('click', toggleModal)
	}

	document.onkeydown = function(evt) {
		evt = evt || window.event
		var isEscape = false
		if ("key" in evt) {
			isEscape = (evt.key === "Escape" || evt.key === "Esc")
		} else {
			isEscape = (evt.keyCode === 27)
		}
		if (isEscape && document.body.classList.contains('modal-active')) {
			toggleModal()
		}
	};


	function toggleModal () {
	  const body = document.querySelector('body')
	  const modal = document.querySelector('.modal')
	  modal.classList.toggle('opacity-0')
	  modal.classList.toggle('pointer-events-none')
	  body.classList.toggle('modal-active')
	}

 
</script>
</body>

</html>
