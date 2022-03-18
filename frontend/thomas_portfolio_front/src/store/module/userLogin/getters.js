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
        return state.userLoginToken;
    },
    successful: state => {
        return state.successful;
    }
}

export default getters;