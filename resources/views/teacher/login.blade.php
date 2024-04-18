<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login</title> 
</head>

<body>
    <h1>Welcome to Teacher Dashboard</h1>

    <div class="mb-3">
        <!-- error -->
        @if($errors->any())
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        @endif

        @if(Session::has('error'))
        <li>{{ Session::get('error') }}</li>
        @endif

        @if(Session::has('success'))
        <li>{{ Session::get('success') }}</li>
        @endif

        <!-- error -->

        <form action="{{ route('teacher_login_submit') }}" method="post">
            @csrf
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            <label for="exampleFormControlInput1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="********">
            <button type="submit">Login</button>
        </form>
    </div>

</body>

</html>