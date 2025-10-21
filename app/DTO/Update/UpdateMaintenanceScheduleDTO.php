<?php

namespace App\DTO\Update;

class UpdateMaintenanceScheduleDTO
{
    public function __construct(
        public readonly int $id,
        public readonly string $mechanic_shop_id,
        public readonly string $vehicle_model,
        public readonly string $vehicle_plate,
        public readonly string $service_type,
        public readonly string $scheduled_date,
        public readonly ?string $notes = null,
    ) {
    }

    public function toArray(): array
    {
        return [
            'mechanic_shop_id' => $this->mechanic_shop_id,
            'vehicle_model' => $this->vehicle_model,
            'vehicle_plate' => $this->vehicle_plate,
            'service_type' => $this->service_type,
            'scheduled_date' => $this->scheduled_date,
            'notes' => $this->notes,
        ];
    }
}
