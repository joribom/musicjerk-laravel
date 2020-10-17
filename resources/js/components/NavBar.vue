<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel ">
            <div class="container row">
                <ul class="navbar-nav ">
                    <router-link :to="{ name: 'home' }" class="nav-link">Home</router-link>
                    <router-link :to="{ name: 'albums' }" class="nav-link" >Albums</router-link>
                    <router-link :to="{ name: 'login' }" class="nav-link">Test</router-link>
                </ul>
            </div>
            <div>
                <ul class="navbar-nav ">
                    <router-link :to="{ name: 'login' }" class="nav-link">Login</router-link>
                </ul>
            </div>
    </nav>
    <main>
        <transition name="fade" mode="out-in">
            <router-view/>
        </transition>
    </main>
</div>
</template>

<style scoped>
    .fade-enter-active {
        transition: opacity 0.35s ease-out;
    }
    .fade-leave-active {
        transition: opacity 0.35s ease-in;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
</style>

<script>
    export default {}
</script>
