@extends('admin.admin_master')
@section('admin')




	<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
	
<div class="card radius-10">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<h5 class="mb-0">All Slider</h5>
						</div>
						<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
						</div>
					</div>
					<hr>
					<div class="table-responsive">
						<table class="table align-middle mb-0">
							<thead class="table-light">
								<tr>
									<th>SL</th>
									<th>Slider Image</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@php($i = 1)
								  @foreach($slider as $item)
								<tr>
									<td>{{ $i++ }}</td>
                            

									<td>
										<div class="d-flex align-items-center">
											<div class="recent-product-img">
											{{-- 	<img src="{{ $item->category_image }}" alt=""> --}}
												<img src="{{ asset($item->slider_image) }}" style="width:170px; height:65px;"t alt="">
											</div>
											
										</div>
									</td>
									
									
								
								<td>  
  <a href="{{route('slider.edit',$item->id) }}" class="btn btn-info">Edit </a>
    <a href="{{route('slider.delete',$item->id) }}" id="delete" class="btn btn-danger">Delete </a>

								</td>
								
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>





			</div>
		</div>
@endsection