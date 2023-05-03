<?php
namespace App\Http\Repository;

use App\Models\Order\Calculation;

class CalculationRepository
{
    public function saveOrUpdateTotalPrice($totalPrice, $orderId): void
    {
        if ($this->findOrder($orderId)) {
            $this->updateCalculationWithTotalPrice($totalPrice, $orderId);

            return;
        }

        $this->createCalculationWithTotalPrice($totalPrice, $orderId);
    }

    public function findOrder($orderId): ?Calculation
    {
        return Calculation::where('order_id', $orderId)->first();
    }

    public function updateCalculationWithTotalPrice($totalPrice, $orderId): void
    {
        Calculation::where('order_id', $orderId)->update([
            'total_price' => $totalPrice
        ]);
    }

    public function createCalculationWithTotalPrice($totalPrice, $orderId): void
    {
        Calculation::create([
            'order_id'          => $orderId,
            'total_price'       => $totalPrice
        ]);
    }
}
