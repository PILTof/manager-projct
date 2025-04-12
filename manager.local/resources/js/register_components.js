// components
import pHeader from "./components/blocks/p-header.vue"
import pWelcome from "./components/blocks/p-welcome.vue";

export default (app) => {
    app
    .component('p-header', pHeader)
    .component('p-welcome', pWelcome);




}