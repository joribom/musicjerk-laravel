import { wrap } from "lodash"

export default class Auth {
    constructor() {
        console.log("Auth initialized.")
        this.csrfCookieSet = false
        this.currentPromise = axios.get('/sanctum/csrf-cookie').then(_ => {
            this.csrfCookieSet = true
        })
        this.userId = null
        this.name = null
        this.loginToken = null
        this.loginChangeListeners = []
    }

    listenOnLoginChange(func) {
        this.loginChangeListeners.push(func);
    }

    updateLoginListeners() {
        this.loginChangeListeners.forEach(func => {
            func()
        })
    }

    verifyCsrf() {
        if (this.csrfCookieSet) {
            return new Promise((resolve, _) => {
                resolve()
            })
        } else {
            return this.currentPromise
        }
    }

    login(formData, remember) {
        return this.verifyCsrf().then(_ => {
            return axios.post('/api/login', formData).then(result => {
                this.userId = result.data.user_id
                this.name = result.data.name
                if (remember) {
                    this.loginToken = result.get('token')
                }
                this.updateLoginListeners()
            })
        })
    }

    logout(){
        return this.verifyCsrf().then(_ => {
            return axios.get('/logout').then(result => {
                this.userId = null
                this.name = null
                this.loginToken = null
                this.updateLoginListeners()
            })
        })
    }

    register(formData) {
        return this.verifyCsrf().then(_ => {
            return axios.post('/api/register', formData).then(result => {
                console.log(result)
            })
        });
    }
}
