-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 04:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabungan_siswa`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_lengkap`
-- (See below for the actual view)
--
CREATE TABLE `data_lengkap` (
`nisn` varchar(20)
,`nama` varchar(50)
,`tanggal_lahir` date
,`no_telp` varchar(15)
,`saldo` varchar(20)
,`no_tabungan` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `data_tabungan`
--

CREATE TABLE `data_tabungan` (
  `no_tabungan` varchar(20) NOT NULL,
  `saldo` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_tabungan`
--

INSERT INTO `data_tabungan` (`no_tabungan`, `saldo`, `nama`) VALUES
('001', '0', 'ADINDA PUTRI KIRANA'),
('002', '0', 'ALIYA BASNA'),
('003', '0', 'APRIZAL THREE PUTRA PERMADI'),
('004', '0', 'ARYA PUTRA PERMANA'),
('005', '0', 'CAKRA NURHIDAYAH'),
('006', '0', 'CITRA APRIANI KURNIA SARI'),
('007', '0', 'DELA ELYANA PUTRI'),
('008', '0', 'DEVA NURMAULUDDIAH'),
('009', '0', 'DICKY APRIZAL'),
('010', '0', 'FA IQ AL FARUQ'),
('011', '0', 'FAJRIAH FARZANA'),
('012', '0', 'FERA LAELA RAMDANIA'),
('014', '0', 'FITRI SETIA LESTARI'),
('015', '0', 'KEI SATRIA MALIK AL-AZIZ'),
('016', '0', 'M ALFAUZI FAHRUL ZABAR'),
('017', ' 0', 'M. NAZARUL HAFIDIN'),
('018', '0', 'MARSYA NABILIANTI'),
('019', '0', 'MAUDYA ALIFAH'),
('021', '0', 'MALEAKHI AULANA SAPUTRA'),
('022', '0', 'MUHAMMAD RIDWAN NURDIANSYAH'),
('023', '0', 'MUHAMMAD RIFKY ARIFIN'),
('024', '0', 'NABILA SHALSABILLA'),
('025', ' 0', 'NURCHOLIK WIJAYA SAPUTRA'),
('026', '0', 'RAIHAN RIFKI NUGRAHA SIREGAR'),
('027 ', '0', 'RD. NENG FENNA GRASELLA'),
('028', '0', 'RINA DWI ARINY'),
('029', '0', 'RINDIANI EKA PUTRI'),
('030', '0', 'RIZAL ZAKARIA'),
('031', '0', 'SITI AMANAH FAUZIAH'),
('032', '0', 'SITI NURIAH'),
('033', '0', 'SYALWA SUCI N'),
('034', '0', 'TAZAKA RAFI SAPUTRA'),
('035', '0', 'YUSRINA FATHIN ZAKIRAH'),
('036', '0', 'YUSUP NURIYAMAN');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama`, `tanggal_lahir`, `no_telp`) VALUES
('0050616981', 'RD. NENG FENNA GRASELLA', '2023-10-07', ''),
('0054375958', 'FITRI SETIA LESTARI', '2006-10-28', ''),
('0061049872', 'M ALFAUZI FAHRUL ZABAR', '2023-10-05', ''),
('0063688976', 'CAKRA NURHIDAYAH', '2023-10-06', ''),
('0065335705', 'DELA ELYANA PUTRI', '2023-10-05', ''),
('0065457226 ', 'FAJRIAH FARZANA', '2006-05-04', '082295169426'),
('0065492611', 'TAZAKA RAFI SAPUTRA', '2023-10-06', ''),
('0065672035', 'MUHAMMAD RIFKY ARIFIN', '2023-10-06', ''),
('0065988498', 'FERA LAELA RAMDANIA', '2023-10-06', ''),
('0066134562', 'M. NAZARUL HAFIDIN', '2023-10-04', ''),
('0066477495', 'MAUDYA ALIFAH', '2023-10-06', ''),
('0067041975', 'NABILA SHALSABILLA', '2023-10-19', ''),
('0068607209 ', 'SITI AMANAH FAUZIAH', '2023-10-05', ''),
('0069407898', 'SYALWA SUCI N', '2023-10-06', ''),
('0069820926 ', 'MEGA RAHAYU', '2023-10-07', ''),
('0069860545', 'MARSYA NABILIANTI', '2023-10-06', ''),
('0071907799', 'DICKY APRIZAL', '2023-10-18', ''),
('0072019607', 'NURCHOLIK WIJAYA SAPUTRA', '2007-04-15', ''),
('0072217999', 'CITRA APRIANI KURNIA SARI', '2023-10-06', ''),
('0072362971', 'ALIYA BASNA', '2023-10-06', ''),
('0073185758', 'SITI NURIAH', '2007-05-10', '0895 3844 1648 '),
('0073387928', 'YUSRINA FATHIN ZAKIRAH', '2023-10-06', ''),
('0073520959', 'KEI SATRIA MALIK AL-AZIZ', '2007-04-25', ''),
('0074093667', 'FIKRI DZAKI ALI', '2023-10-05', ''),
('0074130307', 'RIZAL ZAKARIA', '2023-10-12', '0838 9210 1969'),
('0074450903', 'MUHAMMAD MAULANA SAPUTRA', '2007-03-28', '089603351567'),
('0074511264', 'RAIHAN RIFKI NUGRAHA SIREGAR', '2023-10-14', ''),
('0074593922', 'RINA DWI ARINY', '2023-10-13', ''),
('0076082681 ', 'APRIZAL THREE PUTRA PERMADI', '2007-04-20', '082129518879'),
('0077119122', 'DEVA NURMAULUDDIAH', '2023-10-05', ''),
('0077325298', 'MUHAMMAD RIDWAN NURDIANSYAH', '2023-10-06', '08996949226'),
('0078450277', 'FA IQ AL FARUQ', '2023-10-13', ''),
('0135263316', 'RINDIANI EKA PUTRI', '2023-10-13', ''),
('123123', 'ALHinuman', '2007-09-09', ''),
('192007225', 'ARYA PUTRA PERMANA', '2023-10-13', ''),
('3065520029', 'YUSUP NURIYAMAN', '2023-10-05', ''),
('3079073990', 'ADINDA PUTRI KIRANA', '2023-10-05', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `terakhir_login` datetime DEFAULT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `terakhir_login`, `role`) VALUES
(5, 'kei123', '$2y$10$txQtGsyiC7ulF0LNE/hOR.DuMm8Usermeb4RWu0AnGiymB0vLiovu', 'Kei', '2023-12-06 08:15:08', 'admin'),
(8, 'adinda', '$2y$10$SdNGxPMR2sL6CTo/d8CfB.tBqFz1lebNP7jf39PoBhAp.vnNwtdgK', 'ADINDA PUTRI KIRANA', NULL, 'user'),
(9, 'aliya', '$2y$10$7qLdizKEkPVFYiy7dsx0fu4rwKck9eDcMliS1BzsLzODYYwdX6kLG', 'ALIYA BASNA', NULL, 'user'),
(10, 'aprizal', '$2y$10$3/w9VQX1934xgZgz6eYuU.eraUMslHxb8PrZcWiX4oWomT4l3K/tC', 'APRIZAL THREE PUTRA PERMADI', '2023-11-27 11:51:10', 'user'),
(11, 'arya', '$2y$10$bL7/IwnwKVQ3Qf0qOMqzKes2GeZFH8sPwSFRsbgx00RY/G8zzt7TK', 'ARYA PUTRA PERMANA', '2023-11-27 09:28:54', 'user'),
(12, 'cakra', '$2y$10$uwSdRyJSBRxJ8tqxBorJu.cBMZkIroX3ishJB/78LMmYhfpEVuIhK', 'CAKRA NURHIDAYAH', NULL, 'user'),
(13, 'citra', '$2y$10$86NVnJD3QzMAklj0etdKbelhbYd2/WCdNd05JpLmY0RRXlOnLoaEm', 'CITRA APRIANI KURNIA SARI', NULL, 'user'),
(14, 'dela', '$2y$10$VqpFptAl1cbjLPQAfFPSZeuex7g0boTc9AVkbebR7ISUYhwOUmc26', 'DELA ELYANA PUTRI', '2023-11-21 15:44:35', 'user'),
(15, 'deva', '$2y$10$S6jZHK6jg7rFQUXMuTl8SeNYXLuTM1YdLb4JPOTGoAGU2aWN276re', 'DEVA NURMAULUDDIAH', NULL, 'user'),
(16, 'dicky', '$2y$10$MAtWgVvKPfcQSxpcNeJd.uNsSh9Aqavnxk3CCgghzaft6EKj2n/OK', 'DICKY APRIZAL', NULL, 'user'),
(17, 'faiq', '$2y$10$GBLX31FcsRbC1ens07fwueHgXoPIXclUg5iK.DntrV/Emk0MUqjku', 'FA IQ AL FARUQ', NULL, 'user'),
(18, 'fajriah', '$2y$10$9YUersJCCHV/tMTaSW7c7eaKS3XTCs4c44QaVjDXKoiWW7tJrZarS', 'FAJRIAH FARZANA', NULL, 'user'),
(19, 'fera', '$2y$10$Tj28j26ikSjpCa5pKe6znuN9oU01PgQN3EL3pzog503s5IRL4OBjC', 'FERA LAELA RAMDANIA', NULL, 'user'),
(23, 'rizal', '$2y$10$ATIDQCS5vzdnuarvh0UqC.ZGGBbOmFONl2NN5Z89iK9VBKnHeFMGG', 'RIZAL ZAKARIA', '2023-11-21 15:46:37', 'user'),
(25, 'fitri123', '$2y$10$hD5wxa22ZpRlpji8/Z0et.XVxTzlN33K7gN6Bc8rWZWbqn.avHjKa', 'FITRI SETIA LESTARI', '2023-11-28 07:49:31', 'user');

-- --------------------------------------------------------

--
-- Structure for view `data_lengkap`
--
DROP TABLE IF EXISTS `data_lengkap`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_lengkap`  AS SELECT `siswa`.`nisn` AS `nisn`, `siswa`.`nama` AS `nama`, `siswa`.`tanggal_lahir` AS `tanggal_lahir`, `siswa`.`no_telp` AS `no_telp`, `data_tabungan`.`saldo` AS `saldo`, `data_tabungan`.`no_tabungan` AS `no_tabungan` FROM (`siswa` left join `data_tabungan` on(`siswa`.`nama` = `data_tabungan`.`nama`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_tabungan`
--
ALTER TABLE `data_tabungan`
  ADD PRIMARY KEY (`no_tabungan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
