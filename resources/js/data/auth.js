export default {
    data: {

    },
    methods: {
        handleLogin() {
            axios.get('/sanctum/csrf-cookie').then(response => {
                console.log(response);
                axios.post('/api/login', this.formData).then(response => {
                    console.log(response);
                });
            });
        }
    }
}
