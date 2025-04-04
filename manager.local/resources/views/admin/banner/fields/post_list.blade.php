<select name="{{ $field['name'] }}">
    <option value="">Выбрать</option>
    <? foreach ($field['value_list'] as $i => $item): ?>
        <option value="{{ $item['id'] }}">{{ $item['title'] }}</option>
    <? endforeach; ?>
</select>