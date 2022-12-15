<template>
    <div>

        <div class="boo-jumbo bg-dark text-white d-flex flex-column align-items-center justify-content-around">

            <h1>I piatti dei ristoranti che ami e la spesa, a domicilio</h1>
            <p>Trova i ristoranti che più ti piacciono nella tua zona!</p>
            <input class="w-50 p-2" v-model="searchText" @keyup.enter="getSearchText" type="text" name="searchBar"
                id="searchBar" placeholder="Inserire ristorante da cercare...">
            <p>Accedi per visualizzare i tuoi indirizzi recenti</p>

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
    height: 30rem;
}
</style>
