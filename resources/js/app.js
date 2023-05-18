import AdminTemplate from './modules/admin/components/AdminTemplate.vue'
import PhotoTemplate from './modules/photo/components/PhotoTemplate.vue'
import AppClass from './classes/AppClass'
import App from './components/App.vue'
import router from './router/index'
import axios from 'axios'
import { createApp } from 'vue'

window.axios = axios
const vueApp = createApp(App)
vueApp.config.globalProperties.$app = new AppClass(appParams)
vueApp.component('admin', AdminTemplate)
vueApp.component('photo', PhotoTemplate)
vueApp.use(router)
vueApp.mount('#app')
