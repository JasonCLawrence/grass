<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Grass Roots |</title>
</head>

<body data-plugin-scroll-spy data-plugin-options="{'target': '.wrapper-spy'}">

    <div class="body">

        <div role="main" class="main">
                <div class="card shadow-lg p-5">
        <h1 class="text-success mb-4">Payment Successful</h1>

        <p class="lead">
            Thank you for choosing <strong>Grass Roots Limited</strong>.
        </p>

        <p>
            Your payment method failed.
        </p>

        @if($booking->customer_email)
            <p>
                A confirmation email has been sent to
                <strong>{{ $booking->customer_email }}</strong>.
            </p>
        @endif

        <hr>

        <p>
            Please try again later.
        </p>

        <a href="{{ url('/') }}" class="btn btn-success mt-3">
            Back to Home
        </a>
    </div>
        </div>

    </div>
</html>
