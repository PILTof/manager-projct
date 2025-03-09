import { Jodit } from "jodit";

document.querySelectorAll('[data-html_editor]').forEach(el => {
    const editor = Jodit.make(el, {
        buttons: [
            'bold',
            'italic',
            'underline',
            'strikethrough',
            'eraser',
            'ul',
            'ol',
            'font',
            'fontsize',
            'paragraph',
            'superscript',
            'subscript',
            'file',
            'image',
            'copyformat',
            'table',
            'link',
            'left',
            'brush',
            'undo',
            'redo',
            'print',
        ],
    });
    el.addEventListener('change', function() {
        document.querySelector(`input[name="${el.dataset.html_editor}"]`).value = editor.value
    })

})
