<template>

</template>

<script>
export default {
    created() {
        this.$auth.logout().then(_ => {
            this.$root.$message.showAlert('Logged out')
            this.$router.push('/')
        })
    }
}
</script>
