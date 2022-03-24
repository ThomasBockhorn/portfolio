/**
 * Actions for user store
 */
import axios from "axios";

const actions = {
    /**
     * submitRegistration will submit info to the server
     *
     * @param {event} e 
     * @return void
     */
    async submitRegistration({ commit }, userInput) {
        await axios
            .post("http://127.0.0.1:8000/api/register", {
                name: userInput.name,
                email: userInput.email,
                password: userInput.password,
            })
            .then((response) => {
                commit('SET_TOKEN', response.data.data.token);
            })
            .catch((error) => {
                console.log(error);
            });
    },
};

export default actions;