@extends('layout.index')

@section('content')
<style type="text/css">
	.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<header class="fixed-header">



  <div class="header-top">



    <div class="container">



      <div class="pull-left">



        <a href="javascript:;" class="logo"><i class="ico mdi mdi-cube-outline"></i>COVID TEST Biller Admin</a>



       



      </div>



      <div class="pull-right">



          <img src="{{ asset('assets/images/logo.png') }}" class="h-logo mb-1" style="margin-bottom: 10px;" />



        <div class="ico-item hidden-on-desktop">



          <button type="button" class="menu-button js__menu_button fa fa-bars waves-effect waves-light"></button>



        </div>



        



        <div class="ico-item">



          <a href="#" class="ico-item mdi mdi-bell notice-alarm js__toggle_open" data-target="#notification-popup"><span class="notificaion-icon">4</span></a>



          <div id="notification-popup" class="notice-popup js__toggle" data-space="55">



            <h2 class="popup-title">Your Notifications</h2>



            <div class="content">



              <ul class="notice-list">



                <li>



                  <a href="#">



                    <span class="avatar"><img src="{{ asset('assets/images/avatar-sm-1.jpg') }}" alt=""></span>



                    <span class="name">John Doe</span>



                    <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>



                    <span class="time">10 min</span>



                  </a>



                </li>



                <li>



                  <a href="#">



                    <span class="avatar"><img src="{{ asset('assets/images/avatar-sm-2.jpg') }}" alt=""></span>



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



        



        <div class="ico-item">



          <a href="javascript:;" class="ico-item mdi mdi-logout-variant js__toggle_open" data-target="#user-status"></a>



          <div id="user-status" class="user-status js__toggle">



            <a href="javascript:;" class="avatar"><img src="{{ asset('assets/images/person-1824144_1280.png') }}" alt=""><span class="status online"></span></a>



            <h5 class="name"><a href="javascript:;">{{ \Session::get('billing-login') }}</a></h5>



            <h5 class="position">Biller</h5>



          



            <div class="control-items">



              {{-- <div class="control-item"><a href="#" title="Settings"><i class="fa fa-gear"></i></a></div> --}}



              <div class="control-item">



                  <a class="dropdown-item" href="{{ route('billing-admin.logout') }}">



                      {{ __('Logout') }}



                  </a>



              </div>



            </div>



          </div>



        </div>



      </div>



    </div>



  </div>



  @include('billing-admin.component.admin-menu')



</header>

<div id="wrapper">



	<div class="container-width">



		<div class="row small-spacing">



			<div class="col-xs-12">



				<div class="box-content " style="overflow-x: scroll">



          



					<table id="example" class="table table-striped table-bordered display" style="width:100%">



						<thead>



							<tr>



							    <th style="text-align:center; width: 63px">Mark as Billed</th>



								<th style="text-align:center">Date</th>



								<th style="text-align:center">Name</th>



								<th style="text-align:center">Birthday</th>



								<th style="text-align:center">Gender</th>



								<th style="text-align:center">Phone</th>



								<th style="text-align:center; width: 100px">email</th>



								<th style="text-align:center">address</th>



								<th style="text-align:center">language</th>



								<th style="text-align:center">provider</th>



								<th style="text-align:center">medical#</th>



								<th style="width: 5px; text-align:center">medical release</th>



								<th style="width: 5px; text-align:center">medical release sign</th>



								<th style="text-align:center">test</th>



								<th style="text-align:center">exam</th>



								<th style="text-align:center">last sign</th>



								<th style="text-align:center; width: 5px">Result</th>



								<th style="text-align:center; width: 5px">Covid Code</th>



								<th style="text-align:center; width: 5px">Second Code</th>



							</tr>



						</thead>







            <tbody>



              @foreach($all_data as $AllData)



							<tr>



							    <td style="text-align:center">
							    	<label class="switch">
									  <input type="checkbox" class="billed_patient" data-id="{{ $AllData->id }}" {{ ($AllData->billed == 1) ? 'checked' : '' }}>
									  <span class="slider round"></span>
									</label>
							    </td>



								<td style="text-align:center">{{$AllData->date}}</td>



								<td style="text-align:center">{{$AllData->name}}</td>



								<td style="text-align:center">{{$AllData->birthday}}</td>



								<td style="text-align:center">{{$AllData->gender}}</td>



								<td style="text-align:center">{{$AllData->phone}}</td>



								<td style="text-align:center">{{$AllData->email}}</td>



								<td style="text-align:center">{{$AllData->address}}</td>



                <td style="text-align:center">{{$AllData->language}}</td>



                <td style="text-align:center">{{$AllData->provider}}</td>



                <td style="text-align:center">{{$AllData->medicalnum}}</td>



                <td style="text-align:center">{{$AllData->medicalrelease}}</td>



                <td style="text-align:center">{{$AllData->firstsign}}</td>



                <td style="text-align:center">{{$AllData->test}}</td>



                <td style="text-align:center">{{$AllData->exam}}</td>



                <td style="text-align:center">{{$AllData->secondsign}}</td>



                <td style="text-align:center">{{$AllData->state}}</td>



                <td style="text-align:center">{{$AllData->code}}</td>



                <td style="text-align:center">{{$AllData->second_code}}</td>



							</tr>



              @endforeach



						</tbody>



					</table>



				</div>



			</div>



		</div>



	</div>



</div><!--/#wrapper -->

@endsection('content')

@section('bottom-js')
<script type="text/javascript">

	$.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

	$('.billed_patient').on('click', function() {
		var id = $(this).data('id');

		$.ajax({
	        url: '{{ route("billing-admin.make-billed") }}',
	        method: 'post',
	        data: {
	          id: id
	        },
	        dataType: 'json',
	        success: function(data) {
	          if(data.status == 200) {
	            alert(data.msg);
	          }
	        }
	      });
	});
</script>
@endsection