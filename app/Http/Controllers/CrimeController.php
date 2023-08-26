<?php

namespace App\Http\Controllers;

use App\Models\Crime;
use Illuminate\Http\Request;

class CrimeController extends Controller
{
    protected $view_path = 'backend.crime.';
    protected $base_route = 'backend.crime.';
    protected $page_title, $model;

    public function __construct(Crime $crime)
    {
        $this->model = $crime;
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
                'crime_type' => $request['crime_type'],
            ]);
            toast('Crime type Created Successfully','success','top-right');
        }
        catch (\Exception $e) {
            toast('Crime type Creation Failed !','error','top-right');
        }
        return redirect()->route($this->base_route . 'index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $this->page_title  = 'Edit Crime';

        if (!$data['row'] = $this->model->find($id)){
            toast('Crime Not Found !','error','top-right');
            return redirect()->route($this->base_route . 'index');
        }

        return view($this->view_path . 'edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        try{
            $row = $this->model->findorFail($id);
            $row->update([
                'title' => $request['title'],
                'key' => $request['key'],
            ]);
            toast('Crime Updated Successfully.','success','top-right');
        }
        catch (\Exception $e) {
            toast('Crime Update Failed !','error','top-right');
        }
        return redirect()->route($this->base_route . 'index');
    }

    public function destroy($id)
    {
        $row = $this->model->findorFail($id);
        try {
            $row->delete();
            toast('Crime Deleted Successfully.','success','top-right');
        } catch (\Exception $e) {
            toast('Crime Delete Failed !','error','top-right');
        }
        return redirect()->route($this->base_route . 'index');
    }

}
