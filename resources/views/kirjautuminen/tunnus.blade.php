<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>1. Aloitus</title>
    </head>
<body>
    <header>
        <h1>{{$sivuNimi}}</h1>
    </header>

<div class="container">
    <form id="passForm"


          action=" {{ Route::redirect('/tunnus', '/process') }} "
          
          
          method="POST">
        <label for="nimi">Nimi:</label><br>
        <input type="text" id="nimi"
               name="nimi">
        <br>
        <label for="tunnus">Tunnus:</label><br>
        <input type="text" id="tunnus"
               name="tunnus">
        <br>
        <button type="submit"
                class="btn btn-primary"
                href="">Kirjaudu</button>
    </form>
    {{-- @if(array_key_exists('submitForm', $_POST))
    @endif --}}
</div>
{{-- 
@if(array_key_exists('codePage', $_POST))

@endif --}}


{{-- @unless ()


@else

@endunless --}}

</body>
</html>