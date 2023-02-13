<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:Black;text-align:center;">
<div class="container text-center" style="border:3px solid red;border-radius:20px;">
        <h1 style="font-size: 72px;
  background: -webkit-linear-gradient(#0affe6, #d6d200,#f90000,#83d8f7,#5f00bf);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;" class="text-center ">
  
  @if(1>2)

  Merhaba {{$ad}}
    @else
    sadece merhaba
   @endif
</h1>
    </div>
</body>
</html>