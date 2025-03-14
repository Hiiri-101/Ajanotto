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
    <form id="codeForm"
          action=" {{ Route::redirect('/koodi', '/process') }} "
          method="POST">
        <label for="koodi">Koodi:</label><br>
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

{{-- @if(array_key_exists('loginPage', $_POST))
@endif --}}
<br>
<input type="form">
  <button type="submit"
          class="btn btn-primary">Kirjaudu tunnuksilla</button>
</input>

{{-- @unless ()


@else

@endunless --}}

</body>
</html>