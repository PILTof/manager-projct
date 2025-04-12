import { createApp, toDisplayString } from "vue";
import router from "./router";
import collect from "collect.js";
import components from "./register_components";

import { Quasar } from "quasar";
import quasarLang from "quasar/lang/ru";

// Import icon libraries
import "@quasar/extras/material-icons/material-icons.css";
import "@quasar/extras/material-icons-outlined/material-icons-outlined.css";
import "@quasar/extras/material-icons-round/material-icons-round.css";
import "@quasar/extras/material-icons-sharp/material-icons-sharp.css";
import "@quasar/extras/material-symbols-outlined/material-symbols-outlined.css";
import "@quasar/extras/material-symbols-rounded/material-symbols-rounded.css";
import "@quasar/extras/material-symbols-sharp/material-symbols-sharp.css";
import "@quasar/extras/mdi-v7/mdi-v7.css";
import "@quasar/extras/fontawesome-v5/fontawesome-v5.css";
import "@quasar/extras/fontawesome-v6/fontawesome-v6.css";
import "@quasar/extras/ionicons-v4/ionicons-v4.css";
import "@quasar/extras/eva-icons/eva-icons.css";
import "@quasar/extras/themify/themify.css";
import "@quasar/extras/line-awesome/line-awesome.css";
import "@quasar/extras/bootstrap-icons/bootstrap-icons.css";
// Import Quasar css
import "quasar/src/css/index.sass";

const app = createApp().use(router).use(Quasar, {
    plugins: {}, // import Quasar plugins and add here
    lang: quasarLang,
    config: {
        dark: true
    }
});

components(app);


app.mount("#app");
/**Push current url path to router */
router.push(window.location.pathname);

window.collect = collect

document.dispatchEvent(new CustomEvent('app:mounted', {
    bubbles: true
}));