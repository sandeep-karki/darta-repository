<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    protected $view_path = 'backend.district.';
    protected $base_route = 'backend.district.';
    protected $page_title, $model;

    public function __construct(District $district)
    {
        $this->model = $district;
    }

    public function index()
    {
        $data =  [];
        $data['rows'] = $this->model->with('province')->latest()->get();
        return view($this->view_path. 'index',compact('data'));
    }

    public function create()
    {
        $provinces = Province::pluck('name_np', 'id');
        return view($this->view_path . 'create',compact('provinces'));
    }

    public function store(Request $request)
    {
        try{
            $this->model->create([
                'name_np' => $request['district_name'],
                'province_id' => $request['province_id'],
            ]);
            toast('District Created Successfully','success','top-right');
        }
        catch (\Exception $e) {
            toast('District Creation Failed !','error','top-right');
        }
        return redirect()->route($this->base_route . 'index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $this->page_title  = 'Edit District';

        if (!$data['row'] = $this->model->find($id)){
            toast('District Not Found !','error','top-right');
            return redirect()->route($this->base_route . 'index');
        }

        return view($this->view_path . 'edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        dd($request->all());
        try{
            $row = $this->model->findorFail($id);
            $row->update([
                'title' => $request['title'],
                'key' => $request['key'],
            ]);
            toast('District Updated Successfully.','success','top-right');
        }
        catch (\Exception $e) {
            toast('District Update Failed !','error','top-right');
        }
        return redirect()->route($this->base_route . 'index');
    }

    public function destroy($id)
    {
        $row = $this->model->findorFail($id);
        try {
            $row->delete();
            toast('District Deleted Successfully.','success','top-right');
        } catch (\Exception $e) {
            toast('District Delete Failed !','error','top-right');
        }
        return redirect()->route($this->base_route . 'index');
    }

}
