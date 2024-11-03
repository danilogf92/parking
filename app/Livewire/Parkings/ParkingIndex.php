<?php

namespace App\Livewire\Parkings;

use App\Models\Data;
use App\Models\Sensor;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;

class ParkingIndex extends Component
{
    use InteractsWithBanner;

    public function render(): Application|Factory|View|\Illuminate\View\View
    {
        $parkings = Sensor::all();
        $data = Data::all();
        return view('livewire.parkings.parking-index', compact('parkings', 'data'));
    }
}
