<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class GuestHeaderComponent extends Component
{
    public function render()
    {
        $setting = Setting::find(1);
        return view('livewire.guest-header-component', ['setting' => $setting]);
    }
}
