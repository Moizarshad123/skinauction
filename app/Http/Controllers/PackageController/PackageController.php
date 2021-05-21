<?php

namespace App\Http\Controllers\PackageController;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $model = str_slug('package','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $package = Package::where('price', 'LIKE', "%$keyword%")
                ->orWhere('gg', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $package = Package::paginate($perPage);
            }

            return view('package.package.index', compact('package'));
        }
        return response(view('403'), 403);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = str_slug('package','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('package.package.create');
        }
        return response(view('403'), 403);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $model = str_slug('package','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
			'price' => 'required'
		]);
            $requestData = $request->all();
            
            Package::create($requestData);
            return redirect('package')->with('flash_message', 'Package added!');
        }
        return response(view('403'), 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $model = str_slug('package','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $package = Package::findOrFail($id);
            return view('package.package.show', compact('package'));
        }
        return response(view('403'), 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $model = str_slug('package','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $package = Package::findOrFail($id);
            return view('package.package.edit', compact('package'));
        }
        return response(view('403'), 403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $model = str_slug('package','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'price' => 'required'
		]);
            $requestData = $request->all();
            
            $package = Package::findOrFail($id);
             $package->update($requestData);

             return redirect('package')->with('flash_message', 'Package updated!');
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
        $model = str_slug('package','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Package::destroy($id);

            return redirect('package')->with('flash_message', 'Package deleted!');
        }
        return response(view('403'), 403);

    }
}
