-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 29 Sep 2023 pada 09.46
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pusatsains2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cetak_sertifikats`
--

CREATE TABLE `cetak_sertifikats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `No_Sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_absensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NPelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DPelatihan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Kode_Enkripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kehadiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `J_Kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No_tlpn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cetak_sertifikats`
--

INSERT INTO `cetak_sertifikats` (`id`, `No_Sertifikat`, `id_absensi`, `No_peserta`, `Nama_peserta`, `NPelatihan`, `DPelatihan`, `Kode_Enkripsi`, `kehadiran`, `J_Kelamin`, `Nilai`, `No_tlpn`, `email`, `alamat`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'No.NP10010/PUSATSAINS/Pembuatan OJS/2022-11-01', '12', 'NP10010', 'Albet Ubaidi', 'Pembuatan OJS', NULL, '177,111,39,177,158,185,3,3,185,3,81,158,51,134,54,118,134,54,63,177,134,81,158,50,10,98,151,5,156,5,110,32,6,62,134,81,101,3,101,101,23,185,185,23,3,185', 'Hadir', 'Laki-Laki', 'A', '082215293663', 'albet.ubaidi139@gmail.com', 'Kuningan', NULL, '2022-11-26 09:02:59', '2022-11-26 09:02:59'),
(6, 'No.NP10001/PUSATSAINS/APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO/2022-11-17', '3', 'NP10001', 'Arie Wibowo Khurniawan', 'APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO', NULL, '177,111,39,177,158,185,3,3,3,185,81,158,51,134,54,118,134,54,63,177,134,81,54,158,76,63,27,54,134,63,32,158,103,177,31,6,76,54,123,54,177,32,17,54,118,54,32,27,51,54,76,63,118,54,118,63,36,32,177,137,63,137,6,81,101,3,101,101,23,185,185,23,185,55', 'Hadir', 'Laki-Laki', 'A', '089999999999', 'a@gmail.com', 'Kuningan', NULL, '2022-11-26 09:19:56', '2022-11-26 09:19:56'),
(7, 'No.NP10002/PUSATSAINS/APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO/2023-09-20', '4', 'NP10002', 'Dr. Elly Jumiati, S.P., M.P.', 'APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO', NULL, '177,111,39,177,158,185,3,3,3,101,81,158,51,134,54,118,134,54,63,177,134,81,54,158,76,63,27,54,134,63,32,158,103,177,31,6,76,54,123,54,177,32,17,54,118,54,32,27,51,54,76,63,118,54,118,63,36,32,177,137,63,137,6,81,101,3,101,85,23,3,28,23,101,3', 'Valid', 'Perempuan', 'BC', '089999999999', 'b@gmail.com', 'Kuningan', NULL, '2023-09-19 20:05:36', '2023-09-19 20:05:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datajenispelatihans`
--

CREATE TABLE `datajenispelatihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `KPelatihan` double NOT NULL,
  `NPelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DPelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datajenispelatihans`
--

INSERT INTO `datajenispelatihans` (`id`, `KPelatihan`, `NPelatihan`, `DPelatihan`, `created_at`, `updated_at`) VALUES
(3, 101, 'APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO', '8', '2022-11-26 08:33:27', '2022-11-26 08:33:27'),
(4, 102, 'ANALISIS DATA METODE SEM (STRUCTURAL EQUATION MODELLING) DENGAN MENGGUNAKAN SPSS AMOS', '4', '2022-11-26 08:33:46', '2022-11-26 08:33:46'),
(5, 103, 'Matrix of Cross Impact Multiplications Applied to a Clasification (MICMAC)', '4', '2022-11-26 08:34:07', '2022-11-26 08:34:07'),
(6, 104, 'MULTI DIMENSIONAL SCALLING', '4', '2022-11-26 08:34:30', '2022-11-26 08:34:30'),
(7, 105, 'PENGELOLAAN JURNAL ONLINE DENGAN OPEN JOURNAL SYSTEM (OJS)', '4', '2022-11-26 08:34:50', '2022-11-26 08:34:50'),
(8, 106, 'INTEPRETATIVE STRUCTURAL MODELLING (ISM)', '8', '2022-11-26 08:35:08', '2022-11-26 08:35:08'),
(9, 107, 'ANALISIS DATA METODE SEM (STRUCTURAL EQUATION MODELLING) DENGAN MENGGUNAKAN SPSS AMOS', '4', '2022-11-26 08:35:27', '2022-11-26 08:35:27'),
(10, 108, 'INDEKSASI DOAJ (DIRECTORY OF OPEN ACCESS JOURNALS)', '4', '2022-11-26 08:35:41', '2022-11-26 08:35:41'),
(11, 109, 'ANALISIS DATA METODE SEM (STRUCTURAL EQUATION MODELLING) DENGAN MENGGUNAKAN SPSS AMOS', '4', '2022-11-26 08:36:44', '2022-11-26 08:36:44'),
(12, 110, 'Pembuatan OJS', '8', '2022-11-26 08:37:13', '2022-11-26 08:37:13'),
(13, 111, 'Pengolahan Data SPSS', '8', '2022-11-26 08:37:35', '2022-11-26 08:37:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datanilais`
--

