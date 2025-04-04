@vite([
'resources/js/admin/posts/rich_text.js',
'resources/css/plugins/jodit.min.css'
])
<input type="hidden" name="{{ $field['name'] }}">

<div class="form-group col-sm-12 mb-3">
    <div style="background-color: white" data-editor_value="{{ $field['value'] ?? '' }}" data-html_editor="{{ $field['name'] }}"></div>
</div>