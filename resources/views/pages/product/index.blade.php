@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           @include('pages.product.includ_product')
                </div>
            </div>
        </div>
    </div>
</div>
@include('pages.product.includ_modaladd')
@endsection
@push('js')
<script>
    $('#tabel').DataTable();
</script>
@endpush