CREATE TABLE `datanilais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `No_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NPelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `J_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No_tlpn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kehadiran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nilai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `No_Sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datanilais`
--

INSERT INTO `datanilais` (`id`, `No_peserta`, `Nama_peserta`, `NPelatihan`, `J_kelamin`, `No_tlpn`, `email`, `alamat`, `kehadiran`, `tanggal`, `Nilai`, `No_Sertifikat`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'NP10001', 'Ariesvs Wibowo Khurniawan', 'APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO', 'Laki-Laki', '89999999999', 'a@gmail.com', 'Kuningan', 'Hadir', '2022-11-19', NULL, 'No.NP10001/PUSATSAINS/APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO/2022-11-19', NULL, '2022-11-26 08:39:07', '2023-09-19 20:05:13'),
(4, 'NP10002', 'Dr. Elly Jumiati, S.P., M.P.', 'APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO', 'Perempuan', '089999999999', 'b@gmail.com', 'Kuningan', 'Valid', '2023-09-20', 'BC', 'No.NP10002/PUSATSAINS/APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO/2023-09-20', NULL, '2022-11-26 08:44:38', '2023-09-19 20:05:33'),
(5, 'NP10003', 'Fadillah Sabri, S.T., M.Eng.', 'APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO', 'Laki-Laki', '089999999999', 'c@gmail.com', 'Ciawi', NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:45:46', '2022-11-26 08:45:46'),
(6, 'NP10004', 'Rusnilawati, M.Pd.', 'APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO', 'Perempuan', '089999999999', 'd@gmail.com', 'Cirebon', NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:46:15', '2022-11-26 08:46:15'),
(7, 'NP10005', 'Rini Dwiyani Hadiwidjaja, S.E., M.Si.', 'ANALISIS DATA METODE SEM (STRUCTURAL EQUATION MODELLING) DENGAN MENGGUNAKAN SPSS AMOS', 'Perempuan', '089999999999', 'e@gmail.com', 'Cirebon', NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:46:46', '2022-11-26 08:46:46'),
(8, 'NP10006', 'Yanuar Trisnowati, S.E., M.M.', 'ANALISIS DATA METODE SEM (STRUCTURAL EQUATION MODELLING) DENGAN MENGGUNAKAN SPSS AMOS', 'Laki-Laki', '089999999999', 'f@gmail.com', 'Cirebon', NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:47:34', '2022-11-26 08:47:34'),
(9, 'NP10007', 'Dr. Minsarnawati, SKM, M.Kes', 'ANALISIS DATA METODE SEM (STRUCTURAL EQUATION MODELLING) DENGAN MENGGUNAKAN SPSS AMOS', 'Perempuan', '089999999999', 'g@gmail.com', 'Majalengka', NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:48:51', '2022-11-26 08:48:51'),
(10, 'NP10008', 'Ir Kepas Antoni A. Manurung, MM.', 'ANALISIS DATA METODE SEM (STRUCTURAL EQUATION MODELLING) DENGAN MENGGUNAKAN SPSS AMOS', 'Laki-Laki', '089999999999', 'h@gmail.com', 'Majalengka', NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:49:26', '2022-11-26 08:49:26'),
(11, 'NP10009', 'Imam Ardiansyah, S.ST.Par.,MM.Par.', 'Matrix of Cross Impact Multiplications Applied to a Clasification (MICMAC)', 'Laki-Laki', '089999999999', 'i@gmail.com', 'Majalengka', NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:50:19', '2022-11-26 08:50:19'),
(12, 'NP10010', 'Albet Ubaidi', 'Pembuatan OJS', 'Laki-Laki', '082215293663', 'albet.ubaidi139@gmail.com', 'Kuningan', 'Hadir', '2022-11-01', 'A', 'No.NP10010/PUSATSAINS/Pembuatan OJS/2022-11-01', NULL, '2022-11-26 08:51:32', '2022-11-26 09:02:22'),
(13, 'NP10011', 'Imam Ardiansyah, S.ST.Par.,MM.Par.', 'MULTI DIMENSIONAL SCALLING', 'Laki-Laki', '089999999999', 'j@gmail.com', 'Majalengka', NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:53:44', '2022-11-26 08:53:44'),
(14, 'NP10012', 'Setyowati,SP.MP', 'MULTI DIMENSIONAL SCALLING', 'Perempuan', '089999999999', 'k@gmail.com', 'Ciawi', NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:54:22', '2022-11-26 08:54:22'),
(15, 'NP10013', 'M. Johar Rudin, S.Pi, M.Si', 'PENGELOLAAN JURNAL ONLINE DENGAN OPEN JOURNAL SYSTEM (OJS)', 'Laki-Laki', '089999999999', 'l@gmail.com', 'Kuningan', NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:54:59', '2022-11-26 08:54:59'),
(16, 'NP10014', 'Ekaning Siti Rahayu, S.TP., MP.', 'INTEPRETATIVE STRUCTURAL MODELLING (ISM)', 'Perempuan', '089999999999', 'm@gmail.com', 'Cirebon', NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:55:34', '2022-11-26 08:55:34'),
(17, 'NP10015', 'Jongky W.A Kamagi, M.Si', 'INTEPRETATIVE STRUCTURAL MODELLING (ISM)', 'Laki-Laki', '089999999999', 'n@gmail.com', 'Majalengka', NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:56:02', '2022-11-26 08:56:02'),
(18, 'NP10016', 'Dr. Ririn Irnawati, S.Pi., M.Si.', 'ANALISIS DATA METODE SEM (STRUCTURAL EQUATION MODELLING) DENGAN MENGGUNAKAN SPSS AMOS', 'Perempuan', '089999999999', 'o@gmail.com', 'Kuningan', NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:56:43', '2022-11-26 08:56:43'),
(19, 'NP10017', 'Rijal Ramdhani, S.Sos', 'INDEKSASI DOAJ (DIRECTORY OF OPEN ACCESS JOURNALS)', 'Laki-Laki', '089999999999', 'p@gmail.com', 'Ciawi', NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:57:58', '2022-11-26 08:57:58'),
(20, 'NP10018', 'Bhatara Ayi Meata, S.Pi., M.Si', 'INDEKSASI DOAJ (DIRECTORY OF OPEN ACCESS JOURNALS)', 'Laki-Laki', '089999999999', 'q@gmail.com', 'Majalengka', NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:58:35', '2022-11-26 08:58:35'),
(21, 'NP10019', 'Ruci Meiyanti', 'MULTI DIMENSIONAL SCALLING', 'Perempuan', '089999999999', 'r@gmail.com', 'Kuningan', NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:59:09', '2022-11-26 08:59:09'),
(22, 'NP10020', 'Messalina L Salampessy', 'APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO', 'Perempuan', '089999999999', 's@gmail.com', 'Cirebon', NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:59:36', '2022-11-26 08:59:36'),
(23, 'NP10021', 'Liliana Dewi, S.S., MM.Par', 'APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO', 'Perempuan', '089999999999', 't@gmail.com', 'Ciawi', NULL, NULL, NULL, NULL, NULL, '2022-11-26 09:00:04', '2022-11-26 09:00:04'),
(24, 'NP10022', 'Milatun Khanifah., S.ST.,MKeb', 'APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO', 'Perempuan', '089999999999', 'u@gmail.com', 'Cirebon', NULL, NULL, NULL, NULL, NULL, '2022-11-26 09:00:38', '2022-11-26 09:00:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapesertas`
--

