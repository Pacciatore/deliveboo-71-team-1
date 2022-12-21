<template>
  <div class="details d-flex container-lg align-items-center flex-wrap py-5">
    <hr>
     <div class="col-lg-6 col-12"><img src="#" class="img-fluid" alt="Immagine logo ristorante"></div>
     <div class="col-lg-6 col-12">
        <h1>Nome ristorante</h1>
        <p>Categoria</p>
        <p>Posizione</p>
     </div>
     <hr>
  </div>
</template>

<script>
import { METHODS } from 'http';


export default {
name: 'RestaurantdetailsComponent',

}
</script>

<style scoped>
.details{
    margin-top: 50px;
}
</style>
