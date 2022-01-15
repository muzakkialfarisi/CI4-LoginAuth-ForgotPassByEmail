-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2022 pada 18.00
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `photo`, `token`, `created_at`, `updated_at`) VALUES
(33, 'mzkalfarisi@gmail.com', 'Muzakki Ahmad Al Farisi', '$2y$10$9c9fwIZzklXs22HauLukiOW3ymFEBt9xQ/wuxf3gQUe5UJqLLAQYa', '1639806463Foto 4x6 (1).jpg', 'f2b5d87b5c18969d639a1a2ba0a0f60c', '2021-12-18 11:17:43', '2021-12-29 07:37:39'),
(34, 'yuniafransiscau@gmail.com', 'Yunia Fransisca Utami', '$2y$10$B1VtlCvhFF0czY8k9DPNhOo52f9wZJln6l9/mpOJAn2aiXtBwnGUW', '1640744248X.png', '4555ebd3d348c112380136a5acfc8ec9', '2021-12-29 07:47:29', '2021-12-29 07:47:42'),
(36, 'muzakkialfarisi@student.telkomuniversity.ac.id', 'Muzakki Ahmad Al Farisi', '$2y$10$8ZJyi8MyVGCFKRHP0ENJfuqXH2Q2iMqjQ5hklbn5f80D3.cD0hbCu', '1641793634Foto 4x6 (1).jpg', 'ee84e7272ffe9cc73d735084d9491ff8', '2022-01-10 11:17:14', '2022-01-10 11:17:41'),
(37, 'anggaagustira@gmail.com', 'Angga Agustira', '$2y$10$WTq0ya3VspoOVP02HfP4M.NY3Oc1nFOyYCJUEwIqzH9X.6ojUCUKO', '1642174196old red.jpeg', '96cabbb0885453eedb1dade47b079c8e', '2022-01-14 08:59:56', '2022-01-14 09:01:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
