<script>
    import NavBar from 'musicjerk/components/NavBar'
    import MessageHandler from 'musicjerk/components/Message/MessageHandler'
    import settings from 'musicjerk/data/settings'

    export default {
        components: { NavBar, MessageHandler },

        data () {
            return {
                'enableTransitions': settings.enableTransitions(),
            }
        },
    }
</script>

<template>
    <div>
        <NavBar/>
        <main>
            <MessageHandler />
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
</style>
