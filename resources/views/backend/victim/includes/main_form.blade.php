@if($page == 'create')
  {!! Form::open(['route' => $route, 'method' => 'post', 'files' => true , 'class' => 'form-horizontal data-parsley-validate custom_form']) !!}
@else
  {!! Form::model($data['row'],['route' => [$route, $data['row']->id], 'method' => 'put','files' => true]) !!}
  {!! Form::hidden('id', null) !!}
@endif

<!-- <div class="form-group row mb-3">
    {!! Form::label('title', 'victim type *', ['class' => 'col-3 col-form-label']) !!}
    <div class="col-9">
    {!! Form::text('title', null, ['class' => "form-control", 'id' => 'title', 'placeholder' => 'Province']) !!}
    @include('error.single_field_validation_message',['fieldname' => 'title'])
    </div>
</div> -->

<!-- <div class="form-group mb-0 justify-content-end row">
    <div class="col-9">
    {!! Form::button('<i class="fas fa-save"></i> Save' , ['class' => 'btn btn-info btn-green ', 'type' => 'submit']) !!}
    {!! Form::button('<i class="fas fa-redo-alt"></i> Reset' , ['class' => 'btn btn-danger trash-bcolor', 'type' => 'reset']) !!}
    </div>
</div>
 -->

 <div class="container">
   <h2>बुक रेकर्ड</h2>
   <p>Click on the button to toggle between showing and hiding content.</p>
   <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#nibedak" style="margin-bottom: 14px;width:200px;background-color: #5E3791;">निबेदक <i class="fas fa-plus"></i></button>
   <div id="nibedak" class="collapse">
     <form>
       <div class="form-group">
         <label for="exampleInputEmail1">निबेदकको नाम</label>
         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="पुरा नाम ...">
         <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
       </div>
       <div class="form-group">
         <label for="exampleInputPassword1">निबेदकको शैक्षिक योग्यता</label>
         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="शैक्षिक योग्यता ...">
       </div>       
       <div class="form-group">
         <label for="exampleInputPassword1">निबेदकको उमेर</label>
         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="उमेर ...">
       </div>      
       <div class="form-group">
         <label for="exampleInputPassword1">निबेदकको सम्पर्क नम्बर</label>
         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="सम्पर्क नम्बर ...">
       </div>
       <div class="form-group">
        <div class="form-check form-check-inline">
           <input class="form-check-input" type="radio" name="nibedak_gender" id="inlineRadio1" value="male">
           <label class="form-check-label" for="inlineRadio1">पुरुष</label>
       </div>
       <div class="form-check form-check-inline">
           <input class="form-check-input" type="radio" name="nibedak_gender" id="inlineRadio2" value="female">
           <label class="form-check-label" for="inlineRadio2">महिला</label>
       </div>
       </div>
       <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
     </form>
   </div>
   <!-- Line Break -->
   <br>
   <!-- permanent place -->
   <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#permaplace" style="margin-bottom: 14px;width: 200px;background-color: #5E3791;">स्थाई ठेगाना <i class="fas fa-plus"></i></button>
   <div id="permaplace" class="collapse">
     <form>
       <div class="form-group">
         <label for="exampleInputEmail1">स्थाई प्रदेश</label>
         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="प्रदेश ...">
       </div>
       <div class="form-group">
         <label for="exampleInputPassword1">स्थाई जिल्ला</label>
         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="जिल्ला ...">
       </div>       
       <div class="form-group">
         <label for="exampleInputPassword1">स्थाई स्थानिय तह</label>
         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="स्थानिय तह ...">
       </div>      
       <div class="form-group">
         <label for="exampleInputPassword1">स्थाई वडा नं</label>
         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="वडा नं ...">
       </div>
     </form>
   </div>

   <!-- Line Break -->
   <br>
   <!-- temporary place -->
   <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#tempplace" style="margin-bottom: 14px;width: 200px;background-color: #5E3791;">अस्थाई ठेगाना <i class="fas fa-plus"></i></button>
   <div id="tempplace" class="collapse">
     <form>
       <div class="form-group">
         <label for="exampleInputEmail1">अस्थाई प्रदेश</label>
         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="प्रदेश ...">
       </div>
       <div class="form-group">
         <label for="exampleInputPassword1">अस्थाई जिल्ला</label>
         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="जिल्ला ...">
       </div>       
       <div class="form-group">
         <label for="exampleInputPassword1">अस्थाई स्थानिय तह</label>
         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="स्थानिय तह ...">
       </div>      
       <div class="form-group">
         <label for="exampleInputPassword1">अस्थाई वडा नं</label>
         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="वडा नं ...">
       </div>
     </form>
   </div>

   <!-- Line Break -->
   <br>
   <!-- crime type -->
   <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#crime" style="margin-bottom: 14px;width: 200px;background-color: #5E3791;">अपराध <i class="fas fa-plus"></i></button>
   <div id="crime" class="collapse">
     <form>
       <div class="form-group">
         <label for="exampleInputEmail1">अपराधको प्रकार</label>
        {!! Form::select('crime_id',$crimes, null, ['class' => "form-control", 'id' => 'crime_id', 'placeholder' => 'प्रकार']) !!}
       </div>
       <div class="form-group">
         <label for="exampleInputPassword1">अपराधको/ठगीको माध्यम</label>
         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="माध्यम ...">
       </div>       
     </form>
   </div>

   <!-- Line Break -->
   <br>
   <!-- permanent place -->
   <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#bank" style="margin-bottom: 14px;width: 200px;background-color: #5E3791;">बैंक बिबरन <i class="fas fa-plus"></i></button>
   <div id="bank" class="collapse">
     <form>
       <div class="form-group">
         <label for="exampleInputEmail1">बैंक श्रेणी</label>
         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="केटोगेरी ...">
       </div>
       <div class="form-group">
         <label for="exampleInputPassword1">बैंक नाम</label>
         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="बैङ्क नाम ...">
       </div>
        <div class="form-group">
         <label for="exampleInputPassword1">खाता नम्बर</label>
         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="खाता नम्बर ...">
       </div>           
       <div class="form-group">
         <label for="exampleInputPassword1">बिगो रकम</label>
         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="बिगो रकम ...">
       </div>       
     </form>
   </div>
 </div>
{!! Form::close() !!}
