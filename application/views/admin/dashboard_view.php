<!-- OVERVIEW -->
<div class="panel panel-headline">
	<div class="panel-heading">
		<h1 class="panel-title">Anda adalah Admin</h1>

	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="fa fa-credit-card"></i></span>
					<p>
						<a href="<?=base_url('index.php/transaksi')?>"
						<span class="number"><?=count($list_transaksi);?></span>
						<span class="title">Transaksi</span>
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="fa fa-share-alt"></i></span>
					<p>
					<a href="<?=base_url('index.php/pelanggan/list_pelanggan')?>"
						<span class="number"><?=count($list_pelanggan);?></span>
						<span class="title">Pelanggan</span>
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="fa fa-user-circle-o"></i></span>
					<p>
					<a href="<?=base_url('index.php/admin')?>"
						<span class="number"><?=count($list_admin);?></span>
						<span class="title">Admin</span>
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="fa fa-thumbs-o-up"></i></span>
					<p>
					<a href="<?=base_url('index.php/masakan')?>"
						<span class="number"><?=count($list_masakan);?></span>
						<span class="title">Masakan</span>
					</p>
				</div>
			</div>
		</div>
		
	</div>
</div>