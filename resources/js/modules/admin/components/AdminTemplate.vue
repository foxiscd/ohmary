<template>
    <div>
        <div data-timeout="1000" m-spinner></div>
        <section class="flex-column layout">
            <main-top-bar background="black" color="white" icons-color="gold"></main-top-bar>
            <div class="d-flex">
                <div class="bg-dark m_sidebar m_back-color-black m_text-color-white">
                    <Sidebar></Sidebar>
                </div>
                <div class="m_content">
                    <h3>{{ $route.meta.title }}</h3>
                    <router-view></router-view>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import Sidebar from './sections/Sidebar.vue'
import MainTopBar from '../../../components/MainTopBar.vue'

export default {
    components: { MainTopBar, Sidebar },
    name: 'PhotoTemplate',
}
</script>

<style>
</style>
