/**
 * Created by Adrian on 11/6월/17.
 */


export default function (Vue) {
    Vue.auth = {
        getToken(){
            return localStorage.getItem('token');
        },
        setToken(token){
            localStorage.setItem('token', token);
        },
        destroyToken(){
            localStorage.removeItem('token');
        },
        isAuthenticated(){
            if (this.getToken()) {
                return true;
            } else {
                return false;
            }
        }
    };

    Object.defineProperties(Vue.prototype, {
        $auth: {
            get: () => {
                return Vue.auth;
            },
            post: () => {
                return Vue.auth;
            }
        }
    });
};

