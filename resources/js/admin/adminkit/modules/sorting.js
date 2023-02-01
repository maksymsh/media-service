import Sortable from 'sortablejs'

function initSorting() {
    let sortable = document.getElementsByClassName('sortable')
    for (let el of sortable) {
        Sortable.create(el, {
            handle: '.handle',

            onUpdate: async function (e) {
                console.log(e)

                const data = {
                    model: e.target.dataset.type,
                    data: [...e.target.childNodes].map((item, idx) => {
                        return {
                            id: item.dataset.id,
                            position: idx,
                        }
                    }),
                }

                const response = await axios.post('/admin/sorting', data)

                console.log(response.data)
            },
        })
    }
}

// Wait until page is loaded
document.addEventListener('DOMContentLoaded', () => initSorting())
