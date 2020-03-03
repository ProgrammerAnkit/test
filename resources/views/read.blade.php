<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>


<body>
    <div class="container">
        <div class="row">
            <a href="{{ url('/') }}" class="btn btn-info">add student</a>
        </div>

        <div class="row">
            <div class="navbar">
                <div class="navbar_elements">
                    <ul class="navbar_list">
                        <li class="a">HOME</li>
                        <li class="a">ABOUT US</li>
                        <li class="a">CONTACT US</li>
                    </ul>
                </div>
            </div>
            <div>
                <table class="table table-bordered">

                    <head>
                        <tr>
                            <th>sr.no</th>
                            <th>Student name</th>
                            <th>Mobile no</th>
                            <th>Action</th>
                        </tr>
                    </head>
                    <tbody>
                        @foreach($data as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->student_name }}</td>
                            <td>{{ $student->mobile_no }}</td>
                            <td> <a href="{{ url('/edit') }}/{{$student->id}}" class="btn btn-info">edit</a>
                                <a href="{{ url('/delete') }}/{{$student->id}}" class="btn btn-danger">delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>

</body>

</html>