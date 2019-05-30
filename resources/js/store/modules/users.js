
export default {
    namespaced: true,
    state: {
        deletableUser: {
            foo: 'bar'
        },

        editableUser: {}
    },

    mutations: {
        setDeleteUser (state, user) {
            state.deletableUser = user
            // console.log('log from mutation', state.deletableUser);
        }
    },

    actions: {
        async USER_DELETE ({ state }) {
            try {
                let response = await axios.delete(`/users/${state.deletableUser.id}`)
                console.log(response)
            } catch (error) {
                console.log(error)

            }
        }
    }


}
