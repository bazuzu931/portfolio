<template>
  <Layout>

    <!-- Learn how to use images here: https://gridsome.org/docs/images -->
    <!-- <g-image alt="Example image" src="~/favicon.png" width="135" /> -->

    <p class="text-white bg-blue-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur fuga quibusdam, error iusto hic obcaecati enim molestias eaque et, vel, eveniet commodi quidem sapiente tempore quia! Est, fugiat hic nulla illum atque fuga cumque repudiandae, voluptate in odit modi sequi architecto dicta? Incidunt assumenda, ratione nulla labore voluptas. Amet, possimus voluptates. Ratione ab, quibusdam ut accusamus iusto atque quas repellat nisi porro, illo nihil reprehenderit vero temporibus cum explicabo non doloremque? Cum nulla voluptatibus, voluptate tempora. Odio cum provident officia aut eum ex, rem explicabo officiis. Nostrum distinctio ipsum doloribus, ex deserunt illo ad, dicta cumque fugiat hic harum? Recusandae.</p>

    <ul>
      <li v-for="post in $page.posts.edges" :key="post.id">
        <g-link :to="post.node.path">
          {{ post.node.title }}
        </g-link>
      </li>
    </ul>

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
