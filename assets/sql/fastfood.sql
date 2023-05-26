-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2023 pada 13.38
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastfood`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `telepon` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `jenis_kelamin`, `telepon`, `email`, `alamat`) VALUES
(1, 'Johan Wongso', 'laki-laki', 822345678, 'johan@example.com', 'Jl. ABC No. 123, Surabaya'),
(2, 'Jeni Rasti', 'Perempuan', 823456789, 'jeni@example.com', 'Jl. XYZ No. 456, Surabyaa'),
(3, 'Michael Yudid', 'Laki-laki', 834567890, 'michael@example.com', 'Jl. DEF No. 789, Surabaya'),
(4, 'Sarah Winanti', 'Perempuan', 845678901, 'sarah@example.com', 'Jl. GHI No. 234, Surabaya'),
(5, 'David Lee', 'Laki-laki', 856789012, 'david@example.com', 'Jl. JKL No. 567, Surabaya'),
(6, 'Emily santos', 'Perempuan', 867890123, 'emily@example.com', 'Jl. MNO No. 890, Surabaya'),
(7, 'Daniel Davis', 'Laki-laki', 878901234, 'daniel@example.com', 'Jl. PQR No. 567, Surabaya'),
(8, 'Olivia Wilson', 'Perempuan', 889012345, 'olivia@example.com	', 'Jl. STU No. 901, Surabaya'),
(9, 'Ehsan Millo', 'Laki-laki', 890123456, 'ethan@example.com', 'Jl. VWX No. 234, Surabaya'),
(10, 'Afani Andersan', 'Perempuan', 801234567, 'afa@example.com', 'Jl. YZ No. 567, Surabaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama`, `kategori`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 'Pizza Margherita', 'Pizza', 205000, 'Pizza klasik dengan saus tomat, keju mozzarella, daun basil segar, dan sedikit minyak zaitun. Kesederhanaan yang lezat.', 'f1.png'),
(2, 'Pizza Hawaian', 'Pizza', 215000, 'Pizza dengan saus tomat, potongan ham, irisan nanas manis, dan keju mozzarella. Gabungan antara manis dan gurih.', 'f3.png'),
(3, 'Pizza Vegetarian', 'Pizza', 190000, 'Pizza berisi beragam sayuran segar seperti paprika, jamur, bawang, zukini, dan keju mozzarella. Pilihan lezat bagi vegetarian.', 'f2.png'),
(4, 'Mushroom Burger', 'Burger', 95000, 'Burger dengan daging ikan, keju swiss lezat, jamur panggang, selada, tomat, bawang, dan saus spesial.', 'f5.png'),
(5, 'Cheeseburger Deluxe', 'Burger', 105000, 'Cheeseburger dengan tambahan daging sapi panggang, keju mozarella meleleh, tomat, bawang, dan selada.', 'f6.png'),
(6, 'BBQ Chicken Burger', 'Burger', 100000, 'Burger lezat dengan daging ayam, keju cheddar, potongan bacon renyah, selada, tomat, bawang, dan saus BBQ.', 'f7.png'),
(7, 'Pasta Carbonara', 'Pasta', 85000, 'Pasta dengan saus krim lezat, potongan bacon gurih, parmesan, dan telur. Disajikan dengan parsley segar.', 'f9.png'),
(8, 'Linguine Aglio e Oli', 'Pasta', 82000, 'Linguine dengan bawang putih, cabai merah, minyak zaitun, dan parsley. Disajikan dengan taburan parmesan.', 'f8.png'),
(9, 'Spaghetti Bolognese', 'Pasta', 90000, 'Spaghetti dengan saus tomat daging sapi yang kaya rasa, bawang, wortel, dan bumbu rempah.', 'f10.png'),
(10, 'Tea Lemonade', 'Minuman', 20000, 'Minuman berkarbonasi yang segar dengan perpaduan rasa lemon yang asam dan manis dari teh.', 'f11.png'),
(11, 'Matcha Latte', 'Minuman', 30000, 'Minuman yang terbuat dari bubuk matcha berkualitas tinggi dan susu hangat yang lembut. Memberikan rasa teh hijau.', 'f13.png'),
(12, 'Strawberry Smoothie', 'Minuman', 35000, 'Smoothie segar yang terbuat dari buah stroberi segar, yogurt, dan es. Memberikan rasa manis dan segar.', 'f12.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_customer`, `id_menu`, `tgl_transaksi`, `jumlah`, `total`) VALUES
(1, 1, 3, '2023-05-02', 2, 238000),
(2, 8, 2, '2023-04-28', 5, 1075000),
(3, 9, 9, '2023-04-14', 3, 270000),
(4, 1, 4, '2023-04-29', 4, 1075000),
(5, 9, 9, '2023-04-14', 3, 270000),
(6, 9, 9, '2023-04-14', 3, 270000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_customer` (`id_customer`),
  ADD KEY `fk_menu` (`id_menu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
