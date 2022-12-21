<template>
  <div class="details d-flex container-lg align-items-center py-5">
    <hr>
     <div class="col-lg-4 col-sm-6 col-12"><img src="#" alt="Immagine logo ristorante"></div>
     <div class="col-lg-4 col-sm-6 col-12">
        <h1>Nome ristorante</h1>
        <p>Categoria</p>
        <p>Posizione</p>

     </div>
     <div class="col-lg-4 col-sm-6 col-12">
        <button>Ordina</button>
     </div>
     <hr>
  </div>
</template>

<script>

export default {
name: 'RestaurantdetailsComponent'
}
</script>

<style scoped>
.details{
    margin-top: 50px;
}
</style>
