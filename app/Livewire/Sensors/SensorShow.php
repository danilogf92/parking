<?php

namespace App\Livewire\Sensors;

use App\Models\Sensor;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class SensorShow extends Component
{
    public $sensorId;
    public $sensor;

    public function mount($sensorId): void
    {
        $this->sensorId = $sensorId;

        $this->sensor = Sensor::findOrFail($sensorId);
    }

    public function render(): Application|Factory|View|\Illuminate\View\View
    {
        return view('livewire.sensors.sensor-show');
    }
}
