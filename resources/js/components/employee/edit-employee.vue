<template>
    <div>
      <div class="container">
          <div class="row">
              <div class="col-md-12">

                  <div class="card shadow mt-2">
                      <h3 class="text-center bg bg-primary text-white">Edit Your Company Employee</h3>
                  <form  @submit.prevent="editEmployee"  method="post" enctype="multipart/form-data" id="submit">
                  <div class="row">
                      
                    <div class="col-md-4">
                    <div class="mb-3  p-2">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control"  placeholder="Enter Your Name" v-model="form.full_name">
                    <small class="text-danger" v-if="errors.full_name">{{ errors.full_name[0] }}</small>
                  </div>
                      </div>
                  
                  
                      <div class="col-md-4">
                      <div class="mb-3 p-2">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control"  placeholder="name@example.com" v-model="form.email">
                    <small class="text-danger" v-if="errors.email">{{ errors.email[0] }}</small>
                  </div>   
                      </div>
                  
                  <div class="col-md-4">
                  <div class="mb-3 p-2">
                    <label class="form-label">Salary</label>
                    <input type="number" class="form-control"  placeholder="employee ID" v-model="form.salary">
                    <small class="text-danger" v-if="errors.salary">{{ errors.salary[0] }}</small>
                  </div>	
                  </div>
                  
                  
                  <div class="col-md-4">
                  <div class="mb-3 p-2">
                   <label class="form-label">Address</label>
                   <input type="text" class="form-control"   placeholder="phone Number" v-model="form.address">
                   <small class="text-danger" v-if="errors.address">{{ errors.address[0] }}</small>
                    </div>	
                  </div>
                  
                  
                    <div class="col-md-4">
                   <div class="mb-3 p-2">
                    <label class="form-label">Nid</label>
                    <input type="number" class="form-control"  placeholder="Nid" v-model="form.nid">
                    <small class="text-danger" v-if="errors.nid">{{ errors.nid[0] }}</small>
                    </div>	
                    </div>

                    <div class="col-md-4">
                      <div class="mb-3 p-2">
                       <label class="form-label">Joining Date</label>
                       <input type="date" class="form-control"  placeholder="joining_date" v-model="form.joining_date">
                       <small class="text-danger" v-if="errors.joining_date">{{ errors.joining_date[0] }}</small>
                       </div>	
                       </div>
                    <div class="col-md-4">
                      <div class="mb-3 p-2">
                 
                       <input type="file" class="form-control" @change="OnFileSelected">
                       <small class="text-danger" v-if="errors.image">{{ errors.image[0] }}</small>
                       </div>	
                       </div>
                    <div class="col-md-4">
                      <div class="mb-3 p-2">
                    
                      
                       <img :src="form.image" style="height:40px; width:40px" alt="">
                      
                       </div>	
                       </div>
                  
                  
                  <div class="col-md-2 col-12">	 
                  <button type="submit" class="btn btn-outline-primary submit_btn_sign" >Submit</button>
                  </div>
                  
                      
                          
                  </div>
                  </form>
                  </div>
          </div>
      </div>

      
  </div>
    </div>
</template>

<script>

import Notification from '../../Helpers/Notification'
export default{

data(){
  return {
    form:{
      full_name:null,
      email:null,
      address:null,
      salary:null,
      nid:null,
      joining_date:null,
      image:null
    },
     errors:{

   }
  }
},

created(){
    let id=this.$route.params.id
    axios.get('http://127.0.0.1:8000/api/employee/show/'+id).then(({data})=>{this.form=data}).catch(console.log('error'))

},

methods:{

  OnFileSelected(event){

    let file=event.target.files[0];
    // this.form.image=[]

    if(file.size >1048770){
      Toast.fire({
          icon: 'error',
          title: 'upload image,less than 1mb'
          })
 

    }else{

      console.log(file)
      let reader=new FileReader();
      reader.onload=event=>{
        this.form.image=event.target.result;
        console.log(event.target.result)
      };

      reader.readAsDataURL(file);

    }
  },


  editEmployee(){
    axios.post("http://127.0.0.1:8000/api/employee/show/",this.form).then(res=>{
      this.form=[]
      this.errors=[]
    console.log(res.data);
    Toast.fire({
          icon: 'success',
          title: 'Employee Create successfully'
          })
  }).catch(error=>this.errors=error.response.data.errors)

  }
}


}

</script>
