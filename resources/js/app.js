import './bootstrap';
import { createApp } from 'vue'
import *as VueRouter from 'vue-router'
// import { createRouter, createWebHistory } from 'vue-router'
import {routes} from './routes.js'
// import the root component App from a single-file component.
import App from './App.vue'

const router = VueRouter.createRouter({
  // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
  history: VueRouter.createWebHistory(),
  routes // short for `routes: routes`
})

// const router = createRouter({
//   history: createWebHistory('/'),
//   routes
// })

const app = createApp(App)

app.use(router)

app.mount('#app')

// export default router

