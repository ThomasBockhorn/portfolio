import { createStore } from 'vuex';
import portfolio from './module/portfolio/index';

/**
 * Vuex Store
 */

export const store = createStore({
    modules: {
        portfolio
    }
});