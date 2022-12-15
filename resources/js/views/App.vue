<template>
  <div>

<NavbarComponent/>
<JumboComponent/>
<CenterComponent/>
<PartnerComponent/>
<FooterComponent/>

  </div>
</template>

<script>
import NavbarComponent from '../components/NavbarComponent.vue';
import JumboComponent from '../components/JumboComponent.vue';
import CenterComponent from '../components/CenterComponent.vue';
import PartnerComponent from '../components/PartnerComponent.vue';
import FooterComponent from '../components/FooterComponent.vue';


export default {
name:"App",
components: { NavbarComponent, JumboComponent, CenterComponent, PartnerComponent, FooterComponent }

}
</script>

<style scoped lang="scss">

</style>
