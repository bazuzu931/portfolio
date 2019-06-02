<template>
  <div class=" font-sans  text-gray-800 leading-normal flex flex-col min-h-screen border-t-8  border-black">


    <header class="">
      <!-- <strong>
        <g-link to="/">{{ $static.metaData.siteName }}</g-link>
      </strong> -->
      <nav class="container mx-auto flex justify-between items-center py-8">
        <a href="/"><img class="w-20 h-20" src="../../static/logo.png" alt=""></a>
        <ul class="uppercase text-sm sm:text-lg  font-bold flex ">
          <li class="mr-8"><a href="/" class="text-gray-800 hover:text-gray-600">Главная</a></li>
          <li class="mr-8"><a href="/about" class="text-gray-800 hover:text-gray-600">Обо мне</a></li>
        </ul>
        <!-- <g-link class="nav__link" to="/">Home</g-link> -->
        <!-- <g-link class="nav__link" to="/about">About</g-link> -->
      </nav>
    </header>


    <div class="flex-grow  ">
      <slot/>
    </div>


    <footer class="bg-black text-white">
      <div class="container mx-auto flex items-center justify-between py-5 sm:py-8 text-xs sm:text-lg">
        <div>Copyright 2019. All rights reserved</div>
        <ul class="flex items-center">

          <li class=" ">
            <a href="/">az-trip.com</a>
          </li>

          <!-- <li class="mr-8">
            <a href="#">A</a>
          </li> -->
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