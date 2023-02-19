<template>
    
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                <div class="card shadow mt-2">
                 <h3 class="text-center bg bg-primary text-white">Add Suppliers</h3>
                    <form @submit.prevent="supplierCreate"  method="post" enctype="multipart/form-data" id="submit">
                    <div class="row">
                        
                      <div class="col-md-4">
                      <div class="mb-3  p-2">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control"  placeholder="Enter Your Name" v-model="form.name">
                      <small class="text-danger" v-if="errors.name">{{ errors.name[0] }}</small>
                     
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
                      <label class="form-label">Phone</label>
                      <input type="number" class="form-control"  placeholder="employee ID" v-model="form.phone">
                      <small class="text-danger" v-if="errors.phone">{{  errors.phone[0] }} </small>
                     
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
                      <label class="form-label">Shopname</label>
                      <input type="number" class="form-control"  placeholder="Nid" v-model="form.shopname">

                      <small class="text-danger" v-if="errors.shopname">{{ errors.shopname[0] }}</small>
                      
                     
                      </div>	
                      </div>

                  
                      <div class="col-md-4">
                        <div class="mb-3 p-2">
                   
                         <input type="file" class="form-control" @change="OnFileSelected" >
                       
                         </div>	
                         </div>
                      <div class="col-md-4">
                        <div class="mb-3 p-2">
                      
                         <img :src="form.photo" style="height:40px; width:40px" alt="">

                         </div>	
                         </div>         
        <div class="col-md-2 col-12">

        <button type="submit" class="btn btn-outline-primary submit_btn_sign">Submit</button>

        </div>                  
                    </div>
                    </form>
                    </div>
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

 form:{
     name:null,
     email:null,
     phone:null,
     address:null,
     shopname:null,
     photo:null
 },
 errors:{

}
}
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
          this.form.photo=event.target.result;
          console.log(event.target.result)
        };
        reader.readAsDataURL(file);
      }
    },


    supplierCreate(){
        axios.post("http://127.0.0.1:8000/api/supplier/post/",this.form).then(res=>{
          this.errors=[]
        }).catch(error=>this.errors=error.response.data.errors);
    }
}

}

</script>