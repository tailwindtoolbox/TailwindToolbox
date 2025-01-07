<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tailwind Starter Template - Rainblue Landing Page : Windy Toolbox</title>
  <meta name="description"
    content="(Formerly Tailwind Toolbox) Free open source Tailwind CSS starter template (Hero Product) to use with node.js/npm, postcss+purgecss!">
  <meta name="keywords"
    content="tailwind,tailwindcss,tailwind css,css,starter template,free template,hero, dark, gradient">
  <?php include '../includes/head-templates.php'; ?>
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
  <!--Replace with your tailwind.css once created-->
  <link href=" https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet" />

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap");

    html {
      font-family: "Poppins", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }
  </style>
</head>

<body class="m-6 leading-normal tracking-normal text-indigo-400 bg-fixed bg-cover"
  style="background-image: url('header.png');">
  <div class="h-full">
    <!--Nav-->
    <div class="container w-full mx-auto">
      <div class="flex items-center justify-between w-full">
        <a class="flex items-center text-2xl font-bold text-indigo-400 no-underline hover:no-underline lg:text-4xl"
          href="#">
          Rain<span
            class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">blur</span>
        </a>

        <div class="flex content-center justify-end w-1/2">
          <a class="inline-block h-10 p-2 text-center text-blue-300 no-underline duration-300 ease-in-out transform hover:text-pink-500 hover:text-underline md:h-auto md:p-4 hover:scale-125"
            href="https://twitter.com/intent/tweet?url=#">
            <svg class="h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
              <path
                d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z">
              </path>
            </svg>
          </a>
          <a class="inline-block h-10 p-2 text-center text-blue-300 no-underline duration-300 ease-in-out transform hover:text-pink-500 hover:text-underline md:h-auto md:p-4 hover:scale-125"
            href="https://www.facebook.com/sharer/sharer.php?u=#">
            <svg class="h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
              <path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <!--Main-->
    <div class="container flex flex-col flex-wrap items-center pt-24 mx-auto md:pt-36 md:flex-row">
      <!--Left Col-->
      <div class="flex flex-col justify-center w-full overflow-y-hidden xl:w-2/5 lg:items-start">
        <h1 class="my-4 text-3xl font-bold leading-tight text-center text-white opacity-75 md:text-5xl md:text-left">
          Main
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">
            Hero Message
          </span>
          to sell yourself!
        </h1>
        <p class="mb-8 text-base leading-normal text-center md:text-2xl md:text-left">
          Sub-hero message, not too long and not too short. Make it just right!
        </p>

        <form class="w-full px-8 pt-6 pb-8 mb-4 bg-gray-900 rounded-lg shadow-lg opacity-75">
          <div class="mb-4">
            <label class="block py-2 mb-2 font-bold text-blue-300" for="emailaddress">
              Signup for our newsletter
            </label>
            <input
              class="w-full p-3 leading-tight text-gray-700 transition duration-300 ease-in-out transform border rounded shadow appearance-none focus:ring hover:scale-105"
              id="emailaddress" type="text" placeholder="you@somewhere.com" />
          </div>

          <div class="flex items-center justify-between pt-4">
            <button
              class="px-4 py-2 font-bold text-white transition duration-300 ease-in-out transform rounded bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 focus:ring hover:scale-105"
              type="button">
              Sign Up
            </button>
          </div>
        </form>
      </div>

      <!--Right Col-->
      <div class="w-full p-12 overflow-hidden xl:w-3/5">
        <img
          class="w-full mx-auto transition duration-700 ease-in-out transform md:w-4/5 -rotate-6 hover:scale-105 hover:rotate-6"
          src="macbook.svg" />
      </div>

      <div class="mx-auto md:pt-16">
        <p class="pb-8 font-bold text-center text-blue-400 lg:pb-6">
          Download our app:
        </p>
        <div class="flex justify-center w-full pb-24 md:justify-start lg:pb-0 fade-in">
          <img src="App Store.svg" class="h-12 pr-12 duration-300 ease-in-out transform hover:scale-125" />
          <img src="Play Store.svg" class="h-12 duration-300 ease-in-out transform hover:scale-125" />
        </div>
      </div>

      <!--Footer-->
      <div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in">
        <a class="text-gray-500 no-underline hover:no-underline" href="#">&copy; App 2020</a>
        - Template by
        <a class="text-gray-500 no-underline hover:no-underline"
          href="https://www.tailwindtoolbox.com">TailwindToolbox.com</a>
      </div>
    </div>
  </div>
</body>

</html>