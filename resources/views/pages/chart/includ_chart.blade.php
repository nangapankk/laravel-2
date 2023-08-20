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
                    <th scope="col">User Id</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Quantitas</th>
                    <th scope="col">Aksi</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($data as $no => $item)
                    <tr>
                        <td>{{ $no += 1 }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->product_id->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>

                            <form action="{{ route('chart.destroy', $item->id) }}" method="POST">
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
