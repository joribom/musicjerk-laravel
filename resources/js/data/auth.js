export default class Auth {
    constructor() {
        console.log("Auth initialized.")
        this.currentPromise = axios.get('/sanctum/csrf-cookie')
        this.userId = null
        this.loginToken = null
    }

    login(formData, remember) {
        this.currentPromise = this.currentPromise.then(_ => {
            axios.post('/api/login', formData).then(response => {
                console.log(response);
                this.userId = response.get('user_id')
                if (remember) {
                    this.loginToken = response.get('token')
                }
            })
        });
        return this.currentPromise;
    }

    register(formData) {
        this.currentPromise = this.currentPromise.then(_ => {
            axios.post('/api/register', formData).then(response => {
                console.log(response);
            })
        });
        return this.currentPromise;
    }
}
