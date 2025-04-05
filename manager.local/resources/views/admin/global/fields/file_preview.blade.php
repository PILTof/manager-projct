@vite(['resources/js/admin/fields/file_preview.js'])
@vite(['resources/css/plugins/file_preview.css'])
<?
use Illuminate\Support\Facades\Storage;
$value = $field['value'] ? Storage::url('uploads/'.$field['value']) : '';
?>
<input type="file" name="{{ $field['name'] }}" style="display: none;" >
<div class="custom-file-container"
    data-img-style="<?=$field['img-style'] ?? ''?>"
    data-value="{{ $value }}"
    data-label="{{ $field['label'] }}"
    data-upload-id="{{ $field['name'] }}"></div>