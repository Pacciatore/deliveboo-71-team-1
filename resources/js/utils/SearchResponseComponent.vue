<template>
    <div class="container">

        <p v-if="!response.data"> {{ response.name }} </p>

        <p v-else>Tutti i ristoranti</p>

    </div>
</template>

<script>
export default {
    name: 'SearchResponseComponent',
    props: {
        response: Object
    }
}
</script>

<style lang="scss" scoped>

</style>
