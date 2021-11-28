@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">العرض التقديمي</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ كل العروض التقديمية</span>
						</div>
					</div>
                    <div class="col-sm-6 col-md-3 mg-t-10">
                        <a href="{{route('presentations.create')}}" class="btn btn-primary  btn-block"> إضافة جديد</a>
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
                                    <h4 class="card-title mg-b-0">العروض التقديمية</h4>
                                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table mg-b-0 text-md-nowrap">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم العرض التقديمي</th>
                                            <th>الرابط</th>
                                            <th>عمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $id = 0 ?>
                                        @forelse($presentations as $presentation)
                                            <?php $id++; ?>
                                            <tr>
                                                <th scope="row">{{$id}}</th>
                                                <td>{{$presentation->name}}</td>
                                                <td><a href="{{$presentation->url}}">{{$presentation->url}}</a></td>
                                                <td>
                                                    <form action="{{route('presentations.destroy',$presentation->id)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a class="modal-effect btn btn-sm btn-info"
                                                           href="{{route('presentations.edit', $presentation->id)}}"><i class="las la-pen"></i></a>

                                                        <button type="submit" class="modal-effect btn btn-sm btn-danger">
                                                            <i class="las la-trash"></i>
                                                        </button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td style="text-align: center;" colspan="4">
                                                    لا يوجد عروض تقديمية
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
