<?php

namespace App\Livewire\Sensors;

use App\Models\Sensor;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;

class SensorIndex extends Component
{
    use InteractsWithBanner;

    public $search = '';
    public $showCreateModal = false;
    public $showEditModal = false;
    public $showDeleteModal = false;
    public $editSensorId;
    public $deleteSensorId;

    protected $listeners = [
        'sensorCreated' => 'closeCreateModal',
        'sensorUpdated' => 'closeEditModal',
        'closeModal' => 'closeCreateModal',
    ];

    public function openCreateModal(): void
    {
        $this->showCreateModal = true;
    }

    public function closeCreateModal(): void
    {
        $this->showCreateModal = false;
    }

    public function openEditModal($sensorId): void
    {
        $this->editSensorId = $sensorId;
        $this->showEditModal = true;
    }

    public function closeEditModal(): void
    {
        $this->showEditModal = false;
    }

    public function openDeleteModal($sensorId): void
    {
        $this->deleteSensorId = $sensorId;
        $this->showDeleteModal = true;
    }

    public function closeDeleteModal(): void
    {
        $this->showDeleteModal = false;
    }

    public function deleteSensor(): void
    {
        $sensor = Sensor::findOrFail($this->deleteSensorId);

        $sensor->delete();

        $this->banner('Sensor deleted successfully');
        $this->closeDeleteModal();
        $this->dispatch('sensorDeleted');
    }

    public function highlightSearch($text): array|string|null
    {
        if ($this->search === '') {
            return $text;
        }

        // Escape special characters for regular expression
        $escapedSearch = preg_quote($this->search, '/');

        // Replace matched text with highlighted HTML
        return preg_replace('/(' . $escapedSearch . ')/i', '<span class="text-red-600">$1</span>', $text);
    }

    public function render(): Application|Factory|View|\Illuminate\View\View
    {
        $sensors = Sensor::all();
        return view('livewire.sensors.sensor-index', compact('sensors'));
    }
}
