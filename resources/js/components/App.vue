<template>
    <div>
        <component :is="template"></component>
    </div>
</template>

<script>

export default {
    name: 'App',
    computed: {
        template () {
            return this.$route.meta.template || 'photo'
        }
    }
}
</script>

<style>
</style>
