<template>
    <section :class="['m_back-color-'+ background , 'm_text_color-'+ color]" class="m_main_menu">
        <a href="/admin" class="m_menu-item icon">
            <div class="m_menu-item" :class="{active: currentRoute() === 'admin'}">
                <img :src="$app.asset('img/login-' + iconsColor + '.svg')" width="40" height="40" alt="">
            </div>
        </a>
    </section>
</template>

<script>

export default {
    name: 'MainTopBar',
    props: {
        background: { type: String, default: 'white' },
        color: { type: String, default: 'black' },
        iconsColor: { type: String, default: 'black' }
    },
    methods: {
        currentRoute () {
            return this.$route.name
        }
    }
}
</script>

<style>
</style>
