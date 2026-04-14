import { createApp, h, DefineComponent } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import '../css/app.css'
import { createPinia } from 'pinia'

createInertiaApp({
    resolve: (name: string) => {
        const pages = import.meta.glob<DefineComponent>('./Pages/**/*.vue')
        return pages[`./Pages/${name}.vue`]()
    },

    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(createPinia())
            .mount(el)
    },
})
