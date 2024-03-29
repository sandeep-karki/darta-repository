<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    protected $view_path = 'backend.test.';
    protected $base_route = 'backend.test.';
    protected $page_title, $model;

    public function __construct(Test $test)
    {
        $this->model = $test;
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
                'title' => $request['title'],
                'key' => $request['key'],
            ]);
            toast('Test Created Successfully','success','top-right');
        }
        catch (\Exception $e) {
            toast('Test Creation Failed !','error','top-right');
        }
        return redirect()->route($this->base_route . 'index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $this->page_title  = 'Edit Test';

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
                'title' => $request['title'],
                'key' => $request['key'],
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
