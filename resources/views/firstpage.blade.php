@extends('layout.index')

@section('content')

<style type="text/css">
  .document_area {
    height: 150px;
    border: 2px solid #1d84df;
    padding: 10px;
    margin-right: 9px;
    cursor: pointer;
    
  }
  .w-24 {
    width: 24%;
  }

  @media only screen and (max-width: 600px) {
    .w-24 {
      width: 100%;
    }
  }

</style>
<header class="fixed-header">

	<div class="header-top">

		<div class="container">

			<div class="pull-left">

				<a href="javascript:;" class="logo"><i class="ico mdi mdi-cube-outline"></i> COVID TEST REGISTRATION</a>

			</div>

			<div class="pull-right mr-5">

			    <img src="assets/images/logo.png" class="h-logo" />

			</div>

		</div>

	</div>

</header>

<!-- /.fixed-header -->



<div id="wrapper">

	<div class="container-fluid" style="padding-right: 350px; padding-left: 350px">

      {{-- <h1 class="basic-title">EVENT SUPERBILL</h1> --}}

     

      



      <div class="box-content">

        

        <div class="col-md-12 each-tab" style="margin-top:10px; margin-bottom: 20px">

          <h3 class="each-tab-title">Event:</h3>

          <select class="form-control" id="category_select">

            @foreach($catelist as $Category)

            <option value="{{$Category->id}}">{{$Category->name}}</option>

            @endforeach

          </select>

        </div>

        <div class="today-date">

          <p class="each-date">DATE: <span id="year"></span></p>

        </div>

        <div class="sm-title">

          <h2 class="basic-title">PATIENT INFORMATION</h2>

        </div>

        <div class="row col-xs-12 col-md-12">

            <div class="col-md-4 each-tab" style="margin-top:10px">

              <p class="each-tab-title">NAME:</p>

              <input type="text" class="form-control" maxlength="250" name="defaultconfig" id="user_name" />

            </div>



            <div class="col-md-4 each-tab date-birth">

              <p class="each-tab-title" >DATE OF BIRTH:</p>

              <div class="input-group" style="width: 70%; margin-top:10px">

                <input type="text" class="form-control" placeholder="MM/DD/YYYY" id="date">

                <span class="input-group-addon bg-primary text-white"><i class="fa fa-calendar"></i></span>

              </div>

            </div>



            <div class="col-md-4 each-tab" style="margin-top:10px">

              <p class="each-tab-title">GENDER:</p>

              <select class="form-control" id="user_getder">

                <option value=""></option>

                <option value="Male">Male</option>

                <option value="Female">Female</option>

              </select>

            </div>

        </div>



        <div class="row col-xs-12 col-md-12" style="margin-top:50px">

          <div class="col-md-4 each-tab" style="margin-top:10px">

            <p class="each-tab-title" >PHONE:</p>

            <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="user_phone" />

          </div>



          <div class="col-md-8 each-tab" style="margin-top:10px">

            <p class="each-tab-title">EMAIL:</p>

            <input type="text" class="form-control"  name="defaultconfig" id="user_email" />

          </div>

        </div>



        <div class="row col-xs-12 col-md-12" style="margin-top:50px">

          <div class="each-tab">

            <p class="each-tab-title">ADDRESS:</p>

            <input type="text" class="form-control"  name="defaultconfig" id="user_address" />

          </div>

        </div>



        <div class="row col-xs-12 col-md-12" style="margin-top:50px">

          <div class="each-tab">

            <p class="each-tab-title">PREFERRED LANGUAGE:</p>

            <select class="form-control" id="user_language" style="margin-top:10px">

              <!--<option value=""></option>-->

              <option value="English">English</option>

              <option value="Spanish">Spanish</option>

              <option value="French">French</option>

            </select>

          </div>

        </div>



        <div class="row col-xs-12 col-md-12" style="margin-top:50px">

          <div class="col-md-6 each-tab">

            <p class="each-tab-title" style="margin-top:0px">INSURANCE PROVIDER:</p>

            <input type="text" class="form-control"  name="defaultconfig" id="user_provider" />

          </div>



          <div class="col-md-6 each-tab">

            <p class="each-tab-title">MEDICAL#:</p>

            <input type="text" class="form-control"  name="defaultconfig" id="user_medi" />

          </div>

        </div>

        <div class="row col-xs-12 col-md-12" style="margin-top:50px">
          <div class="col-md-6 each-tab">
            <div class="checkbox" style="padding-left: 30px">
              <input type="checkbox" id="do_insurance_certificate" value="1"> <label for="do_insurance_certificate"><p class="each-tab-title" style="margin-top:-2px">Click here if you have insurance</p></label>
            </div>
          </div>
        </div>
        <div class="row col-xs-12 col-md-12" style="margin-top:50px">

          <div class="col-md-3 w-24">
          	<form method="post" enctype="multipart/form-data" id="file_1_form" class="document_form">
	            <input type='file' name="file_1" class="document_file" data-id="1" style="display: none;" />
	        </form>
	        <input type="hidden" name="front_driving_licence_document" id="front_driving_licence_document">
            <div class="document_area" id="front_driving_licence">Click here to upload front of your Drivers License</div>
            <img id="front_driving_licence_img_1">
          </div>

         <!--  <div class="col-md-3 w-24">
          	<form method="post" enctype="multipart/form-data" id="file_2_form" class="document_form">
	            <input type='file' name="file_2" class="document_file" data-id="2" style="display: none;" />
	        </form>
	        <input type="hidden" name="rear_driving_licence_document" id="rear_driving_licence_document">
            <div class="document_area" id="rear_driving_licence">Click here to upload rear of your Drivers License</div>
            <img id="front_driving_licence_img_2">
          </div> -->

          <div class="col-md-3 w-24 do_insurance_certificate" style="display: none;">
          	<form method="post" enctype="multipart/form-data" id="file_3_form" class="document_form">
	            <input type='file' name="file_3" class="document_file" data-id="3" style="display: none;" />
	        </form>
            <input type="hidden" name="front_licence_certificate_document" id="front_licence_certificate_document">
            <div class="document_area" id="front_licence_certificate">Click here to upload front of you Insurance certificate</div>
            <img id="front_driving_licence_img_3">
          </div>

          <div class="col-md-3 w-24 do_insurance_certificate" style="display: none;">
          	<form method="post" enctype="multipart/form-data" id="file_4_form" class="document_form">
	            <input type='file' name="file_4" class="document_file" data-id="4" style="display: none;" />
	        </form>
            <input type="hidden" name="rear_licence_certificate_document" id="rear_licence_certificate_document">
            <div class="document_area" id="rear_licence_certificate">Click here to upload rear of you Insurance certificate</div>
            <img id="front_driving_licence_img_4">
          </div>

        </div>



        <div class="row col-xs-12 col-md-12" style="margin-top:50px">

          <div class="each-tab ">

            <div class="checkbox" style="padding-left: 30px">

              <input type="checkbox" id="chk-3"> <label for="chk-3"><p class="each-tab-title" style="margin-top:-2px">INSURANCE PROVIDER: <span style="font-weight: 100;">THE PATIENT ABOVE AGREES THAT VIRTUAL HEARING SOLUTIONS MAY SHARE RESULTS TO EVENT ORGANIZER FROM - RCS Sports</span></p></label>

            </div>

          </div>

        </div>



        <div class="row col-xs-12 col-md-12" style="margin-top:50px">

          <div class="col-md-12 each-tab">

            <div class="container">

              <div class="row">

                <div class="col-sm-3">

                  <p class="each-tab-title" style="margin-top:0px">PATIENT SIGNATURE:</p>

                </div>

                <div class="col-sm-9">

                  <div id="sig_patient"></div>

                  <textarea id="signature_patient" name="signed" style="display: none"></textarea>

                  <p>Use your mouse or finger to sign here</p>

                  <button id="sig_p_clear" class="btn btn-primary" style="margin-top:20px;">Clear</button>

                </div>

              </div>

            </div>

          </div>

        </div>



        <div class="row col-xs-12 col-md-12" style="margin-top:50px">

          <div class=" " style="border-top: solid 2px; padding-left: 30px">

            <p class="each-tab-title" style="margin-top:10px">UNDER 18 YEARS OLD PARENT CONSENT:</p>

            <div class="checkbox"><input type="checkbox" id="checkbox-1"><label for="checkbox-1"><p class="each-tab-title" style="margin-top:-2px"><span style="font-weight: 100;">I UNDERSTAND I NEED TO SIGN THIS BEFORE MY CHILD CAN BE TESTED.</span></p></label></div>

            <div class="checkbox purple"><input type="checkbox" id="checkbox-7" ><label for="checkbox-7"><p class="each-tab-title" style="margin-top:-2px"><span style="font-weight: 100;">GIVE CONSENT TO VHS AND ITS EMPLOYEES AND/OR CONTRACTOR TO EXAMINE AND TEST MY CHILD.</span></p></label></div>

          </div>

        </div>



        <div class="row col-xs-12 col-md-12" style="margin-top:50px">

          <div class="col-md-12 each-tab">

            <div class="container">

              <div class="row">

                <div class="col-sm-3">

                  <p class="each-tab-title" style="margin-top:0px">PATIENT/GUARDIAN SIGNATURE:</p>

                </div>

                <div class="col-sm-9">

                  <div id="sig"></div>

                  <textarea id="signature64" name="signed" style="display: none"></textarea>

                  <p>Use your mouse or finger to sign here</p>

                  <button id="sig_clear" class="btn btn-primary" style="margin-top:20px;">Clear</button>

                </div>

              </div>

            </div>

          </div>

        </div>



        <div class="row col-xs-12 col-md-12" style="margin-top:50px">

          <div class="col-md-6"></div>

          <div class=" col-md-6 each-tab " style="display:flex;     justify-content: flex-end;">

            <ul class="list-inline">

              <li class="margin-bottom-10"><button type="button" class="btn btn-success btn-rounded waves-effect waves-light submit_btn" onclick="SaveFunction()">SUBMIT</button></li>

            </ul>

          </div>

        </div>

      </div>
      <div class="alert alert-warning" role="alert" id="check_again"> <strong>Warning!</strong> Please check  "THE PATIENT ABOVE AGREES THAT VIRTUAL HEARING SOLUTIONS MAY SHARE RESULTS TO EVENT ORGRNIZERS FROM" </div>

      <div class="alert alert-success" role="alert" id="success_submit"> <strong>Well done!</strong> You successfully sent all informations. </div>

	</div>

