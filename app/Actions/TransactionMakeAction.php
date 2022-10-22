<?php

namespace App\Actions;

use App\Models\Transaction;
use App\Models\User;

class TransactionMakeAction
{
    public function handle($request): Transaction {
        return Transaction::create([
            'user_id' => auth()->user()->id,
            'message' => $request->message,
            'type_id' => $request->type_id,
            'status' => $request->status,
            'balance_after' => $request->balance_after,
            'amount' => $request->amount
        ]);
    }
}
