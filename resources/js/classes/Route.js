export class Route {

    name
    path
    component
    children = []
    meta = {
        template: '',
        title: '',
        chain: []
    }

    constructor (path, name, component) {
        this.path = path
        this.name = name
        this.component = component
        this.setTemplate(this.defaultTemplate())
        this.setTitle(name)
    }

    defaultTemplate () {
        return 'admin'
    }

    setTemplate (templateName) {
        this.meta.template = templateName

        return this
    }

    setTitle (title) {
        this.meta.title = title

        return this
    }

    static new (path, name, component) {
        return new this(path, name, component)
    }

    addChildren (children) {
        this.children.push(children)

        return this
    }

    setChildrens (childrens) {
        this.children = childrens

        return this
    }

    setChains (chains = []) {
        this.meta.chain.push(...chains)

        return this
    }

    getChains () {
        return this.meta.chain
    }

    static prepareRoutes (routes, __prepared = [], __parent = null) {
        routes.forEach(route => {
            if (__parent) {
                let concatSimbol = Array.from(route.path)[0] === '/' ? '' : '/'
                route.path = __parent.path + concatSimbol + route.path
            }
            route.meta.hasParent = !!__parent
            __prepared.push(route)
            this.prepareRoutes(route.getChains(), __prepared, route)
        })

        return __prepared
    }
}
