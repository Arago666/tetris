<?php

namespace App\Services;

use App\Models\Order\CommonData;

class CalculationService
{
    public function getTotalPrice(int $orderId)
    {
        $commonData = CommonData::where('order_id', $orderId)->first();

        return $this->calculationTotalPrice(
            $commonData->block_size,
            $commonData->floor_count,
            $commonData->block_in_one_row_count
        );
    }

    private function calculationTotalPrice(string $blockSize, int $floorCount, int $blockInOneRowCount)
    {
        return $this->getPriceFromBlockSize($blockSize) * $floorCount * $blockInOneRowCount;
    }

    private function getPriceFromBlockSize(string $blockSize)
    {
        if ($blockSize == CommonData::BLOCK_SIZE_2_45) {
            return 245000;
        }

        return 300000;
    }
}
