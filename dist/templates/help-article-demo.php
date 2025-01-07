<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Tailwind Starter Template - Help Article: Windy Toolbox</title>
   <meta name="description"
      content="(Formerly Tailwind Toolbox) Free open source Tailwind CSS starter Help / FAQ / KB article">
   <meta name="keywords"
      content="tailwind,tailwindcss,tailwind css,css,starter template,free template,help, faq, knowledge base, kb">
   <?php include '../includes/head-templates.php'; ?>

   <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
   <!--Replace with your tailwind.css once created-->
   <style>
      @import url('https://fonts.googleapis.com/css?family=Lato');

      html {
         font-family: 'Lato', sans-serif;
      }
   </style>
</head>

<body class="tracking-normal tracking-wider bg-gray-100">
   <nav id="header" class="fixed top-0 z-10 w-full bg-white border-b border-gray-400">
      <div class="container flex flex-wrap items-center justify-between w-full py-4 mx-auto mt-0">
         <div class="flex items-center pl-4">
            <svg class="h-5 pr-3 text-purple-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
               <path
                  d="M0 2C0 .9.9 0 2 0h16a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm14 12h4V2H2v12h4c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2zM5 9l2-2 2 2 4-4 2 2-6 6-4-4z" />
            </svg>
            <a class="text-base text-xl font-extrabold text-gray-900 no-underline hover:no-underline" href="#">
               Help Article
            </a>
         </div>
         <div class="block pr-4 lg:hidden">
            <button id="nav-toggle"
               class="flex items-center px-3 py-2 text-gray-500 border border-gray-600 rounded appearance-none hover:text-gray-900 hover:border-purple-500 focus:outline-none">
               <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <title>Menu</title>
                  <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
               </svg>
            </button>
         </div>
         <div
            class="z-20 flex-grow hidden w-full mt-2 lg:flex lg:content-center lg:items-center lg:w-auto lg:block lg:mt-0"
            id="nav-content">
            <div class="content-center flex-1 w-full max-w-sm py-4 mx-auto lg:py-0">
               <div class="relative pl-4 pr-4 pull-right md:pr-0">
                  <input type="search" placeholder="Search"
                     class="w-full px-2 py-1 pl-10 text-sm leading-normal text-gray-800 transition bg-gray-100 border rounded appearance-none focus:outline-none focus:border-purple-500">
                  <div class="absolute search-icon" style="top: 0.375rem;left: 1.75rem;">
                     <svg class="w-4 h-4 text-gray-800 pointer-events-none fill-current"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                           d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                        </path>
                     </svg>
                  </div>
               </div>
            </div>
            <ul class="items-center justify-end list-reset lg:flex">
               <li class="py-2 mr-3 lg:py-0">
                  <a class="inline-block px-4 py-2 font-bold text-gray-900 no-underline" href="#">Active</a>
               </li>
               <li class="py-2 mr-3 lg:py-0">
                  <a class="inline-block px-4 py-2 text-gray-600 no-underline hover:text-gray-900 hover:underline"
                     href="#">link</a>
               </li>
               <li class="py-2 mr-3 lg:py-0">
                  <a class="inline-block px-4 py-2 text-gray-600 no-underline hover:text-gray-900 hover:underline"
                     href="#">link</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <!--Container-->
   <div class="container flex flex-wrap w-full px-2 pt-8 mx-auto mt-16 lg:pt-16">
      <div class="w-full text-xl leading-normal text-gray-800 lg:w-1/5 lg:px-6">
         <p class="py-2 text-base font-bold text-gray-700 lg:pb-6">Menu</p>
         <div class="sticky inset-0 block lg:hidden">
            <button id="menu-toggle"
               class="flex justify-end w-full px-3 py-3 bg-white border border-gray-600 rounded appearance-none lg:bg-transparent hover:border-purple-500 focus:outline-none">
               <svg class="float-right h-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
               </svg>
            </button>
         </div>
         <div
            class="sticky inset-0 z-20 hidden w-full h-64 mt-0 overflow-x-hidden overflow-y-auto bg-white border border-gray-400 shadow lg:h-auto lg:overflow-y-hidden lg:block lg:border-transparent lg:shadow-none lg:bg-transparent"
            style="top:5em;" id="menu-content">
            <ul class="list-reset">
               <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                  <a href="#"
                     class="block pl-4 text-gray-700 no-underline align-middle border-l-4 border-transparent hover:text-purple-500 lg:border-purple-500 lg:hover:border-purple-500">
                     <span class="pb-1 text-sm font-bold text-gray-900 md:pb-0">Home</span>
                  </a>
               </li>
               <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                  <a href="#"
                     class="block pl-4 text-gray-700 no-underline align-middle border-l-4 border-transparent hover:text-purple-500 lg:hover:border-gray-400">
                     <span class="pb-1 text-sm md:pb-0">Tasks</span>
                  </a>
               </li>
               <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                  <a href="#"
                     class="block pl-4 text-gray-700 no-underline align-middle border-l-4 border-transparent hover:text-purple-500 lg:hover:border-gray-400">
                     <span class="pb-1 text-sm md:pb-0">Messages</span>
                  </a>
               </li>
               <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                  <a href="#"
                     class="block pl-4 text-gray-700 no-underline align-middle border-l-4 border-transparent hover:text-purple-500 lg:hover:border-gray-400">
                     <span class="pb-1 text-sm md:pb-0">Analytics</span>
                  </a>
               </li>
               <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                  <a href="#"
                     class="block pl-4 text-gray-700 no-underline align-middle border-l-4 border-transparent hover:text-purple-500 lg:hover:border-gray-400">
                     <span class="pb-1 text-sm md:pb-0">Payments</span>
                  </a>
               </li>
            </ul>
         </div>
      </div>
      <div
         class="w-full p-8 mt-6 leading-normal text-gray-900 bg-white border border-gray-400 lg:w-4/5 lg:mt-0 border-rounded">
         <!--Title-->
         <div class="font-sans">
            <span class="text-base font-bold text-purple-500">&laquo;<span> <a href="#"
                     class="text-base font-bold text-purple-500 no-underline md:text-sm hover:underline">Back Link</a>
                  </p>
                  <h1 class="pt-6 pb-2 font-sans text-xl text-gray-900 break-normal">Help page title</h1>
                  <hr class="border-b border-gray-400">
         </div>
         <!--Post Content-->
         <!--Lead Para-->
         <p class="py-6">
            ?? Welcome fellow <a class="text-purple-500 no-underline hover:underline"
               href="https://www.tailwindcss.com">Tailwind CSS</a> fan. This starter template provides a starting point
            to create your own helpdesk / faq / knowledgebase articles using Tailwind CSS and vanilla Javascript.
         </p>
         <p class="py-6">The basic help article layout is available and all using the default Tailwind CSS classes
            (although there are a few hardcoded style tags). If you are going to use this in your project, you will want
            to convert the classes into components.</p>

         <script async type="text/javascript"
            src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom"
            id="_carbonads_js"></script>

         <p class="py-6">Sed dignissim lectus ut tincidunt vulputate. Fusce tincidunt lacus purus, in mattis tortor
            sollicitudin pretium. Phasellus at diam posuere, scelerisque nisl sit amet, tincidunt urna. Cras nisi diam,
            pulvinar ut molestie eget, eleifend ac magna. Sed at lorem condimentum, dignissim lorem eu, blandit massa.
            Phasellus eleifend turpis vel erat bibendum scelerisque. Maecenas id risus dictum, rhoncus odio vitae,
            maximus purus. Etiam efficitur dolor in dolor molestie ornare. Aenean pulvinar diam nec neque tincidunt,
            vitae molestie quam fermentum. Donec ac pretium diam. Suspendisse sed odio risus. Nunc nec luctus nisi.
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis nec nulla
            eget sem dictum elementum.</p>
         <ol>
            <li class="py-3">Maecenas accumsan lacus sit amet elementum porta. Aliquam eu libero lectus. Fusce vehicula
               dictum mi. In non dolor at sem ullamcorper venenatis ut sed dui. Ut ut est quam. Suspendisse quam quam,
               commodo sit amet placerat in, interdum a ipsum. Morbi sit amet tellus scelerisque tortor semper posuere.
            </li>
            <li class="py-3">Morbi varius posuere blandit. Praesent gravida bibendum neque eget commodo. Duis auctor
               ornare mauris, eu accumsan odio viverra in. Proin sagittis maximus pharetra. Nullam lorem mauris,
               faucibus ut odio tempus, ultrices aliquet ex. Nam id quam eget ipsum luctus hendrerit. Ut eros magna,
               eleifend ac ornare vulputate, pretium nec felis.</li>
            <li class="py-3">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
               Nunc vitae pretium elit. Cras leo mauris, tristique in risus ac, tristique rutrum velit. Mauris accumsan
               tempor felis vitae gravida. Cras egestas convallis malesuada. Etiam ac ante id tortor vulputate pretium.
               Maecenas vel sapien suscipit, elementum odio et, consequat tellus.</li>
         </ol>
         <blockquote class="pl-8 my-8 italic border-l-4 border-purple-500 md:pl-12">Example of blockquote - Lorem ipsum
            dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
         </blockquote>
         <p class="py-6">Example code block:</p>
         <pre class="p-2 font-mono text-base text-white bg-gray-900 rounded md:p-4">
            <code class="break-words whitespace-pre-wrap">
