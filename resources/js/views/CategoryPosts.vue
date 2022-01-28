<template>
    <posts-list :posts="posts"></posts-list>
</template>

<script>
import PostsList from "../components/PostsList";

export default {
    components: {
        PostsList,
    },
    data () {
        return {
            posts: [],
        }
    },
    mounted() {
        axios.get(`/api/categorias/${this.$route.params.category}`)
            .then(response => {
                this.posts = response.data.data;
            })
            .catch(err => {
                console.log(err)
            })
    }
}
</script>
