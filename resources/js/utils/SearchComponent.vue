<template>
    <div>

        componente per la ricerca

    </div>
</template>

<script>
export default {
    name: 'SearchComponent',
    data() {
        return {
            plates: undefined,
            searchText: '',

            errorMessage: '',
            loading: true
        }
    },
    mounted() {
        console.log('JumboComponent exists');

        this.loadPage('/api/plates');
    },
    methods: {

        getSearchText() {
            console.log('ricerca....', this.searchText);
            this.$emit('search', this.searchText);
        },

        loadPage(url) {
            axios.get(url).then(({ data }) => {
                if (data.success) {
                    this.plates = data.results;
                    console.log(data.results.data)
                } else {
                    this.errorMessage = data.error;
                }
                this.loading = false;
            });
        }

    }
}
</script>

<style lang="scss" scoped>

</style>
