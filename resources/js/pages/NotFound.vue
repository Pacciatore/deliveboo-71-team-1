<template lang="">
    <div>
        <h1>ERROR 404: PAGE NOT FOUND</h1>

        <router-link :to="{ name: 'home' }">Go to Home</router-link>
    </div>
</template>
<script>
export default {
    name: 'NotFound'
}
</script>
<style lang="scss" scoped>

</style>
