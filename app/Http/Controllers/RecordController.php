<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecordRequest;
use App\Models\Cheat;
use App\Models\Crime;
use App\Models\District;
use App\Models\Education;
use App\Models\Municipality;
use App\Models\Province;
use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    protected $view_path = 'backend.record.';
    protected $base_route = 'backend.record.';
    protected $page_title, $model;

    public function __construct(Record $record)
    {
        $this->model = $record;
    }

    public function index()
    {
        $data =  [];
        $data['rows'] = $this->model->latest()->get();
        return view($this->view_path. 'index',compact('data'));
    }

    public function create()
    {
        $data = [];
        $data['crimes'] = Crime::pluck('crime_type', 'id');
        $data['cheats'] = Cheat::pluck('cheat_medium', 'id');
        $data['provinces'] = Province::pluck('name_np', 'id');
        $data['educations'] = Education::pluck('name', 'id');

        $register_no = $this->model::max('register_no') + 1;

        return view($this->view_path . 'create',compact('data', 'register_no'));
    }

    public function store(RecordRequest $request)
    {
        $request['register_date'] = now()->format('Y-m-d');
        try{
            $this->model->create($request->all());
            toast('Record Created Successfully','success','top-right');
        }
        catch (\Exception $e) {
            toast('Record Creation Failed !','error','top-right');
        }
        return response()->json(['url' => route($this->base_route . 'index')]);
    }

    public function show($id)
    {
        $row = $this->model->find($id);

        return view($this->view_path . 'show',compact('row'));

    }

    public function edit($id)
    {
        $this->page_title  = 'Edit Province';

        if (!$data['row'] = $this->model->find($id)){
            toast('Record Not Found !','error','top-right');
            return redirect()->route($this->base_route . 'index');
        }

        return view($this->view_path . 'edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        try{
            $row = $this->model->findorFail($id);
            $row->update([
                'victim' => $request['victim'],
            ]);
            toast('Record Updated Successfully.','success','top-right');
        }
        catch (\Exception $e) {
            toast('Record Update Failed !','error','top-right');
        }
        return redirect()->route($this->base_route . 'index');
    }

    public function destroy($id)
    {
//        $row = $this->model->findorFail($id);
//        try {
//            $row->delete();
//            toast('Record Deleted Successfully.','success','top-right');
//        } catch (\Exception $e) {
//            toast('Record Delete Failed !','error','top-right');
//        }
//        return redirect()->route($this->base_route . 'index');
    }

    public function getDistricts(){
        return District::where('province_id', request('province_id'))->pluck('name_np', 'id');
    }

    public function getMunicipalities(){
        return Municipality::where('district_id', request('district_id'))->pluck('name_np', 'id');
    }

}
