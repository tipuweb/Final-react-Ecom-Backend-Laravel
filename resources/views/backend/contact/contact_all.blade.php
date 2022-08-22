@extends('admin.admin_master')
@section('admin')




	<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
	
<div class="card radius-10">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<h5 class="mb-0">All Contact Message</h5>
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
									<th> Name</th>
									<th> Email</th>
									<th> message</th>
									<th> Date</th>
								  <th> Time</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@php($i = 1)
								  @foreach($message as $item)
								<tr>
									<td>{{ $i++ }}</td>
                
										<td>{{ $item->name }}</td>
										<td>{{ $item->email }}</td>
										<td>{{ $item->message }}</td>
										<td>{{ $item->contact_date }}</td>
										<td>{{ $item->contact_time }}</td>
								<td>
    <a href="{{route('contact.delete',$item->id) }}" id="delete" class="btn btn-danger">Delete</a>
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