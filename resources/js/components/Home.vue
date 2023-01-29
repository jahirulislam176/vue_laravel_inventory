<template>

    <div>

        <h1>This is Home Component</h1>
        
    </div>

</template>



<script>

import User from "./../Helpers/User"

export default {

    created(){
        if(!User.loggedIn()){

            this.$router.push({ name:"/" })
            
        }
    },
}

</script>


<style type="text/css">


</style>