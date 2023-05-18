<template>
        <ul class="m_nav main">
            <li v-for="route in routes">
                <menu-item :item="route" v-if="!route.meta.hasParent"></menu-item>
            </li>
        </ul>
</template>

<script>
import routes from './../../router'
import MenuItem from '../helpers/MenuItem.vue'

export default {
    name: 'sidebar',
    components: { MenuItem },
    data () {
        return {
            routes: routes
        }
    }
}
</script>

<style>
</style>
