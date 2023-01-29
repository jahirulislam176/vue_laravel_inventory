<template>


        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="card shadow mt-2">
                        <h3 class="text-center bg bg-primary text-white">Add Your Company Staff</h3>
                    <form action="" method="POST" enctype="multipart/form-data" id="submit">
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="mb-3  p-2">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control"  placeholder="Enter Your Name">
                    </div>
                        </div>
                    
                    
                        <div class="col-md-4">
                    
                        <div class="mb-3 p-2">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control"  placeholder="name@example.com">
                    </div>
                            
                        </div>
                    
                    <div class="col-md-4">
                    <div class="mb-3 p-2">
                      <label class="form-label">Employee ID</label>
                      <input type="number" class="form-control"  placeholder="employee ID">
                    </div>	
                    </div>
                    
                    
                    <div class="col-md-4">
                    <div class="mb-3 p-2">
                     <label class="form-label">Phone</label>
                     <input type="number" class="form-control"   placeholder="phone Number">
                      </div>	
                    </div>
                    
                    
                      <div class="col-md-4">
                     <div class="mb-3 p-2">
                      <label class="form-label">Password</label>
                      <input type="password" class="form-control"  placeholder="Create Password">
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

</template>

<script>
import User from '../../Helpers/User';
export default{

name:"Create",

created(){
        if(!User.loggedIn()){
            this.$router.push({name:"/"})
        }
    },

}

</script>