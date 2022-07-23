
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Assimilation QR Code</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>

    <div class="container mt-4">

        <div class="card">
            <div class="card-header">
                <h2>Assimilation QR Code</h2>
            </div>
            <div class="card-body">
                <center>{!! QrCode::size(500)->generate('http://assimilation.e-portal.com.ng/form') !!}</center>
                <br>
                <center><b>http://assimilation.e-portal.com.ng/form</b></center>
            </div>
        </div>

        {{-- <div class="card">
            <div class="card-header">
                <h2>Color QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->backgroundColor(255,90,0)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-8') !!}
            </div>
        </div> --}}

    </div>
</body>
</html>