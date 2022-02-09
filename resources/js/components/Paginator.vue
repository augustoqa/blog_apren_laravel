<template>
	<div>
		<component :is="componentName" :items="items"></component>

		<pagination-links :pagination="pagination" />
	</div>
</template>

<script>
import PaginationLinks from "../components/PaginationLinks";
import PostsList from "../components/PostsList";

export default {
	components: {
		PaginationLinks,
		PostsList,
	},
	props: ['url', 'componentName'],
	data() {
		return {
			pagination: {},
			items: [],
		}
	},
    mounted() {
        axios.get(`${this.url}?page=${this.$route.query.page || 1}`)
            .then(response => {
                this.items = response.data.data;
                this.pagination = response.data;
                delete this.pagination.data;
            })
            .catch(err => {
                console.log(err)
            })
    },
}
</script>

<style lang="scss">
.pagination {
    a.active {
        background-color: #1abc9c;
        color: white;
    }
}
</style>