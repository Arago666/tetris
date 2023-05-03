<?php

namespace App\Models;

use App\Models\Order\Calculation;
use App\Models\Order\CommonData;
use App\Models\Order\Complectation\ComplectationColorSolution;
use App\Models\Order\Complectation\ComplectationExterior;
use App\Models\Order\Complectation\ComplectationFurnitureAndAccessory;
use App\Models\Order\Complectation\ComplectationInterior;
use App\Models\Order\Delivery;
use App\Models\Order\Designing;
use App\Models\Order\EngineeringSystem;
use App\Models\Order\Link;
use App\Models\Order\Mounting;
use App\Models\Order\TechnicalDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'crm_number',
        'product_type_number',
        'buildings_count',
        'contract_number',
    ];

    public function link(): HasOne
    {
        return $this->hasOne(Link::class);
    }

    public function commonData(): HasOne
    {
        return $this->hasOne(CommonData::class);
    }

    public function complectationExterior(): HasOne
    {
        return $this->hasOne(ComplectationExterior::class);
    }

    public function complectationInterior(): HasOne
    {
        return $this->hasOne(ComplectationInterior::class);
    }

    public function complectationColorSolution(): HasOne
    {
        return $this->hasOne(ComplectationColorSolution::class);
    }

    public function complectationFurnitureAndAccessory(): HasOne
    {
        return $this->hasOne(ComplectationFurnitureAndAccessory::class);
    }

    public function delivery(): HasOne
    {
        return $this->hasOne(Delivery::class);
    }

    public function designing(): HasOne
    {
        return $this->hasOne(Designing::class);
    }

    public function engineeringSystem(): HasOne
    {
        return $this->hasOne(EngineeringSystem::class);
    }

    public function mounting(): HasOne
    {
        return $this->hasOne(Mounting::class);
    }

    public function technicalDetail(): HasOne
    {
        return $this->hasOne(TechnicalDetail::class);
    }

    public function calculation(): HasOne
    {
        return $this->hasOne(Calculation::class);
    }
}
