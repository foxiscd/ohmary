import { createRouter, createWebHistory } from 'vue-router'
import adminRoutes from '../modules/admin/router'
import photoRoutes from '../modules/photo/router'

const routes = [
    ...photoRoutes,
    ...adminRoutes,
]

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
})

export default router
