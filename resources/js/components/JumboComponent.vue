<template>
    <div>

        <div class="boo-jumbo text-center">

            <h1>I piatti dei ristoranti che ami e la spesa, a domicilio</h1>
            <p>Trova i ristoranti che più ti piacciono nella tua zona!</p>
            <p>Accedi per visualizzare i tuoi indirizzi recenti</p>

        </div>




    </div>
</template>

<script>
export default {
    name: 'JumboComponent',
    data() {
        return {
            errorMessage: '',
            loading: true
        }
    },
}
</script>



<style scoped lang="scss">
@import '../../sass/variables';

.boo-jumbo {
    padding: 40px;
    background-color: $boo-green;
    color: #464343;

    * {
        padding: 10px 0;
    }
}
</style>
