<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us</title>
</head>
<body>
    <h2>nom du client :</h2>{{ $datalis['name'] }}
    <h2>l'email de notre client :</h2>{{ $datalis['email'] }}
   
    <h2> le contenu :<br></h2>{{ $datalis['message'] }}
    <p>Thank You</p>
</body>
</html>