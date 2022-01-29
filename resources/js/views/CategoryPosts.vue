<template>
    <posts-list :posts="posts"></posts-list>
</template>

<script>
import PostsList from "../components/PostsList";

export default {
    props: ['category'],
    components: {
        PostsList,
    },
    data () {
        return {
            posts: [],
        }
    },
    mounted() {
        axios.get(`/api/categorias/${this.category}`)
            .then(response => {
                this.posts = response.data.data;
            })
            .catch(err => {
                console.log(err)
            })
    }
}
</script>
