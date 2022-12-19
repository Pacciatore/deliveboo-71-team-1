<template>
    <div class="container">

        <p v-if="!filter.data"> {{ filter.name }} </p>

        <div v-else>

            <div class="d-flex flex-wrap">
                <div v-for="restaurant in restaurants.data" class="card p-3 col-4">
                    <h4>{{ restaurant.name }}</h4>
                    <div v-if="restaurant.imgPath" class="img-container align-self-center">
                        <img class="img-fluid" :src="'/storage/' + restaurant.imgPath" :alt="restaurant.name">
                    </div>
                </div>
            </div>


        </div>

    </div>
</template>

<script>
export default {
    name: 'SearchResponseComponent',
    props: {
        filter: Object,
        restaurants: Object
    }
}
</script>

<style lang="scss" scoped>

</style>
