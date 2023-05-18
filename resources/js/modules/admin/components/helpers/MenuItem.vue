<template>
    <div v-if="(item.meta.menuUsed || false)">
        <router-link :to="{ name:item.name }" :class="{'active': $app.connectedWithRoute(item.name,$route)}">
            {{ item.meta.title || item.name }}
        </router-link>
        <ul class="nav" v-if="item.getChains()">
            <li v-for="child in item.getChains()">
                <menu-item :item="child"></menu-item>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'MenuItem',
    props: {
        item: { type: Object, default () { return {}} },
    },
}
</script>
