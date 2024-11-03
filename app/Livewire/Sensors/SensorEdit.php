<?php

namespace App\Livewire\Sensors;

use App\Models\Sensor;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;

class SensorEdit extends Component
{
    use InteractsWithBanner;

    public $sensorId;
    public $name;

    public function mount($sensorId): void
    {
        $this->sensorId = $sensorId;

        $sensor = Sensor::findOrFail($sensorId);

        $this->name = $sensor->name;
    }

    public function updateSensor(): void
    {
        $this->validate([
            'name' => 'required|string|max:255|unique:sensors,name,' . $this->sensorId,
        ]);

        $sensor = Sensor::findOrFail($this->sensorId);

        $sensor->update([
            'name' => $this->name
        ]);

        $this->banner('Sensor updated successfully');
        $this->dispatch('sensorUpdated');
    }

    public function render(): Application|Factory|View|\Illuminate\View\View
    {
        return view('livewire.sensors.sensor-edit');
    }
}
