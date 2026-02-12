<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Booking;

class DashboardBookingsTable extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $user = auth()->user();

        $bookings = Booking::query()
            ->where(function ($query) use ($user) {
                $query->where('user_id', $user->id)
                    ->orWhere(function ($legacyBookingQuery) use ($user) {
                        $legacyBookingQuery->whereNull('user_id')
                            ->where('customer_email', $user->email);
                    });
            })
            ->where(function ($query) {
                $query->where('customer_name', 'like', '%' . $this->search . '%')
                    ->orWhere('service', 'like', '%' . $this->search . '%')
                    ->orWhere('payment_status', 'like', '%' . $this->search . '%');
            })
            ->latest('job_date')
            ->paginate(10);

        return view('livewire.dashboard-bookings-table', compact('bookings'));
    }
}
