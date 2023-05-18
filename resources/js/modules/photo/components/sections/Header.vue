<template>
    <section class="m_header">
        <section class="m_logo">
            oh-mary.ph
        </section>
        <section class="m_main_menu">
            <router-link :to="{name:'home'}">
                <div class="m_menu-item" :class="{active: currentRoute() === 'home'}">
                    Главная
                </div>
            </router-link>
            <router-link :to="{name:'profile'}">
                <div class="m_menu-item" :class="{active: currentRoute() === 'profile'}">
                    Портфолио
                </div>
            </router-link>
            <router-link :to="{name:'contacts'}">
                <div class="m_menu-item" :class="{active: currentRoute() === 'contacts'}">
                    Контакты
                </div>
            </router-link>
            <div class="m_menu-item"><a href="#">Мои работы</a></div>
            <div class="m_menu-item"><a href="#">Цены</a></div>
        </section>
    </section>
</template>

<script>
export default {
    name: 'Header',
    methods: {
        currentRoute () {
            return this.$route.name
        }
    }
}
</script>
