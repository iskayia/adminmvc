<div class="card-box mb-30">
	<div class="pd-20">
		<div class="pull-left">
			<h4 class="text-blue h4">Data Produk Penjualan</h4>
			<!-- <p class="mb-0">Semua produk penjualan tertera pada list ini, </p> -->
		</div>
		<div class="pull-right">
			<a href="<?= BaseURL('jual/tambah'); ?>" class="btn btn-primary btn-sm scroll-click"><i class="fa fa-plus"></i> Tambah Produk</a>
		</div>
	</div>
	<div class="pb-20">
		<table class="data-table table stripe hover nowrap">
			<thead>
				<tr>
					<th class="table-plus datatable-nosort">No.</th>
					<th>Kode Transaksi</th>
					<th>Produk</th>
					<th>Jumlah Produk Penjualan</th>
					<th>Tanggal Produk Penjualan</th>
					<th>Total Harga</th>
					<th class="datatable-nosort">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$number = 1;
				foreach ($DataJual as $djual) :
				?>

					<tr>
						<td class="table-plus"><?= $number++; ?></td>
						<td><?= $djual['id_penjualan']; ?></td>
						<td><?= $djual['nama_produk']; ?></td>
						<td><?= $djual['jumlah_penjualan']; ?></td>
						<td><?= $djual['tgl_penjualan']; ?></td>
						<td><?= $djual['harga_produk'] * $djual['jumlah_penjualan'] ?></td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="<?= BaseURL('jual/edit/' . $djual['id_penjualan']); ?>"><i class="dw dw-edit2"></i> Edit</a>
									<!-- Button trigger modal -->
									<button type="button" class="dropdown-item" data-toggle="modal" data-target="#modaldelete<?= $djual['id_penjualan']; ?>">
										<i class="dw dw-delete-3"></i> Delete
									</button>
								</div>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="modaldelete<?= $djual['id_penjualan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
											<a href="<?= BaseURL('jual/del/' . $djual['id_penjualan']); ?>" class="btn btn-primary">Delete</a>
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>
				<?php endforeach; ?>

			</tbody>
		</table>
	</div>
</div>