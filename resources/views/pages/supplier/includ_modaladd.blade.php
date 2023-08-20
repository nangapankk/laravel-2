<!-- Modal -->
<div class="modal fade" id="exampleModaladd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Supplier
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('supplier.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="add_name" class="form-label">Nama Supplier</label>
                            <input type="text" class="form-control" id="add_name" name="add_name"
                                placeholder="Nama Produk">
                        </div>

                        <div class="mb-3">
                            <label for="add_phone" class="form-label">Nomor Telepon</label>
                            <input type="number" class="form-control" id="add_phone" name="add_phone"
                                placeholder="Telepon">
                        </div>
                        <div class="mb-3">
                            <label for="add_address" class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control" id="add_address" name="add_address" rows="3" placeholder="Masukkan Deskripsi"></textarea>
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
