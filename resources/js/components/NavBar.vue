<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light d-flex flex-wrap">
            <router-link :to="{ name: 'home' }" class="nav-link nav-item text-white">Home</router-link>
            <router-link :to="{ name: 'albums' }" class="nav-link nav-item text-white pl-0">Albums</router-link>
            <router-link :to="{ name: 'login' }" class="nav-link nav-item text-white pl-0">Test</router-link>
            <router-link v-if="isLoggedIn" :key=this.$auth.user_id :to="{ name: 'logout' }" class="nav-link nav-item text-white ml-auto pl-0">Logout</router-link>
            <router-link v-else :to="{ name: 'login' }" class="nav-link nav-item text-white ml-auto pl-0">Login</router-link>
        </nav>
    </div>
</template>

<style scoped>
.item {
    margin-left: 10;
    margin-right: 10;
    padding: 2;
}
</style>

<script>
export default {
    created() {
        this.$auth.listenOnLoginChange(() => {
            this.isLoggedIn = this.$auth.userId != null
        })
    },

    data() {
        return {
            isLoggedIn: false
        }
    },
}
</script>
