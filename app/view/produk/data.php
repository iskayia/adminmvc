<div class="pd-20 card-box mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h4 class="text-blue h4">Data produk</h4>
			<!-- <p>ini list data produk </p> -->
		</div>
		<div class="pull-right">
			<a href="<?= BaseURL('produk/tambah'); ?>" class="btn btn-primary btn-sm scroll-click"><i class="fa fa-plus"></i> Tambah Produk</a>
		</div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Supplier</th>
				<th scope="col">Produk</th>
				<th scope="col">Stok</th>
				<th scope="col">Harga</th>
				<th scope="col">Gambar</th>
				<th scope="col" class="datatable-nosort">Action</th>

			</tr>
		</thead>
		<tbody>
			<?php
			$Number = 1;
			foreach ($DataProduk as $db) : ?>
				<trproduk>
					<th scope="row"><?= $Number++; ?></th>
					<td><?= $db['nama_supplier']; ?></td>
					<td><?= $db['nama_produk']; ?></td>
					<td><?= $db['stok']; ?></td>
					<td>Rp. <?= number_format($db['harga_produk']); ?></td>
					<td><img src="<?= IMG_URL . $db['gambar_produk']; ?>" width="100" height="100" alt=""></td>
					<td>
						<div class="dropdown">
							<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="dw dw-more"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
								<a class="dropdown-item" href="<?= BaseURL('produk/edit/' . $db['id_produk']); ?>"><i class="dw dw-edit2"></i> Edit</a>
								
								<!-- Button trigger modal -->
								<button type="button" class="dropdown-item" data-toggle="modal" data-target="#modaldelete<?= $db['id_produk']; ?>">
										<i class="dw dw-delete-3"></i> Delete
									</button>
							</div>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="modaldelete<?= $db['id_produk']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Delete</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											Apakah anda yakin akan menghapus data ini?
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<a href="<?= BaseURL('produk/del/' . $db['id_produk']); ?>" class="btn btn-primary">Delete</a>
										</div>
									</div>
								</div>
							</div>
					</td>
					</tr>
				<?php endforeach; ?>
		</tbody>
	</table>
	<div class="collapse collapse-box" id="basic-table">
		<div class="code-box">
			<div class="clearfix">
				<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
				<a href="#basic-table" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
			</div>
			<pre><code class="xml copy-pre" id="basic-table-code">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
						</tr>
					</tbody>
				</table>
			</code></pre>
		</div>
	</div>
</div>