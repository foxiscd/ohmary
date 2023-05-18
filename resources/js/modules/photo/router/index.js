import Contacts from '../components/Contacts.vue'
import About from '../components/About.vue'
import Profile from '../components/Profile.vue'
import Main from '../components/Main.vue'

export default [
    {
        path: '/',
        name: 'home',
        component: Main,
        meta: { template: 'photo' },
    },
    {
        path: '/contacts',
        name: 'contacts',
        component: Contacts,
        meta: { template: 'photo' },
    },
    {
        path: '/about',
        name: 'about',
        component: About,
        meta: { template: 'photo' },
    },
    {
        path: '/profile',
        name: 'profile',
        component: Profile,
        meta: { template: 'photo' },
    }
]
