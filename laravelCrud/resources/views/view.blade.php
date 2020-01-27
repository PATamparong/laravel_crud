<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="">
        <table>
            <thead>
                <th>firstname</th>
                <th>middlename</th>
                <th>lastname</th>
                <th>email</th>
                <th>age</th>
                <th>gender</th>
                <th>address</th>
            </thead>
            <tbody>
                <td>@href="{{ route('view',$user->id) }}" </td>
                <td>@href="{{ route('view',$user->id) }}"</td>
                <td>@href="{{ route('view',$user->id) }}"</td>
                <td>@href="{{ route('view',$user->id) }}"</td>
                <td>@href="{{ route('view',$user->id) }}"</td>
                <td>@href="{{ route('view',$user->id) }}"</td>
                <td>@href="{{ route('view',$user->id) }}"</td>
            </tbody>
        </table>
    </form>
</body>
</html>