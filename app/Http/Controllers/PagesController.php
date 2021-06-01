<?php

namespace App\Http\Controllers;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use App\Auction;

use Illuminate\Support\Facades\Validator;


class PagesController extends Controller
{
    public function HomePage()
    {
        $models   = scandir(public_path()."/models");
        $auctions = Auction::all();
        // dd(strtotime($auctions[2]->auction_start_date));
        return view('frontend.homepage',compact('auctions'));
    }
}
