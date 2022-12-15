<template>
    <div>

        <div class="boo-jumbo bg-dark text-white d-flex flex-column align-items-center justify-content-around">

            <h1>I piatti dei ristoranti che ami e la spesa, a domicilio</h1>
            <p>Trova i ristoranti che più ti piacciono nella tua zona!</p>
            <input class="w-50 p-2" type="text" name="searchBar" id="searchBar"
                placeholder="Inserire ristorante da cercare...">
            <p>Accedi per visualizzare i tuoi indirizzi recenti</p>

        </div>




    </div>
</template>

<script>
export default {
    name: 'JumboComponent'
}
</script>



<style scoped lang="scss">
.boo-jumbo {
    height: 30rem;
}
</style>
