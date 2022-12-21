<template>
    <div>

        <NavbarComponent />
        <!-- Per distanziare la fixed nav -->
        <div class="p-5"></div>

        <restaurantdetails-component></restaurantdetails-component>
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


    }
}
</script>

<style>

</style>
