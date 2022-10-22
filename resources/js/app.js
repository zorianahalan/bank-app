//Another import's
import './bootstrap';
import './assets/global.scss'

//Import's with Vue and plugins
import {createApp} from "vue";
import { createPinia } from "pinia";
//Plugins
import router from './router.js'
import pp from 'pinia-plugin-persistedstate'

import App from "./App.vue";
import components from "@/components";



const app = createApp(App)
const pinia = createPinia()

components.forEach(component => app.component(component.name, component))

pinia.use(pp)

app.use(pinia)
    .use(router)
    .mount('#app')
