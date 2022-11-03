<?php

namespace App\Jobs;

use App\Services\CalcAddresses;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Address;
use Illuminate\Support\Facades\Redis;

class ProcAddr implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(protected array $idaddresses)
    {
       //
    }

    /**
     * Execute the job.
     *
     * @return void
     */

    public function handle(CalcAddresses $calcaddress)
    {
        $addr=Address::all();
        $res=$calcaddress->calc($addr);
        Address::WhereIn('id_address_eas',$this->idaddresses)->update(['updated_at'=>now()]);
    }
}
