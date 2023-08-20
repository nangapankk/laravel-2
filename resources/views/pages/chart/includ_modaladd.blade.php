<!-- Modal -->
<div class="modal fade" id="exampleModaladd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('chart.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="add_product_id" class="form-label">Nama product</label>
                            <select class="form-select" aria-label="Pilih" id="add_product_id" name="add_product_id">
                                <option selected>Pilih Produk</option>

                                @foreach ($products as $itemproducts)
                                    <option value="{{ $itemproducts->id }}">{{ $itemproducts->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="add_phone" class="form-label">Jumlah</label>
                            <input type="number" min='1' class="form-control" id="add_phone" name="add_phone"
                                placeholder="Jumlah">
                        </div>



                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>

        </div>
    </div>
</div>
