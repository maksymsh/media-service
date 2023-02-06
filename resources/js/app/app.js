// Bootstrap application
import './bootstrap'

// Splade events
import './splade'

import { createApp } from 'vue/dist/vue.esm-bundler.js'
import { renderSpladeApp, SpladePlugin } from '@protonemedia/laravel-splade'

const el = document.getElementById('app')

const app = createApp({
    mounted() {
        initJS()

        setTimeout(() =>
            document.dispatchEvent(new CustomEvent('DOMContentLoaded'))
        )

        console.log('Root component mounted.')
    },
    render: renderSpladeApp({ el }),
})

app.use(SpladePlugin, {
    max_keep_alive: 10,
    transform_anchors: false,
    progress_bar: true,
})

app.mount(el)
