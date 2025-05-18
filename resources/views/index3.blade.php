<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index3 Page</title>
    <link rel="stylesheet" href="{{ asset('css/index2.css') }}">

</head>

<body>
    <div class="container">
        <header class="header">
            <h1>Welcome to Index3 Page</h1>
        </header>

        <main>
            <div class="data-card">
                <div class="data-item">
                    <p class="label">Số random:</p>
                    <p>{{ $randomNumber }}</p>
                </div>

                <div class="data-item">
                    <p class="label">Nối với chuỗi abc:</p>
                    <p>{{ $stringValue }}</p>
                </div>

                <div class="data-item">
                    <p class="label">Mã hash MD5::</p>
                    <p>
                        {{ $hashedString }}
                    </p>
                </div>
            </div>
        </main>

    </div>
</body>

</html>