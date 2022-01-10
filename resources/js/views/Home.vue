<template>
    <section class="posts container">
        <!--        @if (isset($title))-->
        <!--            <h3>{{ $title }}</h3>-->
        <!--        @endif-->

        <article v-for="post in posts" class="post">

            <!--                @include( $post->viewType('home') )-->

            <div class="content-post">

                <!--                    @include('posts.header')-->

                <h1 v-text="post.title"></h1>

                <div class="divider"></div>

                <p v-html="post.excerpt"></p>

                <footer class="container-flex space-between">
                    <div class="read-more">
                        <!--                            <a href="{{ route('posts.show', $post) }}" class="text-uppercase c-green">Leer más</a>-->
                    </div>

                    <!--                        @include('posts.tags')-->

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

