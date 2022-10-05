<!DOCTYPE html>
<html>
    <head>
        <title>QR code Generator</title>
    </head>
<body>
    <div class="visible-print text-center">
        <h1>Laravel 7 - QR Code Generator Example</h1>
 @foreach ($posts as $post )
        {!! QrCode::size(150)->generate('http://127.0.0.1:8000/login/'.$post); !!}
 @endforeach







    </div>
</body>
</html>
