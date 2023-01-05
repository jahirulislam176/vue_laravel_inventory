<template lang="">
    <div class="container h-100">
        <!--Incorrect Message Start-->
        
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
               
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="../assets/img/logo/logo2.png" class="brand_logo" alt="Logo">
                    </div>
                </div>

                <div class="d-flex justify-content-center form_container">
                    <form action="" method="POST" class="p-2" style="width: -webkit-fill-available;">
                        <div class="input-group mb-3">

                            <div class="input-group-append">
                                <span class="input-group-text"><i style="height:30px" class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control input_user" placeholder="Enter Your Full Name" >
                        </div>


                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i style="height:30px" class="fas fa-user"></i></span>
                            </div>
                            <input type="email" class="form-control input_user" id="fullname"  required   placeholder="email" >
                        </div>


                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i style="height:30px" class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" id="password" class="form-control input_pass" value="" placeholder="Password" required>
                        </div>

                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i style="height:30px" class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" id="reTypePassword" class="form-control input_pass" value="" placeholder="Confirm Password" required>
                        </div>

                        <div class="input-group mb-2">

                            <router-link to="/">Already Have an Account</router-link>
                           
                        
                        </div>
                      
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit"  class="btn login_btn">Login</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</template>

<script>

export default {
    
}
</script>

<style scopped>
body,
 html {
    margin: 0;
    padding: 0;
    height: 100%;
    background: #6bbbde !important;
}
.user_card {
/*        height: 400px;*/
    width: 300px;
    margin-top: auto;
    margin-bottom: auto;
    background: #ffffff;
    position: relative;
    display: flex;
    justify-content: center;
    flex-direction: column;
    padding: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 5px;
}
.brand_logo_container {
    position: absolute;
    height: 160px;
    width: 170px;
    top: -75px;
    border-radius: 50%;
    background: #2b5ea4;
    padding: 10px;
    text-align: center;
}
.brand_logo {
    height: 140px;
    width: 150px;
    border-radius: 50%;
    border: 2px solid white;
}
.form_container {
    margin-top: 100px;
}
.login_btn {
    width: 100%;
    background: #2b5ea4 !important;
    color: white !important;
}
.login_btn:focus {
    box-shadow: none !important;
    outline: 0px !important;
}
.login_container {
    padding: 0 2rem;
}
.input-group-text {
    background: #265ba1 !important;
    color: white !important;
    border: 0 !important;
    border-radius: 0.25rem 0 0 0.25rem !important;
}
.input_user,
.input_pass:focus {
    box-shadow: none !important;
    outline: 0px !important;
}

.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
    background-color: #c0392b !important;
}
</style>