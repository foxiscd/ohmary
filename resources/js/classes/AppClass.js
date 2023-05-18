import * as http from 'http'

export default class AppClass {
    path = {
        asset: ''
    }

    constructor (app) {
        this.path.asset = app.path.asset
    }

    asset (str) {
        return this.path.asset + str
    }

    connectedWithRoute (routeName, currentRoute) {
        let connected = false

        currentRoute.matched.forEach(item => {
            if (item.name === routeName) {
                connected = true
            }
        })

        return connected
    }
}
