<template>
    <paginator
        :url="`/api/etiquetas/${this.tag}`"
        component-name="posts-list"
    />
</template>

<script>
import Paginator from "../components/Paginator";

export default {
    components: {
        Paginator,
    },
    props: ['tag'],
}
</script>
