<!DOCTYPE html>
<html>
<head>
	<title>Konfirmasi Pembayaran - Toko Online</title>
    <link rel="stylesheet" type="text/css" href="confirmation.css">
</head>
<body>
	<header>
		<h1>Toko Online</h1>
		<nav>
			<ul>
				<li><a href="index.php">Beranda</a></li>
				<li><a href="catalog.php">Katalog Produk</a></li>
				<li><a href="cart.php">Keranjang Belanja</a></li>
				<li><a href="checkout.php">Checkout</a></li>
				<li class="active"><a href="confirmation.php">Konfirmasi Pembayaran</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h2>Konfirmasi Pembayaran</h2>
		<p>Silakan melakukan pembayaran melalui transfer ke rekening berikut:</p>
		<ul>
			<li>Bank ABC</li>
			<li>No. Rekening: 1234567890</li>
			<li>Atas Nama: Toko Online</li>
			<li>Jumlah Pembayaran: <strong>Rp 1.000.000</strong></li>
		</ul>
		<p>Setelah melakukan pembayaran, silakan mengirimkan bukti pembayaran melalui form di bawah ini:</p>
		<form action="process.php" method="post" enctype="multipart/form-data">
			<label for="nama">Nama</label>
			<input type="text" id="nama" name="nama" required>
			<label for="email">Email</label>
			<input type="email" id="email" name="email" required>
			<label for="bukti_pembayaran">Bukti Pembayaran</label>
			<input type="file" id="bukti_pembayaran" name="bukti_pembayaran" accept="image/*" required>
			<button type="submit">Kirim</button>
		</form>
	</main>
</body>
</html>
