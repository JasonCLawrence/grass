<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Payment Cancelled</title>
</head>
<body style="font-family: Arial, sans-serif; background-color:#f7f7f7; padding:20px;">

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="600" style="background:#ffffff; padding:30px; border-radius:6px;">
                    
                    <tr>
                        <td>
                            <h2 style="color:#c62828;">Payment Cancelled</h2>

                            <p>Hi {{ $booking->customer_name }},</p>

                            <p>
                                We noticed that your payment was cancelled, so your booking has not been completed.
                            </p>

                            <hr>

                            <h3>Attempted Booking</h3>
                            <p>
                                <strong>Service:</strong> {{ ucwords(str_replace('-', ' ', $booking->service)) }}<br>
                                <strong>Frequency:</strong> {{ ucfirst(str_replace('_', ' ', $booking->frequency)) }}<br>
                                <strong>Requested Date:</strong> {{ $booking->job_date->format('F j, Y') }}
                            </p>

                            <p>
                                No charges were made. If this was a mistake or you'd like to try again,
                                please revisit our booking page.
                            </p>

                            <p style="margin-top:30px;">
                                We’re here when you’re ready 🌱<br>
                                <strong>Grass Roots Limited</strong>
                            </p>

                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
