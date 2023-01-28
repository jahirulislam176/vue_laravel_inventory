<template>
    <div>
        
    </div>
</template>

<script type="text/javascript">

import User from '../../Helpers/User';


export default{

    created(){

        User.logout();

        Toast.fire({
            icon: 'success',
            title: 'Signed in successfully Log Out!'
       })

    }

}

</script>

<style type="text/css">


</style>