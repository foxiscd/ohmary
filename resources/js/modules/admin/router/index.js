import Main from '../components/Main.vue'
import { AdminRoute } from '../classes/AdminRoute'
import PortfolioList from '../components/portfolio/PortfolioList.vue'
import PhotoCreate from '../components/portfolio/photo/PhotoCreate.vue'

export default AdminRoute.prepareRoutes([
    AdminRoute.new('/admin', 'admin', Main).setTitle('Главная панель').useMenu(),
    AdminRoute.new('/admin/portfolio', 'admin.portfolio', PortfolioList).setTitle('Портофолио').useMenu().setChains([
        AdminRoute.new('photo/create', 'admin.portfolio.photo.create', PhotoCreate).setTitle('Добавление фото').useMenu()
    ]),
])

