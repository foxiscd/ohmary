<template>
    <div>
        <div class="album-list">
            <div v-for="album in list.data" class="album">
                <img :src="getCoverPhoto(album).path" :alt="getCoverPhoto(album).alt">
                <div class="album_title">{{ album.name }}</div>
            </div>
        </div>
    </div>
</template>

<script>

import { ref, onMounted } from 'vue'
import '@css/admin/profile/index.scss'

export default {
    name: 'PortfolioList',
    setup () {

        const list = ref({ data: [], meta: {} })

        const fetch = async () => {
            let res = await axios.get('/api/portfolio')
            list.value = res.data[0]
        }

        onMounted(fetch())

        return {
            list
        }
    },
    methods: {
        getCoverPhoto (item) {
            return item.photos.find(photo => photo.id == item.cover_photo_id)
        }
    },
}
</script>

<style lang="sass">
</style>
