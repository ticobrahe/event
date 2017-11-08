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
                  <form  method="post" action="/eventsecurity-form" >
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
                              <input class=" form-control" name="phone" value="{{old('first_name')}}" style="margin-bottom: 13px" type="number" required="" />
                          </div>
                      </div>
                    </div>
                    <div class="field-container clearfix">  
                      <div class="form-group" >
                          <label class="control-label col-md-3"> Event Type<span style="color: red"><strong>*</strong></span> </label>
                          <div class="controls col-md-7 ">
                              <input class=" form-control" name="event_type" value="{{old('event_type')}}"  style="margin-bottom: 13px" type="text" required="" />
                          </div>
                      </div>
                    </div>
                    <div class="field-container clearfix">  
                      <div class="form-group" >
                          <label class="control-label col-md-3"> Address<span style="color: red"><strong>*</strong></span> </label>
                          <div class="controls col-md-7 ">
                              <input class=" form-control" name="address" value="{{old('address')}}" style="margin-bottom: 13px" type="text" required="" />
                          </div>
                      </div>
                    </div>
                    <div class="field-container clearfix">  
                      <div class="form-group" >
                          <label class="control-label col-md-3">  Event Location<span style="color: red"><strong>*</strong></span> </label>
                          <div class="controls col-md-7 ">
                              <input class=" form-control" name="event_location" value="{{old('event_location')}}" style="margin-bottom: 13px" type="text" required />
                          </div>
                      </div>
                    </div>
                     <div class="field-container clearfix">  
                        <div class="form-group" >
                            <label class="control-label col-md-3">  Number of Guests<span style="color: red"><strong>*</strong></span></label>
                            <div class="controls col-md-7 ">
                                <input class=" form-control" name="no_guest" value="{{old('no_guest')}}"  style="margin-bottom: 13px" type="number" required="" />
                            </div>
                        </div>
                      </div>
                      <div class="field-container clearfix">
                        <div class="form-group">
                          <label  class="control-label col-md-3">Alcohol<span style="color: red"><strong>*</strong></span></label>
                          <div class="controls col-md-7 "  style="margin-bottom: 13px">
                            <label class="radio-inline"> <input type="radio" name="alcohol" value="Yes"  style="margin-bottom: 10px">Yes </label>
                            <label class="radio-inline"> <input type="radio" name="alcohol"  value="No"  style="margin-bottom: 10px">No </label>
                          </div>
                        </div>
                    </div>
                    <div class="field-container clearfix">  
                      <div class="form-group" >
                          <label class="control-label col-md-3"> Number of Dignitries/VIP<span style="color: red"><strong>*</strong></span> </label>
                          <div class="controls col-md-7 ">
                              <input class=" form-control" name="vip" value="{{old('vip')}}" style="margin-bottom: 13px" type="number" required="" />
                          </div>
                      </div>
                    </div>
                    <div class="field-container clearfix">  
                      <div class="form-group" >
                          <label class="control-label col-md-3"> Date of Event<span style="color: red"><strong>*</strong></span>   </label>
                          <div class="controls col-md-7 ">
                              <input class=" form-control" name="date_event" style="margin-bottom: 13px" type="date" required />
                          </div>
                      </div>
                    </div>
                    <div class="field-container clearfix">  
                      <div class="form-group" >
                          <label class="control-label col-md-3"> Time of Event<span style="color: red"><strong>*</strong></span>   </label>
                          <div class="controls col-md-7 ">
                              <input class=" form-control" name="time_event" style="margin-bottom: 13px" type="text" required="" />
                          </div>
                      </div>
                    </div>
                    <div class="field-container clearfix">  
                      <div class="form-group" >
                          <label class="control-label col-md-3"> Contact Phone Number<span style="color: red"><strong>*</strong></span> </label>
                          <div class="controls col-md-7 ">
                              <input class=" form-control" name="contact_phone" value="{{old('contact_phone')}}"style="margin-bottom: 13px" type="number" required />
                          </div>
                      </div>
                    </div>
                      <div class="field-container clearfix">
                        <div class="form-group">
                          <label class="control-label col-md-3"> Team<span style="color: red"><strong>*</strong></span>   </label>
                          <div class="controls col-md-7 " >
                              <label class="radio-inline"> <input type="radio" name="team" value="Cobra"  >Cobra 10K per 12hours </label><br>
                              <label class="radio-inline"> <input type="radio" name="team"  value="Bravo">Bravo 20K per 12hours</label><br>
                              <label class="radio-inline"> <input type="radio" name="team"  value="Alpha">Alpha 30K per 12hours </label><br>
                              <label class="radio-inline"> <input type="radio" name="team"  value="Alpha">Eagle 40K per 12hours </label><br>
                              <label class="radio-inline"> <input type="radio" name="team"  value="Alpha">Vulture 50K per 12hours </label><br>
                              <label class="radio-inline"> <input type="radio" name="team"  value="Alpha">Advance 70K per 12hours </label>
                          </div>
                        </div>
                    </div>
                    <br><br>
                    <center>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" name="submit-form" class="primary-btn hvr-bounce-to-left"><span class="btn-text">Book Now</span> <strong class="icon"><span class="f-icon flaticon-right11"></span></strong></button>
                        </div>
                    </center>
                        
                    </div>
                    
                  </form>
              </div>
            </div>  
          </div> 
      </div>         
  </div>    
</section>

@endsection