-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 08:39 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tellme_basdat`
--

-- --------------------------------------------------------

--
-- Table structure for table `td_sub_topik`
--

CREATE TABLE `td_sub_topik` (
  `td_sub_topik_id` int(10) UNSIGNED NOT NULL,
  `td_sub_topik_title` varchar(64) DEFAULT NULL,
  `td_sub_topik_content` text DEFAULT NULL,
  `td_sub_topik_create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tm_pegawai_id` int(10) UNSIGNED NOT NULL,
  `tm_topik_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tm_forgot_password`
--

CREATE TABLE `tm_forgot_password` (
  `tm_forgot_password_id` int(10) UNSIGNED NOT NULL,
  `tm_forgot_password_link` varchar(255) DEFAULT NULL,
  `tm_forgot_password_is_active` tinyint(1) DEFAULT NULL,
  `tm_forgot_password_create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `tm_login_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tm_jawaban`
--

CREATE TABLE `tm_jawaban` (
  `tm_jawaban_id` int(10) UNSIGNED NOT NULL,
  `tm_jawaban_kode` varchar(32) DEFAULT NULL,
  `tm_jawaban_label` varchar(128) DEFAULT NULL,
  `tm_jawaban_point` int(11) DEFAULT NULL,
  `tm_jawaban_keterangan` varchar(128) DEFAULT NULL,
  `tm_jawaban_create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tm_pertanyaan_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tm_level`
--

CREATE TABLE `tm_level` (
  `tm_level_id` tinyint(3) UNSIGNED NOT NULL,
  `tm_level_nama` varchar(32) DEFAULT NULL,
  `tm_level_create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tm_login`
--

CREATE TABLE `tm_login` (
  `tm_login_id` int(10) UNSIGNED NOT NULL,
  `tm_login_username` varchar(32) NOT NULL,
  `tm_login_password` varchar(255) NOT NULL,
  `tm_login_create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tm_login_update_at` datetime DEFAULT NULL,
  `tm_user_access_id` tinyint(3) UNSIGNED NOT NULL,
  `tm_pegawai_id` int(3) UNSIGNED DEFAULT NULL,
  `tm_mahasiswa_id` int(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tm_login`
--

INSERT INTO `tm_login` (`tm_login_id`, `tm_login_username`, `tm_login_password`, `tm_login_create_at`, `tm_login_update_at`, `tm_user_access_id`, `tm_pegawai_id`, `tm_mahasiswa_id`) VALUES
(1, 'pegawai', '123', '2020-09-24 03:01:45', '2020-09-24 09:45:27', 1, NULL, NULL),
(5, 'mahasiswa', '123', '2020-09-29 02:57:19', '2020-09-29 09:55:35', 2, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tm_mahasiswa`
--

CREATE TABLE `tm_mahasiswa` (
  `tm_mahasiswa_id` int(10) UNSIGNED NOT NULL,
  `tm_mahasiswa_nim` varchar(12) NOT NULL,
  `tm_mahasiswa_nama` varchar(64) NOT NULL,
  `tm_mahasiswa_jurusan` varchar(64) NOT NULL,
  `tm_mahasiswa_prodi` varchar(64) NOT NULL,
  `tm_mahasiswa_semester` tinyint(4) NOT NULL,
  `tm_mahasiswa_tanggal_lahir` date NOT NULL,
  `tm_mahasiswa_email` varchar(64) NOT NULL,
  `tm_mahasiswa_point` smallint(5) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tm_mahasiswa`
--

INSERT INTO `tm_mahasiswa` (`tm_mahasiswa_id`, `tm_mahasiswa_nim`, `tm_mahasiswa_nama`, `tm_mahasiswa_jurusan`, `tm_mahasiswa_prodi`, `tm_mahasiswa_semester`, `tm_mahasiswa_tanggal_lahir`, `tm_mahasiswa_email`, `tm_mahasiswa_point`) VALUES
(1, 'E31182235', 'Tutik Haryono', 'Teknologi Informasi', 'Manajemen Informatika', 5, '2000-02-29', 'groot@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tm_pegawai`
--

CREATE TABLE `tm_pegawai` (
  `tm_pegawai_id` int(10) UNSIGNED NOT NULL,
  `tm_pegawai_nip` bigint(20) UNSIGNED NOT NULL,
  `tm_pegawai_nama` varchar(64) NOT NULL,
  `tm_pegawai_email` varchar(64) NOT NULL,
  `tm_pegawai_no_telp` varchar(16) NOT NULL,
  `tm_pegawai_alamat` varchar(32) DEFAULT NULL,
  `tm_pegawai_foto` varchar(128) DEFAULT NULL,
  `tm_pegawai_create_at` timestamp NULL DEFAULT NULL,
  `tm_staff_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tm_pertanyaan`
--

CREATE TABLE `tm_pertanyaan` (
  `tm_pertanyaan_id` int(10) UNSIGNED NOT NULL,
  `tm_pertanyaan_kode` varchar(32) DEFAULT NULL,
  `tm_pertanyaan_label` varchar(128) DEFAULT NULL,
  `tm_pertanyaan_create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tm_quiz_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tm_quiz`
--

CREATE TABLE `tm_quiz` (
  `tm_quiz_id` int(10) UNSIGNED NOT NULL,
  `tm_quiz_kode` varchar(32) DEFAULT NULL,
  `tm_quiz_label` varchar(64) DEFAULT NULL,
  `tm_quiz_poin_unlock` int(11) DEFAULT NULL,
  `tm_quiz_date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tm_topik_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tm_staff`
--

CREATE TABLE `tm_staff` (
  `tm_staff_id` tinyint(3) UNSIGNED NOT NULL,
  `tm_staff_label` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Administrator,\r\nTeknisi,\r\nDosen';

-- --------------------------------------------------------

--
-- Table structure for table `tm_topik`
--

CREATE TABLE `tm_topik` (
  `tm_topik_id` int(10) UNSIGNED NOT NULL,
  `tm_topik_nama` varchar(64) DEFAULT NULL,
  `tm_topik_create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tm_pegawai_id` int(10) UNSIGNED NOT NULL,
  `tm_level_id` tinyint(10) UNSIGNED NOT NULL,
  `tm_topik_poin_open` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tm_trial_topik`
--

CREATE TABLE `tm_trial_topik` (
  `tm_trial_topik_id` int(10) UNSIGNED NOT NULL,
  `tm_trial_topik_soal` varchar(255) NOT NULL,
  `tm_trial_topik_deskripsi` varchar(255) DEFAULT NULL,
  `tm_trial_topik_count_try` int(11) DEFAULT NULL,
  `tm_trial_topik_point` int(11) DEFAULT NULL,
  `tm_trial_topik_create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tm_topik_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tm_user_access`
--

CREATE TABLE `tm_user_access` (
  `tm_user_access_id` tinyint(3) UNSIGNED NOT NULL,
  `tm_user_access_nama` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tm_user_access`
--

INSERT INTO `tm_user_access` (`tm_user_access_id`, `tm_user_access_nama`) VALUES
(1, 'pegawai'),
(2, 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tr_jawaban_mahasiswa`
--

CREATE TABLE `tr_jawaban_mahasiswa` (
  `tr_jawaban_mahasiswa_id` int(10) UNSIGNED NOT NULL,
  `tr_jawaban_mahasiswa_point` int(11) DEFAULT NULL,
  `tr_jawaban_mahasiswa_create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `tm_jawaban_id` int(10) UNSIGNED NOT NULL,
  `tm_mahasiswa_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tr_result_trial`
--

CREATE TABLE `tr_result_trial` (
  `tr_result_trial_id` int(10) UNSIGNED NOT NULL,
  `tr_result_trial_create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tr_result_trial_is_success` tinyint(1) DEFAULT NULL,
  `tm_mahasiswa_id` int(10) UNSIGNED NOT NULL,
  `tm_trial_topik_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `td_sub_topik`
--
ALTER TABLE `td_sub_topik`
  ADD PRIMARY KEY (`td_sub_topik_id`),
  ADD KEY `subtopik_to_topik` (`tm_topik_id`),
  ADD KEY `subtopik_to_pegawai` (`tm_pegawai_id`);

--
-- Indexes for table `tm_forgot_password`
--
ALTER TABLE `tm_forgot_password`
  ADD PRIMARY KEY (`tm_forgot_password_id`),
  ADD KEY `forgot_to_login` (`tm_login_id`);

--
-- Indexes for table `tm_jawaban`
--
ALTER TABLE `tm_jawaban`
  ADD PRIMARY KEY (`tm_jawaban_id`),
  ADD KEY `jawaban_to_pertanyaan` (`tm_pertanyaan_id`);

--
-- Indexes for table `tm_level`
--
ALTER TABLE `tm_level`
  ADD PRIMARY KEY (`tm_level_id`);

--
-- Indexes for table `tm_login`
--
ALTER TABLE `tm_login`
  ADD PRIMARY KEY (`tm_login_id`),
  ADD KEY `login_to_access` (`tm_user_access_id`),
  ADD KEY `login_to_pegawai` (`tm_pegawai_id`),
  ADD KEY `login_to_mahasiswa` (`tm_mahasiswa_id`);

--
-- Indexes for table `tm_mahasiswa`
--
ALTER TABLE `tm_mahasiswa`
  ADD PRIMARY KEY (`tm_mahasiswa_id`);

--
-- Indexes for table `tm_pegawai`
--
ALTER TABLE `tm_pegawai`
  ADD PRIMARY KEY (`tm_pegawai_id`),
  ADD KEY `tr_staff_pegawai` (`tm_staff_id`);

--
-- Indexes for table `tm_pertanyaan`
--
ALTER TABLE `tm_pertanyaan`
  ADD PRIMARY KEY (`tm_pertanyaan_id`),
  ADD KEY `pertanyaan_to_quiz` (`tm_quiz_id`);

--
-- Indexes for table `tm_quiz`
--
ALTER TABLE `tm_quiz`
  ADD PRIMARY KEY (`tm_quiz_id`),
  ADD KEY `quiz_to_topik` (`tm_topik_id`);

--
-- Indexes for table `tm_staff`
--
ALTER TABLE `tm_staff`
  ADD PRIMARY KEY (`tm_staff_id`);

--
-- Indexes for table `tm_topik`
--
ALTER TABLE `tm_topik`
  ADD PRIMARY KEY (`tm_topik_id`),
  ADD KEY `topik_to_level` (`tm_level_id`),
  ADD KEY `topik_to_pegawai` (`tm_pegawai_id`);

--
-- Indexes for table `tm_trial_topik`
--
ALTER TABLE `tm_trial_topik`
  ADD PRIMARY KEY (`tm_trial_topik_id`),
  ADD KEY `trialtopik_to_topik` (`tm_topik_id`);

--
-- Indexes for table `tm_user_access`
--
ALTER TABLE `tm_user_access`
  ADD PRIMARY KEY (`tm_user_access_id`);

--
-- Indexes for table `tr_jawaban_mahasiswa`
--
ALTER TABLE `tr_jawaban_mahasiswa`
  ADD PRIMARY KEY (`tr_jawaban_mahasiswa_id`),
  ADD KEY `trjawabanmahasiswa_to_tmmahasiswa` (`tm_mahasiswa_id`),
  ADD KEY `trjawabanmahasiswa_to_tmjawaban` (`tm_jawaban_id`);

--
-- Indexes for table `tr_result_trial`
--
ALTER TABLE `tr_result_trial`
  ADD PRIMARY KEY (`tr_result_trial_id`),
  ADD KEY `resulttrial_to_tmtrial` (`tm_trial_topik_id`),
  ADD KEY `resulttrial_to_mahasiswa` (`tm_mahasiswa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tm_forgot_password`
--
ALTER TABLE `tm_forgot_password`
  MODIFY `tm_forgot_password_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tm_jawaban`
--
ALTER TABLE `tm_jawaban`
  MODIFY `tm_jawaban_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tm_login`
--
ALTER TABLE `tm_login`
  MODIFY `tm_login_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tm_mahasiswa`
--
ALTER TABLE `tm_mahasiswa`
  MODIFY `tm_mahasiswa_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tm_pegawai`
--
ALTER TABLE `tm_pegawai`
  MODIFY `tm_pegawai_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tm_quiz`
--
ALTER TABLE `tm_quiz`
  MODIFY `tm_quiz_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tm_staff`
--
ALTER TABLE `tm_staff`
  MODIFY `tm_staff_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tm_trial_topik`
--
ALTER TABLE `tm_trial_topik`
  MODIFY `tm_trial_topik_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tr_jawaban_mahasiswa`
--
ALTER TABLE `tr_jawaban_mahasiswa`
  MODIFY `tr_jawaban_mahasiswa_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tr_result_trial`
--
ALTER TABLE `tr_result_trial`
  MODIFY `tr_result_trial_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `td_sub_topik`
--
ALTER TABLE `td_sub_topik`
  ADD CONSTRAINT `subtopik_to_pegawai` FOREIGN KEY (`tm_pegawai_id`) REFERENCES `tm_pegawai` (`tm_pegawai_id`),
  ADD CONSTRAINT `subtopik_to_topik` FOREIGN KEY (`tm_topik_id`) REFERENCES `tm_topik` (`tm_topik_id`);

--
-- Constraints for table `tm_forgot_password`
--
ALTER TABLE `tm_forgot_password`
  ADD CONSTRAINT `forgot_to_login` FOREIGN KEY (`tm_login_id`) REFERENCES `tm_login` (`tm_login_id`);

--
-- Constraints for table `tm_jawaban`
--
ALTER TABLE `tm_jawaban`
  ADD CONSTRAINT `jawaban_to_pertanyaan` FOREIGN KEY (`tm_pertanyaan_id`) REFERENCES `tm_pertanyaan` (`tm_pertanyaan_id`) ON DELETE CASCADE;

--
-- Constraints for table `tm_login`
--
ALTER TABLE `tm_login`
  ADD CONSTRAINT `login_to_access` FOREIGN KEY (`tm_user_access_id`) REFERENCES `tm_user_access` (`tm_user_access_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `login_to_mahasiswa` FOREIGN KEY (`tm_mahasiswa_id`) REFERENCES `tm_mahasiswa` (`tm_mahasiswa_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `login_to_pegawai` FOREIGN KEY (`tm_pegawai_id`) REFERENCES `tm_pegawai` (`tm_pegawai_id`) ON DELETE CASCADE;

--
-- Constraints for table `tm_pegawai`
--
ALTER TABLE `tm_pegawai`
  ADD CONSTRAINT `tr_staff_pegawai` FOREIGN KEY (`tm_staff_id`) REFERENCES `tm_staff` (`tm_staff_id`);

--
-- Constraints for table `tm_pertanyaan`
--
ALTER TABLE `tm_pertanyaan`
  ADD CONSTRAINT `pertanyaan_to_quiz` FOREIGN KEY (`tm_quiz_id`) REFERENCES `tm_quiz` (`tm_quiz_id`);

--
-- Constraints for table `tm_quiz`
--
ALTER TABLE `tm_quiz`
  ADD CONSTRAINT `quiz_to_topik` FOREIGN KEY (`tm_topik_id`) REFERENCES `tm_topik` (`tm_topik_id`) ON DELETE CASCADE;

--
-- Constraints for table `tm_topik`
--
ALTER TABLE `tm_topik`
  ADD CONSTRAINT `topik_to_level` FOREIGN KEY (`tm_level_id`) REFERENCES `tm_level` (`tm_level_id`),
  ADD CONSTRAINT `topik_to_pegawai` FOREIGN KEY (`tm_pegawai_id`) REFERENCES `tm_pegawai` (`tm_pegawai_id`);

--
-- Constraints for table `tm_trial_topik`
--
ALTER TABLE `tm_trial_topik`
  ADD CONSTRAINT `trialtopik_to_topik` FOREIGN KEY (`tm_topik_id`) REFERENCES `tm_topik` (`tm_topik_id`);

--
-- Constraints for table `tr_jawaban_mahasiswa`
--
ALTER TABLE `tr_jawaban_mahasiswa`
  ADD CONSTRAINT `trjawabanmahasiswa_to_tmjawaban` FOREIGN KEY (`tm_jawaban_id`) REFERENCES `tm_jawaban` (`tm_jawaban_id`),
  ADD CONSTRAINT `trjawabanmahasiswa_to_tmmahasiswa` FOREIGN KEY (`tm_mahasiswa_id`) REFERENCES `tm_mahasiswa` (`tm_mahasiswa_id`);

--
-- Constraints for table `tr_result_trial`
--
ALTER TABLE `tr_result_trial`
  ADD CONSTRAINT `resulttrial_to_mahasiswa` FOREIGN KEY (`tm_mahasiswa_id`) REFERENCES `tm_mahasiswa` (`tm_mahasiswa_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `resulttrial_to_tmtrial` FOREIGN KEY (`tm_trial_topik_id`) REFERENCES `tm_trial_topik` (`tm_trial_topik_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
