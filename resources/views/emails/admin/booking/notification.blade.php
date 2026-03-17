<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Booking Notification</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f7f7f7; padding: 20px;">

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="600" style="background: #ffffff; padding: 30px; border-radius: 6px;">
                    
                    <tr>
                        <td>
                            <h2 style="color: #2e7d32;">🌱 New Booking Notification</h2>

                            <p>Dear Admin,</p>

                            <p>
                                A new booking has been made by <strong>{{ $booking->customer_name }}</strong>.
                            </p>

                            <hr>

                            <h3>Booking Details</h3>
                            <p>
                                <strong>Service:</strong> {{ ucwords(str_replace('-', ' ', $booking->service)) }}<br>
                                <strong>Frequency:</strong> {{ ucfirst(str_replace('_', ' ', $booking->frequency)) }}<br>
                                <strong>Scheduled Date:</strong> {{ $booking->job_date->format('F j, Y') }}
                            </p>

                            <p>
                                You can view and manage the booking in the admin panel.
                            </p>

                            <p style="margin-top: 30px;">
                                Thank you for overseeing operations 🌱<br>
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
