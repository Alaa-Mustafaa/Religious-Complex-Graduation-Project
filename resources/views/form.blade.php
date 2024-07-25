<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Trip</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Book Your Trip</h1>
        <form action="{{ route('tripp.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required class="form-control">
    </div>
    <div>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required class="form-control">
    </div>
    <div>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required class="form-control">
    </div>
    <div>
        <label for="number_of_adults">Number of Adults:</label>
        <input type="number" id="number_of_adults" name="number_of_adults" min="0" oninput="calculateTotal()" required class="form-control">
    </div>
    <div>
        <label for="number_of_kids">Number of Kids:</label>
        <input type="number" id="number_of_kids" name="number_of_kids" min="0" oninput="calculateTotal()" required class="form-control">
    </div>
    <div>
        <label for="program">Program:</label>
        <select id="program" name="program" required class="form-control">
            <option value="first program">First Program</option>
            <option value="second program">Second Program</option>
        </select>
    </div>
    <div>
        <p id="total_price">Total Price: 0 EGP</p>
    </div>
            <!-- Other form fields -->
            <button type="submit" class="btn btn-primary">Book Trip</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        // Display Swal alert message
        // @if (Session::has('success'))
        //     Swal.fire({
        //         title: 'Success',
        //         text: '{{ Session::get('success') }}',
        //         icon: 'success',
        //         confirmButtonText: 'OK'
        //     });
        // @elseif (Session::has('error'))
        //     Swal.fire({
        //         title: 'Error',
        //         text: '{{ Session::get('error') }}',
        //         icon: 'error',
        //         confirmButtonText: 'OK'
        //     });
        // @endif
    </script>
</body>
</html>
