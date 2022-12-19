<template>
    <div>

        <NavbarComponent />
        <JumboComponent />
        <SearchComponent @search="search" :types="typesList" />
        <SearchResponseComponent :filter="types" :restaurants="restaurants" />
        <CenterComponent />
        <PartnerComponent />
        <FooterComponent />

    </div>
</template>

<script>
import NavbarComponent from '../components/NavbarComponent.vue';
import JumboComponent from '../components/JumboComponent.vue';
import CenterComponent from '../components/CenterComponent.vue';
import PartnerComponent from '../components/PartnerComponent.vue';
import FooterComponent from '../components/FooterComponent.vue';

import SearchComponent from '../utils/SearchComponent.vue';
import SearchResponseComponent from '../utils/SearchResponseComponent.vue';

export default {
    name: 'Home',
    components: {
        NavbarComponent,
        JumboComponent,
        CenterComponent,
        PartnerComponent,
        FooterComponent,
        SearchResponseComponent,
        SearchComponent
    },
    data() {
        return {
            loading: true,
            errorMessage: '',

            typesList: [],
            plates: {},

            types: {},
            restaurants: []
        }
    },
    mounted() {
        this.loadRestaurant('api/restaurants');
        this.loadTypes('/api/types');
        this.loadPlates('/api/plates');

    },
    methods: {

        search(query) {
            this.queryApi(query)
        },

        queryApi(elementToSearch) {

            this.loading = true;

            axios.get(`api/types/${elementToSearch}`)
                .then((response) => {
                    this.loading = false;
                    this.types = this.getDataFromApiResponse(response);
                    console.log('risultato queryApi', this.types)
                })
                .catch((e) => {
                    this.loading = false;
                    this.errorMessage = 'Error: ' + e.message + '   Reload page!';
                    console.log(e)
                })

        },

        getDataFromApiResponse(response) {
            console.log('data from api: ', response);
            return response.status === 200 ? response.data.data : {}
        },

        // Caricamento di tutti i ristoranti/utenti
        loadRestaurant(url) {
            axios.get(url).then(({ data }) => {
                if (data.success) {
                    this.restaurants = data.data;
                    console.log('restaurants loaded: ', data.data)
                } else {
                    this.errorMessage = data.error;
                }
                this.loading = false;
            });
        },

        // Caricamento di tutte le tipologie di ristorante
        loadTypes(url) {
            axios.get(url).then(({ data }) => {
                if (data.success) {
                    this.typesList = data.data;
                    console.log('typesList loaded: ', data.data)
                } else {
                    this.errorMessage = data.error;
                }
                this.loading = false;
            });
        },

        // Caricamento di tutti i piatti
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


    }
}
</script>

<style lang="scss" scoped>

</style>
