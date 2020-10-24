<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="emailInputLabel">Username</label>
                            <input type="email" class="form-control" v-model="formData.name" id="emailInput" aria-describedby="emailHelp" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="emailInputLabel">Email address</label>
                            <input type="email" class="form-control" v-model="formData.email" id="emailInput" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="passwordInputLabel">Password</label>
                            <input type="password" class="form-control" v-model="formData.password" id="passwordInput" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="passwordVerificationInputLabel">Verify Password</label>
                            <input type="password" class="form-control" v-model="formData.password_verification" id="passwordVerificationInput" placeholder="Verify Password">
                        </div>
                        <div class="col-auto align-self-end justify-content-end">
                            <button type="submit" v-on:click="handleRegister()" class="btn btn-primary align-self-end">Submit</button>
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
                'name': '',
                'email': '',
                'password': '',
                'password_verification': '',
            }
        }
    },

    methods: {
        handleRegister() {
            this.$auth.register(this.formData).then(success => {
                this.$root.$message.showDialog("Success", "User has been registered!", "Ok", () => {
                    this.$router.push('/login');
                })
            }).catch(error => {
                console.log(error)
                if (error.response) {
                    var errorMessages = ''
                    for (const [_, errorMessage] of Object.entries(error.response.data)) {
                        errorMessages += errorMessage + "\n";
                    }
                    this.$root.$message.showDialog("An error occured", errorMessages)
                } else {
                    this.$root.$message.showDialog("An error occured", errorMessages)
                }
            });
        }
    }
}
</script>
