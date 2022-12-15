<template>
    <div class="bg-dark boo-footer-bg">
        <footer class="d-flex justify-content-around container">

            <div class="card">
                <h3>Scopri Deliveboo</h3>
                <ul>
                    <li>Investitori</li>
                    <li>Chi siamo</li>
                    <li>Ristoranti</li>
                    <li>Altro</li>
                    <li>Pressroom</li>
                    <li>Programmazione</li>
                    <li>Design</li>
                    <li>Lavora con noi</li>
                    <li>Diventa nostro partner</li>
                </ul>
            </div>

            <div class="card">
                <h3>Note legali</h3>
                <ul>
                    <li>Termini e condizioni</li>
                    <li>Informativa sulla privacy</li>
                    <li>Cookies</li>
                </ul>
            </div>

            <div class="card">
                <h3>Aiuto</h3>
                <ul>
                    <li>Contatti</li>
                    <li>FAQ</li>
                    <li>Tipi di cucina</li>
                </ul>
            </div>

            <div class="card">
                <h3>Porta Deliveboo con te</h3>
                <button type="button" class="btn btn-dark">Collegamento App Store</button>
                <button type="button" class="btn btn-dark">Collegamento Google Play</button>
            </div>

        </footer>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>



<style scoped lang="scss">
.boo-footer-bg{
    height: 25rem;
}

ul{
    list-style: none;

}



</style>
