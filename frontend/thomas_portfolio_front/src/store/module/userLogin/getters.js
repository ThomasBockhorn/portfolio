/**
 * getters for userLogin store
 */
const getters = {
    email: state => {
        return state.email;
    },
    password: state => {
        return state.password;
    },
    token: state => {
        return state.token;
    },
    successful: state => {
        return state.successful;
    }
}

export default getters;