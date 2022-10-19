<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class AdminOrdersComponent extends Component
{
    use WithPagination;

    public function deleteOrder($id){
        $order = Order::find($id);
        $order->delete();
        session()->flash('message', 'Order has been deleted successfully');
    }
    public function render()
    {
        $orders = Order::orderBy('created_at', 'DESC')->paginate(12);
        return view('livewire.admin-orders-component', ['orders' => $orders]);
    }
}