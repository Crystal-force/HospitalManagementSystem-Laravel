@extends('layout.index')
@section('content')
<style type="text/css">
   .document-look {
   height: 70px;
   }
</style>
<header class="fixed-header">
   <div class="header-top">
      <div class="container">
         <div class="pull-left">
            <a href="javascript:;" class="logo"><i class="ico mdi mdi-cube-outline"></i>COVID TEST Admin</a>
         </div>
         <div class="pull-right">
            <img src="assets/images/logo.png" class="h-logo mb-1" style="margin-bottom: 10px;" />
            <div class="ico-item hidden-on-desktop">
               <button type="button" class="menu-button js__menu_button fa fa-bars waves-effect waves-light"></button>
            </div>
            {{-- 
            <div class="ico-item">
               <a href="#" class="ico-item mdi mdi-bell notice-alarm js__toggle_open" data-target="#notification-popup"></a>
               <div id="notification-popup" class="notice-popup js__toggle" data-space="55">
                  <h2 class="popup-title">Your Notifications</h2>
                  <div class="content">
                     <ul class="notice-list">
                        <li>
                           <a href="#">
                           <span class="avatar"><img src="assets/images/avatar-sm-1.jpg" alt=""></span>
                           <span class="name">John Doe</span>
                           <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                           <span class="time">10 min</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="avatar"><img src="assets/images/avatar-sm-2.jpg" alt=""></span>
                           <span class="name">Anna William</span>
                           <span class="desc">Like your post: “Facebook Messenger”</span>
                           <span class="time">15 min</span>
                           </a>
                        </li>
                     </ul>
                     <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
                  </div>
               </div>
            </div>
            --}}
            <div class="ico-item">
               <a href="javascript:;" class="ico-item mdi mdi-logout-variant js__toggle_open" data-target="#user-status"></a>
               <div id="user-status" class="user-status js__toggle">
                  <a href="javascript:;" class="avatar"><img src="assets/images/person-1824144_1280.png" alt=""><span class="status online"></span></a>
                  <h5 class="name"><a href="javascript:;">{{ Auth::user()->name ?? '' }}</a></h5>
                  <h5 class="position">Administrator</h5>
                  <div class="control-items">
                     {{-- 
                     <div class="control-item"><a href="#" title="Settings"><i class="fa fa-gear"></i></a></div>
                     --}}
                     <div class="control-item">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
