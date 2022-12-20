<template>
    <div>
        <navbarrestaurant-component></navbarrestaurant-component>
        <restaurantdetails-component></restaurantdetails-component>
    </div>
</template>

<script>bar

import NavbarrestaurantComponent from '../../js/components/NavbarrestaurantComponent.vue'
import RestaurantdetailsComponent from '../../js/components/RestaurantdetailsComponent.vue'


export default {
  name: 'Restaurant',
  components:{
    NavbarrestaurantComponent,
    RestaurantdetailsComponent

  }
}
</script>

<style>

</style>
