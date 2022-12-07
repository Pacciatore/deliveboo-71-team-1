import App from "./views/App";
import Vue from "vue";
window.Vue = require("vue");
require("./bootstrap");

const app = new Vue({
    el: "#root",
    render: h => h(App)
})


