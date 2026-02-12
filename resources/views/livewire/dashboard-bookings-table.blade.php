<div class="p-6">

    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Your Bookings</h2>
   <input
    type="text"
    wire:model.live="search"
    placeholder="Search bookings..."
    class="border rounded-lg px-3 py-2 text-sm w-64"
>

    </div>

    <div class="overflow-x-auto rounded-lg border border-neutral-200 dark:border-neutral-700">
        <table class="w-full text-sm">
            <thead class="">
                <tr>
                    <th class="px-4 py-3 text-left">Customer</th>
                    <th class="px-4 py-3 text-left">Service</th>
                    <th class="px-4 py-3 text-left">Date</th>
                    <th class="px-4 py-3 text-left">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($bookings as $booking)
                    <tr class="border-t border-neutral-200 dark:border-neutral-700">
                        <td class="px-4 py-3">{{ $booking->customer_name }}</td>
                        <td class="px-4 py-3">{{ ucfirst($booking->service) }}</td>
                        <td class="px-4 py-3">
                            {{ optional($booking->job_date)->format('F j, Y') }}
                        </td>
                        <td class="px-4 py-3">
                            @if ($booking->payment_status === 'paid')
                                <span class="text-green-600 font-semibold">Paid</span>
                            @else
                                <span class="text-yellow-600 font-semibold">Pending</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-6 text-neutral-500">
                            No bookings found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $bookings->links() }}
    </div>

</div>
