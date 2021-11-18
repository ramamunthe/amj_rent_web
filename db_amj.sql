-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Nov 2021 pada 03.07
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_amj`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `car_title` varchar(100) NOT NULL,
  `car_body` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cars`
--

INSERT INTO `cars` (`car_id`, `category_id`, `car_title`, `car_body`, `image`) VALUES
(2, 1, 'Innova Reborn Diesel', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Mobil + Driver</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 700.000,- / Hari</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Lepas Kunci</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Manual :</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 550.000,- / Hari</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Matic :</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 600.000,- / Hari</p>', '1636661645_1c8d2fd3f7427732af22.png'),
(3, 1, 'Innova Reborn Bensin', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Mobil + Driver</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 650.000,- / Hari</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Lepas Kunci</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Manual :</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 450.000,- / Hari</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Matic :</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 500.000,- / Hari</p>', '1636663586_611a631954e89c4f7389.png'),
(5, 1, 'New Avanza', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Mobil + Driver</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 450.000,- / Hari</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Lepas Kunci</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Manual :</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 350.000,- / Hari</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Matic :</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 400.000,- / Hari</p>', '1636809808_ce033bc10daf50a757d7.png'),
(9, 1, 'Xpander', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Mobil + Driver</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 550.000,- / Hari</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Lepas Kunci</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Manual :</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 400.000,- / Hari</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Matic :</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 450.000,- / Hari</p>', '1636836517_903d9dc7187e41a41b3a.png'),
(10, 1, 'Brio', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Mobil + Driver</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 400.000,- / Hari</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Lepas Kunci</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Manual :</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">-</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Matic :</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 350.000,- / Hari</p>', '1636836559_e8a7147ac098e4d0bf1c.png'),
(11, 1, 'New Ertiga Bensin', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Mobil + Driver</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 450.000,- / Hari</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Lepas Kunci</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Manual :</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 350.000,- / Hari</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Matic :</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 400.000,- / Hari</p>', '1636836621_334b0073f879681c8ccc.png'),
(12, 2, 'New Fortuner TRD Sportivo', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Mobil + Driver</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 1.100.000,- / Hari</p>', '1636836664_247d557787d675651430.png'),
(13, 2, 'Alphard Transformers', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Mobil + Driver</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 1.800.000,- / Hari</p>', '1636836686_ae5da4140123acfb000e.png'),
(14, 2, 'Pajero Sport Dakar', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Mobil + Driver</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 1.100.000,- / Hari</p>', '1636836714_5baaa5a66cad2da6ae4f.png'),
(15, 4, 'Hiace Commuter', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Mobil + Driver</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 1.300.000,- / Hari</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Kapasitas 14 Seat</span></p>', '1636836771_cfd586f54c0bb94fe206.png'),
(16, 4, 'Hiace Premio', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Mobil + Driver</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 1.500.000,- / Hari</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Kapasitas 12 Seat&nbsp;</span></p>', '1636836802_449f807c7f45ef755d4f.png'),
(17, 4, 'Medium Bus', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Mobil + Driver</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 1.600.000,- / Hari</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Kapasitas 25 Seat</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\">Rp 1.750.000,- / Hari</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #414141; font-family: sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Kapasitas 29 Seat</span></p>', '1636836823_06527ee6bd1d5292bb10.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Lepas Kunci'),
(2, 'Premium Car'),
(3, 'Wedding Car'),
(4, 'Bus Pariwisata');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`id`, `body`, `image`) VALUES
(3, '<p><span style=\"color: #333333; font-family: Overpass, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\"><strong>DANAU TOBA</strong> - Menteri Pariwisata dan Ekonomi Kreatif</span></p>\r\n<p><span style=\"color: #333333; font-family: Overpass, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">\"Menparekraf <em><strong>Sandiaga Salahuddin Uno</strong></em>\"</span></p>', '1636671089_cebef2487827888d4458.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakages`
--

CREATE TABLE `pakages` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pakages`
--

INSERT INTO `pakages` (`id`, `body`, `image`) VALUES
(5, '<p style=\"text-align: center;\">Antar Jemput Bandara</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 8pt;\">mulai dari</span></p>\r\n<h2 style=\"text-align: center;\"><strong>RP. 300.000,-/Trip</strong></h2>', '1636807860_a44e0bd117b9515f9dfd.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sliders`
--

INSERT INTO `sliders` (`id`, `body`, `image`) VALUES
(5, '<p style=\"text-align: center;\">Pesan Bus Pariwisata 25 - 50 Seater</p>\r\n<p style=\"text-align: center;\">mulai dari Rp 1.800.000,- / Hari disini !</p>\r\n<p style=\"text-align: center;\">PERCAYAKAN LIBURAN BARENG KELUARGA BESAR,&nbsp;</p>\r\n<p style=\"text-align: center;\">SAHABAT &amp; REKAN KERJA KAMU&nbsp;</p>\r\n<p style=\"text-align: center;\">BERSAMA KAMI !</p>', '1636757810_76f753e1b20ff6965c4e.png'),
(14, '<p>sdsad</p>', '1636844743_c8874c7baab23974a53e.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `whatsapp` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `tiktok` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `whatsapp`, `facebook`, `instagram`, `twitter`, `email`, `youtube`, `tiktok`, `deskripsi`, `image`) VALUES
(1, 'AMJ RENTCAR', '+6281263651865 ', 'https://id-id.facebook.com/', 'https://www.instagram.com/', '', 'amjrentcar@gmail.com', 'https://www.youtube.com/', 'https://www.tiktok.com/id-ID//', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Cabin, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Untuk pemesanan dan kerjasama dapat melalui :</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Cabin, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Mail :</span>&nbsp;Velozytrip@gmail.com</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Cabin, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">WA :</span>&nbsp;<span style=\"box-sizing: border-box; color: #414141; font-family: sans-serif; font-size: 14px;\">(+62) 81263651865</span>&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Cabin, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Phone :&nbsp;</span>&nbsp;(+62) 81263651865</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Cabin, sans-serif; font-size: 16px; background-color: #ffffff;\">.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Cabin, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Jangan sampai ketinggalan informasi, ikuti akun media sosial kami :</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Cabin, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Website :</span>&nbsp;<a style=\"box-sizing: border-box; color: #0d6efd;\" href=\"http://www.velozytrip.com/\">www.velozytrip.com</a></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Cabin, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Instagram :&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Cabin, sans-serif; font-size: 16px; background-color: #ffffff;\">Marketing :</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Cabin, sans-serif; font-size: 16px; background-color: #ffffff;\"><a style=\"box-sizing: border-box; color: #0d6efd;\" href=\"http://www.instagram.com/velozytrip.id\">www.instagram.com/velozytrip.id</a></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Cabin, sans-serif; font-size: 16px; background-color: #ffffff;\"><a style=\"box-sizing: border-box; color: #0d6efd;\" href=\"http://www.instagram.com/rentcarmedan.id\" data-fr-linked=\"true\">www.instagram.com/rentcarmedan.id</a></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Cabin, sans-serif; font-size: 16px; background-color: #ffffff;\">Testimonial Customer :</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Cabin, sans-serif; font-size: 16px; background-color: #ffffff;\"><a style=\"box-sizing: border-box; color: #0d6efd;\" href=\"http://www.instagram.com/review.velozytrip\" data-fr-linked=\"true\">www.instagram.com/review.velozytrip</a></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Cabin, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Facebook :</span>&nbsp;Velozytrip.official</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Cabin, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Twitter :</span>&nbsp;@Velozytrip</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Cabin, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Youtube :</span>&nbsp;Velozytrip official</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: Cabin, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Tiktok ID :</span>&nbsp;@Velozytrip.id&nbsp;</p>', '1636815908_fd3424660522ae646db0.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pakages`
--
ALTER TABLE `pakages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pakages`
--
ALTER TABLE `pakages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
