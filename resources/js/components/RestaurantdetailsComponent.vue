<template>
    <div class="details d-flex container-lg align-items-center flex-wrap py-5">
        <hr>
        <div class="col-lg-6 col-12"><img src="#" class="img-fluid" alt="Immagine logo ristorante"></div>
        <div class="col-lg-6 col-12">
            <h1>{{ restaurant.activity_name }}</h1>

            <div class="types">
                <p v-for="type in restaurant.types">{{ type.name }}</p>
            </div>

            <p>Posizione</p>
        </div>
        <hr>
    </div>
</template>

<script>
import { METHODS } from 'http';


export default {
    name: 'RestaurantdetailsComponent',
    props: {
        restaurant: Object
    }

}
</script>

<style scoped>
.details {
    margin-top: 50px;
}
</style>
