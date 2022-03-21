/**
 * Mutation for CrudOperations
 */

const mutations = {
    DELETE_PROJECT(state, id) {
        let index = 0;
        index = state.auth_Projects.findIndex(project => project.id == id);
        state.auth_Projects.splice(index, 1);
    },
    SET_PROJECTS(state, projects) {
        state.auth_Projects = projects;
    },
    SET_PAGINATION(state, pagination) {
        state.auth_Pagination = pagination;
    },
};

export default mutations;