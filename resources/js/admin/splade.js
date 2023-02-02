import('nprogress/nprogress.css')

const NProgress = await import('nprogress')

document.addEventListener('splade:request', (detail) => {
    NProgress.start()
    console.log('splade:request', detail)
})

document.addEventListener('splade:request-progress', (detail) => {
    console.log('splade:request-progress', detail)
})

document.addEventListener('splade:request-response', (detail) => {
    console.log('splade:request-response', detail)
    setTimeout(() =>
        document.dispatchEvent(new CustomEvent('DOMContentLoaded'))
    )
    setTimeout(() => NProgress.done(), 250)
})

document.addEventListener('splade:request-error', (detail) => {
    console.log('splade:request-error', detail)
})
