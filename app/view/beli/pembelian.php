<?php 
$DataBM = $this->model()->getThisQuery('SELECT id_pembelian,nama_produk,jumlah_pembelian,tgl_pembelian,harga_pembelian,stok FROM `pembelian` INNER JOIN produk on pembelian.id_produk = produk.id_produk order by id_pembelian desc');
?>

			<div class="card-box mb-30">
				<div class="pd-20">
					<div class="pull-left">
					<h4 class="text-blue h4">Data Pembelian</h4>
					<!-- <p class="mb-0">Semua produk pembelian akan tertera pada list ini, </p> -->
				</div>
					<div class="pull-right">
						<a href="<?= BaseURL('beli/tambah'); ?>" class="btn btn-primary btn-sm scroll-click"><i class="fa fa-plus"></i> Tambah Produk</a>
					</div>
				</div>
				<div class="pb-20">
					<table class="data-table table stripe hover nowrap">
						<thead>
							<tr>
								<th class="table-plus datatable-nosort">No</th>
								<th>Kode Transaksi</th>
								<th>Produk</th>
								<th>Jumlah Pembelian</th>
								<th>Tanggal Pembelian</th>
								<th>Harga Beli</th>
								<th class="datatable-nosort">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$number = 1;
							foreach($DataBM as $dbm) :
								?>

								<tr>
									<td class="table-plus"><?= $number++; ?></td>
									<td><?= $dbm['id_pembelian']; ?></td>
									<td><?= $dbm['nama_produk'];?></td>
									<td><?= $dbm['jumlah_pembelian'];?></td>
									<td><?= $dbm['tgl_pembelian'];?></td>
									<td><?= $dbm['harga_pembelian']*$dbm['jumlah_pembelian'];?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="<?= BaseURL('beli/edit/'.$dbm['id_pembelian']); ?>"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="<?= BaseURL('beli/del/'.$dbm['id_pembelian']); ?>"><i class="dw dw-delete-3"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
							<?php endforeach; ?>

						</tbody>
					</table>
				</div>
			</div>
