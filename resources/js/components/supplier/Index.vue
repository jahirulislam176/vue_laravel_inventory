<template>
    
   <div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 card mt-2">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">S:N</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">phone</th>
      <th scope="col">Address</th>
      <th scope="col">shopname</th>
      <th scope="col">photo</th>




    </tr>
  </thead>
  <tbody>
    <tr v-for="(supplier,i) in suppliers" :key="supplier.id">

      <td>{{ i+1  }}</td>
      <td>{{ supplier.name }}</td>
      <td>{{ supplier.email }}</td>
      <td>{{ supplier.phone }}</td>
      <td>{{ supplier.address }}</td>
      <td>{{ supplier.shopname }}</td>
      <td><img :src="supplier.photo" /></td>

    </tr>
  
    
  </tbody>
</table>
            </div>
        </div>
    </div>


   </div>
    
    </template>
    
    <style scoped>
    
    </style>
    
    <script>
    
    
    export default{

        data(){
            return{
                suppliers:['']
            }
        },


        created(){
                axios.get('http://127.0.0.1:8000/api/supplier/').then(response=>{
                    this.suppliers=response.data;
                    console.log(response.data);
                }).catch((err)=>console.error(err));
        }
    }
    </script>