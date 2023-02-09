<template>
    
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                <div class="card shadow mt-2">
                 <h3 class="text-center bg bg-primary text-white">Add Suppliers</h3>
                    <form   method="post" enctype="multipart/form-data" id="submit">
                    <div class="row">
                        
                      <div class="col-md-4">
                      <div class="mb-3  p-2">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control"  placeholder="Enter Your Name" v-model="form.name">
                      <!-- <small class="text-danger" v-if="errors.full_name">{{ errors.full_name[0] }}</small> -->
                      <small class="text-danger"></small>
                    </div>
                        </div>
                    
                    
                        <div class="col-md-4">
                        <div class="mb-3 p-2">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control"  placeholder="name@example.com" v-model="form.email">
                
                    </div>   
                        </div>
                    
                    <div class="col-md-4">
                    <div class="mb-3 p-2">
                      <label class="form-label">Phone</label>
                      <input type="number" class="form-control"  placeholder="employee ID" v-model="form.salary">
                     
                    </div>	
                    </div>
                    
                    
                    <div class="col-md-4">
                    <div class="mb-3 p-2">
                     <label class="form-label">Address</label>
                     <input type="text" class="form-control"   placeholder="phone Number" v-model="form.address">
                   
                      </div>	
                    </div>
                    
                    
                      <div class="col-md-4">
                     <div class="mb-3 p-2">
                      <label class="form-label">Shopname</label>
                      <input type="number" class="form-control"  placeholder="Nid" v-model="form.shopname">
                     
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

     name:'',

     email:'',

     phone:'',

     address:'',

     shopname:'',

     photo:''


 }
}
},

methods:{
    supplierCreate(){
        axios.post().then();
    }
}

}

</script>