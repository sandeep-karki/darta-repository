<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use App\Models\Province;
use App\Models\District;
use Illuminate\Http\Request;

class MunicipalityController extends Controller
{
    protected $view_path = 'backend.municipality.';
    protected $base_route = 'backend.municipality.';
    protected $page_title, $model;

    public function __construct(Municipality $municipality)
    {
        $this->model = $municipality;
    }

    public function index()
    {
        $data =  [];
        $data['rows'] = $this->model->with('district.province')->latest()->get();
        return view($this->view_path. 'index',compact('data'));
    }

    public function create()
    {
        $provinces = Province::pluck('name_np', 'id');
        $districts = District::pluck('name_np', 'id');
        return view($this->view_path . 'create',compact('provinces', 'districts'));
    }

    public function store(Request $request)
    {
        try{
            $this->model->create([
                'district_id' => $request['district_id'],
                'name_np' => $request['name_np'],
            ]);
            toast('Municipality Created Successfully','success','top-right');
        }
        catch (\Exception $e) {
            toast('Municipality Creation Failed !','error','top-right');
        }
        return redirect()->route($this->base_route . 'index');
    }

    public function edit($id)
    {
        $this->page_title  = 'Edit Municipality';

        $provinces = Province::pluck('name_np', 'id');
        $districts = District::pluck('name_np', 'id');

        if (!$data['row'] = $this->model->find($id)){
            toast('Municipality Not Found !','error','top-right');
            return redirect()->route($this->base_route . 'index');
        }

        return view($this->view_path . 'edit',compact('provinces', 'districts', 'data'));
    }

    public function update(Request $request,$id)
    {
        try{
            $row = $this->model->findorFail($id);
            $row->update([
                'district_id' => $request['district_id'],
                'name_np' => $request['name_np'],
            ]);
            toast('Municipality Updated Successfully.','success','top-right');
        }
        catch (\Exception $e) {
            toast('Municipality Update Failed !','error','top-right');
        }
        return redirect()->route($this->base_route . 'index');
    }

    public function destroy($id)
    {
        $row = $this->model->findorFail($id);
        try {
            $row->delete();
            toast('Municipality Deleted Successfully.','success','top-right');
        } catch (\Exception $e) {
            toast('Municipality Delete Failed !','error','top-right');
        }
        return redirect()->route($this->base_route . 'index');
    }

}
