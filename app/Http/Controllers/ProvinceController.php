<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    protected $view_path = 'backend.province.';
    protected $base_route = 'backend.province.';
    protected $page_title, $model;

    public function __construct(Province $province)
    {
        $this->model = $province;
    }

    public function index()
    {
        $data =  [];
        $data['rows'] = $this->model->latest()->get();
        return view($this->view_path. 'index',compact('data'));
    }

    public function create()
    {
        return view($this->view_path . 'create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        try{
            $this->model->create([
                'name_np' => $request['province'],
            ]);
            toast('province Created Successfully','success','top-right');
        }
        catch (\Exception $e) {
            toast('province Creation Failed !','error','top-right');
        }
        return redirect()->route($this->base_route . 'index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $this->page_title  = 'Edit Province';

        if (!$data['row'] = $this->model->find($id)){
            toast('Test Not Found !','error','top-right');
            return redirect()->route($this->base_route . 'index');
        }

        return view($this->view_path . 'edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        try{
            $row = $this->model->findorFail($id);
            $row->update([
                'province' => $request['province'],
            ]);
            toast('Test Updated Successfully.','success','top-right');
        }
        catch (\Exception $e) {
            toast('Test Update Failed !','error','top-right');
        }
        return redirect()->route($this->base_route . 'index');
    }

    public function destroy($id)
    {
        $row = $this->model->findorFail($id);
        try {
            $row->delete();
            toast('Test Deleted Successfully.','success','top-right');
        } catch (\Exception $e) {
            toast('Test Delete Failed !','error','top-right');
        }
        return redirect()->route($this->base_route . 'index');
    }

}
