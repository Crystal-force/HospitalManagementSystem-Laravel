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
          <div class="invoice-box">
            <table>
              <tr class="top">
                <td colspan="2">
                  <table>
                    <tr>
                      <td class="title">
                        <a href="#" class="logo personal-info">Patient<span> Information</span></a>
                      </td>
                      <td>
                        Invoice #: {{$patientinfo->id}}<br>
                        Created: {{$patientinfo->date}}<br>
                        Category: {{$category->name}}<br>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr class="information">
                <td colspan="2">
                  <table>
                    <tr>
                      <td>
                        NAME: <br>
                        DATE OF BIRTH: <br>
                        GENDER: <br>
                        PHONE: <br>
                        EMAIL: <br>
                        ADDRESS: <br>
                        PREFERRED LANGUAGE: <br>
                        INSURANCE PROVIDER: <br>
                        MEDICAL#: <br>
                        INSURANCE PROVIDER: <br>
                      </td>
                      <td>
                        {{$patientinfo->name}}<br>
                        {{$patientinfo->birthday}}<br>
                        {{$patientinfo->gender}}<br>
                        {{$patientinfo->phone}}<br>
                        {{$patientinfo->email}}<br>
                        {{$patientinfo->address}} <br>
                        {{$patientinfo->language}} <br>
                        {{$patientinfo->provider}} <br>
                        {{$patientinfo->medicalnum}} <br>
                        {{$patientinfo->medicalrelease}} <br>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr class="heading">
                <td>
                  Insurance
                </td>
                <td>
                </td>
              </tr>
              <tr class="item">
                <td>
                  <p class="each-tab-title" style="margin-top:0px">Front of Drivers License:<span style="color:rgb(23, 138, 8); "></span></span></p>
                </td>
                <td>
                  @if(!empty($patientinfo->front_driving_licence_document))
                  <img src="{{ asset($patientinfo->front_driving_licence_document) }}" class="document-look">
                  @else
                  Not available
                  @endif
                </td>
              </tr>
              <tr class="item">
                <td>
                  <p class="each-tab-title" style="margin-top:0px">Front of Insurance certificate:<span style="color:rgb(23, 138, 8); "></span></span></p>
                </td>
                <td>
                  @if(!empty($patientinfo->front_licence_certificate_document))
                  <img src="{{ asset($patientinfo->front_licence_certificate_document) }}" class="document-look">
                  @else
                  Not available
                  @endif
                </td>
              </tr>
              <tr class="item">
                <td>
                  <p class="each-tab-title" style="margin-top:0px">Front of Insurance certificate:<span style="color:rgb(23, 138, 8); "></span></span></p>
                </td>
                <td>
                  @if(!empty($patientinfo->rear_licence_certificate_document))
                  <img src="{{ asset($patientinfo->rear_licence_certificate_document) }}" class="document-look">
                  @else
                  Not available
                  @endif
                </td>
              </tr>
              <tr class="heading">
                <td>
                  Sign
                </td>
                <td>
                </td>
              </tr>
              <tr class="item">
                <td>
                  PATIENT SIGNATURE: 
                </td>
                <td>
                  @if(!empty($patientinfo->firstsign))
                  <img src="/signature/{{$patientinfo->firstsign}}">
                  @else
                  Not available
                  @endif
                </td>
              </tr>
              <tr class="item">
                <td>
                  UNDER 18 YEARS OLD PARENT CONSENT: 
                </td>
                <td>
                  <p><span class="under-text">I UNDERSTAND I NEED TO SIGN THIS BEFORE MY CHILD CAN BE TESTED: </span>{{$patientinfo->test}}</p>
                  <p><span class="under-text">GIVE CONSENT TO VHS AND ITS EMPLOYEES AND/OR CONTRACTOR TO EXAMINE AND TEST MY CHILD: </span>{{$patientinfo->exam}}</p>
                </td>
              </tr>
              <tr class="item">
                <td>
                  PATIENT/GUARDIAN SIGNATURE:: 
                </td>
                <td>
                  @if(!empty($patientinfo->secondsign))
                  <img src="/signature/{{$patientinfo->secondsign}}">
                  @else
                  Not available
                  @endif
                </td>
              </tr>
              <tr class="heading">
                <td>
                  Result
                </td>
                <td>
                </td>
              </tr>
              <tr class="item">
                <td>
                  State: 
                </td>
                <td>
                  {{$patientinfo->state}}
                </td>
              </tr>
              <tr class="item">
                <td>
                  Code: 
                </td>
                <td>
                  {{$patientinfo->code}}
                </td>
              </tr>
              <tr class="item">
                <td>
                  Second Code: 
                </td>
                <td>
                  {{$patientinfo->second_code}}
                </td>
              </tr>
            </table>
            <div class="text-right margin-top-20">
              <ul class="list-inline">
                <li><a href="{{action('PdfDownloadController@downloadPDF', $patientinfo->id)}}" class="btn btn-default waves-effect waves-light"><i class='mdi mdi-file-pdf'></i> Download</a></li>
                <li><a href="/send-email-pdf?id={{$patientinfo->id}}" class="btn btn-primary waves-effect waves-light">Submit</a></li>
              </ul>
            </div>
          </div>
          <!-- /.invoice-box -->
        </div>
      </div>
   </div>
</div>
</div><!--/#wrapper -->
<script>

</script>
@endsection