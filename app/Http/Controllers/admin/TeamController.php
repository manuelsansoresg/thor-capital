<?php

namespace App\Http\Controllers\admin;

use App\ImagesSection;
use App\SectionLanguage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    protected $path_image;

    public function __construct()
    {
        $this->path_image = 'img/team';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $es_sections = SectionLanguage::getAllTeam();
        return view('admin.team.index', compact('es_sections'));
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
        $section_id = 4;
        $es_sections = SectionLanguage::where('lang', $lang)->where('section_id', 4)->get();
        $images = ImagesSection::where('section_id', 4)->where('is_movil', 0)->get();
        //dd((count($images)));
        $image = ImagesSection::where('section_id', 4)->where('is_movil', 0)->where('alias', '1')->first();
        $image2 = ImagesSection::where('section_id', 4)->where('is_movil', 0)->where('alias', '2')->first();
        $set_lang = $lang;

        return view('admin.team.edit', compact('section_id', 'es_sections', 'image', 'image2',  'set_lang'));
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
        SectionLanguage::editTeam($request, $this->path_image);
        flash('Elemento editado');
        return redirect('admin/team');
    }

    public function destroyImage($id, $lang)
    {
        ImagesSection::drop($this->path_image, $id);
        flash('Elemento borrado');
        return redirect('admin/team/'.$lang.'/edit');
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
