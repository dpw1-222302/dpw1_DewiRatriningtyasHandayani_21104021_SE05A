<!DOCTYPE html>
<html>
<head>
	<title>Detail Produk - Toko Online</title>
	<link rel="stylesheet" type="text/css" href="product.css">
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
			</ul>
		</nav>
	</header>
	<main>
		<h2>Detail Produk</h2>
		<?php
			// Mendapatkan data produk dari database berdasarkan ID
			$id = $_GET['id'];
			// Koneksi ke database
			$host = 'localhost';
			$user = 'root';
			$password = '';
			$dbname = 'toko_online';
			$conn = mysqli_connect($host, $user, $password, $dbname);
			if (!$conn) {
				die('Koneksi gagal: ' . mysqli_connect_error());
			}
			// Query untuk mendapatkan data produk
			$sql = "SELECT * FROM produk WHERE id = $id";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				// Tampilkan detail produk
				echo '<h3>'.$row['nama'].'</h3>';
				echo '<p>'.$row['deskripsi'].'</p>';
				echo '<p>Harga: Rp '.$row['harga'].'</p>';
				echo '<a href="cart.php?id='.$row['id'].'">Beli Sekarang</a>';
			} else {
				echo 'Produk tidak ditemukan.';
			}
			// Tutup koneksi database
			mysqli_close($conn);
		?>
	</main>
	<footer>
		<p>&copy; 2023 Toko Online</p>
	</footer>
</body>
</html>
