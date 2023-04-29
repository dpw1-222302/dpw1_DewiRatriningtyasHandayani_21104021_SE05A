<!DOCTYPE html>
<html>
<head>
	<title>Checkout - Toko Online</title>
    <link rel="stylesheet" href="checkout.css">
</head>
<body>
	<header>
		<h1>Toko Online</h1>
		<nav>
			<ul>
				<li><a href="index.php">Beranda</a></li>
				<li><a href="catalog.php">Katalog Produk</a></li>
				<li><a href="cart.php">Keranjang Belanja</a></li>
				<li class="active"><a href="checkout.php">Checkout</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h2>Checkout</h2>
		<form action="process.php" method="post">
			<fieldset>
				<legend>Informasi Pengiriman</legend>
				<label for="nama">Nama</label>
				<input type="text" id="nama" name="nama" required>
				<label for="email">Email</label>
				<input type="email" id="email" name="email" required>
				<label for="alamat">Alamat</label>
				<textarea id="alamat" name="alamat" required></textarea>
			</fieldset>
			<fieldset>
				<legend>Informasi Pembayaran</legend>
				<label for="metode_pembayaran">Metode Pembayaran</label>
				<select id="metode_pembayaran" name="metode_pembayaran" required>
					<option value="">-- Pilih Metode Pembayaran --</option>
					<option value="transfer_bank">Transfer Bank</option>
					<option value="kartu_kredit">Kartu Kredit</option>
					<option value="cod">Cash on Delivery (COD)</option>
				</select>
			</fieldset>
			<button type="submit">Beli</button>
		</form>
	</main>
</body>
</html>
