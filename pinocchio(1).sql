-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2023 at 01:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pinocchio`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `pilihan` varchar(1) NOT NULL,
  `nilai` tinyint(1) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `jawaban`, `pilihan`, `nilai`, `id_pertanyaan`) VALUES
(21, 'Tidak pernah', 'A', 0, 7),
(22, 'Terkadang', 'B', 1, 7),
(23, 'Selalu', 'C', 0, 7),
(24, 'Tidak Relevan', 'D', 0, 7),
(25, 'Karena bisa menciptakan keseimbangan dalam kehidupan', 'A', 1, 8),
(26, 'Untuk menghindari tugas', 'B', 0, 8),
(27, 'Hanya untuk memenuhi keinginan orang lain', 'C', 0, 8),
(28, 'Tidak relevan', 'D', 0, 8),
(29, 'Menyebabkan isolasi sosial', 'A', 0, 9),
(30, 'Menciptakan rasa saling ketergantungan', 'B', 1, 9),
(31, 'Tidak ada pengaruh', 'C', 0, 9),
(32, 'Hanya membuat stress', 'D', 0, 9),
(33, 'Ya, selalu', 'A', 0, 10),
(34, 'Tidak relevan', 'B', 0, 10),
(35, 'Tidak, menolak tanggung jawab menunjukkan keberanian', 'C', 0, 10),
(36, 'Tergantung pada situasi', 'D', 1, 10),
(37, ' Menyalahkan orang lain', 'A', 0, 11),
(38, 'Menghindari pekerjaan', 'B', 0, 11),
(39, 'Kewajiban atau kewaspadaan terhadap tugas yang diemban', 'C', 1, 11),
(40, 'Tidak relevan', 'D', 0, 11),
(41, ' Agar keluarga terlihat baik di mata orang lain', 'A', 0, 12),
(42, 'Tidak relevan', 'B', 0, 12),
(43, 'Karena menciptakan suasana hangat dan saling mendukung', 'C', 1, 12),
(44, 'Hanya untuk memenuhi harapan orang tua', 'D', 0, 12),
(45, 'Selalu', 'A', 0, 13),
(46, 'Tergantung pada situasi', 'B', 1, 13),
(47, 'Tidak Pernah', 'C', 0, 13),
(48, 'Hanya jika diharapkan', 'D', 0, 13),
(49, 'Selalu', 'A', 0, 14),
(50, 'Tidak Pernah', 'B', 0, 14),
(51, 'Tergantung pada situasi dan nilai-nilai individu', 'C', 1, 14),
(52, 'Hanya jika dilakukan di depan umum', 'D', 0, 14),
(53, 'Membuat seseorang menjadi terlalu santun', 'A', 0, 15),
(54, 'Tidak relevan', 'B', 0, 15),
(55, 'Menciptakan perasaan positif dan kepuasan batin', 'C', 1, 15),
(56, 'Hanya jika mendapat pujian', 'D', 0, 15),
(57, 'Menciptakan atmosfer yang tidak menyenangkan', 'A', 0, 16),
(58, ' Tidak ada pengaruh', 'B', 0, 16),
(59, 'Membangun kerjasama dan produktivitas', 'C', 1, 16),
(60, 'Menyebabkan ketidakharmonisan', 'D', 0, 16),
(121, 'Mencegah kebosanan', 'A', 0, 32),
(122, 'Memperoleh keuntungan pribadi', 'B', 0, 32),
(123, 'Membangun kepercayaan', 'C', 1, 32),
(124, 'Menjaga rahasia', 'D', 0, 32),
(125, 'Meningkatkan kualitas hidup', 'A', 1, 33),
(126, 'Tidak berpengaruh', 'B', 0, 33),
(127, 'Menurunkan kualitas hidup', 'C', 0, 33),
(128, 'Bergantung pada situasi', 'D', 0, 33),
(129, 'Tidak pernah', 'A', 0, 34),
(130, 'Terkadang', 'B', 0, 34),
(131, 'Selalu', 'C', 1, 34),
(132, 'Tidak Relevan', 'D', 0, 34),
(133, 'Bersifat subyektif', 'A', 0, 35),
(134, 'Bersifat obyektif', 'B', 1, 35),
(135, 'Bergantung pada situasi', 'C', 0, 35),
(136, 'Tidak dapat ditentukan', 'D', 0, 35),
(137, 'Karena membuat situasi membosankan', 'A', 0, 36),
(138, 'Karena menghindari pembicaraan', 'B', 0, 36),
(139, 'Karena mencegah salah pengertian dan kekecewaan', 'C', 1, 36),
(140, 'Karena membuat hubungan membosankan', 'D', 0, 36),
(157, '1', 'A', 1, 41),
(158, '1', 'B', 0, 41),
(159, '1', 'C', 0, 41),
(160, '1', 'D', 0, 41);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `pertanyaan` varchar(1000) NOT NULL,
  `tipe` varchar(15) NOT NULL,
  `petunjuk` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `pertanyaan`, `tipe`, `petunjuk`, `id_user`) VALUES
(7, 'Apakah Tanggung Jawab Selalu Berkaitan dengan Pekerjaan atau Karir?', 'tanggung_jawab', 'Tanggung jawab dapat melibatkan berbagai aspek kehidupan', 3),
(8, 'Mengapa Tanggung Jawab Penting dalam Kehidupan Sehari-hari?', 'tanggung_jawab', 'Tanggung jawab membantu individu untuk memahami dan menjalani peran mereka dengan baik', 3),
(9, 'Bagaimana Tanggung Jawab Mempengaruhi Kualitas Hubungan Sosial?', 'tanggung_jawab', 'Pilih jawaban yang menunjukkan bahwa tanggung jawab dapat menciptakan rasa saling ketergantungan, menekankan pentingnya bekerjasama dalam hubungan sosial.', 3),
(10, 'Apakah Menolak Tanggung Jawab Dapat Membangun Karakter yang Kuat?', 'tanggung_jawab', 'Beberapa situasi mungkin memerlukan keberanian untuk mengakui dan mengambil tanggung jawab, sementara dalam situasi lain, menolak tanggung jawab mungkin tidak selalu menunjukkan kelemahan karakter.', 3),
(11, 'Apa yang Dimaksud dengan Tanggung Jawab?', 'tanggung_jawab', 'Tanggung jawab melibatkan kesadaran dan komitmen untuk melaksanakan tugas atau kewajiban dengan penuh tanggung jawab.', 3),
(12, 'Apa yang Membuat Kebaikan Penting dalam Hubungan Keluarga?', 'kebaikan', 'nilai-nilai positif dan keterlibatan emosional yang dapat memperkuat ikatan dalam keluarga', 3),
(13, 'Apakah Kebaikan Berarti Selalu Setuju dengan Pendapat Orang Lain?', 'kebaikan', 'Terkadang, kebaikan dapat mencakup kesediaan untuk menyatakan pendapat atau pandangan yang berbeda dengan tetap menghormati orang lain.', 3),
(14, 'Apakah Kebaikan Selalu Dapat Diterima oleh Semua Orang?', 'kebaikan', 'Tidak semua orang mungkin memiliki pandangan atau nilai yang sama terhadap tindakan kebaikan', 3),
(15, 'Bagaimana Kebaikan Dapat Meningkatkan Kesejahteraan Mental?', 'kebaikan', 'Kebaikan yang dilakukan dengan tulus dan tanpa pamrih dapat memberikan dampak positif pada kesejahteraan mental seseorang.', 3),
(16, 'Bagaimana Kebaikan Mempengaruhi Lingkungan Kerja?', 'kebaikan', 'Kebaikan di tempat kerja dapat menciptakan atmosfer yang positif, mendorong tim untuk bekerja sama, dan meningkatkan produktivitas secara keseluruhan.', 3),
(32, 'Mengapa Kejujuran Penting dalam Hubungan?', 'kejujuran', 'Pilih jawaban yang mencerminkan pandangan positif terhadap dampak kejujuran terhadap kualitas hidup.', 3),
(33, 'Bagaimana Kejujuran Mempengaruhi Kualitas Hidup?', 'kejujuran', 'Pilih jawaban yang paling sesuai dengan dampak kejujuran terhadap kualitas hidup.', 3),
(34, 'Apakah Kehalusan Bicara Dapat Menutupi Kejujuran?', 'kejujuran', 'Pilih jawaban yang menunjukkan bahwa kehalusan bicara tidak selalu mengindikasikan kejujuran, tetapi dapat tergantung pada situasi atau niatnya.', 3),
(35, 'Apakah Kejujuran Bersifat Subyektif atau Objektif?', 'kejujuran', 'Pilihlah jawaban yang mengindikasikan sifat kejujuran sebagai sesuatu yang dapat diukur atau dinilai secara independen dari sudut pandang individu. ', 3),
(36, 'Mengapa Kejujuran Dapat Membantu Mengurangi Konflik?', 'kejujuran', 'Kejujuran menciptakan dasar komunikasi yang jelas dan dapat dipercaya.', 3),
(41, 'test lagi', 'tanggung-jawab', 'petunjuk', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_user` varchar(10) NOT NULL,
  `bio` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `role_user`, `bio`) VALUES
(2, 'Zaki Jamali Arafi', 'arafi', '$2y$10$lFHy/i4qGFk8It1Y1G8YSeo7Gv4k3GUAb8N7RbCTHMAJOn6mQxgfK', 'pinocchio', 'ini adalah bio'),
(3, 'Geppetto', 'geppetto', '$2y$10$hIytKG8QJoljAElwpT2H9OzT6X.jEMJ93OBE1UiPi.v6zwywugqDu', 'geppetto', 'ini akun admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_pertanyaan` (`id_pertanyaan`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`id_pertanyaan`) REFERENCES `pertanyaan` (`id_pertanyaan`);

--
-- Constraints for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD CONSTRAINT `pertanyaan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
