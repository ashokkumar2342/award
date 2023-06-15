@extends('admin.layout.base')
@section('body')
<style>
    #message{
  position: relative;
  top: 10px;
  color:green;
}
#err{
  position: relative;
  top: 10px;
  color:red;
}
</style>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Individual Award Form</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right"> 
                </ol>
            </div>
        </div> 
        
        <div class="card card-info"> 
            <div class="card-body">
                <form action="{{ route('admin.booking.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row"> 
                        <div class="col-lg-6 form-group">
                            <label>Email</label>
                            <span class="fa fa-asterisk"></span> 
                            <input type="text" name="email" class="form-control" required> 
                       
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Name of the Candidate (in Block Letter)
</label>
                            <span class="fa fa-asterisk"></span> 
                            <input type="text" name="Name of the Candidate (in Block Letter)
" class="form-control" required> 
                       
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Candidate Affiliation (University/ College Name)
</label>
                            <span class="fa fa-asterisk"></span> 
                            <input type="text" name="Candidate Affiliation (University/ College Name)
" class="form-control" required> 
                       
                        </div>                     
                       <div class="col-lg-6 form-group">
                           <label>Address for Communication</label>
                           <textarea name="Address for Communication" class="form-control section"   maxlength="100" style="height: 50px"></textarea> 
                       <p class="text-danger">{{ $errors->first('school_Company_city') }}</p>
                       </div>
                        <div class="col-lg-6 form-group">
                           <label>Complete Postal Address for Communication
</label>
<span class="fa fa-asterisk"></span> 
                           <textarea name="Complete Postal Address for Communication
" class="form-control section" required  maxlength="100" style="height: 50px"></textarea> 
                       <p class="text-danger">{{ $errors->first('school_Company_city') }}</p>
                       </div>
                       
                        <div class="col-lg-6 form-group">
                            <label>Age/Date of Birth</label>
                            <span class="fa fa-asterisk"></span> 
                            <input type="text" name="Institute Affiliated from" class="form-control" required> 
                       
                        </div>
                        <div class="col-lg-6 form-group"> 
                            <label for="exampleInputEmail1">Gender</label>
                            <span class="fa fa-asterisk"></span>
                            <select class="form-control" name="Gender" id="booking_type" required onchange="amontAdd()">
                            <option selected disabled>Select </option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Prefer not to say">Prefer not to say</option>
                             </select>                    
                        <p class="text-danger">{{ $errors->first('booking_type') }}</p>
                        </div>
                        <div class="col-lg-6 form-group"> 
                            <label for="exampleInputEmail1">Marital Status</label>
                            <span class="fa fa-asterisk"></span>
                            <select class="form-control" name="Marital Status" id="booking_type" required onchange="amontAdd()">
                            <option selected disabled>Select </option>
                                <option value="Married">Married</option>
                                <option value="Un-Married">Un-Married</option>
                                <option value="Prefer not to say">Prefer not to say</option>
                             </select>                    
                        <p class="text-danger">{{ $errors->first('booking_type') }}</p>
                        </div>
                        <div class="col-lg-4 form-group">
                            <label>Nationality</label>
                            <span class="fa fa-asterisk"></span> 
                            <input type="text" name="Nationality" class="form-control" required> 
                       
                        </div>
                         <div class="col-lg-4 form-group">
                            <label>Mobile No (Contact Person)</label>
                            <span class="fa fa-asterisk"></span> 
                            <input type="text" name="Mobile No (Contact Person)" class="form-control" required> 
                       
                        </div>
                        <div class="col-lg-4 form-group"> 
                            <label for="exampleInputEmail1">Award Category</label>
                            <span class="fa fa-asterisk"></span>
                            <select class="form-control" name="Award Category" id="booking_type" required onchange="amontAdd()">
                            <option selected disabled>Select Award Category</option>
                            @foreach ($bookingTypes as $bookingType)
                                <option value="{{$bookingType->name}}" @if (old('booking_type')==$bookingType->name) selected="selected" @endif>{{$bookingType->name}}</option>
                            @endforeach 
                             </select>                    
                        <p class="text-danger">{{ $errors->first('booking_type') }}</p>
                        </div>
                        
                        

                        
                        <div class="col-lg-12 form-group">
                            <label>Whether received any award in the past.: Specify and give brief details</label> 
                            <input type="text" name="Whether received any award in the past.: Specify and give brief details" class="form-control"> 
                       
                        </div>
                        <div class="col-lg-12 form-group">
                            <label>Total Research publication (Provide numbers):Journal articles(SCI/Scopus/Google Scholar/DBLP)</label> 
                            <input type="text" name="Total Research publication (Provide numbers):Journal articles(SCI/Scopus/Google Scholar/DBLP)" class="form-control"> 
                       
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Total Number of Patents count</label> 
                            <input type="text" name="Total Number of Patents count" class="form-control" > 
                       
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Research projects undertaken(count with brief details)</label> 
                            <input type="text" name="Research projects undertaken(count with brief details)" class="form-control"> 
                       
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Significant contribution in Social area</label> 
                            <input type="text" name="Significant contribution in Social area" class="form-control"> 
                       
                        </div> 
                        <div class="col-lg-6 form-group">
                            <label>Educational Qualification (Please attach your CV)</label> 
                            <input type="file" name="resume" class="form-control" required accept="application/pdf"> 
                       
                        </div>
                        
                        {{-- <div class="col-lg-2 form-group">
                            <label>Coupon Code</label>
                           <div class="input-group input-group-sm">
                             <input type="text" name="coupon" id="in" class="form-control coupon" title="Enter coupon" autocomplete="off">
                             <span class="input-group-append">
                               <button type="button" class="btn btn-info btn-flat" onclick="validate(coupon)">Verify</button>
                             </span>
                           </div> 
                            <span id="message"></span>
                            <span id="err"></span>
                        </div> --}}
                        <div class="col-lg-12 form-group text-center" style="margin-top: 30px">
                          <input type="submit" class=" btn btn-info" value="Submit" style="width: 250px">
                        </div>   
                    </div>
                     
              </form>  
            </div> 
        </div>
    </section>
    @endsection
