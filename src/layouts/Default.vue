<template>
  <div class="font-sans text-gray-800 leading-normal">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore fugiat nulla nesciunt molestias hic iure reprehenderit assumenda dolorem quos enim.
    <header class="header">
      <strong>
        <g-link to="/">{{ $static.metaData.siteName }}</g-link>
      </strong>
      <nav class="nav">
        <g-link class="nav__link" to="/">Home</g-link>
        <g-link class="nav__link" to="/about">About</g-link>
      </nav>
    </header>
    <slot/>
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