/**
 * Created by Adrian on 18/6월/17.
 */


import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import Auth from '../package/auth/auth'


Vue.use(VueResource);
Vue.use(Auth);
Vue.use(VueRouter);

Vue.http.interceptors.push((request, next) => {
    request.headers = request.headers || {};

    if (Vue.auth.isAuthenticated()) {
        request.headers.set('Authorization', 'Bearer ' + Vue.auth.getToken());
    }

    next((response) => {
        if (response.status === 401) {
            Vue.auth.destroyToken();
            window.location.pathname = '/login';
        }
    });
});

export default({
    login: function (object, param) {
        return Vue.http.post('login', param)
            .then(response => {
                if (response.body.token) {
                    Vue.auth.setToken(response.body.token);
                    object.$router.push({path: 'todo'});
                }
            })
    },
    logout: function () {
        Vue.auth.destroyToken();
        window.location.pathname = '/';
    }
})