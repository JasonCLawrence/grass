<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Booking;
use App\Models\User;
class DashboardBookingsTable extends Component
{
    use WithPagination;
    public $search = '';
    public $name, $service, $date, $status, $bookingId;
    public $isEditMode = false;
    public function render()
    {
        $bookings = Booking::where('customer_name', 'like', '%' . $this->search . '%')->paginate(10);
        return view('livewire.dashboard-bookings-table', ['bookings' => $bookings,            'totalBookings' => Booking::count(),            'totalUsers' => User::count(),            'registrationRate' => User::count() > 0 ? Booking::count() / User::count() : 0,]);
    }
    public function createBooking()
    {
        Booking::create(['customer_name' => $this->name,            'service' => $this->service,            'job_date' => $this->date,            'payment_status' => $this->status,]);
        $this->resetForm();
    }
    public function editBooking($id)
    {
        $this->isEditMode = true;
        $booking = Booking::find($id);
        $this->bookingId = $id;
        $this->name = $booking->customer_name;
        $this->service = $booking->service;
        $this->date = $booking->job_date;
        $this->status = $booking->payment_status;
    }
    public function updateBooking()
    {
        Booking::find($this->bookingId)->update(['customer_name' => $this->name,            'service' => $this->service,            'job_date' => $this->date,            'payment_status' => $this->status,]);
        $this->resetForm();
    }
    public function deleteBooking($id)
    {
        Booking::destroy($id);
    }
    public function resetForm()
    {
        $this->name = '';
        $this->service = '';
        $this->date = '';
        $this->status = '';
        $this->isEditMode = false;
    }
}
