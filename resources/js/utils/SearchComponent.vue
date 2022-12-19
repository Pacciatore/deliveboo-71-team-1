<template>
    <div class="container py-2">

        <div class="filter-selection">

            <span>Selezione tipologia di ristorante: </span>

            <select name="types" v-model="typesFilter" @change="getTypesFilter()">
                <option value="" selected>All</option>
                <option v-if="loading == false" v-for="type in types.data" :value="type.name">
                    {{ type.name }}
                </option>
            </select>

        </div>

    </div>
</template>

<script>
export default {
    name: 'SearchComponent',
    data() {
        return {
            plates: {},
            types: {},
            typesFilter: '',

            errorMessage: '',
            loading: true
        }
    },
    mounted() {
        this.loadPlates('/api/plates');
        this.loadTypes('/api/types');
        this.getTypesFilter();
    },
    methods: {

        getTypesFilter() {
            console.log('ricerca....', this.typesFilter);
            this.$emit('search', this.typesFilter);
        },

        loadPlates(url) {
            axios.get(url).then(({ data }) => {
                if (data.success) {
                    this.plates = data.results;
                    console.log('plates loaded: ', data.results.data)
                } else {
                    this.errorMessage = data.error;
                }
                this.loading = false;
            });
        },
        loadTypes(url) {
            axios.get(url).then(({ data }) => {
                if (data.success) {
                    this.types = data.results;
                    console.log('types loaded: ', data.results.data)
                } else {
                    this.errorMessage = data.error;
                }
                this.loading = false;
            });
        },
        typeCheck(id) {
            console.log(id)
        }


    }
}
</script>

<style lang="scss" scoped>

</style>
