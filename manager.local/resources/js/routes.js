import NotFound from "./pages/NotFound.vue";
import Testpage from "./pages/testpage.vue";

export default [
    { path: "/test", component: Testpage },
    { path: "/:pathMatch(.*)*", component: NotFound },
];
