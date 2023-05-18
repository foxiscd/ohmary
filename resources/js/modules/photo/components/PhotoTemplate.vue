<template>
    <div>
        <div data-timeout="1000" m-spinner></div>
        <section class="layout">
            <MainTopBar></MainTopBar>
            <Header></Header>
            <section class="container m_content">
                <router-view></router-view>
            </section>
            <Footer></Footer>
        </section>
    </div>
</template>

<script>
import Header from './sections/Header.vue'
import Footer from './sections/Footer.vue'
import MainTopBar from '../../../components/MainTopBar.vue'

export default {
    components: { MainTopBar, Footer, Header }
}
</script>

<style>
</style>
