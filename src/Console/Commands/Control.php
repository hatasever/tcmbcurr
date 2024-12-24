<?php
namespace Hatasever\TcmbCurr\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Hatasever\TcmbCurr\TcmbCurrClient;
use Hatasever\TcmbCurr\Models\currencyType;
class Control extends Command
{
    // Komut adı
    protected $signature = 'TCMBKUR:getCurrencyList';

    // Komut açıklaması
    protected $description = 'TCMB Kurlarını çeker';

    /**
     * Komutun çalıştırılacağı metod
     *
     * @return void
     */
    public function handle()
    {
        $cry = new TcmbCurrClient();
        $cryType = currencyType::all();
        $array = [];
        foreach ($cryType as $key => $value) {
            array_push($array,$value->currency_code);
        }

        $cry->getCurrency($array, Carbon::now()->format('d-m-Y'), Carbon::now()->format('d-m-Y'), 'A');
    }
}
