import Login from './components/auth/Login.vue'

import Register from './components/auth/Register.vue'

import Forgot from './components/auth/Forgot.vue'

import Logout from "./components/auth/Logout.vue"

import Home from './components/Home.vue'

import Test from './components/test.vue'

// import Employee from '../components/employee/Create.vue'

import Employee from './components/employee/Insert.vue'

import AllEmployee from './components/employee/AllEmployee.vue'

import EditEmployee from './components/employee/edit-employee.vue'

//supplier module

import SupplierCreate from './components/supplier/Create.vue'
import SupplierAll from './components/supplier/Index.vue'

//category module
import Category from './components/category/create.vue'
import AllCategory from './components/category/AllCategory.vue'
// import SupplierEdit from './components/supplier/Edit.vue'

// const Employee = () => import('./components/employee/Create.vue')

// let login =require('./components/auth/Login.vue').default;
// let register =require('./components/auth/Register.vue').default;
export const routes = [
    {
    path: '/',
    component:()=> Login, 
    name:'/'
    },

    { 
    path: '/register',
    component:()=> Register,
    name:'Register'
    },

    {
      path:'/forgot',
      component:()=>Forgot,
      name:'Forgot'
    },

    {
      path:'/home',
      component:()=>Home,
      name:'Home'
    },

    {
      path:'/logout',
      component:()=>Logout,
      name:'Logout'
    },

    {
      path:'/employee',
      // Component:Employee,
      component: () =>Employee,
                    // import ('./components/employee/Insert.vue'),
      name:'Employee'
    },

    {
      path:'/test',
      Component:()=>Test,
      name:'Test'
    },
    {
      path:'/all-employee',

      component:()=>AllEmployee,

      name:'AllEmployee' 
    },{

      path:'/edit-employee/:id',
      component:()=>EditEmployee,
      name:'edit-employee'

    },{

      path:'/supplier',
      component:()=> SupplierAll,
      name:'Supplier'

    },{
      path:'/create-supplier',
      component:()=>SupplierCreate,
      name:'SupplierAll'
    },{
      path:'/category',
      component:()=>Category,
      name:'category'
    },
    {
      path:'/all-category',
      component:()=>AllCategory,
      name:'AllCategory'
    }

  ];

  export default routes;

