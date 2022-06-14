@extends('layouts.master')
@section('css')
<!-- Internal Nice-select css  -->
<link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet" />
@section('title') الملف-الشخصى  @stop


@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">المستخدمين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ الملف الشخصى
                </span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-lg-12 col-md-12">



        <div class="card">
            <div class="card-body">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('home') }}">رجوع</a>
                    </div>
                </div><br>

                <div class="">

                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6" id="fnWrapper">
                            <label>اسم المستخدم: <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm mg-b-20" value="{{ $user->name }}" readonly
                                data-parsley-class-handler="#lnWrapper" name="name" r type="text">
                        </div>

                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label>البريد الالكتروني: <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm mg-b-20" value="{{ $user->email }}" readonly
                                data-parsley-class-handler="#lnWrapper" name="email" required="" type="email">
                        </div>
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label> حالة العميل <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm mg-b-20" value="{{ $user->Status }}" readonly
                                data-parsley-class-handler="#lnWrapper" name="email" required="" type="text">
                        </div>
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label> صلاحيات العميل <span class="tx-danger">*</span></label>
                            @foreach ( $userRole as  $role )
                                <input class="form-control form-control-sm mg-b-20" value="{{ $role }}" readonly
                                data-parsley-class-handler="#lnWrapper" name="email" required="" type="text">
                            @endforeach
                        </div>

                    </div>



                </div>

            </div>
        </div>
    </div>
</div>




</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')

<!-- Internal Nice-select js-->
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>

<!--Internal  Parsley.min js -->
<script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<!-- Internal Form-validation js -->
<script src="{{URL::asset('assets/js/form-validation.js')}}"></script>
@endsection
