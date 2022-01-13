<template>
    <section class="posts container">
        <!--        @if (isset($title))-->
        <!--            <h3>{{ $title }}</h3>-->
        <!--        @endif-->

        <article v-for="post in posts" class="post">

            <!--                @include( $post->viewType('home') )-->

            <div class="content-post">

                <!--                    @include('posts.header')-->
                <header class="container-flex space-between">
                    <div class="date">
                        <span class="c-gray-1">
                            {{ post.published_date }} / {{ post.owner.name }}
                        </span>
                                    </div>
                                    <div class="post-category">
                        <span class="category text-capitalize">
                            <a href="#">{{ post.category.name }}</a>
<!--                            <a href="{{ route('categories.show', $post->category) }}">-->
<!--                                {{ $post->category->name }}-->
<!--                            </a>-->
                        </span>
                    </div>
                </header>

                <h1 v-text="post.title"></h1>

                <div class="divider"></div>

                <p v-html="post.excerpt"></p>

                <footer class="container-flex space-between">
                    <div class="read-more">
                        <router-link
                            :to="{name: 'posts_show', params: {url: post.url}}"
                            class="text-uppercase c-green"
                        >
                            Leer más
                        </router-link>
                    </div>

                    <!--                        @include('posts.tags')-->
                    <div class="tags container-flex">
                        <span v-for="tag in post.tags" class="tag c-gray-1 text-capitalize">
                            <a href="#">#{{ tag.name }}</a>
                        </span>
                    </div>
                </footer>
            </div>
        </article>
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
export default {
    data () {
        return {
            posts: [],
        }
    },
    mounted() {
        axios.get('/api/posts')
            .then(response => {
                this.posts = response.data.data;
            })
            .catch(err => {
                console.log(err)
            })
    }
}
</script>

