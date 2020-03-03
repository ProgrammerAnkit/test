<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar_elements">
            <ul class="navbar_list">
                <li class="a">HOME</li>
                <li class="a">ABOUT US</li>
                <li class="a">CONTACT US</li>
            </ul>
        </div>
    </div>

    <div class="container">
        <form action=" /update_user/{{ $service->id }}" method="POST">
            {{csrf_field()}}
            Student name:<br>
            <input type="text" name="student_name" value="{{$service->student_name}}"><br>
            Mobile no:<br>
            <input type="number" name="mobile_no" value="{{$service->mobile_no}}"><br><br>
            <button type="submit">submit</button>
        </form>

    </div>


</body>

</html>