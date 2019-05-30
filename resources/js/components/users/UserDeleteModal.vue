<template>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">:)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Desearía borrar el usuario?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" @click="deleteUser()">Eliminar</button>
            </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapActions } from "vuex";
    export default {
        name: 'UserDeleteModal',
        data (){
            return {
                user: 2
            }
        },

        methods: {
            ...mapActions('users', ['USER_DELETE']),
            deleteUser () {
                this.USER_DELETE()
                // console.log('hola esto es una prueba...');

            }
        },

        mounted() {
            console.log('Component for delete user.')
        }
    }
</script>
