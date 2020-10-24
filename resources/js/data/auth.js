export default class Auth {
    constructor() {
        console.log("Auth initialized.")
        this.currentPromise = axios.get('/sanctum/csrf-cookie')
    }

    handleLogin(formData) {
        this.currentPromise.then(_ => {
            axios.post('/api/login', formData).then(response => {
                console.log(response);
            });
        });
    }
}
