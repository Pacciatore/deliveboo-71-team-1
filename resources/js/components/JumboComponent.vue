<template>
    <div>

        <div class="boo-jumbo bg-dark text-white text-center">

            <h1>I piatti dei ristoranti che ami</h1>
            <h3>Trova i ristoranti che più ti piacciono nella tua zona!</h3>
            <input class="w-50 p-2" v-model="searchText" @keyup.enter="getSearchText" type="text" name="searchBar"
                id="searchBar" placeholder="Inserire ristorante da cercare...">

        </div>




    </div>
</template>

<script>
export default {
    name: 'JumboComponent',
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



<style scoped lang="scss">
.boo-jumbo {
    padding: 40px;

    * {
        padding: 10px 0;
    }
}
</style>
