Сайт LARAVEL + Vue Js (vite) + Backpack Admin Panel

Процесс добавления страницы:

1. -- Создать компонент .vue в папке resources/js/pages/
2. -- Добавить компонент во vue:
   resources/app.js
   ```CODE
   import название_компонента from './pages/название компонента.vue'
   app.component('название компонента', название_компонента)
3. -- Добавить шаблон blade
php artisan make:view pages/{название шаблона страницы}
Внутри 
```CODE
@extends('layout.main')

@section('content')
<компонент vue></компонент vue>
@endsection

4. Добавить роут в /routes/web.php
