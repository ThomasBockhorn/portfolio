import { createStore } from 'vuex';
import portfolio from './module/portfolio/index';
import usersRegistration from './module/usersRegistration/index';
import userLogin from './module/userLogin/index';
import crudOperations from './module/crudOperations/index';

/**
 * Vuex Store
 */

export const store = createStore({
    modules: {
        portfolio,
        usersRegistration,
        userLogin,
        crudOperations
    }
});