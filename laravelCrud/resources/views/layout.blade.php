<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <style>
    .card{
        margin-top:40px;
    }
    header{
        height:80px;
        background-color:orange;
    }
    .top_table{
        font-family:cursive;
    }
    .btn{
        margin-left:20px;
    }
    </style>
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <br><a class="btn btn-info" href="{{url('back')}}">Back</a>
        </nav>
    </header>
    <center>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="card">
    @section('content')
    <h1 class="top_table">TABLE</h1>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>firstname</th>
                <th>middlename</th>
                <th>lastname</th>
                <th>email</th>
                <th>age</th>
                <th>gender</th>
                <th>address</th>
                <th >Action</th>
            </thead>
            <tbody>
            @foreach($human as $user)
                <tr>
                    <td scope="row" >{{$user['firstname']}}</td>
                    <td scope="row">{{$user['middlename']}}</td>
                    <td scope="row">{{$user['lastname']}}</td>
                    <td scope="row">{{$user['email']}}</td>
                    <td scope="row">{{$user['age']}}</td>
                    <td scope="row">{{$user['gender']}}</td>
                    <td scope="row">{{$user['addressss']}}</td>
                    <td>
                        <a href="{{ route('create') }}" class="btn btn-info">View</a>
                        <a href="{{ route('find',$user->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('delete',$user->id) }}" class="btn btn-primary">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</center>   
</body>
</html>