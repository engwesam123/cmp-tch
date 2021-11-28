@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
                            <h4 class="content-title mb-0 my-auto">المستخدم</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ تعديل </span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
        <!-- row -->
        <div class="row">
            <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1"> تعديل بيانات المستخدم</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form class="form-horizontal" action="{{route('user.update', $user->id)}}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputName"  value="{{Auth::user()->name}}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"  value="{{$user->email}}">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>تغيير كلمة المرور</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="myInput" placeholder="دخل كلمة المرور الجديدة">
                                <input type="checkbox" onclick="myFunction()"> إظهار كلمة السر
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group mb-0 mt-3 justify-content-end">
                                <div>
                                    <button type="submit" class="btn btn-primary">تعديل</button>
                                </div>
                            </div>
                        </form>
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
<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
@section('js')
@endsection
