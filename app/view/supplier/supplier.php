<div class="pd-20 card-box mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h4 class="text-blue h4">Data Supplier</h4>
			<!-- <p>ini list data supplier </p> -->
		</div>
        <div class="pull-right">
			<a href="<?= BaseURL('sup/tambah'); ?>" class="btn btn-primary btn-sm scroll-click"><i class="fa fa-plus"></i> Tambah Supplier</a>
		</div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Supplier</th>
				<th scope="col">Kontak</th>
				<th scope="col">Alamat</th>
				<th scope="col" class="datatable-nosort">Action</th>

			</tr>
		</thead>
		<tbody>
			<?php
			$Number = 1;
			foreach ($DataSupplier as $db) : ?>
				<trsupplier>
					<th scope="row"><?= $Number++; ?></th>
					<td><?= $db['nama_supplier']; ?></td>
					<td><?= $db['kontak_supplier']; ?></td>
					<td><?= $db['alamat_supplier']; ?></td>
					<td>
						<div class="dropdown">
							<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="dw dw-more"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
								<a class="dropdown-item" href="<?= BaseURL('sup/edit/' . $db['id_supplier']); ?>"><i class="dw dw-edit2"></i> Edit</a>
								
								<!-- Button trigger modal -->
								<button type="button" class="dropdown-item" data-toggle="modal" data-target="#modaldelete<?= $db['id_supplier']; ?>">
										<i class="dw dw-delete-3"></i> Delete
									</button>
							</div>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="modaldelete<?= $db['id_supplier']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
											<a href="<?= BaseURL('pel/del/' . $db['id_supplier']); ?>" class="btn btn-primary">Delete</a>
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