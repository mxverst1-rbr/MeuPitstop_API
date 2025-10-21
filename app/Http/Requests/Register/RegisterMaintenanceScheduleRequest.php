<?php

namespace App\Http\Requests\Register;

use Illuminate\Foundation\Http\FormRequest;

class RegisterMaintenanceScheduleRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'mechanic_shop_id' => ['required', 'integer', 'exists:mechanic_shops,id'],
            'vehicle_model' => ['required', 'string', 'max:255'],
            'vehicle_plate' => ['required', 'string', 'max:20'],
            'service_type' => ['required', 'string', 'max:100'],
            'scheduled_date' => ['required', 'date'],
            'notes' => ['nullable', 'string', 'max:1000'],
        ];
    }

}
