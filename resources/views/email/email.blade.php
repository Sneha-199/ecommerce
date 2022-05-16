{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
</head>
<body>
{{-- <h2>“Your account has  created” </h2> --}}
{{-- <h3>Your Password id  is {{$user['password']}} </h3>
</body>
</html> --}} 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Verify Your Email Address</div>
                      <div class="card-body">

                       <a href="{{url('reset-password/'.$token)}}">Click Here</a>.
                   </div>
               </div>
           </div>
       </div>
   </div>
</body>
</html>
