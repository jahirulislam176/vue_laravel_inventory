import Login from './components/auth/Login.vue'
import Register from './components/auth/Register.vue'
// let login =require('./components/auth/Login.vue').default;
// let register =require('./components/auth/Register.vue').default;
export const routes = [
    {
    path: '/',
    component: Login, 
    name:'/'
    },

    { 
    path: '/register',
    component: Register,
    name:'/Register'
    },
    
  ];

