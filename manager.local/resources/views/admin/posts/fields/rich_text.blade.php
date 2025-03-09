@vite([
    'resources/js/admin/posts/rich_text.js',
    'resources/css/plugins/jodit.min.css'
])
<input type="hidden" name="preview_text">
<div style="background-color: white" data-html_editor="preview_text" id="editorjs"></div>