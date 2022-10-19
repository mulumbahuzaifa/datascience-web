<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Vendor\VendorRepository;
use Livewire\Component;

class HeaderComponent extends Component
{
    protected $categoryRepository;
    protected $vendorRepository;

    public function mount(CategoryRepository $categoryRepository, VendorRepository $vendorRepository){
        $this->categoryRepository = $categoryRepository;
        $this->vendorRepository = $vendorRepository;
    }
    public function render()
    {
        $setting = Setting::find(1);
        $data = array(
            'categories' => $this->categoryRepository->findAll(),'vendors' => $this->vendorRepository->findAll()
        );
        return view('livewire.header-component', ['setting' => $setting])->with($data);
    }
}