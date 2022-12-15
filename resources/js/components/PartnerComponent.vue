<template>
    <div class="d-flex">
        <div>
            <div class="boo-big mx-5 my-5 ">
                <div class="boo-box rounded d-flex bg-primary flex-column justify-content-around ">
                    <h1>Diventa nostro partner</h1>
                    <p>Raggiungi più clienti con Deliveroo. Gestiamo noi la consegna, così tu puoi dedicarti a offrire i migliori piatti e prodotti.</p>
                    <div>
                        <button type="button" class="btn btn-dark">Inizia ora</button>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="boo-big mx-5 my-5 ">
                <div class="boo-box rounded d-flex bg-primary flex-column justify-content-around ">
                    <h1>Consegna con noi</h1>
                    <p>La libertà di consegnare dove e quando vuoi, con ottimi guadagni, convenzioni e sconti riservati a te.</p>
                    <div>
                        <button type="button" class="btn btn-dark">Inizia ora</button>
                    </div>
                </div>
            </div>
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
