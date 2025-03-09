import { createApp } from 'vue'
import mainpage from './pages/mainpage.vue'

const app = createApp()
app.component('mainpage', mainpage)
app.mount('#app')