import { createStore } from 'vuex';
import axios from 'axios';

/**
 * Vuex Store
 */

export const store = createStore({
    state() {
        return {
            projects: [],
            pagination: {}
        }
    },
    getters: {},
    actions: {
        getProjects({ commit }, page = 1) {
            axios.get("http://127.0.0.1:8000/api/guest/projects?page=" + page)
                .then(response => {
                    commit('SET_PROJECTS', response.data.data.data);
                    commit('SET_PAGINATION', {
                        current_page: response.data.data.pagination.current_page,
                        first_page_url: response.data.data.pagination.first_page_url,
                        prev_page_url: response.data.data.pagination.prev_page_url,
                        next_page_url: response.data.data.pagination.next_page_url,
                        last_page_url: response.data.data.pagination.last_page_url,
                        last_page: response.data.data.pagination.last_page,
                        per_page: response.data.data.pagination.per_page,
                        total: response.data.data.pagination.total,
                        path: response.data.data.pagination.path
                    });
                })
                .catch((e) => {
                    console.log(e);
                });
        }
    },
    mutations: {
        SET_PROJECTS(state, projects) {
            state.projects = projects;
        },
        SET_PAGINATION(state, pagination) {
            state.pagination = pagination;
        }
    },
});