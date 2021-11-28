@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
                            <h4 class="content-title mb-0 my-auto">إضافة برنامج</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ كل البرامج</span>
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
                                <h4 class="card-title mb-1"> إضافة برنامج</h4>
                            </div>
                            <div class="card-body pt-0">
                                <form class="form-horizontal" action="{{route('programs.store')}}" method ='POST' enctype='multipart/form-data' >
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputName" placeholder="إسم البرنامج" value="{{old('name')}}" >
                                        @error('name')
                                             <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image">شعار البرنامج :</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" >
                                        @error('image')
                                             <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="my-1 mr-2" for="available_id">متوفر على</label>
                                        <select name="available_id"  class="custom-select my-1 mr-sm-2"  required>
                                            @foreach($availables as $available)
                                                <option value="{{$available->id}}">{{$available->name}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                  <div class="form-group">
                                      <textarea class="form-control @error('url') is-invalid @enderror" name="url" placeholder="رابط تحميل البرنامج" rows="3">{{value(old('url'))}}</textarea>
                                      @error('url')
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
