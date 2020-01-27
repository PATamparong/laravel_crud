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
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('insert')}}" method="post">
    @csrf
    <h1 class="top">Registration Form</h1>
    <div class="card">
    <div class="form-group">
    <label for="firstname">Firstname</label>
    @if($errors->has('firstname'))
    <div class="error" style="color:red;">{{ $errors->first('firstname') }}</div>
    @endif
    <input class="form-control" value="{{old('firstname')}}" type="text" name="firstname"><br>
    

    <label for="middlename">Middlename</label>
    @if($errors->has('middlename'))
    <div class="error"  style="color:red;">{{ $errors->first('middlename') }}</div>
    @endif
    <input class="form-control" value="{{old('middlename')}}"  type="text" name="middlename"><br>
    

    <label for="lastname">Lastname</label>
    @if($errors->has('lastname'))
    <div class="error" style="color:red;">{{ $errors->first('lastname') }}</div>
    @endif
    <input class="form-control" value="{{old('lastname')}}" type="text" name="lastname"><br>
   

    <label for="email">Email</label>
    @if($errors->has('email'))
    <div class="error"  style="color:red;">{{ $errors->first('email') }}</div>
    @endif
    <input class="form-control" value="{{old('email')}}" type="text" name="email"><br>
    

    <label for="age">Age</label>
    @if($errors->has('age'))
    <div class="error"  style="color:red;">{{ $errors->first('age') }}</div>
    @endif
    <input class="form-control" value="{{old('age')}}" type="number" name="age"><br>
    

    <label for="status">Gender:</label>
    @if($errors->has('gender'))
    <div class="error"  style="color:red;">{{ $errors->first('gender') }}</div>
    @endif
    <input type="radio" name="gender" value=1>Male
    <input type="radio" name="gender" value=2>Female<br><br>
    

    <label for="address">Address</label>
    @if($errors->has('address'))
    <div class="error"  style="color:red;">{{ $errors->first('address') }}</div>
    @endif
    <input class="form-control" value="{{old('address')}}" type="text" name="address"><br>


    <button type="submit" action="submit">Submit</button>
    </div>
    </div>
    </form>
</body>
</html>