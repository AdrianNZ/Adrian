/**
 * Created by Adrian on 5/4월/17.
 */
import './bootstrap';

class Errors {

    constructor() {
        this.errors = {};
    }

    has(field) {
        return this.errors.hasOwnProperty(field);
    }

    any() {
        return Object.keys(this.errors).length > 0;
    }

    get(field) {
        if (this.errors[field]) {
            return this.errors[field][0];
        }
    }

    record(errors) {
        this.errors = errors;
    }

    clear(field) {
        delete this.errors[field];
    }
}

new Vue({
    el: '#login-container',
    data: {
        email: '',
        password: '',
        errors: new Errors()
    },
    methods: {
        onSubmit(){
            axios.post('/login', this.$data)
                .then(this.onSuccess)
                .catch(error => this.errors.record(error.response.data));
        },

        onSuccess(response){
            if (response.data.code == 1) {
                window.location.href = '/home';
            } else {
                alert(response.data.message);
            }
        }
    }
});