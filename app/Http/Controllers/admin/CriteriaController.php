<?php

namespace App\Http\Controllers\admin;

use App\ImagesSection;
use App\SectionLanguage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CriteriaController extends Controller
{
    protected $path_image;

    public function __construct()
    {
        $this->path_image = 'img/criteria';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $es_sections = SectionLanguage::getAllCriteria();
        return view('admin.criteria.index', compact('es_sections'));
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
        //
    }

    public function storeList(Request $request)
    {

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
    public function edit($lang)
    {
        $es_sections = SectionLanguage::where('lang', $lang)->where('section_id', 2)->where('type', 'text')->get();
        $image = ImagesSection::where('section_id', 2)->where('is_movil', 0)->first();
        $image_thumb = ImagesSection::where('section_id', 2)->where('is_movil', 1)->first();

        $section_id = 2;
        $set_lang = $lang;

        return view('admin.criteria.edit', compact('es_sections', 'section_id', 'set_lang', 'image', 'image_thumb'));
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
        $sections = SectionLanguage::editCriteria($request, $this->path_image);
        if($sections){
            flash('Elemento editado');
            return redirect('admin/criteria');
        }
    }

    public function destroyImage($id)
    {
        ImagesSection::drop($this->path_image, $id);
        flash('Elemento borrado');
        return redirect('admin/about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
