<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <style>
    .top_card{
        background-color:grey;
    }
    </style>
</head>
<body border="">
    <form action="{{route('update', $userUp['id'])}}" method="post">
    @csrf
    <h1 class="top">Registration Form</h1>
    <div>
    <div class="top_card">
    <div class="form-group">
    <label for="firstname">Firstname</label>
    <input class="form-control" value="{{$userUp['firstname']}}" type="text" name="firstname"><br>
    

    <label for="middlename">Middlename</label>
    <input class="form-control"value="{{$userUp['middlename']}}"  type="text" name="middlename"><br>
    

    <label for="lastname">Lastname</label>
    <input class="form-control" value="{{$userUp['lastname']}}" type="text" name="lastname"><br>
   

    <label for="email">Email</label>
    <input class="form-control" value="{{$userUp['email']}}" type="text" name="email"><br>
    

    <label for="age">Age</label>
    <input class="form-control" value="{{$userUp['age']}}" type="number" name="age"><br>
    

    <label for="status">Gender:</label>
    <input type="radio" name="gender" value=1>Male
    <input type="radio" name="gender" value=2>Female<br><br>
    

    <label for="address">Address</label>
    <input class="form-control" value="{{$userUp['address']}}" type="text" name="address"><br>


    <button type="submit" action="submit">Submit</button>
    </div>
    </div>
    </div>
    </form>
</body>
</html>