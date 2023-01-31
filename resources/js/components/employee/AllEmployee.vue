<template>
<div>

    <div class="conatiner">
        <div class="row">
            <div class="col-md-6 offset-md-2">
             

     <h4 class="text-center">All Employees</h4>

<table class="table">

  <thead>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Salary</th>
    <th>NID</th>
    <th>Joing Date</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="employee in employees" :key="employee.id">
      
      <td>{{ employee.full_name  }}</td>
      <td>{{ employee.email }}</td>
      <td>{{ employee.address }}</td>
      <td>{{ employee.salary }}</td>
      <td>{{ employee.nid }}</td>
      <td>{{ employee.joining_date }}</td>
    </tr>
  
   
  </tbody>
</table>


                  
                   
                 
                
            </div>
        </div>
    </div>



</div>
</template>

<script>




export default{

    data(){
        return{
            employees:['']
        }
    },

    created(){
     axios.get('http://127.0.0.1:8000/api/employee').then(res=>{
        this.employees=res.data;
        console.log(res.data);
     }).catch((err)=>console.error(err));
    }

}

</script>