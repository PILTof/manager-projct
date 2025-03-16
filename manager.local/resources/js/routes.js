import HomePage from "./pages/HomePage.vue";
import NotFound from "./pages/NotFound.vue";
import Testpage from "./pages/testpage.vue";

export default [
    { path: "/", component: HomePage },
    { path: "/:pathMatch(.*)*", component: NotFound },
];
