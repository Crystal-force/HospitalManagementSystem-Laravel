<!DOCTYPE html>
<html>
<head>
    <title>PDF</title>
</head>

<body style="line-height: 1.0;">
    <h4 class="pdf-title"style="text-align:center">Patient Information</h4>
    <p><span >Invoice #: </span>{{$data->id}}</p>
    <p><span >Created: </span>{{$data->date}}</p>
    <p><span >Category: </span>{{$category_name->name}}</p>
    <p><span >NAME: </span>{{$data->name}}</p>
    <p><span >DATE OF BIRTH: </span>{{$data->birthday}}</p>
    <p><span >GENDER: </span>{{$data->gender}}</p>
    <p><span >PHONE: </span>{{$data->phone}}</p>
    <p><span >EMAIL: </span>{{$data->email}}</p>
    <p><span >ADDRESS: </span>{{$data->address}}</p>
    <p><span >PREFERRED LANGUAGE: </span>{{$data->language}}</p>
    <p><span >INSURANCE PROVIDER: </span>{{$data->provider}}</p>
    <p><span >MEDICAL#: </span>{{$data->medicalnum}}</p>
    <p><span >INSURANCE PROVIDER#: </span>{{$data->medicalrelease}}</p>
    <p >Front of Drivers License:</p>
    @if(!empty($data->front_driving_licence_document))
    @php
    $sps = explode(".", $data->front_driving_licence_document);
    $image_type = $sps[count($sps) - 1];
    @endphp
    <img src="data:image/{{ $image_type }};base64, {{ base64_encode(file_get_contents(public_path($data->front_driving_licence_document))) }}" class="document-look" width="200" />
    @else
    Not available
    @endif
    <br/>
    <p >Front of Insurance certificate:</p>
    @if(!empty($data->front_licence_certificate_document))
    @php
    $sps = explode(".", $data->front_licence_certificate_document);
    $image_type = $sps[count($sps) - 1];
    @endphp
    <img src="data:image/{{ $image_type }};base64, {{ base64_encode(file_get_contents(public_path($data->front_licence_certificate_document))) }}" class="document-look" width="200" />
    @else
    <p class="pdf-sm-title"><span></span>Not available</p>
    @endif
    <br/>
    <p >Rear of Insurance certificate:</p>
    @if(!empty($data->rear_licence_certificate_document))
    @php
    $sps = explode(".", $data->rear_licence_certificate_document);
    $image_type = $sps[count($sps) - 1];
    @endphp
    <img src="data:image/{{ $image_type }};base64, {{ base64_encode(file_get_contents(public_path($data->rear_licence_certificate_document))) }}" class="document-look" width="200" />
    @else
    <p class="pdf-sm-title"><span></span>Not available</p>
    @endif
    <br/>

    <p >PATIENT SIGNATURE: </p>
    @if(!empty($data->firstsign))
    @php
    $sps = explode(".", $data->firstsign);
    $image_type = $sps[count($sps) - 1];
    @endphp
    <img src="data:image/{{ $image_type }};base64, {{ base64_encode(file_get_contents(public_path('signature/'.$data->firstsign))) }}" class="document-look" width="200" />
    @else
    Not available
    @endif

    <p >UNDER 18 YEARS OLD PARENT CONSENT:</p>
    <p><span style="font-size: 10px">I UNDERSTAND I NEED TO SIGN THIS BEFORE MY CHILD CAN BE TESTED: </span>{{$data->test}}</p>
    <p><span style="font-size: 10px">GIVE CONSENT TO VHS AND ITS EMPLOYEES AND/OR CONTRACTOR TO EXAMINE AND TEST MY CHILD: </span>{{$data->exam}}</p>

    <p >PATIENT/GUARDIAN SIGNATURE: </p>
    @if(!empty($data->secondsign))
    @php
    $sps = explode(".", $data->secondsign);
    $image_type = $sps[count($sps) - 1];
    @endphp
    <img src="data:image/{{ $image_type }};base64, {{ base64_encode(file_get_contents(public_path('signature/'.$data->secondsign))) }}" class="document-look" width="200" />
    @else
    Not available
    @endif
    <br/>
    <p><span >State: </span>{{$data->state}}</p>
    <p><span >Code: </span>{{$data->code}}</p>
    <p><span >Second Code: </span>{{$data->second_code}}</p>
</body>
</html>