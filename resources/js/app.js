import './bootstrap';
import { createApp } from 'vue'
// import VueRouter from 'vue-router'
import { createRouter, createWebHistory } from 'vue-router'
import routes from './routes.js'
// import the root component App from a single-file component.
import App from './App.vue'

const router = createRouter({
  history: createWebHistory('/'),
  routes
})

const app = createApp(App)

app.use(router)

app.mount('#app')

export default router

