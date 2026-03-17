<div class="p-6">

    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Client Bookings</h2>
        <input type="text" wire:model.debounce.500ms="search" placeholder="Search bookings..."
            class="border rounded-lg px-3 py-2 text-sm w-64">
    </div>

    <div class="grid grid-cols-3 gap-4 mb-4">
        <div class="border p-4 rounded-lg text-center">
            <h3 class="font-semibold">Total Bookings</h3>
            <p class="text-lg">{{ $totalBookings }}</p>
        </div>
        <div class="border p-4 rounded-lg text-center">
            <h3 class="font-semibold">Total Users</h3>
            <p class="text-lg">{{ $totalUsers }}</p>
        </div>
        <div class="border p-4 rounded-lg text-center">
            <h3 class="font-semibold">Registration Rate</h3>
            <p class="text-lg">{{ number_format($registrationRate, 2) }}</p>
        </div>
    </div>

    <div class="mb-4">
        <input type="text" placeholder="Customer Name" wire:model.defer="name" class="border rounded-lg px-3 py-2">
        <input type="text" placeholder="Service" wire:model.defer="service" class="border rounded-lg px-3 py-2">
        <input type="date" wire:model.defer="date" class="border rounded-lg px-3 py-2">
        <select wire:model.defer="status" class="border rounded-lg px-3 py-2">
            <option value="">Select Status</option>
            <option value="paid">Paid</option>
            <option value="pending">Pending</option>
        </select>
        <button wire:click="isEditMode ? updateBooking() : createBooking()"
            class="bg-blue-500 text-white rounded-lg px-4 py-2">
            {{ $isEditMode ? 'Update Booking' : 'Create Booking' }}
        </button>
    </div>

    <div class="overflow-x-auto rounded-lg border border-neutral-200 dark:border-neutral-700">
        <table class="w-full text-sm">
            <thead class="">
                <tr>
                    <th class="px-4 py-3 text-left">Customer</th>
                    <th class="px-4 py-3 text-left">Service</th>
                    <th class="px-4 py-3 text-left">Date</th>
                    <th class="px-4 py-3 text-left">Status</th>
                    <th class="px-4 py-3 text-left">Actions</th>
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
                        <td class="px-4 py-3">
                            <button wire:click="editBooking({{ $booking->id }})" class="text-blue-500">Edit</button>
                            <button wire:click="deleteBooking({{ $booking->id }})" class="text-red-500">Delete</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-6 text-neutral-500">
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
