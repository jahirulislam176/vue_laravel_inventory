<template>
    <div>
        
    </div>
</template>

<script type="text/javascript">

import User from '../../Helpers/User';


export default{

    created(){

        // User.logout();

        localStorage.removeItem('token');
        localStorage.removeItem('user');

        Toast.fire({
            icon: 'success',
            title: 'Successfully Log Out!'
       });
       this.$router.push({ name: '/' })

    }

}

</script>

<style type="text/css">


</style>