&lt;header class="site-header outer"&gt;
&lt;div class="inner"&gt;
{{&gt; "site-nav"}}
&lt;/div&gt;
&lt;/header&gt;
            </code>
         </pre>
         <!--/ Post Content-->
         <!-- Useful -->
         <hr class="py-4 border-b border-gray-400">
         <div class="flex items-center">
            <svg
               class="h-16 p-4 mr-2 text-gray-600 border rounded fill-current hover:shadow hover:bg-purple-100 hover:text-green-500"
               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
               <path
                  d="M11 0h1v3l3 7v8a2 2 0 0 1-2 2H5c-1.1 0-2.31-.84-2.7-1.88L0 12v-2a2 2 0 0 1 2-2h7V2a2 2 0 0 1 2-2zm6 10h3v10h-3V10z" />
            </svg>
            <svg
               class="h-16 p-4 mr-2 text-gray-600 border rounded fill-current hover:shadow hover:bg-purple-100 hover:text-red-500"
               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
               <path
                  d="M11 20a2 2 0 0 1-2-2v-6H2a2 2 0 0 1-2-2V8l2.3-6.12A3.11 3.11 0 0 1 5 0h8a2 2 0 0 1 2 2v8l-3 7v3h-1zm6-10V0h3v10h-3z" />
            </svg>
            <div class="pl-4">
               <p class="font-bold text-gray-800">Did you find this article useful?</p>
               <p class="pt-2 text-xs text-gray-600">0 out of 0 found this useful</p>
            </div>
         </div>
         <!-- /Useful -->
      </div>
      <!--Back link -->
      <div class="w-full px-4 py-6 text-base text-gray-500 lg:w-4/5 lg:ml-auto md:text-sm">
         <span class="text-base font-bold text-purple-500">&lt;<span> <a href="#"
                  class="text-base font-bold text-purple-500 no-underline md:text-sm hover:underline">Back to Help</a>
               </p>
      </div>
   </div>
   <!--/container-->
   <footer class="bg-white border-t border-gray-400 shadow">
      <div class="container flex py-8 mx-auto">
         <div class="flex flex-wrap w-full mx-auto">
            <div class="flex w-full lg:w-1/2 ">
               <div class="px-8">
                  <h3 class="font-bold text-gray-900">About</h3>
                  <p class="py-4 text-sm text-gray-600">
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus commodo
                     nec id erat. Suspendisse consectetur dapibus velit ut lacinia.
                  </p>
               </div>
            </div>
            <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right">
               <div class="px-8">
                  <h3 class="font-bold text-gray-900">Social</h3>
                  <ul class="items-center pt-3 text-sm list-reset">
                     <li>
                        <a class="inline-block py-1 text-gray-600 no-underline hover:text-gray-900 hover:underline"
                           href="#">Add social links</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <script></script>
   <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      var helpMenuDiv = document.getElementById("menu-content");
      var helpMenu = document.getElementById("menu-toggle");

      document.onclick = check;

      function check(e) {
         var target = (e && e.target) || (event && event.srcElement);


         //Nav Menu
         if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
               // click on the link
               if (navMenuDiv.classList.contains("hidden")) {
                  navMenuDiv.classList.remove("hidden");
               } else {
                  navMenuDiv.classList.add("hidden");
               }
            } else {
               // click both outside link and outside menu, hide menu
               navMenuDiv.classList.add("hidden");
            }
         }

         //Help Menu
         if (!checkParent(target, helpMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, helpMenu)) {
               // click on the link
               if (helpMenuDiv.classList.contains("hidden")) {
                  helpMenuDiv.classList.remove("hidden");
               } else {
                  helpMenuDiv.classList.add("hidden");
               }
            } else {
               // click both outside link and outside menu, hide menu
               helpMenuDiv.classList.add("hidden");
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
   </script>
</body>

</html>