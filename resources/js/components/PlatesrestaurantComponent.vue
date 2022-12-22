<template>
    <div class="container">

        <div class="container-lg d-flex ">
            <h3>Piatti</h3>
        </div>

        <div class="container-fluid">

            <div class="row">

                <div class="col-sm-6 col-12">

                    <div class="card">

                        <div v-for="plate in plates.data" class="card-body">

                            <h5 class="card-title">{{ plate.name }}</h5>
                            <p class="card-text">{{ plate.description }}</p>
                            <a href="#" class="btn btn-primary" v-on:click="addCart">Aggiungi al <i
                                    class="fa-solid fa-cart-shopping"></i></a>

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
    props: {
        plates: Object,
    },
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
