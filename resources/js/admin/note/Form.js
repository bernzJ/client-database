import AppForm from '../app-components/Form/AppForm';

Vue.component('note-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                
            }
        }
    }

});