document.addEventListener('splade:request', (detail) => {
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
})

document.addEventListener('splade:request-error', (detail) => {
    console.log('splade:request-error', detail)
})
