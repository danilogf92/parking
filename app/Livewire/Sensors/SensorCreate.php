<?php

namespace App\Livewire\Sensors;

use App\Models\Sensor;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;

class SensorCreate extends Component
{
    use InteractsWithBanner;

    public $name;

    protected $rules = [
        'name' => 'required|string|max:255|unique:sensors,name'
    ];

    public function createSensor(): void
    {
        $this->validate();

        Sensor::create([
            'name' => $this->name
        ]);

        $this->banner('Sensor created successfully');
        $this->reset();
        $this->dispatch('sensorCreated');
    }

    public function render(): Application|Factory|View|\Illuminate\View\View
    {
        return view('livewire.sensors.sensor-create');
    }
}
