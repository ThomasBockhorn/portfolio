/**
 * getters from crud Operations
 */

const getters = {
    auth_Projects: state => {
        return state.auth_Projects;
    },
    auth_Pagination: state => {
        return state.auth_Pagination;
    }
};

export default getters;