@push('scripts')
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <script>
    var totalPoints = 0;
    var brate_ad = [];
    var brate_ch = [];
    var counter = 1;
    @foreach ($bookingTypes as $brate)
        brate_ad[counter] = {{$brate->ad_amount}};
        brate_ch[counter] = {{$brate->ch_amount}};
        counter = counter + 1;    
    @endforeach
    function amontAdd() {
        booking_type = $('#booking_type').val() ;
        if(booking_type==null){
           alert('Please select booking type')
           return false;
        }
        adult_div = parseInt($('#adult_div').val());
        children_div = parseInt($('#children_div').val());

        adult_div = adult_div * brate_ad[booking_type];
        children_div = children_div * brate_ch[booking_type];
        totalPoints = adult_div+children_div;
        if(isNaN(adult_div)){
           adult_div=0; 
        }
        if(isNaN(children_div)){
           children_div=0; 
        }

        $('#total_amount_show').html(totalPoints);
        $('#total_amount_hidden').val(totalPoints);

        const adults = document.querySelector('input[name=adults]');
        const children = document.querySelector('input[name=children]');
        if ((children.value == 0 ) && (adults.value ==0)){
        children.setCustomValidity('Adults And Children not be 0');
        } else {
        children.setCustomValidity('');
        }     
    }
    
   function validate(coupon) {
    var myRe = "LUCKY100";
    var coupon = myRe.trim();
    var input = document.getElementById('in').value;
    if(input.toUpperCase() == coupon.toUpperCase()) {
        document.getElementById('message').innerHTML="Coupon applied!";
        document.getElementById('err').innerHTML="";
        return true;
    } else {
        document.getElementById('err').innerHTML="Invalid coupon";
        document.getElementById('message').innerHTML="";
        return false;
    }
}
        
  
   </script>
@endpush 

