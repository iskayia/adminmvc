	<?php
	$DataProduk = $this->model()->getThisQuery('SELECT * FROM `produk` WHERE stok<50 ');
	// $status= $this->model()->getThisQuery('SELECT STATUS FROM `pembelian`');
	// $DataProduk = $this->model('ProdukModel')->load();
	?>
	<div class="pd-20 card-box mb-30">
		<div class="clearfix mb-20">
			<div class="pull-left">
				<h4 class="text-blue h4">Stok Produk</h4>
				<p>Stok produk telah mencapai batas minimun. Harap melakukan pembelian produk yang kurang </p>
			</div>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Aroma Parfum</th>
					<th scope="col">Stok</th>
					<th scope="col">Status</th>

				</tr>
			</thead>
			<tbody>
				<?php
				$Number = 1;
				foreach ($DataProduk as $db) : ?>
					<tr>
						<th scope="row"><?= $Number++; ?></th>
						<td><?= $db['nama_produk']; ?></td>
						<td><?= $db['stok']; ?></td>
						<td>
							<?php
							if ($db['status'] == 0) {
							?>
								<a href="<?= BaseURL('home/ubah_status/' . $db['id_produk'] . '/1'); ?>" class="btn btn-primary btn-sm">Izin Pesan</a>
							<?php
							} else if ($db['status'] == 1) { ?>
								<a href='#' class="btn btn-warning btn-sm">Menunggu Konfirmasi</a>
							<?php
							} else if ($db['status'] == 2) { ?>
								<a href='#' class="btn btn-success btn-sm">Diterima</a>
							<?php	}
							?>
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