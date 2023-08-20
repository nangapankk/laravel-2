<!-- Modal -->
<div class="modal fade" id="exampleModaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Supplier
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('supplier.update') }}" method="post">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit_name" class="form-label">Nama Supplier</label>
                            <input type="text" class="form-control" id="edit_name" name="edit_name"
                                placeholder="Nama Produk">
                        </div>

                        <div class="mb-3">
                            <label for="edit_phone" class="form-label">Nomor Telepon</label>
                            <input type="number" class="form-control" id="edit_phone" name="edit_phone"
                                placeholder="Telepon">
                        </div>
                        <div class="mb-3">
                            <label for="edit_address" class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control" id="edit_address" name="edit_address" rows="3" placeholder="Masukkan Deskripsi"></textarea>
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
