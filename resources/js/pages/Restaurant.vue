<template>
    <div>
        <navbarrestaurant-component></navbarrestaurant-component>
        <restaurantdetails-component></restaurantdetails-component>
        <platesrestaurant-component></platesrestaurant-component>
    </div>
</template>

<script>

import NavbarrestaurantComponent from '../../js/components/NavbarrestaurantComponent.vue'
import RestaurantdetailsComponent from '../../js/components/RestaurantdetailsComponent.vue'
import PlatesrestaurantComponent from '../../js/components/PlatesrestaurantComponent.vue'


export default {
  name: 'Restaurant',
  components:{
    NavbarrestaurantComponent,
    RestaurantdetailsComponent,
    PlatesrestaurantComponent


  }
}
</script>

<style>

</style>
