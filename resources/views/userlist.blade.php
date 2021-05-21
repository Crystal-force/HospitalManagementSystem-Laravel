@extends('layout.index')



@section('content')

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

        

        <div class="ico-item">

          <a href="#" class="ico-item mdi mdi-bell notice-alarm js__toggle_open" data-target="#notification-popup"><span class="notificaion-icon">4</span></a>

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

        

        <div class="ico-item">

          <a href="javascript:;" class="ico-item mdi mdi-logout-variant js__toggle_open" data-target="#user-status"></a>

          <div id="user-status" class="user-status js__toggle">

            <a href="javascript:;" class="avatar"><img src="assets/images/person-1824144_1280.png" alt=""><span class="status online"></span></a>

            <h5 class="name"><a href="javascript:;">{{ Auth::user()->name }}</a></h5>

            <h5 class="position">Administrator</h5>

          

            <div class="control-items">

              {{-- <div class="control-item"><a href="#" title="Settings"><i class="fa fa-gear"></i></a></div> --}}

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

  @include('component.admin-menu')

</header>



<div id="wrapper">

	<div class="container-width">

		<div class="row small-spacing">

			<div class="col-xs-12">

				<div class="box-content " style="overflow-x: scroll">

          <div style="display: flex; border-bottom:solid 1px #ccc; margin-bottom: 15px">

            <h4 class="box-title" style="margin-top:16px; margin-right: 15px">Total Patients: <span>{{$usercount}}</span></h4>

            <div class="form-group margin-bottom-20">

              

            </div>

          </div>

					<table id="example" class="table table-striped table-bordered display" style="width:100%">

						<thead>

							<tr>

								<th style="text-align:center">Name</th>

								<th style="text-align:center">Birthday</th>

								<th style="text-align:center">Gender</th>

								<th style="text-align:center">Phone</th>

								<th style="text-align:center;">email</th>

								<th style="text-align:center">address</th>

								<th style="text-align:center">language</th>

								<th style="text-align:center">provider</th>

							</tr>

						</thead>



            <tbody>

              @foreach($userlist as $UserList)

							<tr>

								<td style="text-align:center">{{$UserList->name}}</td>

								<td style="text-align:center">{{$UserList->birthday}}</td>

								<td style="text-align:center">{{$UserList->gender}}</td>

								<td style="text-align:center">{{$UserList->phone}}</td>

								<td style="text-align:center">{{$UserList->email}}</td>

								<td style="text-align:center">{{$UserList->address}}</td>

                <td style="text-align:center">{{$UserList->language}}</td>

                <td style="text-align:center">{{$UserList->provider}}</td>

							</tr>

              @endforeach

						</tbody>

					</table>

				</div>

			</div>

		</div>

	</div>

</div><!--/#wrapper -->



@if (Auth::check()) 

    <script>

    var timeout = ({{config('session.lifetime')}} * 60000) -10 ;

    setTimeout(function(){

        window.location.reload(1);

    },  timeout);







    </script>

@endif



@endsection