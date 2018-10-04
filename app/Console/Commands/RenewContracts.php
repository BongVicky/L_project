<?php

namespace App\Console\Commands;

use App\Mail\SendMailable;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;


class RenewContracts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Renew:contracts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email to HR of contracts that remain less than 6 months old';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $totalCont = \DB::table('contracts')
            ->whereRaw('Date(to_date) = CURDATE()')
            ->count();
//        Mail::to('thay.khem@allweb.com.kh')->send(new SendMailable($totalCont));
    }
}
