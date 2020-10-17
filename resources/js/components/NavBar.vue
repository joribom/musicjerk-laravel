<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light d-flex flex-wrap">
            <router-link :to="{ name: 'home' }" class="nav-link nav-item text-white">Home</router-link>
            <router-link :to="{ name: 'albums' }" class="nav-link nav-item text-white pl-0" >Albums</router-link>
            <router-link :to="{ name: 'login' }" class="nav-link nav-item text-white pl-0">Test</router-link>
            <router-link :to="{ name: 'login' }" class="nav-link nav-item text-white ml-auto pl-0">Login</router-link>
        </nav>
        <main>
            <div v-if="enableTransitions">
                <transition name="fade" mode="out-in">
                    <router-view/>
                </transition>
            </div>
            <div v-else>
                <router-view/>
            </div>
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

    .item {
        margin-left: 10;
        margin-right: 10;
        padding: 2;
    }
</style>

<script>
    import settings from '../data/settings'
    export default {
        data () {
            return {
                'enableTransitions': settings.enableTransitions(),
            }
        }
    }
</script>
