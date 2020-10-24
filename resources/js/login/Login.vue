<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login {{ this.$auth.userId }}</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="emailInputLabel">Email address</label>
                            <input type="email" class="form-control" v-model="formData.email" id="emailInput" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="passwordInputLabel">Password</label>
                            <input type="password" class="form-control" v-model="formData.password" id="passwordInput" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <router-link to="/register">Don't have an account? Register here!</router-link>
                        </div>
                        <div class="row container">
                            <div class="col-auto mr-auto form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <div class="col-auto align-self-end justify-content-end">
                                <button type="submit" v-on:click="handleLogin()" class="btn btn-primary align-self-end">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>

<script>
import settings from 'musicjerk/data/settings'

export default {
    data() {
        return {
            formData: {
                'email': '',
                'password': '',
            }
        }
    },

    methods: {
        handleLogin() {
            this.$auth.login(this.formData, false).then(success => {
                this.$root.$message.showAlert('Logged in as ' + this.$auth.name);
                this.$router.push('/');
            }).catch(error => {
                console.log(error)
                if (error.response) {
                    var errorMessages = ''
                    for (const [_, errorMessage] of Object.entries(error.response.data)) {
                        errorMessages += errorMessage + "\n";
                    }
                    this.$root.$message.showDialog("Could not log in", errorMessages)
                } else {
                    this.$root.$message.showDialog("Could not log in", error)
                }
            });
        }
    }
}
</script>
