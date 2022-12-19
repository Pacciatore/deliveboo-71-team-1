<template>
    <div class="container py-2">

        <div class="filter-selection">

            <span>Selezione tipologia di ristorante: </span>

            <select name="types" v-model="typesFilter" @change="getTypesFilter()">
                <option :value="{}" selected>Tutti i ristoranti</option>
                <option v-for="type in types" :value="type.name">
                    {{ type.name }}
                </option>
            </select>

        </div>

    </div>
</template>

<script>
export default {
    name: 'SearchComponent',
    props: {
        types: Array
    },
    data() {
        return {
            typesFilter: {},

            errorMessage: '',
        }
    },
    mounted() {
        this.getTypesFilter();
    },
    methods: {

        getTypesFilter() {
            console.log('ricerca....', this.typesFilter);
            if (this.typesFilter == '') {
                this.typesFilter = {}
            }
            this.$emit('search', this.typesFilter);
        },

        typeCheck(id) {
            console.log(id)
        }


    }
}
</script>

<style lang="scss" scoped>

</style>
