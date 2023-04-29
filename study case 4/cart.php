<!DOCTYPE html>
<html>
<head>
	<title>Keranjang Belanja - Toko Online</title>
    <link rel="stylesheet" type="text/css" href="cart.css">
    
</head>
<body>
	<header>
		<h1>Toko Online</h1>
		<nav>
			<ul>
				<li><a href="index.php">Beranda</a></li>
				<li><a href="catalog.php">Katalog Produk</a></li>
				<li class="active"><a href="cart.php">Keranjang Belanja</a></li>
				<li><a href="checkout.php">Checkout</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h2>Keranjang Belanja</h2>
		<?php
			// Memulai sesi untuk menyimpan data keranjang belanja
			session_start();
			// Jika belum ada keranjang belanja, buat array kosong
			if (!isset($_SESSION['cart'])) {
				$_SESSION['cart'] = array();
			}
			// Jika tombol "Beli Sekarang" ditekan pada halaman detail produk
			if (isset($_GET['id'])) {
				// Tambahkan produk ke keranjang belanja
				$id = $_GET['id'];
				if (!isset($_SESSION['cart'][$id])) {
					$_SESSION['cart'][$id] = 1;
				} else {
					$_SESSION['cart'][$id]++;
				}
			}
			// Jika tombol "Hapus" ditekan pada halaman keranjang belanja
			if (isset($_GET['action']) && $_GET['action'] == 'delete') {
				// Hapus produk dari keranjang belanja
				$id = $_GET['id'];
				unset($_SESSION['cart'][$id]);
			}
			// Jika keranjang belanja kosong, tampilkan pesan
			if (empty($_SESSION['cart'])) {
				echo '<p>Keranjang belanja masih kosong.</p>';
			} else { // Jika keranjang belanja tidak kosong, tampilkan daftar produk
				echo '<ul>';
				foreach ($_SESSION['cart'] as $id => $quantity) {
					// Koneksi ke database
					$host = 'localhost';
					$user = 'root';
					$password = '';
					$dbname = 'toko_online';
					$conn = mysqli_connect($host, $user, $password, $dbname);
					if (!$conn) {
						die('Koneksi gagal: ' . mysqli_connect_error());
					}
					// Query untuk mendapatkan data produk dari keranjang belanja
					$sql = "SELECT * FROM produk WHERE id = $id";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					echo '<li>'.$row['nama'].' ('.$quantity.')<a href="cart.php?action=delete&id='.$id.'">Hapus</a></li>';
				}
				echo '</ul>';
			}
		?>
	</main>
</body>
</html>
