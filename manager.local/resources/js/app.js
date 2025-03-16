import { createApp } from 'vue'
import router from './router'


const app = createApp().use(router)
app.mount('#app');
/**Push current url path to router */
router.push(window.location.pathname)
