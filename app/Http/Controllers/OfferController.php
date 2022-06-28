<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offer = Offer::orderBy('id', 'desc')->paginate(6);
        
        return view('admin.offers.index', compact('offer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offer = DB::table('offers');
        
        return view('admin.offers.create',compact('offer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        if($request->hasfile('img')) {
            foreach($request->file('img') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/img', $name);  
                $imgData[] = $name;  
            }
        }
        DB::table('offers')
             ->insert(array(
            'type' => $request->type,
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'name_pl' => $request->name_pl,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'title_pl' => $request->title_pl,
            'price' => $request->price,
            'count' => $request->count,
            'country_uz' => $request->country_uz,
            'country_ru' => $request->country_ru,
            'country_en' => $request->country_en,
            'country_pl' => $request->country_pl,
            'model' => $request->model,
            'color' => json_encode($request->input('color')),
            'content_uz' => $request->content_uz,
            'content_ru' => $request->content_ru,
            'content_en' => $request->content_en,
            'content_pl' => $request->content_pl,
            'pattern_uz' => $request->pattern_uz,
            'pattern_ru' => $request->pattern_ru,
            'pattern_en' => $request->pattern_en,
            'pattern_pl' => $request->pattern_pl,
            'width' => $request->width,
            'height' => $request->height,
            'length' => $request->length,
            'density' => $request->density,
            'img' =>  json_encode($imgData)
        ));

          return redirect()->route('offer.index')
                                    ->with('success','Yangilik qo`shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = DB::table('offers')->where('id', $id)->get(); // id
        return view('admin.offers.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $arrayName = array(
            'type' => $request->type,
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'name_pl' => $request->name_pl,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'title_pl' => $request->title_pl,
            'price' => $request->price,
            'count' => $request->count,
            'country_uz' => $request->country_uz,
            'country_ru' => $request->country_ru,
            'country_en' => $request->country_en,
            'country_pl' => $request->country_pl,
            'model' => $request->model,
            'color' => json_encode($request->input('color')),
            'content_uz' => $request->content_uz,
            'content_ru' => $request->content_ru,
            'content_en' => $request->content_en,
            'content_pl' => $request->content_pl,
            'pattern_uz' => $request->pattern_uz,
            'pattern_ru' => $request->pattern_ru,
            'pattern_en' => $request->pattern_en,
            'pattern_pl' => $request->pattern_pl,
            'width' => $request->width,
            'height' => $request->height,
            'length' => $request->length,
            'density' => $request->density,            
        );

         $offer = DB::table('offers')->where('id', $id)->update($arrayName);
    

            return redirect()->route('offer.index')
                            ->with('success','Yangilanish bajarildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer=DB::table('offers')->where('id', $id)->delete();

        return redirect()->route('offer.index')
                        ->with('success','Ma`lumot o`chirildi');
    }
}
