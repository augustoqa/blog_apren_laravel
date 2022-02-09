<template>
    <paginator
        :url="`/api/categorias/${this.category}`"
        component-name="posts-list"
    />
</template>

<script>
import Paginator from "../components/Paginator";

export default {
    props: ['category'],
    components: {
        Paginator,
    },
}
</script>
