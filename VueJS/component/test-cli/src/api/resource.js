/**
 * Created by Adrian on 18/6월/17.
 */

import api from './index'

export default({
    login:function(object, param){
        return Vue.http.post('login', param)
            .then( response => {
                if(response.body.success){
                    Vue.auth.setToken(response.body.data.token);
                    // Vue.$route.push({name:'menu'})
                    object.$router.push({name:'menu'});
                }
            })
    },
    addTodo:function(data){
        return Vue.http.post('todo', data);
    },
    getTodo:function(){
        return Vue.http.get('todo');
    }

})