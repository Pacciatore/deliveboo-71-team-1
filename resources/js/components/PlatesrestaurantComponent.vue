<template>
<div>
  <div class="container-lg d-flex ">
    <h3>Piatti</h3>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Nome piatto</h5>
            <p class="card-text">Descrizione piatto</p>
            <a href="#" class="btn btn-primary" v-on:click="addCart">Aggiungi al <i class="fa-solid fa-cart-shopping"></i></a>
          </div>
       </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
name: 'PlaterestaurantComponent',

    methods: {

        addCart: function addItemToCart(item) {
            var cart = document.getElementById('cart');
            var itemName = document.createElement('div');
            itemName.innerHTML = item;
            cart.appendChild(itemName);

        }


    }





}
</script>

<style>

</style>
