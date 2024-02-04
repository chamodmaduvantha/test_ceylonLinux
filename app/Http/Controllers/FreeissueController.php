<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freeissue;
use App\Models\Product;

class FreeissueController extends Controller
{
    protected $freeissue;
    protected $product;

    public function __construct()
    {
        $this->freeissue = new Freeissue();
        $this->product = new Product();
    }

    public function index()
    {
        $response['freeissues'] = $this->freeissue->all();
        $response['products'] = $this->product->all();
    
        return view('pages.freeissue.index')->with($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->freeissue->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $freeissue = Freeissue::find($id);
        $products = Product::all();
        return view('pages.freeissue.edit', compact('freeissue', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $freeissue = $this->freeissue->find($id);
        $freeissue->update(array_merge($freeissue->toArray(), $request->toArray()));
        return redirect('freeissue');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $freeissue = $this->freeissue->find($id);
        $freeissue->delete();
        return redirect('freeissue');
    }
}
