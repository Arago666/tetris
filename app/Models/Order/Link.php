<?php

namespace App\Models\Order;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'plan',
        'data_sheet',
        'risk_assessment_table',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
