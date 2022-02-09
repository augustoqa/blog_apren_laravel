<template>
    <section class="post container">

<!--        @include( $post->viewType() )-->

        <div class="content-post">

            <post-header :post="post"></post-header>

            <div class="image-w-text" v-html="post.body"></div>

            <footer class="container-flex space-between">
                <social-links :description="post.title" />
                <div class="tags container-flex">
                    <span v-for="tag in post.tags" class="tag c-gray-1 text-capitalize">
                        <tag-link :tag="tag" />
                    </span>
                </div>
            </footer>
            <div class="comments">
                <div class="divider"></div>
                <disqus-comments />
            </div><!-- .comments -->
        </div>
    </section>
</template>

<script>
import DisqusComments from '../components/DisqusComments'
import SocialLinks from '../components/SocialLinks'
import TagLink from '../components/TagLink'

export default {
    props: ['url'],
    components: {
        DisqusComments,
        SocialLinks,
        TagLink,
    },
    data() {
        return {
            post: {
                owner: {},
                category: {},
            }
        }
    },
    mounted() {
        axios.get(`/api/blog/${this.url}`)
            .then(res => {
                this.post = res.data
            })
            .catch(err => {
                console.log(err.response.data)
            })
    }
}
</script>
