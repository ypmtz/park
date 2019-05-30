
<template>
     <a class="btn btn-danger" @click="logUser()" >Borrar </a>
</template>

<script>
import { mapMutations } from "vuex";
export default {
    name: 'UserDeleteButton',
    props: ['user'],
    methods: {
        logUser() {
            // console.log(this.user);
            this.setDeleteUser(this.user)
            $('#exampleModalCenter').modal('show')
        },
        ...mapMutations('users', ['setDeleteUser'])
    }

}
</script>

