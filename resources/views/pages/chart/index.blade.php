@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                @include('message')
                @include('pages.chart.includ_chart')
            </div>
        </div>

    </div>

    @include('pages.chart.includ_modaladd')
@endsection
@push('js')
    <script>
        $('#tabel').DataTable();
        @if ($message = session()->get('Berhasil'))
            Swal.fire(
                'Berhasil!',
                '{{ $message }}',
                'success'
            )
        @endif

        @if ($message = session()->get('Gagal'))
            Swal.fire(
                'Gagal!',
                '{{ $message }}',
                'error'
            )
        @endif
    </script>
@endpush
