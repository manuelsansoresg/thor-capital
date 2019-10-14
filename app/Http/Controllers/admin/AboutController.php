<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\AboutRequest;
use App\ImagesSection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SectionLanguage;

class AboutController extends Controller
{
    protected $path_image;

    public function __construct()
    {
        $this->path_image = 'img/about';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $es_sections = SectionLanguage::getAllAbout();
        return view('admin.about.index', compact('es_sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
        $es_sections = SectionLanguage::where('lang', $lang)->where('section_id', 1)->get();
        $image = ImagesSection::where('section_id', 1)->where('is_movil', 0)->first();
        $image_thumb = ImagesSection::where('section_id', 1)->where('is_movil', 1)->first();
        $section_id = 1;
        $set_lang = $lang;
        return view('admin.about.edit', compact('es_sections', 'image', 'section_id', 'set_lang', 'image_thumb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutRequest $request, $id)
    {
        $sections = SectionLanguage::editAbout($request, $this->path_image);
        if($sections){
            flash('Elemento editado');
            return redirect('admin/about');
        }
    }

    public function destroyImage($id, $lang)
    {
        ImagesSection::drop($this->path_image, $id);
        flash('Elemento borrado');
        return redirect('admin/about/'.$lang.'/edit');
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
