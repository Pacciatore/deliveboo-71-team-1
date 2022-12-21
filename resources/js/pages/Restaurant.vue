<template>
    <div>

        <NavbarComponent />
        <!-- Per distanziare la fixed nav -->
        <div class="p-5"></div>

        <RestaurantdetailsComponent :restaurant="restaurant" />
        <platesrestaurant-component></platesrestaurant-component>
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
        }
    },
    mounted() {
        const slug = this.$route.params.slug;

        this.loadPage('api/restaurants/' + slug);

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
        }
    }


}
</script>

<style>

</style>
