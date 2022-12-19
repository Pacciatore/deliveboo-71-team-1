<template>
    <div>

        <!-- 1 -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <img src="/assets/DELIVEBOO.png" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/login">Accedi o registrati</a>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: 'NavbarComponent',


}

</script>


<style scoped lang="scss">
@import '../../sass/_variables.scss';

.navbar {
    padding: 0;
    background-color: #FFEEAD;
}

img {
    width: 5%;
}

ul {
    li {
        padding: 0px 10px;
    }
}
</style>

