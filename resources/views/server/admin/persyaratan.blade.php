@extends('server.layouts.app')
@section('content')
<div class="row">
	@if (session()->has('status') && session()->get('status'))
			<span class="alert alert-success">
				<strong>{{session()->get('message')}}</strong>
			</span>
		@elseif(session()->has('status') && session()->get('status') == false)
			<span class="alert alert-danger">
				<strong>{{session()->get('message')}}</strong>
			</span>
		@endif
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<strong class="card-title">Daftar pengumpulan persyaratan peserta lomba</stronga >
			</div>
			<div class="card-body">
				<table class="table table-inverse table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama tim</th>
							<th>Kategori Lomba</th>
							<th>Persyaratan</th>
							<th>Tipe Persyaratan</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1 ?>
						@foreach ($peserta as $value)
						<tr>
							<td>{{$no++}}</td>
							<td>{{ $value->nama_tim }}</td>
							<td>{{ $value->nama }}</td>
							<td>
								@if (filter_var($value->isi, FILTER_VALIDATE_URL) === FALSE)
                                    <a href="{{URL::to('proposal/'.$value->isi)}}" class="btn btn-sm btn-success" target="_blank">Check</a>
                                @else 
                                    <a href={{ $value->isi }}" class="btn btn-sm btn-success" target="_blank">Check</a>
								@endif
							</td>
							<td>
                                
                                @if (filter_var($value->isi, FILTER_VALIDATE_URL) === FALSE)
                                    Proposal
                                @else 
                                    Link Prototype
                                @endif
                            </td>
						</tr>
						@endforeach
					</tbody>
				</table>

				{{$peserta->links()}}
			</div>
		</div>
	</div>
</div>
@endsection