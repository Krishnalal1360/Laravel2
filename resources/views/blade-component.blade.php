<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    {{-- Accessing Components --}}
    {{--
    <h4>Blade Component</h4>
    <x-alert></x-alert>
    <x-forms.input></x-forms.input>
    --}}
    {{-- Passing Parameters --}}
    {{--
    <x-alert text="Hello! I am Developer!" style="color:red;"></x-alert>
    --}}
    {{--
    @php
        $langs = ['C', 'C++', 'Java', 'Python', 'PHP', 'JavaScript'];
    @endphp
    @foreach ($langs as $lang)
        <x-alert :test="$lang"></x-alert>
    @endforeach
    --}}
    {{-- Passing Attributes --}}
    {{--
    <x-forms.button style="padding:10px;color:red;background:yellow" class="btn-1">Click Here</x-forms.button>
    <br>
    <x-forms.button style="padding:10px;color:aqua;background:blue" class="btn-2">Click On Me</x-forms.button>
    --}}
    {{-- Card --}}
    <x-forms.card>
        <x-slot name="image">
            <img src="https://images.unsplash.com/photo-1758046610761-666031ffa9b8?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
        </x-slot>
    </x-forms.card>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
