@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">البرامج</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ كل البرامج</span>
						</div>
					</div>
                    <div class="col-sm-6 col-md-3 mg-t-10">
                        <a href="{{route('programs.create')}}" class="btn btn-primary  btn-block"> إضافة جديد</a>
                    </div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
                    @if (session('success'))
                        <div class="col-sm-12">
                            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mg-b-0">البرامج</h4>
                                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table mg-b-0 text-md-nowrap">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم البرنامج</th>
                                            <th>الشعار</th>
                                            <th>الرابط</th>
                                            <th>متوفر على</th>
                                            <th>عمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $id = 0 ?>
                                        @forelse($programs as $program)
                                            <?php $id++; ?>
                                            <tr>
                                                <th scope="row">{{$id}}</th>
                                                <td>{{$program->name}}</td>
                                                <td>
                                                    <img src="{{ asset('storage/'.$program->image) }}" alt="" width="100px" height="100px">
                                                </td>
                                                <td><a href="{{$program->url}}">{{$program->url}}</a></td>
                                                <td>{{$program->available->name}}</td>
                                                <td>
                                                    <form action="{{route('programs.destroy',$program->id)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a class="modal-effect btn btn-sm btn-info"
                                                           href="{{route('programs.edit', $program->id)}}"><i class="las la-pen"></i></a>

                                                        <button type="submit" class="modal-effect btn btn-sm btn-danger">
                                                            <i class="las la-trash"></i>
                                                        </button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td style="text-align: center;" colspan="6">
                                                    لا يوجد برامج
                                                </td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
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
@endsection
