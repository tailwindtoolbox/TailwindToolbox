<nav class="flex items-center justify-between flex-wrap fixed w-full z-10 pin-t bg-grey">
  <div class="flex items-center flex-no-shrink">
    <a class="no-underline" href="#">
      <span class="text-2xl pl-2">Your Brand</span>
    </a>
  </div>

  <div class="block lg:hidden">
    <button id="nav-toggle" class="flex items-center">
      ☰
    </button>
  </div>

  <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block" id="nav-content">
    <ul class="list-reset lg:flex justify-end flex-1 items-center">
      <li class="mr-3">
        <a class="inline-block py-2 px-4 text-white no-underline" href="#">Active</a>
      </li>
      <li class="mr-3">
        <a class="inline-block" href="#">link</a>
      </li>
      <li class="mr-3">
        <a class="inline-block" href="#">link</a>
      </li>
      <li class="mr-3">
        <a class="inline-block" href="#">link</a>
      </li>
    </ul>
  </div>
</nav>


<script>
  /*Javascript to toggle the menu*/
  document.getElementById('nav-toggle').onclick = function(){
    document.getElementById("nav-content").classList.toggle("hidden");
  }
</script>