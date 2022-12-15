<template>
    <div class="container">

        <p v-if="response"> {{ response.name }} </p>

        <p v-else>Nessun risultato</p>

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
