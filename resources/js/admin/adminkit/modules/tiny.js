import tinymce from 'tinymce'

const uploadHandler = async (uploadUrl, blobInfo, success, failure) => {
    var xhr, formData
    xhr = new XMLHttpRequest()
    xhr.withCredentials = false

    xhr.open('POST', uploadUrl)
    xhr.setRequestHeader(
        'X-CSRF-TOKEN',
        document.head.querySelector('meta[name="csrf-token"]').content
    )

    xhr.onload = function () {
        var json

        if (xhr.status !== 200) {
            failure('HTTP Error: ' + xhr.status)
            return
        }
        json = JSON.parse(xhr.responseText)

        if (!json || typeof json.location != 'string') {
            failure('Invalid JSON: ' + xhr.responseText)
            return
        }
        success(json.location)
    }
    formData = new FormData()
    formData.append('file', blobInfo.blob(), blobInfo.filename())
    xhr.send(formData)
}

const initTiny = (
    options = {
        uploadUrl: '/admin/editor/upload',
    }
) => {
    if (window.tinymce) {
        for (let editor of window.tinymce.editors) {
            window.tinymce.remove(editor)
        }
    }

    const editors = document.getElementsByClassName('wysiwyg')
    const locale = document.documentElement.lang

    console.log('editors:')
    console.log(editors)

    for (let editor of editors) {
        tinymce.init({
            selector: '#' + editor.id,
            language: locale,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help',
            ],
            toolbar:
                'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | preview media fullpage | ' +
                'forecolor backcolor emoticons | help | customInsertButton customDateButton',
            menubar: 'favs file edit view insert format tools table help',
            images_upload_handler: async (blobInfo, success, failure) => {
                await uploadHandler(
                    options.uploadUrl,
                    blobInfo,
                    success,
                    failure
                )
            },
            setup: (editor) => {
                editor.on('Input', (evt) => {
                    this.value = editor.getContent()
                })
                editor.on('Change', (evt) => {
                    this.value = editor.getContent()
                })
            },
        })
    }
}

// Wait until page is loaded
document.addEventListener('DOMContentLoaded', () => initTiny())
