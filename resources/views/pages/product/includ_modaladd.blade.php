<!-- Modal -->
<div class="modal fade" id="exampleModaladd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="add_name" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="add_name" name="add_name"
                            placeholder="Nama Produk">
                    </div>

                    <div class="mb-3">
                        <label for="add_description" class="form-label">Deskripsi Produk</label>
                        <textarea class="form-control" id="add_description" name="add_descrption" rows="3"
                            placeholder="Masukkan Deskripsi"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="add_category" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="add_category" name="add_category"
                            placeholder="Kategori">
                    </div>
                    <div class="mb-3">
                        <label for="add_buy" class="form-label">Harga Beli</label>
                        <input type="integer" class="form-control" id="add_buy" name="add_buy" placeholder="Rp.">
                    </div>
                    <div class="mb-3">
                        <label for="add_sell" class="form-label">Harga Jual</label>
                        <input type="integer" class="form-control" id="add_sell" name="add_sell" placeholder="Rp.">
                    </div>
                    <div class="mb-3">
                        <label for="add_stock" class="form-label">Stok</label>
                        <input type="integer" class="form-control" id="add_stock" name="add_stock"
                            placeholder="Stok Tersedia">
                    </div>
                    <div class="mb-3">
                        <label for="add_supplier" class="form-label">Nama Supplier</label>
                        <select class="form-select" aria-label="Pilih" id="add_supplier" name="add_supplier">
                            <option selected>Pilih Nama Supplier</option>

                            @foreach ($supplier as $itemSupplier)
                                <option value="{{ $itemSupplier->id }}">{{ $itemSupplier->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="add_image_url" class="form-label">Masukkan Gambar</label>
                        <input class="form-control" type="file" id="add_image_url" name="add_image_url">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
