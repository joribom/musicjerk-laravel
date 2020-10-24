<template>
    <b-alert
      :show="dismissCountDown"
      dismissible
      fade
      variant="warning"
      @dismiss-count-down="countDownChanged"
    >
      {{ message }}
    </b-alert>
</template>

<style scoped>
    p {
        text-indent: 0 !important;
        white-space: break-spaces;
        display: block;
    }
</style>

<script>
export default {
    created() {
        console.log("Yeah");
        this.hide()
    },

    props: {
        message: String,
    },

    methods: {
        show() {
            $('#alert').show()
        },

        hide() {
            $('#alert').hide()
        }
    }
}
</script>