</div><!--/#wrapper -->



<div class="modal fade" id="boostrapModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

	<div class="modal-dialog" role="document">

		<div class="modal-content">

			<div class="modal-header">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

				<h4 class="modal-title" id="myModalLabel" style="color: #fb7474">Warning</h4>

			</div>

			<div class="modal-body">

				<p style="font-size: 16px">Please check all fields again and try submitting. You must write all information correctly.</p>

			</div>

			<div class="modal-footer" >

				<button type="button" class="btn btn-default btn-sm waves-effect waves-light" data-dismiss="modal">Close</button>

			</div>

		</div>

	</div>

</div>







<script>

  var sig   = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});

  var sig_p = $('#sig_patient').signature({syncField: '#signature_patient', syncFormat: 'PNG'});

  $('#sig_clear').click(function(e) {

      e.preventDefault();

      sig.signature('clear');

      $("#signature64").val('');

  });

  $('#sig_p_clear').click(function(e) {

      e.preventDefault();

      sig_p.signature('clear');

      $("#signature_patient").val('');

  });

  var d = new Date();

  var month = d.getMonth()+1;

  var day = d.getDate();

  var output = d.getFullYear() + '/' +

      (month<10 ? '0' : '') + month + '/' +

      (day<10 ? '0' : '') + day;

  document.getElementById("year").innerHTML = output;

  $('.document_area').on('click', function(){
    $(this).parent().find('input[type="file"]').click();
  });



