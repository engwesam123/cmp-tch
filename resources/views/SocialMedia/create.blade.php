@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
                            <h4 class="content-title mb-0 my-auto">روابط منصات التواصل الاجتماعي</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ كل الروابط</span>
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
                                <h4 class="card-title mb-1"> إضافة رابط جديد</h4>
                            </div>
                            <div class="card-body pt-0">
                                <form class="form-horizontal" action="{{route('SocialMedia.store')}}" method ='POST' enctype='multipart/form-data' >
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputName" placeholder="الإسم" value="{{old('name')}}" >
                                        @error('name')
                                             <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" id="url" placeholder="الرابط" value="{{old('url')}}" >
                                        @error('url')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="icon" class="form-control @error('icon') is-invalid @enderror" id="icon" placeholder="الشعار" value="{{old('icon')}}" >
                                        @error('icon')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-0 mt-3 justify-content-end">
                                        <div>
                                            <button type="submit" class="btn btn-primary">إضافة</button>
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
@section('js')
@endsection
