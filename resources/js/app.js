import './bootstrap';
import { createApp } from 'vue'
import *as VueRouter from 'vue-router'
import Noty from 'noty';
new Noty({

  text: 'Some notification text',

}).show();
// import { createRouter, createWebHistory } from 'vue-router'
import {routes} from './routes.js'

// import the root component App from a single-file component.

//import user class
import User from './Helpers/User'
window.user=User

import Notification from './Helpers/Notification';
window.Notification=Notification;

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

// Sweet alert start

import Swal from 'sweetalert2';
window.Swal=Swal;

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

window.Toast=Toast;

// Sweet alert End

const app = createApp(App)

app.use(router)

app.mount('#app')

// export default router

