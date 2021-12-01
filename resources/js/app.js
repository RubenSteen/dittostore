import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import AppHead from '@/Shared/AppHead'

createInertiaApp({
    title: title => title,
      resolve: name => require(`./Pages/${name}`),
      setup({ el, App, props, plugin }) {
        createApp({render: () => h(App, props) })
          .use(plugin)
            .component('AppHead', AppHead)
          .mount(el)
      },
})
