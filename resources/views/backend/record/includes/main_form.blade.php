@if($page == 'create')
  {!! Form::open(['route' => $route, 'method' => 'post', 'files' => true , 'class' => 'form-horizontal data-parsley-validate main_form']) !!}
@else
  {!! Form::model($data['row'],['route' => [$route, $data['row']->id], 'method' => 'put','files' => true]) !!}
  {!! Form::hidden('id', null) !!}
@endif


<div class="container">
   <h2>बुक रेकर्ड</h2>
   <p>Click on the button to toggle between showing and hiding content.</p>
   <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#nibedak" style="margin-bottom: 14px;width:200px;background-color: #5E3791;">निबेदक <i class="fas fa-plus"></i></button>
   <div id="nibedak" class="collapse">
       <div class="form-group">
           <label for="register_no">दर्ता. नं.</label>
           {!! Form::number('register_no', $register_no, ['class' => "form-control", 'id' => 'register_no']) !!}
       </div>
       <div class="form-group">
            <label for="applicant">निबेदकको नाम</label>
            {!! Form::text('applicant', null, ['class' => "form-control", 'id' => 'applicant', 'placeholder' => 'पुरा नाम ...']) !!}
       </div>
       <div class="form-group">
         <label for="education_id ">निबेदकको शैक्षिक योग्यता</label>
           {!! Form::select('education_id',$data['educations'], null, ['class' => "form-control", 'id' => 'education_id', 'placeholder' => 'शैक्षिक योग्यता ...']) !!}
       </div>
       <div class="form-group">
         <label for="age">निबेदकको उमेर</label>
           {!! Form::number('age', null, ['class' => "form-control", 'id' => 'age', 'placeholder' => 'उमेर ...']) !!}
       </div>
       <div class="form-group">
         <label for="applicant_contact">निबेदकको सम्पर्क नम्बर</label>
           {!! Form::text('applicant_contact', null, ['class' => "form-control", 'id' => 'applicant_contact', 'placeholder' => 'सम्पर्क नम्बर ...']) !!}
       </div>
       <div class="form-group">
            <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="applicant_gender" id="applicant_gender1" value="male">
               <label class="form-check-label" for="applicant_gender1">पुरुष</label>
           </div>
           <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="applicant_gender" id="applicant_gender2" value="female">
               <label class="form-check-label" for="applicant_gender2">महिला</label>
           </div>
           <br>
           <span id="applicant_gender"></span>
       </div>
       <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
   </div>
   <!-- Line Break -->
   <br>
   <!-- permanent place -->
   <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#permaplace" style="margin-bottom: 14px;width: 200px;background-color: #5E3791;">स्थाई ठेगाना <i class="fas fa-plus"></i></button>
   <div id="permaplace" class="collapse">
       <div class="form-group">
         <label for="permanent_province">स्थाई प्रदेश</label>
           {!! Form::select('permanent_province',$data['provinces'], null, ['class' => "form-control", 'id' => 'permanent_province', 'placeholder' => 'प्रदेश ...']) !!}
       </div>
       <div class="form-group">
         <label for="permanent_district">स्थाई जिल्ला</label>
           {!! Form::select('permanent_district',[], null, ['class' => "form-control", 'id' => 'permanent_district', 'placeholder' => 'जिल्ला ...']) !!}
       </div>
       <div class="form-group">
         <label for="permanent_municipality">स्थाई स्थानिय तह</label>
           {!! Form::select('permanent_municipality',[], null, ['class' => "form-control", 'id' => 'permanent_municipality', 'placeholder' => 'स्थानिय तह ...']) !!}
       </div>
       <div class="form-group">
         <label for="permanent_ward_no">स्थाई वडा नं</label>
           {!! Form::number('permanent_ward_no', null, ['class' => "form-control", 'id' => 'permanent_ward_no', 'placeholder' => 'वडा नं ....']) !!}
       </div>
   </div>

   <!-- Line Break -->
   <br>
   <!-- temporary place -->
   <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#tempplace" style="margin-bottom: 14px;width: 200px;background-color: #5E3791;">अस्थाई ठेगाना <i class="fas fa-plus"></i></button>
   <div id="tempplace" class="collapse">
         <div class="form-group">
             <label for="temporary_province">अस्थाई प्रदेश</label>
             {!! Form::select('temporary_province',$data['provinces'], null, ['class' => "form-control", 'id' => 'temporary_province', 'placeholder' => 'प्रदेश ...']) !!}
         </div>
         <div class="form-group">
             <label for="temporary_district">अस्थाई जिल्ला</label>
             {!! Form::select('temporary_district',[], null, ['class' => "form-control", 'id' => 'temporary_district', 'placeholder' => 'जिल्ला ...']) !!}
         </div>
         <div class="form-group">
             <label for="temporary_municipality">अस्थाई स्थानिय तह</label>
             {!! Form::select('temporary_municipality',[], null, ['class' => "form-control", 'id' => 'temporary_municipality', 'placeholder' => 'स्थानिय तह ...']) !!}
         </div>
         <div class="form-group">
             <label for="temporary_ward_no">अस्थाई वडा नं</label>
             {!! Form::number('temporary_ward_no', null, ['class' => "form-control", 'id' => 'temporary_ward_no', 'placeholder' => 'वडा नं ....']) !!}
         </div>
   </div>

   <!-- Line Break -->
   <br>
   <!-- crime type -->
   <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#crime" style="margin-bottom: 14px;width: 200px;background-color: #5E3791;">अपराध <i class="fas fa-plus"></i></button>
   <div id="crime" class="collapse">
       <div class="form-group">
         <label for="cheat_id">अपराधको प्रकार</label>
        {!! Form::select('crime_id',$data['crimes'], null, ['class' => "form-control", 'id' => 'crime_id', 'placeholder' => 'प्रकार']) !!}
       </div>
       <div class="form-group">
         <label for="cheat_id">अपराधको/ठगीको माध्यम</label>
           {!! Form::select('cheat_id',$data['cheats'], null, ['class' => "form-control", 'id' => 'cheat_id', 'placeholder' => 'माध्यम ...']) !!}
       </div>
       <div class="form-group">
           <label for="suspect_name">बिपक्षीको नाम</label>
           {!! Form::text('suspect_name', null, ['class' => "form-control", 'id' => 'suspect_name', 'placeholder' => 'नाम ....']) !!}
       </div>
       <div class="form-group">
           <label for="suspect_contact_number">बिपक्षीको सम्पर्क नम्बर</label>
           {!! Form::text('suspect_contact_number', null, ['class' => "form-control", 'id' => 'suspect_contact_number', 'placeholder' => 'सम्पर्क नम्बर ....']) !!}
       </div>
   </div>

   <!-- Line Break -->
   <br>
   <!-- permanent place -->
   <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#bank" style="margin-bottom: 14px;width: 200px;background-color: #5E3791;">बैंक बिबरन <i class="fas fa-plus"></i></button>
   <div id="bank" class="collapse">
       <div class="form-group">
         <label for="exampleInputEmail1">बैंक श्रेणी</label>
         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="केटोगेरी ...">
       </div>
       <div class="form-group">
         <label for="exampleInputPassword1">बैंक नाम</label>
         <input type="text" class="form-control" id="exampleInputPassword1" placeholder="बैङ्क नाम ...">
       </div>
        <div class="form-group">
         <label for="exampleInputPassword1">खाता नम्बर</label>
         <input type="text" class="form-control" id="exampleInputPassword1" placeholder="खाता नम्बर ...">
       </div>
       <div class="form-group">
            <label for="total_scam_amount">बिगो रकम</label>
            {!! Form::number('total_scam_amount', null, ['class' => "form-control", 'id' => 'total_scam_amount', 'placeholder' => 'बिगो रकम ...']) !!}
       </div>
   </div>
 </div>

<div class="form-group mb-0 justify-content-end row">
    <div class="col-9">
        {!! Form::button('<i class="fas fa-save"></i> Save' , ['class' => 'btn btn-info btn-green', 'type' => 'submit']) !!}
        {!! Form::button('<i class="fas fa-redo-alt"></i> Reset' , ['class' => 'btn btn-danger trash-bcolor', 'type' => 'reset']) !!}
    </div>
</div>

{!! Form::close() !!}
