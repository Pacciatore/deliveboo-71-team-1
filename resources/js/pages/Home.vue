<template>
    <div>

        <NavbarComponent />
        <JumboComponent @search="search" />
        <SearchResponseComponent :response="types" />
        <CenterComponent />
        <PartnerComponent />
        <FooterComponent />

    </div>
</template>

<script>
import NavbarComponent from '../components/NavbarComponent.vue';
import JumboComponent from '../components/JumboComponent.vue';
import CenterComponent from '../components/CenterComponent.vue';
import PartnerComponent from '../components/PartnerComponent.vue';
import FooterComponent from '../components/FooterComponent.vue';
import SearchResponseComponent from '../components/SearchResponseComponent.vue';

export default {
    name: 'Home',
    components: {
        NavbarComponent,
        JumboComponent,
        CenterComponent,
        PartnerComponent,
        FooterComponent,
        SearchResponseComponent
    },
    data() {
        return {
            loadin: true,
            errorMessage: '',

            types: {}
        }
    },
    methods: {

        search(query) {
            this.queryApi(query)
        },

        queryApi(textToSearch) {

            this.loading = true;

            axios.get(`api/types/${textToSearch}`)
                .then((response) => {
                    this.loading = false;
                    this.types = this.getDataFromApiResponse(response);
                })
                .catch((e) => {
                    this.loading = false;
                    this.errorMessage = 'Error: ' + e.message + '   Reload page!';
                    console.log(e)
                })

        },

        getDataFromApiResponse(response) {
            console.log(response);
            return response.status === 200 ? response.data.results : []
        }



    }
}
</script>

<style lang="scss" scoped>

</style>
