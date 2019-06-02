<template>
  <Layout>

    <!-- Learn how to use images here: https://gridsome.org/docs/images -->
    <!-- <g-image alt="Example image" src="~/favicon.png" width="135" /> -->

    <div class="container mx-auto  py-16">

        <ul class=" font-bold  w-3/5">
          <li class="hover:text-gray-600  text-lg sm:text-2xl  mb-10 " v-for="post in $page.posts.edges" :key="post.id">
            <g-link :to="post.node.path">
              {{ post.node.title }}
            </g-link>
          </li>
        </ul>

    </div>



<!--
    <p class="home-links">
      <a href="https://gridsome.org/docs" target="_blank" rel="noopener">Gridsome Docs</a>
      <a href="https://github.com/gridsome/gridsome" target="_blank" rel="noopener">GitHub</a>
    </p> -->

  </Layout>
</template>

<page-query>
query Posts {
  posts: allPost {
    edges {
      node {
        id
        title
        path
      }
    }
  }
}
</page-query>

<script>
export default {
  metaInfo: {
    title: 'Hello, world!'
  }
}
</script>

<style>
.home-links a {
  margin-right: 1rem;
}
</style>
