<?php

namespace App\Actions;

use App\Models\Card;

class CreateCardAction
{
    public function handle(): Card {
        return Card::create([
            'user_id' => auth()->user()->id,
            'number' =>
                env('CARD_START_NUMBER').
                strval(rand(1000,9999)).
                strval(rand(1000,9999)),
            'cvv' => rand(0,999),
            'currency_id' => 1,
            'date' =>
                \Carbon\Carbon::today()
                ->add(env('CARD_PLUS_YEARS'), 'years')
                ->format('Y-m')
        ]);
    }
}
