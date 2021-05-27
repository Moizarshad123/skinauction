<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kevupton\LaravelCoinpayments\Exceptions\IpnIncompleteException;
use Kevupton\LaravelCoinpayments\Models\Ipn;
use Kevupton\LaravelCoinpayments\Models\Transaction;

class CoinpaymentsController extends Controller
{
    const ITEM_CURRENCY = 'BTC';
    const ITEM_PRICE    = 0.01;

    public function Payment(Request $request){
    //     // // validate that the request has the appropriate values
    //     // $this->validate($request, [
    //     //     'currency' => 'required|string',
    //     //     'amount'   => 'required|integer|min:1',
    //     // ]);


        $amount   = 10;
        $currency = 'ETC';
        $cost = $amount * self::ITEM_PRICE;

        
        $req = array(
            'amount' => 10.00,
            'currency1' => 'USD',
            'currency2' => 'ETC',
            'buyer_email' => 'noahshasselbrink@gmail.com',
            'item_name' => 'Test Item/Order Description',
            'address' => '', // leave blank send to follow your settings on the Coin Settings page
            'ipn_url' => 'https://skin.auction/',
        );

        /** @var Transaction $transaction */
        $transaction = \Coinpayments::createTransaction($req);

       dd($transaction);


        // $cps = new CoinPaymentsAPI();
        // $cps->Setup('b8F42E4a29Df71A5066eCd0555576541aEA992Ce7cb4c0900b35F2e45dd5D186', '916698a87bed728ea9c745da852805bc65f8c59529b18df24d60863700027fa4');

        // $req = array(
        //     'amount' => 10.00,
        //     'currency1' => 'USD',
        //     'currency2' => 'BTC',
        //     'buyer_email' => 'your_buyers_email@email.com',
        //     'item_name' => 'Test Item/Order Description',
        //     'address' => '', // leave blank send to follow your settings on the Coin Settings page
        //     'ipn_url' => 'https://skin.auction/',
        // );
        // // See https://www.coinpayments.net/apidoc-create-transaction for all of the available fields
                
        // $result = $cps->CreateTransaction($req);




        // if ($result['error'] == 'ok') {
        //     $le = php_sapi_name() == 'cli' ? "\n" : '<br />';
        //     print 'Transaction created with ID: '.$result['result']['txn_id'].$le;
        //     print 'Buyer should send '.sprintf('%.08f', $result['result']['amount']).' BTC'.$le;
        //     print 'Status URL: '.$result['result']['status_url'].$le;
        // } else {
        //     print 'Error: '.$result['error']."\n";
        // }
    }
}
