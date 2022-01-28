<template>
    <section class="posts container">
        <!--        @if (isset($title))-->
        <!--            <h3>{{ $title }}</h3>-->
        <!--        @endif-->

        <post-list-item
            v-for="post in posts"
            :post="post"
            :key="post.id" />
        <!--        @empty-->

        <article class="post" v-if="! posts.length">
            <div class="content-post">
                <h1>No hay publicaciones todavía.</h1>
            </div>
        </article>
        <!--        @endforelse-->
    </section><!-- fin del div.posts.container -->
</template>

<script>
import PostListItem from "../components/PostListItem";

export default {
    components: {PostListItem},
    props: ['posts']
}
</script>
