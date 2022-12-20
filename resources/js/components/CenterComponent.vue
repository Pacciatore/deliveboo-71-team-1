<template>
    <div>
        <div>
            <div class="boo-big rounded bg-primary text-center">
                <h1>Segui gli ordini passo passo</h1>
                <p>I piatti e i prodotti che ami, consegnati in pochissimo tempo. Vedrai quando il rider ha ritirato
                    l'ordine, che potrai seguire passo passo, e riceverai una notifica quando sarà quasi da te.</p>
                <div>
                    <a href="https://www.apple.com/it/app-store/" class="btn btn-dark">
                        Collegamento App Store
                    </a>
                    <a href="https://play.google.com/store/games?hl=it&pli=1" class="btn btn-dark">
                        Collegamento Google Play
                    </a>

                </div>
            </div>

            <div>
                <!-- IMMAGINE MAPPA -->

            </div>
        </div>

        <div class="boo-big bg-success text-white text-center">

            <h1>Menù in offerta: sconti fino al 25%</h1>
            <p>Perfetti per dare più gusto alla tua settimana, ordinare i piatti più amati da tutta la famigglia e fare
                una pusa dai fornelli</p>
            <p>Si applicano spese di consegna e di servizio. Offerta soggetta a disponibilità, solo per ristoranti
                aderenti all'iniziativa. Si applicano termini e condizioni, consultabili qui. Termini e condizioni qui.
            </p>


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
.boo-big {
    padding: 40px 0;
    margin-top: 20px;

    * {
        margin: 15px 0;
    }

}
</style>
