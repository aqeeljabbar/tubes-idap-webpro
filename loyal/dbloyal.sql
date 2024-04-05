CREATE DATABASE IF NOT EXISTS loyal;
USE loyal;

-- table user
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Dumping data untuk tabel `users`

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(3, 'tes123@gmail.com', '123'),
(4, 'tunamayo@gmail.com', 'salmon'),
(5, 'tes@gmail.com', 'onigiri'),
(6, 'svt17@gmail.com', 'carat');

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
  

-- table income
CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `kate` varchar(100) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `income`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `tanggal` DATE NOT NULL,
    `nominal` INT NOT NULL,
    `kategori` VARCHAR(255) NOT NULL,
    `metode` VARCHAR(255) NOT NULL,
    `keterangan` TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO `income` (`id`, `tanggal`, `nominal`, `kategori`, `metode`, `keterangan`) VALUES
(1, '2023-11-18', 10.000, 'Makanan', 'Cash', 'Makan siang diwarkop'),
(5, '2023-08-23', 500.000, 'Pakaian', 'Debit', 'Beli baju chanel'),


ALTER TABLE 'atur_budget'
	
