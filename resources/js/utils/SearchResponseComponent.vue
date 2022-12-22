<template>
    <div class="container">

        <!-- Ristoranti filtrati -->
        <div v-if="filter.users && filter.users.length != 0">

            <div class="d-flex flex-wrap">
                <div v-for="filteredRestaurant in filter.users" :key="filteredRestaurant.id" class="card p-3 col-4">
                    <h4 @click="showRestaurant(filteredRestaurant.slug)">{{ filteredRestaurant.activity_name }}</h4>
                    <div class="img-container align-self-center">
                        <img class="img-fluid"
                            :src="!filteredRestaurant.imgPath ? '/assets/restaurant-default.jpg' : '/storage/' + filteredRestaurant.imgPath"
                            :alt="filteredRestaurant.name">
                    </div>
                </div>
            </div>

        </div>

        <div v-else-if="filter.users">
            <div class="danger">Nessun risultato</div>
        </div>


        <!-- Tutti i ristoranti -->
        <div v-else>

            <div class="d-flex flex-wrap">
                <div v-for="restaurant in restaurants.data" :key="restaurant.id" class="card p-3 col-4">
                    <h4 @click="showRestaurant(restaurant.slug)">{{ restaurant.activity_name }}</h4>
                    <div class="img-container align-self-center">
                        <img class="img-fluid"
                            :src="!restaurant.imgPath ? '/assets/restaurant-default.jpg' : '/storage/' + restaurant.imgPath"
                            :alt="restaurant.name">
                    </div>
                </div>
            </div>


        </div>

    </div>
</template>

<script>
import { runInContext } from 'vm';

export default {
    name: 'SearchResponseComponent',
    data() {
        return {
            userList: []
        }
    },
    props: {
        filter: Object,
        restaurants: Object
    },
    mounted() {
        this.userList = this.getUsers();
    },
    methods: {
        getUsers() {
            console.log('utenti da filtro', this.filter);
            return this.filter.users;
        },
        showRestaurant(slug) {
            console.log('click ok');

            return this.$router.push({ name: 'restaurant', params: { slug } })



        }
    },
}
</script>

<style lang="scss" scoped>

</style>
