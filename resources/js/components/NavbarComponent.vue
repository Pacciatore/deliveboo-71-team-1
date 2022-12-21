<template>
    <div id="navbarComponent">

        <!-- 1 -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a href="/" class="navbar-brand" style="max-width: 7.33333333%">
                    <img src="/assets/DELIVEBOO.png" alt="">
                </a>
                <!-- Bottone burger menu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigazione -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side of Navbar -->

                    <ul class="navbar-nav ml-auto">

                        <!-- <li class="nav-item active">
                            <a class="nav-link" href="/login">Accedi o registrati</a>
                        </li>

                        <li class="nav-item dropdown">
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> -->


                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Benvenuto su Deliveboo!
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <router-link to="/" class="dropdown-item">Home</router-link>

                                <a class="dropdown-item" href="/login">
                                    Profilo ristoratore
                                </a>

                            </div>
                        </li>



                    </ul>

                </div>

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

#navbarComponent {
    nav {

        position: fixed;
        width: 100%;

        .navbar {
            background-color: #FFEEAD;
        }

        img {
            width: 70px;
        }

        ul {
            li {
                padding: 0px 10px;
            }
        }
    }
}
</style>

