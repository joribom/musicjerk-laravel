<template>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">{{ title }}</h4>
                </div>
                <div class="modal-body no-indent">
{{ message }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" v-on:click="onClose()" data-dismiss="modal">{{ buttonText }}</button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .no-indent {
        text-indent: 0 !important;
        white-space: break-spaces;
        display: block;
    }
</style>

<script>
export default {
    props: {
        title: String,
        message: String,
        buttonText: String,
        onClose: Function
    }
}
</script>
