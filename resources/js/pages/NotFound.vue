<template>
    <div class="error-404 d-flex flex-column justify-content-center align-items-center pb-5">

        <div class="navbar-brand">
            <img src="/assets/DELIVEBOO.png" alt="">
        </div>

        <div class="page-message d-flex flex-column align-items-center">
            <h1>ERRORE 404: PAGINA NON TROVATA</h1>
            <p>Qualcosa è andato storto :(</p>

            <router-link class="btn btn-outline-info mt-5" :to="{ name: 'home' }">Torna alla home</router-link>

        </div>

    </div>
</template>
<script>
export default {
    name: 'NotFound'
}
</script>
<style lang="scss" scoped>
@import '../../sass/variables';

.error-404 {
    height: 100vh;
    width: 100vw;

    background-color: $boo-orange;

    h1 {
        color: $boo-red-hover;
    }

    p {
        color: $boo-red-hover;
    }

    .btn-outline-info {
        font-size: 1.5rem;
        color: $boo-red;
        border-color: $boo-red;

        &:hover {
            color: #fff;
            background-color: $boo-red;
            border-color: $boo-red-hover;
        }
    }

}
</style>
