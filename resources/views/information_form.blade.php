<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="{{ asset('images/logo.jfif') }}" type="image/x-icon">

    <title>Information Form</title>
</head>
<body>
    <!-- <form action="{{ route('informations.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        @for ($i = 1; $i <= 10; $i++)
            <label for="desc{{ $i }}">Description {{ $i }}:</label>
            <textarea name="desc{{ $i }}"></textarea><br>
        @endfor

        <label for="calledreason">Called Reason:</label>
        <textarea name="calledreason" required></textarea><br>

        <button type="submit">Submit</button>
    </form> -->


    <form method="POST" action="{{ route('informations.store') }}" enctype="multipart/form-data">
    @csrf
    <label for="name">Name:</label>
        <input type="text" name="name" required><br>
    <!-- Add form fields here -->
    @for ($i = 1; $i <= 10; $i++)
            <label for="desc{{ $i }}">Description {{ $i }}:</label>
            <textarea name="desc{{ $i }}"></textarea><br>
        @endfor

        <label for="calledreason">Called Reason:</label>
        <textarea name="calledreason" ></textarea><br>
    <!-- Add other desc fields -->

    <input type="file" name="image">
    <input type="file" name="imagee">
    <input type="file" name="imageee">

    <button type="submit">Submit</button>
</form>

</body>
</html>








