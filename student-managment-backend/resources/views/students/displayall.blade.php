<!DOCTYPE html>
<html>
<body>
    <h1>Student List</h1>
    <ul>
        @foreach ($students as $student)
            <li>{{ $student->name }} (Age: {{ $student->age }})</li>
        @endforeach
    </ul>
</body>
</html>