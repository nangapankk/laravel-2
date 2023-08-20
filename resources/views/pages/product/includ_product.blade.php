<div class="card">
    <div class="card-header">{{ __('Dashboard') }}
        <a data-bs-toggle="modal" data-bs-target="#exampleModaladd"
             href="{{ route('product.create') }}" class="btn btn-info float-end">Tambah</a>


    </div>

    <div class="card-body">
        @include('message')
        <table class="table table-primary" id="tabel">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Kategori</th>
                <th scope="col">Pembelian</th>
                <th scope="col">Penjualan</th>
                <th scope="col">Stok</th>
                <th scope="col">Nama Supplier</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
              </tr>

            </thead>
            <tbody>
                @foreach ($data as $no => $item)
                <tr>
                    <td ="row">{{ $no+=1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->category }}</td>
                    <td>{{ $item->buy }}</td>
                    <td>{{ $item->sell }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>{{ $item->supplier->name}}</td>
                    <td>{{ $item->image_url }}</td>
                    <td></td>

                  </tr>
                @endforeach


            </tbody>
          </table>

    </div>
</div>

