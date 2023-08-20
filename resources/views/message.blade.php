@if ($message =session()->get('Berhasil'))
<div class="alert alert-success">
    {{ $message }}
</div>
@endif
@if ($message =session()->get('Gagal'))
<div class="alert alert-danger">
    {{ $message }}
</div>
@endif
