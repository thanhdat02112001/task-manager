<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="{{mix('js/app.js')}}"></script>
    <title>Task Manager</title>
</head>
<body>
    <div class="container">
        <div id="main">
            <div class="presentation-left">
                <img src="https://to-do-cdn.microsoft.com/static-assets/c26cd0d92ec61ba2c661adefaa535ab3cc4fb124f347a850fded8034dad5d360/icons/welcome-left.png" class="image-left" alt="">
            </div>
            <div class="interaction" role="main" aria-labelledby="headline subheadline">
                <div class="interaction-top">
                    <img src="https://to-do-cdn.microsoft.com/static-assets/c87265a87f887380a04cf21925a56539b29364b51ae53e089c3ee2b2180148c6/icons/logo.png" class="image-logo" alt="">
                    <h1 id="headline"><span class="me-2">Task Manager</span></h1>
                    <img src="https://to-do-cdn.microsoft.com/static-assets/da7ea2e49739d43b8e3a4d59c6029b078a13f81b18a7b236cd0ebfc41495dfd1/icons/welcome-center.png" class="image-center" alt="">
                    <p class="description">
                        <span>Task Manager gives you focus, from work to play.</span>
                    </p>
                </div>
                <div class="interaction-signin">
                    <a id="actionButton" class="button" href="{{route('google.redirect')}}" rel="noreferrer">
                        <span>Get started</span>
                    </a>
                </div>
            </div>
            <div class="presentation-right">
                <img src="https://to-do-cdn.microsoft.com/static-assets/f2f56b7d4c72910540effed9ccddae703d8d09b94075dddfeeab6cd79def0c60/icons/welcome-right.png" class="image-right" alt="">
            </div>
        </div>
    </div>
</body>
</html>