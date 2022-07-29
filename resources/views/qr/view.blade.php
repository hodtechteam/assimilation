
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>First Time Guest</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <script>
 function PrintDoc() {
            var toPrint = document.getElementById('printarea');
            var popupWin = window.open('', '_blank', 'width=300,height=100%,location=yes,left=300px');
            popupWin.document.open();
            popupWin.document.write('<html><title>..::First Timer Registration QRCode::..</title>' +
                '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/><link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /></head><body onload="window.print()">')
            popupWin.document.write(toPrint.innerHTML);
            popupWin.document.write('</html>');
            popupWin.document.close();
        }
    </script>
</head>

<body>

    <div class="container mt-4">

        <div class="card">
            <div class="card-header">
                <h2>First Time Guest</h2>
            </div>
            <div class="col-lg-12" id="printarea">
                <div class="card-body">
                    
                    <center>
                        <h4>First Time Guest</h4><br>
                        {!! QrCode::size(850)->generate('http://assimilation.e-portal.com.ng/form') !!}
                    </center>
                    <br>
                    <center><b>http://assimilation.e-portal.com.ng/form</b></center>
                </div>
            </div>
        </div>
        <div class="c-invoice__footer">
            <center><button class="btn btn-primary" onclick="PrintDoc()">Print QRCode Sheet</button></center>
            {{--                                    <button class="btn btn-dark" onclick="PrintPreview()">PRINT PREVIEW</button>--}}
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