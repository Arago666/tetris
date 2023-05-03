<?php

namespace App\Http\Controllers;

use App\Models\Tetris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TetrisController extends Controller
{
    public function index()
    {
        return view('tetris.tetris');
    }

    public function getTetrisByGameId()
    {
        $gameId = 1;
        return response()->json(Tetris::where('game_id', $gameId)->get());
    }

    public function getTetris(int $id)
    {
        return response()->json(Tetris::where('id', $id)->first());
    }

    public function storeTetris(Request $request)
    {
//        $latestElement = DB::table('tetris')->latest()->first();
//        $gameId = $latestElement->game_id;
        $gameId = 1;
//        var_dump($coordinate);
//
//
        Tetris::where('id', '>', 0)->delete();
        for ($yCoordinate = 0; $yCoordinate < $request->y; $yCoordinate++) {
            for ($xCoordinate = 0; $xCoordinate < $request->x; $xCoordinate++) {
                Tetris::create([
                    'game_id'                   => $gameId,
                    'x_coordinate'              => $xCoordinate,
                    'y_coordinate'              => $yCoordinate,
                    'value'                     => 0,
                ]);
            }
        }

        return response()->json(1);
    }

    public function updateTetris($id)
    {
        $order = Tetris::where('id', $id)->update([
            'value'                  => 1,
        ]);

        return response()->json($order);
    }

    public function checkTetris(Request $request)
    {
        $tetrisElements = Tetris::where('game_id', 1)->get();

//        for ($xCoordinate = 0; $xCoordinate < $request->x; $xCoordinate++) {
//            for ($yCoordinate = 0; $yCoordinate < $request->y; $yCoordinate++) {
//                if ($request->value == 1) {
//
//                }
//            }
//        }

        $rowNumber = 0;
        $count = 0;
        $countY = array();
        for($i=0; $i < $request->x; $i++) {
            $countY[$i] = 0;
        }

        foreach ($tetrisElements as $tetris) {
            if ($rowNumber < $tetris->y_coordinate) {
                if ($count == $request->x) {
                    $this->destroyBlockRow($rowNumber);
                }

                $rowNumber++;
                $count = 0;
            }

            if ($tetris->value == 1) {
                $count++;
                $countY[$tetris->x_coordinate] = $countY[$tetris->x_coordinate] + 1;
            }
        }

        for($i=0; $i < $request->x; $i++) {
            if ($countY[$i] == $request->y) {
                $this->destroyBlockColumn($i);
            }
        }

        return response()->json($countY);
    }

    public function destroyBlockRow(int $rowNumber)
    {
        $order = Tetris::where('y_coordinate', $rowNumber)->update([
            'value'                  => 0,
        ]);
    }

    public function destroyBlockColumn(int $columnNumber)
    {
        $order = Tetris::where('x_coordinate', $columnNumber)->update([
            'value'                  => 0,
        ]);
    }

    public function addBlockTetris(Request $request)
    {
        if ($request->countBlockToAdd == 0) {
            return response()->json(0);
        }

        $tetrisElements = Tetris::where('game_id', 1)->get();

        $k = "Не ура!";
        for ($i = 0; $i < $request->countBlockToAdd; $i++) {
            $numberElement = rand(0, ($request->x - 1) * ($request->y - 1));
            $j=0;

            foreach ($tetrisElements as $tetris) {
                if($numberElement == $j) {
                    if ($tetris->value == 0) {
                        $tetris->update([
                            'value'                  => 1,
                        ]);
                        $k = "Ура!";
                    } else {
                        $numberElement++;
                    }
                }
                $j++;
            }
        }

        return response()->json($k);
    }
}
