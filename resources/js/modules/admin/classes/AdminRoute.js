import { Route } from '../../../classes/Route'

export class AdminRoute extends Route {

    useMenu (bool = true) {
        this.meta.menuUsed = bool

        return this
    }

    defaultTemplate () {
        return 'admin'
    }
}
