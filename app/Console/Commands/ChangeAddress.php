<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Address;

class ChangeAddress extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'change:address {id_address_eas}{liter}{--name=ann}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Change liter in address';

    /**
     * Execute the console command.
     *
     * @return int
     */

    protected function getArguments()
    {
        return array(
            array('id_address_eas', InputArgument::REQUIRED, 'id_address_eas'),
            array('liter', InputArgument::REQUIRED, 'New liter'),
        );
    }
    protected function getOptions()
    {
        return array(
            array('name', null, InputOption::VALUE_REQUIRED, 'Name of the user', null)
        );
    }

    public function handle()
    {
        $id_address_eas = $this->argument('id_address_eas');
        $liter = $this->argument('liter');
        $name = $this->option('name');
        $address=Address::find($id_address_eas);
        Address::whereId_address_eas($id_address_eas)->update(['liter'=>$liter]);
        $address->save();
        $this->line('Liter updated!');
        return 'ok';
    }

}
