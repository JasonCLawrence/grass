<h2>Welcome to Grass Roots</h2>

<p>Hello {{ $user->name }},</p>

<p>We've created an account for you so you can manage your lawn service bookings.</p>

<p><strong>Email:</strong> {{ $user->email }}</p>
<p><strong>Password:</strong> {{ $password }}</p>

<p>You can login here:</p>

<p>
<a href="{{ url('/login') }}">
{{ url('/login') }}
</a>
</p>

<p>If you'd like to change your password, you can reset it here:</p>

<p>
<a href="{{ route('password.request') }}">
Reset Password
</a>
</p>

<p>Thanks for choosing <strong>Grass Roots</strong> 🌱</p>