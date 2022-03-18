/**
 * mutations for userLogin store
 */

const mutations = {
    SET_TOKEN(state, token) {
        state.userLoginToken = token;
    },
    SET_SUCCESSFUL(state, successful) {
        state.successful = successful;
    }
};

export default mutations;