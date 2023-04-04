// Bootstrap application
import './bootstrap'

// Splade events
import './splade'

document.addEventListener('DOMContentLoaded', () => {
    window.initJS()
})

import { createApp } from 'vue/dist/vue.esm-bundler.js'
import { renderSpladeApp, SpladePlugin } from '@protonemedia/laravel-splade'
import { watch } from 'vue'
import { serialize } from '../utils/url'
import NProgress from 'nprogress'

const el = document.getElementById('app')

const filter = ($splade) => {
    const data = {}

    if (
        $splade.sharedData.value.filter.form.price_from >
        $splade.sharedData.value.filter.minPrice
    ) {
        data.price_from = $splade.sharedData.value.filter.form.price_from
    }

    if (
        $splade.sharedData.value.filter.form.price_to <
        $splade.sharedData.value.filter.maxPrice
    ) {
        data.price_to = $splade.sharedData.value.filter.form.price_to
    }

    if ($splade.sharedData.value.filter.form.sort !== 'default') {
        data.sort = $splade.sharedData.value.filter.form.sort
    }

    for (let attrId in $splade.sharedData.value.filter.form.attrs) {
        for (let i in $splade.sharedData.value.filter.form.attrs[attrId]) {
            if ($splade.sharedData.value.filter.form.attrs[attrId][i]) {
                data.attrs = data.attrs || {}
                data.attrs[attrId] = data.attrs[attrId] || {}
                data.attrs[attrId][i] = 'true'
            }
        }
    }

    $splade
        .visit(
            location.pathname +
                (Object.keys(data).length ? '?' + serialize(data) : '')
        )
        .then(() => {
            initFilter($splade)
        })
}

const initFilter = ($splade) => {
    if ($splade.sharedData.value.filter) {
        watch($splade.sharedData.value.filter.form.attrs, (attrs) => {
            console.log(attrs)
            filter($splade)
        })
        watch(
            () => $splade.sharedData.value.filter.form.sort,
            (sort) => {
                console.log(sort)
                filter($splade)
            }
        )
    }
}

const app = createApp({
    mounted() {
        console.log('Root component mounted.')

        const vm = this

        initFilter(vm.$splade)

        document.addEventListener('splade:request-response', (detail) => {
            initFilter(vm.$splade)
        })
    },
    render: renderSpladeApp({ el }),
})

app.use(SpladePlugin, {
    max_keep_alive: 10,
    transform_anchors: false,
    progress_bar: true,
})

app.config.globalProperties.$splade.filter = filter

app.mount(el)
