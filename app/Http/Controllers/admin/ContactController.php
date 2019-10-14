<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\ContactARequest;
use App\ImagesSection;
use App\SectionLanguage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    protected $path_image;

    public function __construct()
    {
        $this->path_image = 'img/contact';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $es_sections = SectionLanguage::getAllContact();
        return view('admin.contact.index', compact('es_sections'));
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
        $es_sections = SectionLanguage::where('lang', $lang)->where('section_id', 3)->where('type', 'text')->get();
        $image = ImagesSection::where('section_id', 3)->where('is_movil', 0)->first();

        $section_id = 3;
        $set_lang = $lang;

        return view('admin.contact.edit', compact('es_sections', 'section_id', 'set_lang', 'image', 'image_thumb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactARequest $request, $id)
    {
        SectionLanguage::editContact($request, $this->path_image);
        flash('Elemento editado');
        return redirect('admin/contact');
    }

    public function destroyImage($id)
    {
        ImagesSection::drop($this->path_image, $id);
        flash('Elemento borrado');
        return redirect('admin/contact');
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
