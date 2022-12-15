<template>
    <div>

        <div class="boo-jumbo bg-dark text-white d-flex flex-column align-items-center justify-content-around">

            <h1>I piatti dei ristoranti che ami e la spesa, a domicilio</h1>
            <p>Inserisci un indirizzo per scoprire le opzioni disponibili nella tua zona</p>
            <button type="button" class="btn btn-primary">Inserire ricerca indirizzo</button>
            <p>Accedi per visualizzare i tuoi indirizzi recenti</p>

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
.boo-jumbo{
    height: 30rem;
}

</style>
