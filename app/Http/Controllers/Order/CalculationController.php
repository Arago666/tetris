<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Repository\CalculationRepository;
use App\Models\Order\Calculation;
use App\Services\CalculationService;

class CalculationController extends Controller
{
    private CalculationService $calculationService;
    private CalculationRepository $calculationRepository;

    public function __construct(CalculationService $calculationService, CalculationRepository $calculationRepository)
    {
        $this->calculationService = $calculationService;
        $this->calculationRepository = $calculationRepository;
    }

    public function calculation($orderId)
    {
        $this->calculateTotalPrice($orderId);
        $this->calculateTotalPrice($orderId);
        $this->calculateTotalPrice($orderId);
        $this->calculateTotalPrice($orderId);

    }

    public function getTotalPrice($orderId)
    {
        $calculation = Calculation::where('order_id', $orderId)->first();

        return response()->json($calculation->total_price);
    }

    private function calculateTotalPrice($orderId)
    {
        $totalPrice = $this->calculationService->getTotalPrice($orderId);

        $this->calculationRepository->saveOrUpdateTotalPrice($totalPrice, $orderId);
    }
}
