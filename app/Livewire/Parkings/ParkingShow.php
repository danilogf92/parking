<?php

namespace App\Livewire\Parking;

use App\Models\Data;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class ParkingShow extends Component
{
    public $sensorId;
    public $sensor;

    public function mount($sensorId): void
    {
        $this->sensorId = $sensorId;

        $this->sensor = Data::findOrFail($sensorId);
    }

    public function render(): Application|Factory|View|\Illuminate\View\View
    {
        return view('livewire.parkings.parking-show');
    }
}
