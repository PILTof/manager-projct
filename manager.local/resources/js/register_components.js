// components
import pHeader from "./components/blocks/p-header.vue"
import pItem from "./components/blocks/p-item.vue";
import pItems from "./components/blocks/p-items.vue";
import pWelcome from "./components/blocks/p-welcome.vue";

export default (app) => {
    app
    .component('p-header', pHeader)
    .component('p-welcome', pWelcome)
    .component('p-items', pItems)
    .component('p-item', pItem)




}