CREATE TABLE `datapesertas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `No_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `J_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No_tlpn` double NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NPelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datapesertas`
--

INSERT INTO `datapesertas` (`id`, `No_peserta`, `Nama_peserta`, `J_kelamin`, `No_tlpn`, `email`, `alamat`, `NPelatihan`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'NP10001', 'Ariesvs Wibowo Khurniawan', 'Laki-Laki', 89999999999, 'a@gmail.com', 'Kuningan', 'APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO', NULL, '2022-11-26 08:39:07', '2023-04-03 02:28:40'),
(4, 'NP10002', 'Dr. Elly Jumiati, S.P., M.P.', 'Perempuan', 89999999999, 'b@gmail.com', 'Kuningan', 'APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO', NULL, '2022-11-26 08:44:38', '2022-11-26 08:44:38'),
(5, 'NP10003', 'Fadillah Sabri, S.T., M.Eng.', 'Laki-Laki', 89999999999, 'c@gmail.com', 'Ciawi', 'APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO', NULL, '2022-11-26 08:45:46', '2022-11-26 08:45:46'),
(6, 'NP10004', 'Rusnilawati, M.Pd.', 'Perempuan', 89999999999, 'd@gmail.com', 'Cirebon', 'APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO', NULL, '2022-11-26 08:46:15', '2022-11-26 08:46:15'),
(7, 'NP10005', 'Rini Dwiyani Hadiwidjaja, S.E., M.Si.', 'Perempuan', 89999999999, 'e@gmail.com', 'Cirebon', 'ANALISIS DATA METODE SEM (STRUCTURAL EQUATION MODELLING) DENGAN MENGGUNAKAN SPSS AMOS', NULL, '2022-11-26 08:46:46', '2022-11-26 08:46:46'),
(8, 'NP10006', 'Yanuar Trisnowati, S.E., M.M.', 'Laki-Laki', 89999999999, 'f@gmail.com', 'Cirebon', 'ANALISIS DATA METODE SEM (STRUCTURAL EQUATION MODELLING) DENGAN MENGGUNAKAN SPSS AMOS', NULL, '2022-11-26 08:47:34', '2022-11-26 08:47:34'),
(9, 'NP10007', 'Dr. Minsarnawati, SKM, M.Kes', 'Perempuan', 89999999999, 'g@gmail.com', 'Majalengka', 'ANALISIS DATA METODE SEM (STRUCTURAL EQUATION MODELLING) DENGAN MENGGUNAKAN SPSS AMOS', NULL, '2022-11-26 08:48:51', '2022-11-26 08:48:51'),
(10, 'NP10008', 'Ir Kepas Antoni A. Manurung, MM.', 'Laki-Laki', 89999999999, 'h@gmail.com', 'Majalengka', 'ANALISIS DATA METODE SEM (STRUCTURAL EQUATION MODELLING) DENGAN MENGGUNAKAN SPSS AMOS', NULL, '2022-11-26 08:49:26', '2022-11-26 08:49:26'),
(11, 'NP10009', 'Imam Ardiansyah, S.ST.Par.,MM.Par.', 'Laki-Laki', 89999999999, 'i@gmail.com', 'Majalengka', 'Matrix of Cross Impact Multiplications Applied to a Clasification (MICMAC)', NULL, '2022-11-26 08:50:19', '2022-11-26 08:50:19'),
(12, 'NP10010', 'Albet Ubaidi', 'Laki-Laki', 82215293663, 'albet.ubaidi139@gmail.com', 'Kuningan', 'Pembuatan OJS', NULL, '2022-11-26 08:51:32', '2022-11-26 08:51:32'),
(13, 'NP10011', 'Imam Ardiansyah, S.ST.Par.,MM.Par.', 'Laki-Laki', 89999999999, 'j@gmail.com', 'Majalengka', 'MULTI DIMENSIONAL SCALLING', NULL, '2022-11-26 08:53:44', '2022-11-26 08:53:44'),
(14, 'NP10012', 'Setyowati,SP.MP', 'Perempuan', 89999999999, 'k@gmail.com', 'Ciawi', 'MULTI DIMENSIONAL SCALLING', NULL, '2022-11-26 08:54:22', '2022-11-26 08:54:22'),
(15, 'NP10013', 'M. Johar Rudin, S.Pi, M.Si', 'Laki-Laki', 89999999999, 'l@gmail.com', 'Kuningan', 'PENGELOLAAN JURNAL ONLINE DENGAN OPEN JOURNAL SYSTEM (OJS)', NULL, '2022-11-26 08:54:59', '2022-11-26 08:54:59'),
(16, 'NP10014', 'Ekaning Siti Rahayu, S.TP., MP.', 'Perempuan', 89999999999, 'm@gmail.com', 'Cirebon', 'INTEPRETATIVE STRUCTURAL MODELLING (ISM)', NULL, '2022-11-26 08:55:34', '2022-11-26 08:55:34'),
(17, 'NP10015', 'Jongky W.A Kamagi, M.Si', 'Laki-Laki', 89999999999, 'n@gmail.com', 'Majalengka', 'INTEPRETATIVE STRUCTURAL MODELLING (ISM)', NULL, '2022-11-26 08:56:02', '2022-11-26 08:56:02'),
(18, 'NP10016', 'Dr. Ririn Irnawati, S.Pi., M.Si.', 'Perempuan', 89999999999, 'o@gmail.com', 'Kuningan', 'ANALISIS DATA METODE SEM (STRUCTURAL EQUATION MODELLING) DENGAN MENGGUNAKAN SPSS AMOS', NULL, '2022-11-26 08:56:43', '2022-11-26 08:56:43'),
(19, 'NP10017', 'Rijal Ramdhani, S.Sos', 'Laki-Laki', 89999999999, 'p@gmail.com', 'Ciawi', 'INDEKSASI DOAJ (DIRECTORY OF OPEN ACCESS JOURNALS)', NULL, '2022-11-26 08:57:58', '2022-11-26 08:57:58'),
(20, 'NP10018', 'Bhatara Ayi Meata, S.Pi., M.Si', 'Laki-Laki', 89999999999, 'q@gmail.com', 'Majalengka', 'INDEKSASI DOAJ (DIRECTORY OF OPEN ACCESS JOURNALS)', NULL, '2022-11-26 08:58:35', '2022-11-26 08:58:35'),
(21, 'NP10019', 'Ruci Meiyanti', 'Perempuan', 89999999999, 'r@gmail.com', 'Kuningan', 'MULTI DIMENSIONAL SCALLING', NULL, '2022-11-26 08:59:09', '2022-11-26 08:59:09'),
(22, 'NP10020', 'Messalina L Salampessy', 'Perempuan', 89999999999, 's@gmail.com', 'Cirebon', 'APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO', NULL, '2022-11-26 08:59:36', '2022-11-26 08:59:36'),
(23, 'NP10021', 'Liliana Dewi, S.S., MM.Par', 'Perempuan', 89999999999, 't@gmail.com', 'Ciawi', 'APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO', NULL, '2022-11-26 09:00:04', '2022-11-26 09:00:04'),
(24, 'NP10022', 'Milatun Khanifah., S.ST.,MKeb', 'Perempuan', 89999999999, 'u@gmail.com', 'Cirebon', 'APLIKASI PENGOLAHAN DATA KUALITATIF NVIVO', NULL, '2022-11-26 09:00:38', '2022-11-26 09:00:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `enkripsis`
--

CREATE TABLE `enkripsis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(59, '2022_07_24_055443_create_dataenkripsis_table', 1),
(153, '2014_10_12_000000_create_users_table', 2),
(154, '2014_10_12_100000_create_password_resets_table', 2),
(155, '2019_08_19_000000_create_failed_jobs_table', 2),
(156, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(157, '2022_07_24_055341_create_datapesertas_table', 2),
(158, '2022_07_24_055403_create_datajenispelatihans_table', 2),
(159, '2022_07_24_055423_create_tamplatesertifikats_table', 2),
(160, '2022_09_07_163057_create_enkripsis_table', 2),
(161, '2022_09_08_163943_create_datanilais_table', 2),
(162, '2022_09_08_170036_create_cetak_sertifikats_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamplatesertifikats`
--

CREATE TABLE `tamplatesertifikats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NTamplate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tamplate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` double NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `nohp`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Albet Ubaidi', 'albet_ubaidi', 82215293663, 'albet.ubaidi139@gmail.com', '$2y$10$6hUf.LlKWKBgWEU1FNHxEO5SVCDdarP4kd8vsasTibcNPwkZIVTSy', NULL, '2022-11-24 08:05:51', '2022-11-24 08:05:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cetak_sertifikats`
--
ALTER TABLE `cetak_sertifikats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datajenispelatihans`
--
ALTER TABLE `datajenispelatihans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `datajenispelatihans_kpelatihan_unique` (`KPelatihan`);

--
-- Indeks untuk tabel `datanilais`
--
ALTER TABLE `datanilais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `datanilais_no_sertifikat_unique` (`No_Sertifikat`);

--
-- Indeks untuk tabel `datapesertas`
--
ALTER TABLE `datapesertas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `datapesertas_no_peserta_unique` (`No_peserta`),
  ADD UNIQUE KEY `datapesertas_email_unique` (`email`);

--
-- Indeks untuk tabel `enkripsis`
--
ALTER TABLE `enkripsis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enkripsis_text_value_unique` (`text_value`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tamplatesertifikats`
--
ALTER TABLE `tamplatesertifikats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tamplatesertifikats_id_unique` (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cetak_sertifikats`
--
ALTER TABLE `cetak_sertifikats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `datajenispelatihans`
--
ALTER TABLE `datajenispelatihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `datanilais`
--
ALTER TABLE `datanilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `datapesertas`
--
ALTER TABLE `datapesertas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `enkripsis`
--
ALTER TABLE `enkripsis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tamplatesertifikats`
--
ALTER TABLE `tamplatesertifikats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
