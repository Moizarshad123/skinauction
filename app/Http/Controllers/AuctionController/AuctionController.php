<?php

namespace App\Http\Controllers\AuctionController;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Storage;
use App\Auction;
use Illuminate\Http\Request;

class AuctionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $model = str_slug('auction','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $auction = Auction::where('name', 'LIKE', "%$keyword%")
                ->orWhere('title', 'LIKE', "%$keyword%")
                ->orWhere('sub_title', 'LIKE', "%$keyword%")
                ->orWhere('bid_cost', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('auction_start_date', 'LIKE', "%$keyword%")
                ->orWhere('auction_start_time', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $auction = Auction::paginate($perPage);
            }

            return view('auction.auction.index', compact('auction'));
        }
        return response(view('403'), 403);

    }

    public function create()
    {
        $model = str_slug('auction','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('auction.auction.create');
        }
        return response(view('403'), 403);

    }

  
    public function store(Request $request)
    {
        $model = str_slug('auction','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
			'name' => 'required',
			'price' => 'required',
			'image' => 'required',
			'auction_start_date' => 'required',
			'auction_start_time' => 'required',
            'bid_cost' => 'required'
		]);
            // $requestData = $request->all();
            // Auction::create($requestData);
            $auction                     = new Auction();
            $auction->name               = $request->name;
            $auction->title              = $request->title;
            $auction->sub_title          = $request->sub_title;          
            $auction->price              = $request->price;
            $auction->auction_start_date = $request->auction_start_date;
            $auction->auction_start_time = $request->auction_start_time;
            $auction->bid_cost           = $request->bid_cost;

            if($request->hasFile('image')){
                $image       = Storage::disk('website')->put('skins', $request->image);
                $auction->image = $image;
            }
            $auction->save();

            return redirect('auction')->with('flash_message', 'Auction added!');
        }
        return response(view('403'), 403);
    }

  
    public function show($id)
    {
        $model = str_slug('auction','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $auction = Auction::findOrFail($id);
            return view('auction.auction.show', compact('auction'));
        }
        return response(view('403'), 403);
    }

  
    public function edit($id)
    {
        $model = str_slug('auction','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $auction = Auction::findOrFail($id);
            return view('auction.auction.edit', compact('auction'));
        }
        return response(view('403'), 403);
    }

    
    public function update(Request $request, $id)
    {
        $model = str_slug('auction','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'name' => 'required',
			'price' => 'required',
			'image' => 'required',
			'auction_start_date' => 'required',
			'auction_start_time' => 'required'
		]);
            // $requestData = $request->all();
            
            // $auction = Auction::findOrFail($id);
            //  $auction->update($requestData);

            $auction                     = Auction::find($id);
            $auction->name               = $request->name;
            $auction->title              = $request->title;
            $auction->sub_title          = $request->sub_title;          
            $auction->price              = $request->price;
            $auction->auction_start_date = $request->auction_start_date;
            $auction->auction_start_time = $request->auction_start_time;
            $auction->bid_cost           = $request->bid_cost;

            if($request->hasFile('image')){
                $image       = Storage::disk('website')->put('skins', $request->image);
                $auction->image = $image;
            }
            $auction->save();

             return redirect('auction')->with('flash_message', 'Auction updated!');
        }
        return response(view('403'), 403);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $model = str_slug('auction','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Auction::destroy($id);

            return redirect('auction')->with('flash_message', 'Auction deleted!');
        }
        return response(view('403'), 403);

    }
}