<div id="wrapper">
   <div class="container">
      <div class="row small-spacing">
         <div class="col-xs-12">
           <div class="pdf-page">
              <a type="button" class="btn btn-warning btn-rounded btn-bordered waves-effect waves-light" href="/patientinfo?id={{$userinfo->id}}">Send PDF</a>
           </div>
            <div class="box-content">
               <h2 class="basic-title">Detailed Information</h2>
               <h3 class="basic-title">DATE: <span>{{$userinfo->date ?? ''}}</span></h3>
               <div class="col-xs-4" style="margin-bottom: 30px">
                  <p class="each-tab-title" style="margin-top:0px">NAME: <span style="color:rgb(23, 138, 8); ">{{$userinfo->name}}</span></p>
               </div>
               <div class="col-xs-4" style="margin-bottom: 30px">
                  <p class="each-tab-title" style="margin-top:0px">BIRTHDAY: <span style="color:rgb(23, 138, 8); ">{{$userinfo->birthday}}</span></p>
               </div>
               <div class="col-xs-4" style="margin-bottom: 30px">
                  <p class="each-tab-title" style="margin-top:0px">GENDER: <span style="color:rgb(23, 138, 8); ">{{$userinfo->gender}}</span></p>
               </div>
               <div class="col-xs-4" style="margin-bottom: 30px">
                  <p class="each-tab-title" style="margin-top:0px">PHONE: <span style="color:rgb(23, 138, 8); ">{{$userinfo->phone}}</span></p>
               </div>
               <div class="col-xs-4" style="margin-bottom: 30px">
                  <p class="each-tab-title" style="margin-top:0px">EMAIL: <span style="color:rgb(23, 138, 8); ">{{$userinfo->email}}</span></p>
               </div>
               <div class="col-xs-4" style="margin-bottom: 30px">
                  <p class="each-tab-title" style="margin-top:0px">ADDRESS: <span style="color:rgb(23, 138, 8); ">{{$userinfo->address}}</span></p>
               </div>
               <div class="col-xs-4" style="margin-bottom: 30px">
                  <p class="each-tab-title" style="margin-top:0px">LANGUAGE: <span style="color:rgb(23, 138, 8); ">{{$userinfo->language}}</span></p>
               </div>
               <div class="col-xs-4" style="margin-bottom: 30px">
                  <p class="each-tab-title" style="margin-top:0px">PROVIDER: <span style="color:rgb(23, 138, 8); ">{{$userinfo->provider}}</span></p>
               </div>
               <div class="col-xs-4" style="margin-bottom: 30px">
                  <p class="each-tab-title" style="margin-top:0px">MEDICAL#: <span style="color:rgb(23, 138, 8); ">{{$userinfo->medicalnum}}</span></p>
               </div>
               <div class="col-xs-4" style="margin-bottom: 30px">
                  <p class="each-tab-title" style="margin-top:0px">INSURANCE PROVIDER: <span style="color:rgb(23, 138, 8); ">{{$userinfo->medicalrelease}}</span></p>
               </div>
               <div class="col-xs-4" style="margin-bottom: 30px">
                  <p class="each-tab-title" style="margin-top:0px">PATIENT SIGNATURE: <span style="color:rgb(23, 138, 8); ">{{$userinfo->firstsign}}</span></p>
                  <img src="/signature/{{$userinfo->firstsign}}">
               </div>
               <div class="col-xs-4" style="margin-bottom: 30px">
                  <p class="each-tab-title" style="margin-top:0px">UNDER 18 YEARS OLD PARENT CONSENT:<span style="color:rgb(23, 138, 8); ">{{$userinfo->test}}</span> , <span style="color:rgb(23, 138, 8); ">{{$userinfo->exam}}</span></p>
               </div>
               <div class="col-xs-4" style="margin-bottom: 30px">
                  <p class="each-tab-title" style="margin-top:0px">PATIENT/GUARDIAN SIGNATURE:<span style="color:rgb(23, 138, 8); ">{{$userinfo->secondsign}}</span></span></p>
                  <img src="/signature/{{$userinfo->secondsign}}">
               </div>
               <div class="col-xs-3" style="margin-bottom: 30px">
                  <p class="each-tab-title" style="margin-top:0px">Front of Drivers License:<span style="color:rgb(23, 138, 8); "></span></span></p>
                  @if(!empty($userinfo->front_driving_licence_document))
                  <img src="{{ asset($userinfo->front_driving_licence_document) }}" class="document-look">
                  @else
                  Not available
                  @endif
               </div>
               <!--  <div class="col-xs-3" style="margin-bottom: 30px">
                  <p class="each-tab-title" style="margin-top:0px">Rear of Drivers License:<span style="color:rgb(23, 138, 8); "></span></span></p>
                  @if(!empty($userinfo->rear_driving_licence_document))
                  <img src="{{ asset($userinfo->rear_driving_licence_document) }}" class="document-look">
                  @else
                  Not available
                  @endif
                  
                  
                  </div> -->
               @if($userinfo->do_insurance_certificate)
               <div class="col-xs-3" style="margin-bottom: 30px">
                  <p class="each-tab-title" style="margin-top:0px">Front of Insurance certificate:<span style="color:rgb(23, 138, 8); "></span></span></p>
                  @if(!empty($userinfo->front_licence_certificate_document))
                  <img src="{{ asset($userinfo->front_licence_certificate_document) }}" class="document-look">
                  @else
                  Not available
                  @endif
               </div>
               <div class="col-xs-3" style="margin-bottom: 30px">
                  <p class="each-tab-title" style="margin-top:0px">Rear of Insurance certificate:<span style="color:rgb(23, 138, 8); "></span></span></p>
                  @if(!empty($userinfo->rear_licence_certificate_document))
                  <img src="{{ asset($userinfo->rear_licence_certificate_document) }}" class="document-look">
                  @else
                  Not available
                  @endif
               </div>
               @endif
            </div>
            <div class="alert alert-warning" role="alert" id="check_state"> <strong>Warning!</strong> Please select state of patient correctly</div>
            <div class="alert alert-success" role="alert" id="success_save"> <strong>Well done!</strong> Information saved successfully </div>
            <div class="alert alert-success" style="display: none;" role="alert" id="send_sms_alert"></div>
            <div class="alert alert-danger" style="display: none;" role="alert" id="send_sms_danger"></div>
            <div class="row col-xs-12" style="margin-bottom: 15px;display:flex;">
               <div class="col-xs-2">
                  <p class="each-tab-title">Covid Code:</p>
               </div>
               <div class="col-xs-8">
                  <select class="form-control" id="add_covidcode">
                     <option value=""></option>
                     @foreach($code as $Code)
                     <option value="{{$Code->id}}" <?php if($userinfo->code == $Code->name){ echo "selected"; } ?>>{{$Code->name}}</option>
                     @endforeach
                  </select>
               </div>
               <div class="col-xs-1">
                  <button type="button" class="btn btn-primary waves-effect waves-light" data-id={{$userinfo->id}} onclick="SaveState(this)">Save</button>
               </div>
               
            </div>
            <div class="row col-xs-12" style="margin-bottom: 30px;">
                <div class="col-xs-2">
                  <p class="each-tab-title">RESULT:</p>
                </div>
                <div class="col-xs-8">
                  <select class="form-control" id="add_state">
                      <option value=""></option>
                      <option value="Negative" <?php if($userinfo->state == 'Negative'){ echo "selected"; } ?>>Negative</option>
                      <option value="Positive" <?php if($userinfo->state == 'Positive'){ echo "selected"; } ?>>Positive</option>
                  </select>
                </div>
                <div class="col-xs-1">
                  <button type="button" class="btn btn-success waves-effect waves-light" data-id = {{$userinfo->id}} onclick="ReplyFunction(this)">TEXT</button>
                </div>
                <div class="col-xs-1">
                    <a href="{{ route('home') }}?id=0" class="btn waves-effect waves-light">Return to List</a>
                </div>
            </div>
            <div class="row col-xs-12" style="margin-bottom: 15px;display:flex;">
               <div class="col-xs-2">
                  <p class="each-tab-title">Second Code:</p>
               </div>
               <div class="col-xs-8">
                  <select class="form-control" id="add_second_covidcode">
                     <option value="undefined"></option>
                     @foreach($code as $Code)
                     <option value="{{$Code->id}}" <?php if($userinfo->second_code == $Code->name){ echo "selected"; } ?>>{{$Code->name}}</option>
                     @endforeach
                  </select>
               </div>
               <div class="col-xs-1">
                  <button type="button" class="btn btn-primary waves-effect waves-light" data-id={{$userinfo->id}} onclick="SaveSecondState(this)">Save</button>
              </div>
              
            </div>
            <div class="row col-xs-12" style="margin-bottom: 30px;">
               <div class="col-xs-2">
                  <p class="each-tab-title">RESULT:</p>
               </div>
               <div class="col-xs-8">
                  <select class="form-control" id="add_state">
                     <option value=""></option>
                     <option value="Negative" <?php if($userinfo->state == 'Negative'){ echo "selected"; } ?>>Negative</option>
                     <option value="Positive" <?php if($userinfo->state == 'Positive'){ echo "selected"; } ?>>Positive</option>
                  </select>
               </div>
               <div class="col-xs-1">
                  <button type="button" class="btn btn-success waves-effect waves-light" data-id = {{$userinfo->id}} onclick="ReplyFunction(this)">TEXT</button>
               </div>
               <div class="col-xs-1">
                  <a href="{{ route('home') }}?id=0" class="btn waves-effect waves-light">Return to List</a>
               </div>
            </div>
            <div class="col-xs-12" style="display:flex; justify-content:flex-end">
            </div>
         </div>
      </div>
   </div>
