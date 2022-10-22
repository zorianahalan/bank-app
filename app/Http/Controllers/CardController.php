<?php

namespace App\Http\Controllers;

use App\Actions\CreateCardAction;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{

    public function create(CreateCardAction $action) {
        $action->handle();
        return response('OK', 200);
    }

}
