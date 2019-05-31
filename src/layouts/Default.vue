<template>
  <div class="font-sans text-gray-800 leading-normal flex flex-col min-h-screen">
    <header class="border-t-8 border-black">
      <!-- <strong>
        <g-link to="/">{{ $static.metaData.siteName }}</g-link>
      </strong> -->
      <nav class="container mx-auto flex justify-between items-center py-8">
        <a href="/"><img class="w-20 h-20" src="../../static/logo.png" alt=""></a>
        <ul class="uppercase tracking-wide font-bold flex items-center">
          <li class="mr-8"><a href="#" class="text-gray-800 hover:text-gray-600">About</a></li>
          <li class="mr-8"><a href="#" class="text-gray-800 hover:text-gray-600">Portfolio</a></li>
        </ul>
        <!-- <g-link class="nav__link" to="/">Home</g-link> -->
        <!-- <g-link class="nav__link" to="/about">About</g-link> -->
      </nav>
    </header>
    <div class="flex-grow">
      <slot/>
    </div>
    <footer class="bg-black text-white">
      <div class="container mx-auto flex items-center justify-between py-8">
        <div>Copyright 2019. All rights reserved</div>
        <ul class="flex items-center">
          <li class="mr-8">
            <a href="#">A</a>
          </li>

          <li class="mr-8">
            <a href="#">A</a>
          </li>

          <li class="mr-8">
            <a href="#">A</a>
          </li>
        </ul>
      </div>
    </footer>
  </div>
</template>

<static-query>
query {
  metaData {
    siteName
  }
}
</static-query>

<style src="../main.css" />