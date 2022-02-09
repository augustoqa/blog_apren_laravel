<template>
    <paginator
        url="/api/posts"
        component-name="posts-list"
    />
</template>

<script>
import Paginator from "../components/Paginator";

export default {
    components: {
        Paginator,
    },
}
</script>
