@extends('template.event.layout2')

@section('content')

<section class="contact-us-area">
  <div class="auto-container">
    <div class="row clearfix">
      <div class="col-md-10 col-md-offset-1 col-sm-12 contact-form">
        <br>
        <span style="margin-bottom: 15px;"><h4>All fields <span style="color: red"><strong>*</strong></span> are required</h4></span><br>
        <p>@include('partials/flash')</p>
        <div class="jumbotron">
          <div class="container">
            <form  method="post" action="/corporatesecurity-form">
              {{csrf_field()}} 
              <div class="field-container clearfix">  
                <div class="form-group" >
                    <label class="control-label col-md-3"> First Name<span style="color: red"><strong>*</strong></span> </label>
                    <div class="controls col-md-7 ">
                        <input class=" form-control" name="first_name"  value="{{old('first_name')}}" style="margin-bottom: 13px" type="text" required />
                    </div>
                </div>
              </div>
              <div class="field-container clearfix">  
                <div class="form-group" >
                    <label class="control-label col-md-3"> Last Name<span style="color: red"><strong>*</strong></span> </label>
                    <div class="controls col-md-7 ">
                        <input class=" form-control" name="last_name" value="{{old('last_name')}}"  style="margin-bottom: 13px" type="text" required />
                    </div>
                </div>
              </div>
              <div class="field-container clearfix">  
                <div class="form-group" >
                    <label class="control-label col-md-3"> Email<span style="color: red"><strong>*</strong></span> </label>
                    <div class="controls col-md-7 ">
                        <input class=" form-control" name="email" value="{{old('email')}}" style="margin-bottom: 13px" type="email" required />
                    </div>
                </div>
              </div>
              <div class="field-container clearfix">  
                <div class="form-group" >
                    <label class="control-label col-md-3"> Phone<span style="color: red"><strong>*</strong></span> </label>
                    <div class="controls col-md-7 ">
                        <input class=" form-control" name="phone" value="{{old('first_name')}}" style="margin-bottom: 13px" type="number" required />
                    </div>
                </div>
              </div>
              <div class="field-container clearfix">  
                <div class="form-group" >
                    <label class="control-label col-md-3"> Facility<span style="color: red"><strong>*</strong></span> </label>
                    <div class="controls col-md-7 ">
                        <input class=" form-control" name="facility" value="{{old('facility')}}"  style="margin-bottom: 13px" type="text" placeholder="e.g Hotel, Shopping mall, School etc." required />
                    </div>
                </div>
              </div>
              <div class="field-container clearfix">  
                <div class="form-group" >
                    <label class="control-label col-md-3"> Address<span style="color: red"><strong>*</strong></span> </label>
                    <div class="controls col-md-7 ">
                        <input class=" form-control" name="address" value="{{old('address')}}" style="margin-bottom: 13px" type="text" required />
                    </div>
                </div>
              </div>
              <div class="field-container clearfix">
                <div class="form-group">
                  <label  class="control-label col-md-3">Consultancy/Assessment<span style="color: red"><strong>*</strong></span>?</label>
                  <div class="controls col-md-7 "  style="margin-bottom: 13px">
                      <label class="radio-inline"> <input type="radio" name="assessment" value="Yes"  style="margin-bottom: 10px">Yes </label>
                      <label class="radio-inline"> <input type="radio" name="assessment"  value="No"  style="margin-bottom: 10px">No </label>
                  </div>
                </div>
              </div>
              <div class="field-container clearfix">  
                <div class="form-group" >
                    <label class="control-label col-md-3"> Number of Officer(s) Needed<span style="color: red"><strong>*</strong></span> </label>
                    <div class="controls col-md-7 ">
                        <input class=" form-control" name="officer_no" value="{{old('officer_no')}}" style="margin-bottom: 13px" type="number" required />
                    </div>
                </div>
              </div>
              <div class="field-container clearfix">  
                            <div class="form-group" >
                                <label class="control-label col-md-3">Job Description<span style="color: red"><strong>*</strong></span></label>
                                <div class="controls col-md-7 ">
                                    <textarea rows="3" name="job_description" class=" form-control" required></textarea>
                                </div>
                            </div>
              </div>
              <br>
              <center>
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                  <button type="submit" name="submit-form" class="primary-btn hvr-bounce-to-left"><span class="btn-text">Book Now</span> <strong class="icon"><span class="f-icon flaticon-right11"></span></strong></button>
                </div>
              </center>               
            </form>
          </div>                  
        </div>                   
      </div>    
    </div> 
  </div>      
</section>

@endsection