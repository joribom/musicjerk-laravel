
<template>
    <div>
        <MessageDialog
            :title='dialogTitle'
            :message='dialogMessage'
            :buttonText='dialogButtonText'
            :onClose='dialogOnClose'
            id='messageDialog' />

        <b-alert
            :show="dismissCountDown"
            variant="dark"
            fade
            @dismissed="dismissCountDown=0"
            @dismiss-count-down="countDownChanged"
        >
            {{ alertMessage }}
        </b-alert>
    </div>
</template>

<script>
    import MessageDialog from './MessageDialog'

    export default {
        components: { MessageDialog },

        created() {
            console.log("created")
            this.$root.$message = this
        },

        data() {
            return {
                dialogTitle: '',
                dialogMessage: '',
                dialogButtonText: '',
                dialogOnClose: (() => {}),
                alertMessage: '',
                dismissCountDown: 0,
            }
        },

        methods: {
            showDialog(title = "", message = "", buttonText = "Ok", onClose = () => {}) {
                this.dialogTitle = title
                this.dialogMessage = message
                this.dialogButtonText = buttonText
                this.dialogOnClose = onClose
                $('#messageDialog').modal()
            },

            countDownChanged(dismissCountDown) {
                this.dismissCountDown = dismissCountDown
            },

            showAlert(message, timeoutSeconds = 3) {
                this.alertMessage = message
                this.dismissCountDown = timeoutSeconds
            }
        }
    }
</script>
