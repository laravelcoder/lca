@extends('layouts.app')

@section('content')
	{!! $dataTable->table() !!}
@endsection

@push('scripts')
		<script src="/vendor/datatables/buttons.server-side.js"></script>
	{!! $dataTable->scripts() !!}
@endpush