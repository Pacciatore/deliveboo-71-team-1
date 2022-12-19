<template>
    <div>

        <NavbarComponent />
        <JumboComponent />
        <SearchComponent @search="search" />
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

            types: {},
            restaurants: {}
        }
    },
    mounted() {
        this.loadRestaurant('api/restaurants')
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
                })
                .catch((e) => {
                    this.loading = false;
                    this.errorMessage = 'Error: ' + e.message + '   Reload page!';
                    console.log(e)
                })

        },

        getDataFromApiResponse(response) {
            console.log('data from api: ', response);
            return response.status === 200 ? response.data.results : []
        },

        loadRestaurant(url) {
            axios.get(url).then(({ data }) => {
                if (data.success) {
                    this.restaurants = data.results;
                    console.log('restaurants loaded: ', data.results.data)
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
