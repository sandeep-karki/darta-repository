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
        try{
            $this->model->create([
                'name_np' => $request['name_np'],
            ]);
            toast('province Created Successfully','success','top-right');
        }
        catch (\Exception $e) {
            toast('province Creation Failed !','error','top-right');
        }
        return redirect()->route($this->base_route . 'index');
    }

    public function edit($id)
    {
        $this->page_title  = 'Edit Province';

        if (!$data['row'] = $this->model->find($id)){
            toast('Province Not Found !','error','top-right');
            return redirect()->route($this->base_route . 'index');
        }

        return view($this->view_path . 'edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        try{
            $row = $this->model->findorFail($id);
            $row->update([
                'name_np' => $request['name_np'],
            ]);
            toast('Province Updated Successfully.','success','top-right');
        }
        catch (\Exception $e) {
            toast('Province Update Failed !','error','top-right');
        }
        return redirect()->route($this->base_route . 'index');
    }

    public function destroy($id)
    {
        $row = $this->model->findorFail($id);
        try {
            $row->delete();
            toast('Province Deleted Successfully.','success','top-right');
        } catch (\Exception $e) {
            toast('Province Delete Failed !','error','top-right');
        }
        return redirect()->route($this->base_route . 'index');
    }

}
