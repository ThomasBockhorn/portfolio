/**
 * actions for userLogin store
 */
import axios from 'axios';

const actions = {
    async login({ commit }, userInfo) {
        axios.get('/sanctum/csrf-cookie')
        return await axios
            .post("http://127.0.0.1:8000/api/login", {
                email: userInfo.email,
                password: userInfo.password,
            })
            .then((response) => {
                commit('SET_TOKEN', response.data.data.token);
                commit('SET_SUCCESSFUL', true);
            })
            .catch((error) => {
                commit('SET_SUCCESSFUL', false);
                console.log(error);
            });
    },
}

export default actions;