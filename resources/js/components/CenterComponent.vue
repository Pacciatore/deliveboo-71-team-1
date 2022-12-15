<template>
    <div>
        <div>
            <div class="boo-big mx-5 my-5 ">
                <div class="boo-box rounded d-flex bg-primary flex-column justify-content-around ">
                    <h1>Segui gli ordini passo passo</h1>
                    <p>I piatti e i prodotti che ami, consegnati in pochissimo tempo. Vedrai quando il rider ha ritirato l'ordine, che potrai seguire passo passo, e riceverai una notifica quando sarà quasi da te.</p>
                    <div>
                        <button type="button" class="btn btn-dark">Collegamento App Store</button>
                        <button type="button" class="btn btn-dark">Collegamento Google Play</button>
                    </div>
                </div>

                <div>
                    <!-- IMMAGINE MAPPA -->
                </div>
            </div>

        </div>

        <div class="boo-big bg-success text-white d-flex flex-column align-items-center justify-content-around">

            <h1>Menù in offerta: sconti fino al 25%</h1>
            <p>Perfetti per dare più gusto alla tua settimana, ordinare i piatti più amati da tutta la famigglia e fare una pusa dai fornelli</p>
            <p>Si applicano spese di consegna e di servizio. Offerta soggetta a disponibilità, solo per ristoranti aderenti all'iniziativa. Si applicano termini e condizioni, consultabili qui. Termini e condizioni qui.</p>


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
.boo-big{
    height: 30rem;

}

.boo-box{
    height: 25rem;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
}

</style>
