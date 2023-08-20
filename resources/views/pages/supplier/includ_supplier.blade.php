<div class="card">
    <div class="card-header">{{ __('Dashboard') }}
        <a data-bs-toggle="modal" data-bs-target="#exampleModaladd" href="{{ route('supplier.create') }}"
            class="btn btn-info float-end">Tambah</a>


    </div>

    <div class="card-body">

        <table class="table table-primary" id="tabel">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($data as $no => $item)
                    <tr>
                        <td>{{ $no += 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->address }}</td>
                        <td>

                            <form action="{{ route('supplier.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah anda yakin menghapus ?')">Hapus
                                </button>

                            </form>
                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>

    </div>
</div>
