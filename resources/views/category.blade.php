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
	<div class="container">
		<div class="row small-spacing">
        <h4 class="box-title page-title">Category Management</h4>
        
        <div class="col-xs-12 page-title">
          <button type="button" class="btn btn-primary btn-rounded waves-effect" data-toggle="modal" data-target="#addTask">+ Add New</button>
        </div>
        
        <div class="col-xs-12">
          @foreach($category as $Category)
          <div class="col-lg-4">
            <div class="box-content">
              <div class="task-lists">
                <a href="#" class="task-item">
                  <div class="title text-info"><h4 class="box-title text-info">{{$Category->name}}</h4></div>
                  <div class="metas">
                    <div class="meta"><i class="fa fa-comment-o ico"></i>14</div>
                  </div>
                </a>
              </div>
              <div class="text-center">
                <button type="button" class="btn btn-primary btn-rounded waves-effect" data-toggle="modal"  onclick="EditCategory(this)" data-id ="{{$Category->id}}">Edit Category</button>
                <button type="button" class="btn btn-rounded waves-effect waves-light" data-remodal-target="remodal" onclick="RemoveCategory(this)" data-id = '{{$Category->id}}'>Remove</button>
              </div>
            </div>
          </div>
          @endforeach
        </div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="editTask" tabindex="-1" role="dialog" aria-labelledby="addTaskLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="addTaskLabel">Edit Category</h4>
			</div>
      <div class='col-xs-12' style="margin-top:10px">
        <div class="alert alert-warning" role="alert" id="edit_category_fualt">
           <strong>Warning!</strong> Please write the category name correctly. 
        </div>
      </div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group"><label for="taskName">Category Name</label><input type="text" id="editcategory" class="form-control"></div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default waves-effect waves-light" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary waves-effect waves-light" onclick="WriteEditCategor()">Save</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="addTaskLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="addTaskLabel">Add New Category</h4>
			</div>
      <div class='col-xs-12' style="margin-top:10px">
        <div class="alert alert-warning" role="alert" id="add_category_fualt">
           <strong>Warning!</strong> Please write the category name correctly. 
        </div>
      </div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group"><label for="taskName">Category Name</label><input type="text" id="categoryname" class="form-control"></div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default waves-effect waves-light" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary waves-effect waves-light" onclick="AddNewCategory()">Save</button>
			</div>
		</div>
	</div>
</div>

<div class="remodal" data-remodal-id="remodal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" style="border-radius: 10px">
	<button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
	<div class="remodal-content">
		<h2 id="modal1Title">Remove Confirm</h2>
		<p id="modal1Desc">
      Are you really going to remove this category? please confirm again.
		</p>
	</div>
	<button data-remodal-action="cancel" class="remodal-cancel" style="border-radius: 30px" onclick="Cancel()">Cancel</button>
	<button data-remodal-action="confirm" class="remodal-confirm"  style="border-radius: 30px" onclick="RemoveConfirm()">OK</button>
</div>

@if (Auth::check()) 
    <script>
    var timeout = ({{config('session.lifetime')}} * 60000) -10 ;
    setTimeout(function(){
        window.location.reload(1);
    },  timeout);



    </script>
@endif

<script>
  function AddNewCategory() {

    var newcategory = $('#categoryname').val();
    if(newcategory == "") {
      $("#add_category_fualt").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
    }

    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $.ajax({
        url: '/addcategory',
        method: 'post',
        data: {
          add_category:newcategory
        },
        dataType: false,
        success: function(data) {
          console.log(data.data);
          if(data.data == 1) {
            location.reload();
          }
        }
      });
  }

  var category_id = "" ;
  function EditCategory(elem) {
    category_id = $(elem).attr('data-id');
   
    if (category_id != "") {
      $('#editTask').modal('show');
    }
  }

  function WriteEditCategor() {
    var edit_category = $('#editcategory').val();
    if(edit_category == "") {
      $("#edit_category_fualt").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
    }
    else {
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

      $.ajax({
        url: '/edit-category',
        method: 'post',
        data: {
          id: category_id,
          editcategory: edit_category
        },
        dataType: false,
        success: function(data) {
          if(data.data == '1') {
            location.reload();
          }
        }
      });
    }
  }

  var remove_id = "";
  function RemoveCategory(elem) {
    remove_id = $(elem).attr('data-id');
    if(remove_id != "") {
      $('.remodal').modal('show');
    }
  }

  function RemoveConfirm() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
      url: '/remove-category',
      method: 'post',
      data: {
        id: remove_id
      },
      dataType: 'json',
      success: function(data) {
        if(data.data == '1') {
          location.reload();
        }
      }
    });    
  }

  function Cancel() {
    $('.remodal').modal('hide');
  }
</script>

@endsection