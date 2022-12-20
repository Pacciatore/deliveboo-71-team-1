<template>
    <div class="container-fluid">
        <div class="container-xxl">
            <div class="row justify-content-around gx-3 gy-3 p-3 ">

                <div class="boo-big col-12 col-sm-10 col-md-5 col-lg-5 rounded bg-primary my-2">

                    <h1>Diventa nostro partner</h1>
                    <p>Raggiungi più clienti con Deliveroo. Gestiamo noi la consegna, così tu puoi dedicarti a offrire i
                        migliori piatti e prodotti.
                    </p>
                    <a href="/login" class="btn btn-dark">Registrati e inizia ora</a>
                </div>
                <div class="boo-big col-12 col-sm-10 col-md-5 col-lg-5 rounded bg-primary my-2">

                    <h1>Consegna con noi</h1>
                    <p>La libertà di consegnare dove e quando vuoi, con ottimi guadagni, convenzioni e sconti
                        riservati
                        a te.
                    </p>
                    <button type="button" class="btn btn-dark">Inizia ora le tue consegne</button>
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
.boo-big {
    padding: 40px 0;
    margin: 10px 0;

    h1 {
        padding: 0 0 0px 0;
    }

    * {
        margin: 10px 10px;
    }

    .btn {
        margin-top: 10px;
    }
}
</style>
