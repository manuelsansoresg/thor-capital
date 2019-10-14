<?php

namespace App\Http\Controllers\admin;

use App\SectionLanguage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ImagesSection;

class TransactionListController extends Controller
{
    protected $path_image;

    public function __construct()
    {
        $this->path_image = 'img/transaction';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang)
    {
        $set_lang = $lang;
        return view('admin.transaction.list.create', compact('set_lang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        SectionLanguage::createTransactionList($request, $this->path_image);
        flash('Elemento guardado');
        return redirect('admin/transaction-list/'.$request->lang);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lang)
    {
        $lists    = SectionLanguage::where('lang', $lang)->where('section_id', 5)->where('type', 'ul')->get();
        $set_lang = $lang;
        return view('admin.transaction.list.index', compact('lists', 'set_lang'));
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
        $list     = SectionLanguage::find($id);
        
        return view('admin.transaction.list.edit', compact('set_lang', 'list'));
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
        SectionLanguage::editLists($request, $id, $this->path_image);
        flash('Elemento editado');
        return redirect('admin/transaction-list/'.$request->lang);
    }

    public function destroyImage($id, $lang)
    {
        SectionLanguage::dropImage($this->path_image, $id);
        flash('Elemento borrado');
        return redirect('admin/transaction-list/edit/'.$id.'/'.$lang);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $lang)
    {
        SectionLanguage::dropCriteriaList($id, $this->path_image);
        flash('Elemento borrado');
        return redirect('admin/transaction-list/'.$lang);
    }
}
