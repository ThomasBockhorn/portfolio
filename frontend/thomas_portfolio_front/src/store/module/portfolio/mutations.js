/**
 * mutations for portfolio store
 */
const mutations = {
    SET_PROJECTS(state, projects) {
        state.projects = projects;
    },
    SET_PAGINATION(state, pagination) {
        state.pagination = pagination;
    },
}

export default mutations;