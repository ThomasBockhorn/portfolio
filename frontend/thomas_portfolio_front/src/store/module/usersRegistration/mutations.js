/**
 * mutations for user store
 */

const mutations = {
    SET_TOKEN(state, token) {
        state.token = token;
        console.log(state.token);
    }
};

export default mutations;