<?php

namespace App\Http\Controllers;

use App\Actions\CreateTransactionToAction;
use App\Actions\TransactionMakeAction;
use App\Http\Requests\TransactionMakeRequest;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function make(TransactionMakeRequest $request,
                         TransactionMakeAction $transactionMakeAction,
                         CreateTransactionToAction $transactionToAction
    ) {
        $transaction = $transactionMakeAction->handle($request->validated());
        $transactionToAction->handle($transaction);
        return response()->json(['message' => 'Success', $transaction], 200);
    }
}
