<template>
    <div class="container-fluid bg-dark boo-footer-bg">
        <div class="container-xxl">
            <footer class="row justify-content-around gx-3 gy-3">

                <div class="card col-12 col-sm-10 col-md-5 col-lg-2 my-2">
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

                <div class="card col-12 col-sm-10 col-md-5 col-lg-2 my-2">
                    <h3>Note legali</h3>
                    <ul>
                        <li>Termini e condizioni</li>
                        <li>Informativa sulla privacy</li>
                        <li>Cookies</li>
                    </ul>
                </div>

                <div class="card col-12 col-sm-10 col-md-5 col-lg-2 my-2">
                    <h3>Aiuto</h3>
                    <ul>
                        <li>Contatti</li>
                        <li>FAQ</li>
                        <li>Tipi di cucina</li>
                    </ul>
                </div>

                <div class="card col-12 col-sm-10 col-md-5 col-lg-2 my-2 text-center">
                    <h3>Porta Deliveboo con te</h3>
                    <div>
                        <a href="https://www.apple.com/it/app-store/" class="btn btn-dark">
                            Collegamento App Store
                        </a>
                    </div>
                    <div>
                        <a href="https://play.google.com/store/games?hl=it&pli=1" class="btn btn-dark">
                            Collegamento Google Play
                        </a>

                    </div>
                </div>

            </footer>
        </div>
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
.boo-footer-bg {
    padding: 20px;
}

ul {
    list-style: none;

}

.card {


    ul {
        padding: 0;
    }

    h3 {
        font-weight: bold;
        text-align: center;
        font-size: 1.55rem;

    }

    li {
        margin: 4px 0;
        text-align: center;

    }

    a {
        margin: 6px 0;
    }
}
</style>