</script>

<script>
  $("#date").keyup(function(){
      if ($(this).val().length == 2){
          $(this).val($(this).val() + "/");
      }else if ($(this).val().length == 5){
          $(this).val($(this).val() + "/");
      }
  });
function isValidDate(dateString)
{
    // First check for the pattern
    if(!/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(dateString))
        return false;

    // Parse the date parts to integers
    var parts = dateString.split("/");
    var day = parseInt(parts[1], 10);
    var month = parseInt(parts[0], 10);
    var year = parseInt(parts[2], 10);

    // Check the ranges of month and year
    if(year < 1000 || year > 3000 || month == 0 || month > 12)
        return false;

    var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];

    // Adjust for leap years
    if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
        monthLength[1] = 29;

    // Check the range of the day
    return day > 0 && day <= monthLength[month - 1];
};

  function readURL(input, image_id) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          
          reader.onload = function (e) {
              $('#front_driving_licence_img_'+image_id).attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
      }
  }
  $(".document_file").change(function(){
  	var id = $(this).data('id');
      readURL(this, id);

      $('#file_'+id+'_form').submit();
  });

  $('#do_insurance_certificate').change(function() {
    if(this.checked) {
      $('.do_insurance_certificate').show();
    } else {
      $('.do_insurance_certificate').hide();
    }
  });

  $('.document_form').submit(function(e) {
  	e.preventDefault();

  	var formdata = new FormData($(this)[0]);
  	$.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });

        $.ajax({

          url: '{{ route("post-document") }}',

          method: 'post',

          data: formdata,

          dataType: 'json',

          processData: false,
		  contentType: false,

          success: function(data) {

            if(data.status == 'success') {
            	$('#'+data.file).val(data.path);
            }

          }

        });
  });

  function SaveFunction() {


      var name = "";

      var birth = "";

      var gender = "";

      var phone = "";

      var email = "";

      var address = "";

      var language = "";

      var provider = "";

      var medical = "";

      var check_one = "";

      var sign_p = "";

      var check_two = "";

      var check_three = "";

      var sign_m = "";

      var date = "";

      var selected_cateogry = "";
      var front_driving_licence_document = $('#front_driving_licence_document').val();
      // var rear_driving_licence_document = $('#rear_driving_licence_document').val();
      var rear_driving_licence_document = '';
      var front_licence_certificate_document = $('#front_licence_certificate_document').val();
      var rear_licence_certificate_document = $('#rear_licence_certificate_document').val();



      name = $("#user_name").val();

      birth = $("#date").val();

      gender = $("#user_getder") .val();

      phone = $("#user_phone") .val();

      email = $("#user_email") .val();

      address = $("#user_address") .val();

      language = $("#user_language") .val();

      provider = $("#user_provider") .val();

      medical = $("#user_medi") .val();

      check_one =  $('#chk-3').is(':checked');

      do_insurance_certificate =  $('#do_insurance_certificate').is(':checked');

      sign_p = $("#signature_patient") .val();

      check_two =  $('#checkbox-1').is(':checked');

      check_three =  $('#checkbox-7').is(':checked');

      sign_m = $("#signature64").val();

      date = $('#year').text();

      selected_cateogry = $('#category_select').val();

   

      

      // if( name == "" || birth == "" || gender == "" || phone == "" || email == "" || address == "" ||  language == "" || provider == "" || medical == "" || sign_p == "" || front_driving_licence_document == "" || rear_driving_licence_document == "" || front_licence_certificate_document == "" || rear_licence_certificate_document == "" || check_one == false) {

        if( name == "" || birth == "" || gender == "" || phone == "" || email == "" || address == "" ||  language == "" || provider == "" || medical == "" || sign_p == "" || front_driving_licence_document == ""  || check_one == false) {



            $('#boostrapModal-1').modal('show');

      } else if(!isValidDate(birth)) {
        alert("Please insert correct birthday!")
      }

      else {

      	$('.submit_btn').html('...');

        if(check_two == false) {

          check_two = "null";

        }

        if(check_three == false) {

          check_three = "null";

        }

        if(sign_m == null) {

          sign_m = 'Not set';

        }

        console.log(sign_m)

        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });

        $.ajax({

          url:'/submit',

          method: 'post',

          data: {

            name: name,

            birth: birth,

            gender: gender,

            phone: phone,

            email: email,

            address: address,

            language: language,

            provider: provider,

            medical: medical,

            check_one: check_one,

            check_two: check_two,

            check_three: check_three,

            date: date,

            category:selected_cateogry,

            sign_p : sign_p,

            sign_m : sign_m,

            front_driving_licence_document : front_driving_licence_document,
            rear_driving_licence_document : rear_driving_licence_document,
            front_licence_certificate_document : front_licence_certificate_document,
            rear_licence_certificate_document : rear_licence_certificate_document,
            do_insurance_certificate : do_insurance_certificate

          },

          dataType: false,

          success: function(data) {

            if(data.data == 1) {

              $("#success_submit").delay(5).fadeIn('slow').delay(2500).fadeOut('slow');

              setTimeout(function() {
              	window.location.href = "/firstpage"
              }, 3000);

            }

          }

        });

      }   

  }



</script>

@endsection