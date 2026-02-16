<!DOCTYPE html>
<html>
<head>
    <title>TiloPay Test</title>
</head>
<body>
    <h1>Test TiloPay Payment</h1>

    <form action="{{ route('tilopay.pay') }}" method="POST">
        @csrf
        <label>Customer Name:</label>
        <input type="text" name="customer_name" required><br><br>

        <label>Customer Email:</label>
        <input type="email" name="customer_email" required><br><br>

        <button type="submit">Pay J$50</button>
    </form>
</body>
</html>
