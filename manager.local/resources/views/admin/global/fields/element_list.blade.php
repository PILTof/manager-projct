<?

use App\Http\Controllers\Admin\Crud\Abstract\Fields\ElementFieldController;
use Illuminate\View\ViewException;


if(!$field['controller'])
    throw new ViewException('Expected field controller, but get null');

$controller = new ElementFieldController($field['controller']);
$items = $controller->getItemsArray();

?>
@vite(['resources/js/admin/fields/element_list_modal.js'])
<div class="form-group col-sm-12 mb-3">
    <select name="{{ $field['name'] }}" class="form-control">
        <option value="">Выбрать</option>
        <? foreach ($items as $i => $item): ?>
            <option value="{{ $item['id'] }}">{{ $item[$controller->getItemTitleFieldKey()] }}</option>
        <? endforeach; ?>
    </select>
</div>