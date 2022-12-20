<template>
    <div class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light  d-flex align-items-center">
        <a class="navbar-brand" href="/home"><img src="#" alt="logo Deliverboo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a href="/login"><button >Registrati o Accedi</button></a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                Menu
                </button>
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Ciao
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </nav>
    </div>
</template>

<script>
export default {
name: 'NavbarrestaurantComponent'
}
</script>

<style>


</style>
