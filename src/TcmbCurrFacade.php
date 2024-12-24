<?php

namespace Hatasever\TcmbCurr;

use Illuminate\Support\Facades\Facade;

class TcmbCurrFacade extends Facade {

    protected static function getFacadeAccessor() {
        return 'tcmbcurr';
    }

}
