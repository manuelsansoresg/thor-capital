<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\CriteriaListRequest;
use App\SectionLanguage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CriteriaListController extends Controller
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


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang)
    {
        $set_lang = $lang;
        return view('admin.criteria.list.create', compact('set_lang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CriteriaListRequest $request)
    {
        SectionLanguage::createCriteriaList($request);
        flash('Elemento guardado');
        return redirect('admin/criteria-list/'.$request->lang);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lang)
    {
        $lists = SectionLanguage::where('lang', $lang)->where('section_id', 2)->where('type', 'ul')->get();
        $set_lang = $lang;
        return view('admin.criteria.list.index', compact('lists', 'set_lang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $lang)
    {
        $set_lang = $lang;
        $list = SectionLanguage::find($id);
        return  view('admin.criteria.list.edit', compact('set_lang', 'list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CriteriaListRequest $request, $id)
    {
        SectionLanguage::editLists($request, $id);
        flash('Elemento editado');
        return redirect('admin/criteria-list/'.$request->lang);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $lang)
    {
        SectionLanguage::dropCriteriaList($id);
        flash('Elemento borrado');
        return redirect('admin/criteria-list/'.$lang);
    }
}
