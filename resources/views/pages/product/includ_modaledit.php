<!-- Modal -->
<div class="modal fade" id="exampleModaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method ('put')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="edit_name" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="edit_name" name="edit_name"
                            placeholder="Nama Produk">
                    </div>

                    <div class="mb-3">
                        <label for="edit_description" class="form-label">Deskripsi Produk</label>
                        <textarea class="form-control" id="edit_description" name="edit_description" rows="3"
                            placeholder="Masukkan Deskripsi"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="edit_category" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="edit_category" name="edit_category"
                            placeholder="Kategori">
                    </div>
                    <div class="mb-3">
                        <label for="edit_buy" class="form-label">Harga Beli</label>
                        <input type="number" min='0' class="form-control" id="edit_buy" name="edit_buy"
                            placeholder="Rp.">
                    </div>
                    <div class="mb-3">
                        <label for="edit_sell" class="form-label">Harga Jual</label>
                        <input type="number" min='0' class="form-control" id="edit_sell" name="edit_sell"
                            placeholder="Rp.">
                    </div>
                    <div class="mb-3">
                        <label for="edit_stock" class="form-label">Stok</label>
                        <input type="number" min='0' class="form-control" id="edit_stock" name="edit_stock"
                            placeholder="Stok Tersedia">
                    </div>
                    <div class="mb-3">
                        <label for="edit_supplier_id" class="form-label">Nama Supplier</label>
                        <select class="form-select" aria-label="Pilih" id="edit_supplier_id" name="edit_supplier_id">
                            <option selected>Pilih Nama Supplier</option>

                            @foreach ($supplier as $itemSupplier)
                                <option value="{{ $itemSupplier->id }}">{{ $itemSupplier->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="edit_image_url" class="form-label">Masukkan Gambar</label>

                        <input class="form-control" accept="image/png,image/jpeg,image/jpg" type="file"
                            id="edit_image_url" name="edit_image_url">
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