</div>
</div><!--/#wrapper -->
<script>
   function SaveState(elem) {
     var id    = $(elem).attr('data-id');
    //  var state = $("#add_state") .val();
     var code  = $('#add_covidcode').val();
    //  var second_code = $('#add_second_covidcode').val();
     
     if(code == "") {
       $("#check_state").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
     }
     $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
       $.ajax({
         url: '/updatestate',
         method: 'post',
         data: {
           id: id,
          //  state: state,
           code : code,
          //  second_code : second_code
         },
         dataType: false,
         success: function(data) {
           if(data.data == 1) {
             $("#success_save").delay(5).fadeIn('slow').delay(3000).fadeOut('slow');
           }
         }
       });
   }
   
   
   
   function ReplyFunction(elem) {
     var id = $(elem).attr('data-id');
     var state = $("#add_state") .val();
     console.log(state);
     if(state == "") {
       $("#check_state").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
       return false;
     }
     $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
   
       $.ajax({
         url: '/submitmail',
         method: 'post',
         data: {
           id: id,
           state: state
         },
         dataType: 'json',
   
         success: function(data) {
           if(data.status == 200) {
             $("#send_sms_alert").show();
             $("#send_sms_alert").html('<strong>Well done!</strong> SMS Sent successfully.');
             $("#send_sms_alert").delay(5).fadeIn('slow').delay(3000).fadeOut('slow');
             // $("#send_sms_alert").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
   
            //  setTimeout(function() {
            //    window.location.href="{{ route('billing-admin.login') }}"
            //  }, 2000);
   
           } else {
             $("#send_sms_danger").show();
             $("#send_sms_danger").html(data.msg);
           }
   
         }
   
       });
   
   }
   
   function SaveSecondState (elem) {
      var id    = $(elem).attr('data-id');
      var second_code = $('#add_second_covidcode').val();
     
     if(second_code == "") {
       $("#check_state").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
     }
      $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
       $.ajax({
         url: '/savesecondstate',
         method: 'post',
         data: {
           id: id,
           second_code : second_code
         },
         dataType: false,
         success: function(data) {
           if(data.data == 1) {
             $("#success_save").delay(5).fadeIn('slow').delay(3000).fadeOut('slow');
           }
         }
       });
   }



</script>
@endsection