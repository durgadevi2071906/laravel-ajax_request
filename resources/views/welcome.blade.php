<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" >
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <style>
        .form-control:focus {
        border-color: #20dd3a;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 3px rgba(9, 255, 0, 0.6);
}
    </style>
    <body>
        <div class="container">
            <form autocomplete="off" class="card p-4" id="btn" action="{{ route('ajax') }}">
                @csrf
                <div class="form-group  mb-2">
                    <label>Name :</label>
                    <input class="form-control" id="name" type="text" name="name" placeholder="Enter your name" >
                    <p class=" text-danger error error-name"></p>
                </div>
                <div class="form-group mb-4">
                    <label>Email :</label>
                    <input class="form-control" id="email" type="text" name="email" placeholder="Enter your email" >
                    <p class=" text-danger error error-email"></p>
                </div>
                <div class="form-group">
                    <button class="btn btn-success w-100" type="submit">Ajax</button>
                </div>
            </form>
       </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('Js/app.js') }}"></script>
</html>
