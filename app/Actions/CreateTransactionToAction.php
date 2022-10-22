<?php

namespace App\Actions;

use App\Models\Transaction;
use App\Models\TransactionTo;
use App\Models\User;

class CreateTransactionToAction
{

    public function handle(Transaction $transaction):TransactionTo {
        $transaction_to = TransactionTo::create([
            'transaction_id' => $transaction->id,
            'card_number' => $transaction->to_number
        ]);
        
        $user = User::where('number', $transaction->to_number);
        if ($user) $transaction->update(['user_id' => $user->id]);

        return $transaction_to;
    }

}
