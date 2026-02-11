<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmed</title>
</head>
<body style="font-family: Arial, sans-serif; background-color:#f7f7f7; padding:20px;">

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="600" style="background:#ffffff; padding:30px; border-radius:6px;">
                    
                    <tr>
                        <td>
                            <h2 style="color:#2e7d32;">🌱 Booking Confirmed</h2>

                            <p>Hi {{ $booking->customer_name }},</p>

                            <p>
                                Thank you for choosing <strong>Grass Roots Limited</strong>.
                                Your booking has been successfully confirmed and payment has been received.
                            </p>

                            <hr>

                            <h3>Booking Details</h3>
                            <p>
                                <strong>Service:</strong> {{ ucwords(str_replace('-', ' ', $booking->service)) }}<br>
                                <strong>Frequency:</strong> {{ ucfirst(str_replace('_', ' ', $booking->frequency)) }}<br>
                                <strong>Scheduled Date:</strong> {{ $booking->job_date->format('F j, Y') }}
                            </p>

                            <p>
                                Our team will arrive as scheduled. If you need to make changes or have questions,
                                just reply to this email.
                            </p>

                            <p style="margin-top:30px;">
                                Thank you for supporting local 🌱<br>
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
