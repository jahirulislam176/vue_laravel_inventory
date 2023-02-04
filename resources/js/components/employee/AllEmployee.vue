<template>


    <div class="conatiner">
  <div class="row">
    <div class="col-md-6 offset-md-2 ">
 <h4 class="text-center">All Employees</h4>
 <label for="">Search</label>
 <input type="text" v-model="searchTerm" class="form-control" style="width:200px;"><br>
  <table class="table card-body shadow-lg p-2">
    <thead>
      <tr>
      <td>S:N</td>
      <td>Name</td>
      <td>Email</td>
      <td>Address</td>
      <td>Salary</td>
      <td>NID</td>
      <td>Joing Date</td>
      <td>Action</td>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(employee,i) in filterSearch" :key="employee.id">
        <td>{{ i+1 }}</td>
        <td>{{ employee.full_name  }}</td>
        <td>{{ employee.email }}</td>
        <td>{{ employee.address }}</td>
        <td>{{ employee.salary }}</td>
        <td>{{ employee.nid }}</td>
        <td>{{ employee.joining_date }}</td>
        <td>

  <div class="btn-group">
     <router-link :to="{name:'edit-employee',params:{id:employee.id}}" class="btn-sm btn-outline-primary">Edit</router-link>
     <a @click="deleteEmployee(employee.id)" class="btn-sm btn-outline-primary">Delete</a>
  </div>

        </td>
      </tr>
    </tbody>
  </table>




                  
                   
                 
                
            </div>
        </div>
    </div>




</template>

<script>

export default{

    data(){
        return{
            employees:[''],
            searchTerm:''
        }
    },

    computed:{
      filterSearch(){
       return this.employees.filter(employee =>{
          // return employee.salary.match(this.searchTerm);

          return employee.full_name.toLowerCase().includes(this.searchTerm.toLowerCase())
        })
      }

    },

  //   computed: {
  //   filteredList() {
  //     return this.employees.filter(employee => {
  //        employee.salary.toLowerCase().includes(this.searchTerm.toLowerCase())
  //     })
  //   }
  // },



    created(){
     axios.get('http://127.0.0.1:8000/api/employee').then(res=>{
        this.employees=res.data;
        console.log(res.data);
     }).catch((err)=>console.error(err));
    },

    methods:{
 deleteEmployee(id){
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    axios.post('http://127.0.0.1:8000/api/employee/delete/'+id).then(()=>{
      this.employees = this.employees.filter(employee=>{
        return employee.id !=id
      })
    }).catch(()=>{
      this.$router.push({name:'AllEmployee'})
    })

    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})

      }
    }
 

}
</script>