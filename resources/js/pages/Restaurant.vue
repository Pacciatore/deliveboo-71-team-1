<template>
    <div>

        <NavbarComponent />
        <!-- Per distanziare la fixed nav -->
        <div class="p-5"></div>

        <RestaurantdetailsComponent :restaurant="restaurant" />
        <PlatesrestaurantComponent :plates="plates" />
    </div>
</template>

<script>
import NavbarComponent from '../components/NavbarComponent.vue';

import RestaurantdetailsComponent from '../../js/components/RestaurantdetailsComponent.vue'
import PlatesrestaurantComponent from '../../js/components/PlatesrestaurantComponent.vue'


export default {
    name: 'Restaurant',
    components: {
        NavbarComponent,
        RestaurantdetailsComponent,
        PlatesrestaurantComponent
    },
    data() {
        return {
            loading: true,
            restaurant: {},
            plates: {},

        }
    },
    mounted() {
        const slug = this.$route.params.slug;

        this.loadPage('api/restaurants/' + slug);
        this.loadPlates('/api/plates');

    },
    methods: {
        loadPage(url) {
            // console.log(url);

            axios.get(url).then(({ data }) => {
                if (data.success) {
                    // console.log('data', data)
                    this.restaurant = data.results;
                    // console.log(this.restaurant)
                } else {
                    //  this.errorMessage = data.error;
                    this.$router.push({ name: 'NotFound' });
                }
                this.loading = false;
            }).catch(e => {
                console.log(e);
            })
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

<style>

</style>
