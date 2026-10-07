<!DOCTYPE html>
<html>

<head>
    <title>Student List</title>
</head>

<body>
    <h1>Student List</h1>

    <ul>
        @foreach ($students as $student)
            <li>
                {{ $student->student_id }} , {{ $student->name }}
            </li>
        @endforeach
        </ul>
        </body>

</html>