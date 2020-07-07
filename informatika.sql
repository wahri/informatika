-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2020 pada 01.33
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

--
-- Database: `informatika`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`) VALUES
(3, 'admin', '$2y$10$EGhbomVPcFSlzyYRh5KGfOgqMN.8U8HIFEgJEOktVOxPO8zzNp8Ne', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(512) NOT NULL,
  `isi` longtext NOT NULL,
  `gambar` varchar(512) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `gambar`, `datetime`) VALUES
(12, 'Berita Terbaru Dari Pekanbaru Pertamasss', '<p>ssssssLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor congue lectus vulputate porttitor. Aenean bibendum quis tellus quis sagittis. In hac habitasse platea dictumst. Vestibulum feugiat sem eget turpis lacinia, id facilisis justo luctus. Ut id quam ac neque consequat suscipit. Integer lacinia sapien ac turpis sodales, eu efficitur ante cursus. Donec faucibus tortor eu nisi mattis semper a quis est. Fusce mollis pretium justo ut molestie. Duis varius dui efficitur, interdum augue sit amet, rhoncus magna. Pellentesque a orci ante. Donec ultrices sit amet dui consequat vulputate. Curabitur viverra tincidunt quam. Nunc nec dapibus ligula. Fusce a nulla purus. Aenean vel blandit ligula.</p><p>Integer sit amet odio nunc. Praesent condimentum malesuada lectus eu hendrerit. Sed rhoncus, ex finibus dignissim ullamcorper, orci diam euismod ipsum, ac efficitur massa est sed neque. Mauris elementum diam non eros tincidunt dictum. Ut elementum sapien eget suscipit aliquet. Aenean in mi odio. Praesent erat ante, ultrices a egestas eu, consequat at eros. Nullam sed orci augue. Maecenas nunc sem, vulputate eget mollis nec, vulputate et nulla. Ut nisi neque, vulputate sit amet porttitor non, sodales et dui. Sed congue fringilla ipsum et pulvinar. Morbi id gravida lacus, quis maximus justo. Praesent porta ac metus sollicitudin rutrum. Nulla viverra rhoncus sollicitudin. Maecenas nunc metus, bibendum sed bibendum at, placerat in justo. Vivamus porttitor odio sit amet elit porttitor aliquam.</p><p>Mauris vehicula leo tempor nibh faucibus vulputate. Nulla quis libero at diam gravida commodo vel ullamcorper quam. Nulla auctor enim in dui porta, sed facilisis sapien semper. Integer a bibendum nunc. Aenean tincidunt posuere ex, at lobortis nisi vulputate et. Maecenas tempus a eros a facilisis. Suspendisse pharetra eros quis arcu faucibus, et volutpat felis pellentesque. Sed nibh turpis, porttitor vel arcu eget, interdum semper nibh. Maecenas consectetur neque a lorem euismod, quis maximus dui dictum. Integer efficitur elit nec auctor volutpat. Proin et mollis felis, bibendum gravida tellus. Curabitur suscipit lectus non lacus lacinia, id hendrerit libero scelerisque. Vestibulum euismod sapien vel leo vulputate porta. Sed euismod, urna a porta pellentesque, nulla nisi venenatis quam, sit amet ultrices erat neque quis libero.</p><p>Proin iaculis turpis id sapien convallis, vel cursus nunc aliquet. Pellentesque in hendrerit sapien, nec suscipit erat. Vestibulum eget molestie nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus ullamcorper orci sed dolor lacinia, nec tristique elit luctus. Suspendisse maximus vitae urna sed sodales. Cras elit neque, tempor eu libero vel, tristique rhoncus libero. Quisque eu lacus volutpat, ullamcorper tellus vitae, suscipit eros. Maecenas consectetur porttitor congue. Vivamus erat metus, facilisis eget facilisis eu, scelerisque quis magna. Maecenas dapibus cursus ipsum, sed tincidunt turpis commodo et. Donec porta lacus rhoncus mauris semper, ac vehicula neque imperdiet.</p><p>Pellentesque blandit porttitor feugiat. Vestibulum scelerisque eros lectus, ut ullamcorper lorem ornare ut. Sed maximus lorem nec tellus convallis malesuada. Aliquam lacinia dignissim neque. Cras rutrum urna at auctor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sit amet semper urna, at congue neque. Vestibulum ac sapien quam. Ut enim nibh, dictum non malesuada non, elementum eu urna. Donec non metus quis dui fermentum laoreet.</p>', 'berita.png', '2020-06-20 18:16:21'),
(13, 'Berita Kedua', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor congue lectus vulputate porttitor. Aenean bibendum quis tellus quis sagittis. In hac habitasse platea dictumst. Vestibulum feugiat sem eget turpis lacinia, id facilisis justo luctus. Ut id quam ac neque consequat suscipit. Integer lacinia sapien ac turpis sodales, eu efficitur ante cursus. Donec faucibus tortor eu nisi mattis semper a quis est. Fusce mollis pretium justo ut molestie. Duis varius dui efficitur, interdum augue sit amet, rhoncus magna. Pellentesque a orci ante. Donec ultrices sit amet dui consequat vulputate. Curabitur viverra tincidunt quam. Nunc nec dapibus ligula. Fusce a nulla purus. Aenean vel blandit ligula.</p><p>Integer sit amet odio nunc. Praesent condimentum malesuada lectus eu hendrerit. Sed rhoncus, ex finibus dignissim ullamcorper, orci diam euismod ipsum, ac efficitur massa est sed neque. Mauris elementum diam non eros tincidunt dictum. Ut elementum sapien eget suscipit aliquet. Aenean in mi odio. Praesent erat ante, ultrices a egestas eu, consequat at eros. Nullam sed orci augue. Maecenas nunc sem, vulputate eget mollis nec, vulputate et nulla. Ut nisi neque, vulputate sit amet porttitor non, sodales et dui. Sed congue fringilla ipsum et pulvinar. Morbi id gravida lacus, quis maximus justo. Praesent porta ac metus sollicitudin rutrum. Nulla viverra rhoncus sollicitudin. Maecenas nunc metus, bibendum sed bibendum at, placerat in justo. Vivamus porttitor odio sit amet elit porttitor aliquam.</p><p>Mauris vehicula leo tempor nibh faucibus vulputate. Nulla quis libero at diam gravida commodo vel ullamcorper quam. Nulla auctor enim in dui porta, sed facilisis sapien semper. Integer a bibendum nunc. Aenean tincidunt posuere ex, at lobortis nisi vulputate et. Maecenas tempus a eros a facilisis. Suspendisse pharetra eros quis arcu faucibus, et volutpat felis pellentesque. Sed nibh turpis, porttitor vel arcu eget, interdum semper nibh. Maecenas consectetur neque a lorem euismod, quis maximus dui dictum. Integer efficitur elit nec auctor volutpat. Proin et mollis felis, bibendum gravida tellus. Curabitur suscipit lectus non lacus lacinia, id hendrerit libero scelerisque. Vestibulum euismod sapien vel leo vulputate porta. Sed euismod, urna a porta pellentesque, nulla nisi venenatis quam, sit amet ultrices erat neque quis libero.</p><p>Proin iaculis turpis id sapien convallis, vel cursus nunc aliquet. Pellentesque in hendrerit sapien, nec suscipit erat. Vestibulum eget molestie nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus ullamcorper orci sed dolor lacinia, nec tristique elit luctus. Suspendisse maximus vitae urna sed sodales. Cras elit neque, tempor eu libero vel, tristique rhoncus libero. Quisque eu lacus volutpat, ullamcorper tellus vitae, suscipit eros. Maecenas consectetur porttitor congue. Vivamus erat metus, facilisis eget facilisis eu, scelerisque quis magna. Maecenas dapibus cursus ipsum, sed tincidunt turpis commodo et. Donec porta lacus rhoncus mauris semper, ac vehicula neque imperdiet.</p><p>Pellentesque blandit porttitor feugiat. Vestibulum scelerisque eros lectus, ut ullamcorper lorem ornare ut. Sed maximus lorem nec tellus convallis malesuada. Aliquam lacinia dignissim neque. Cras rutrum urna at auctor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sit amet semper urna, at congue neque. Vestibulum ac sapien quam. Ut enim nibh, dictum non malesuada non, elementum eu urna. Donec non metus quis dui fermentum laoreet.</p>', 'berita1.jpeg', '2020-05-18 07:05:38'),
(14, 'Berita Ketiga', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor congue lectus vulputate porttitor. Aenean bibendum quis tellus quis sagittis. In hac habitasse platea dictumst. Vestibulum feugiat sem eget turpis lacinia, id facilisis justo luctus. Ut id quam ac neque consequat suscipit. Integer lacinia sapien ac turpis sodales, eu efficitur ante cursus. Donec faucibus tortor eu nisi mattis semper a quis est. Fusce mollis pretium justo ut molestie. Duis varius dui efficitur, interdum augue sit amet, rhoncus magna. Pellentesque a orci ante. Donec ultrices sit amet dui consequat vulputate. Curabitur viverra tincidunt quam. Nunc nec dapibus ligula. Fusce a nulla purus. Aenean vel blandit ligula.</p><p>Integer sit amet odio nunc. Praesent condimentum malesuada lectus eu hendrerit. Sed rhoncus, ex finibus dignissim ullamcorper, orci diam euismod ipsum, ac efficitur massa est sed neque. Mauris elementum diam non eros tincidunt dictum. Ut elementum sapien eget suscipit aliquet. Aenean in mi odio. Praesent erat ante, ultrices a egestas eu, consequat at eros. Nullam sed orci augue. Maecenas nunc sem, vulputate eget mollis nec, vulputate et nulla. Ut nisi neque, vulputate sit amet porttitor non, sodales et dui. Sed congue fringilla ipsum et pulvinar. Morbi id gravida lacus, quis maximus justo. Praesent porta ac metus sollicitudin rutrum. Nulla viverra rhoncus sollicitudin. Maecenas nunc metus, bibendum sed bibendum at, placerat in justo. Vivamus porttitor odio sit amet elit porttitor aliquam.</p><p>Mauris vehicula leo tempor nibh faucibus vulputate. Nulla quis libero at diam gravida commodo vel ullamcorper quam. Nulla auctor enim in dui porta, sed facilisis sapien semper. Integer a bibendum nunc. Aenean tincidunt posuere ex, at lobortis nisi vulputate et. Maecenas tempus a eros a facilisis. Suspendisse pharetra eros quis arcu faucibus, et volutpat felis pellentesque. Sed nibh turpis, porttitor vel arcu eget, interdum semper nibh. Maecenas consectetur neque a lorem euismod, quis maximus dui dictum. Integer efficitur elit nec auctor volutpat. Proin et mollis felis, bibendum gravida tellus. Curabitur suscipit lectus non lacus lacinia, id hendrerit libero scelerisque. Vestibulum euismod sapien vel leo vulputate porta. Sed euismod, urna a porta pellentesque, nulla nisi venenatis quam, sit amet ultrices erat neque quis libero.</p><p>Proin iaculis turpis id sapien convallis, vel cursus nunc aliquet. Pellentesque in hendrerit sapien, nec suscipit erat. Vestibulum eget molestie nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus ullamcorper orci sed dolor lacinia, nec tristique elit luctus. Suspendisse maximus vitae urna sed sodales. Cras elit neque, tempor eu libero vel, tristique rhoncus libero. Quisque eu lacus volutpat, ullamcorper tellus vitae, suscipit eros. Maecenas consectetur porttitor congue. Vivamus erat metus, facilisis eget facilisis eu, scelerisque quis magna. Maecenas dapibus cursus ipsum, sed tincidunt turpis commodo et. Donec porta lacus rhoncus mauris semper, ac vehicula neque imperdiet.</p><p>Pellentesque blandit porttitor feugiat. Vestibulum scelerisque eros lectus, ut ullamcorper lorem ornare ut. Sed maximus lorem nec tellus convallis malesuada. Aliquam lacinia dignissim neque. Cras rutrum urna at auctor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sit amet semper urna, at congue neque. Vestibulum ac sapien quam. Ut enim nibh, dictum non malesuada non, elementum eu urna. Donec non metus quis dui fermentum laoreet.</p>', 'berita2.jpeg', '2020-05-18 07:05:52'),
(15, 'Berita Keempat', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor congue lectus vulputate porttitor. Aenean bibendum quis tellus quis sagittis. In hac habitasse platea dictumst. Vestibulum feugiat sem eget turpis lacinia, id facilisis justo luctus. Ut id quam ac neque consequat suscipit. Integer lacinia sapien ac turpis sodales, eu efficitur ante cursus. Donec faucibus tortor eu nisi mattis semper a quis est. Fusce mollis pretium justo ut molestie. Duis varius dui efficitur, interdum augue sit amet, rhoncus magna. Pellentesque a orci ante. Donec ultrices sit amet dui consequat vulputate. Curabitur viverra tincidunt quam. Nunc nec dapibus ligula. Fusce a nulla purus. Aenean vel blandit ligula.</p><p>Integer sit amet odio nunc. Praesent condimentum malesuada lectus eu hendrerit. Sed rhoncus, ex finibus dignissim ullamcorper, orci diam euismod ipsum, ac efficitur massa est sed neque. Mauris elementum diam non eros tincidunt dictum. Ut elementum sapien eget suscipit aliquet. Aenean in mi odio. Praesent erat ante, ultrices a egestas eu, consequat at eros. Nullam sed orci augue. Maecenas nunc sem, vulputate eget mollis nec, vulputate et nulla. Ut nisi neque, vulputate sit amet porttitor non, sodales et dui. Sed congue fringilla ipsum et pulvinar. Morbi id gravida lacus, quis maximus justo. Praesent porta ac metus sollicitudin rutrum. Nulla viverra rhoncus sollicitudin. Maecenas nunc metus, bibendum sed bibendum at, placerat in justo. Vivamus porttitor odio sit amet elit porttitor aliquam.</p><p>Mauris vehicula leo tempor nibh faucibus vulputate. Nulla quis libero at diam gravida commodo vel ullamcorper quam. Nulla auctor enim in dui porta, sed facilisis sapien semper. Integer a bibendum nunc. Aenean tincidunt posuere ex, at lobortis nisi vulputate et. Maecenas tempus a eros a facilisis. Suspendisse pharetra eros quis arcu faucibus, et volutpat felis pellentesque. Sed nibh turpis, porttitor vel arcu eget, interdum semper nibh. Maecenas consectetur neque a lorem euismod, quis maximus dui dictum. Integer efficitur elit nec auctor volutpat. Proin et mollis felis, bibendum gravida tellus. Curabitur suscipit lectus non lacus lacinia, id hendrerit libero scelerisque. Vestibulum euismod sapien vel leo vulputate porta. Sed euismod, urna a porta pellentesque, nulla nisi venenatis quam, sit amet ultrices erat neque quis libero.</p><p>Proin iaculis turpis id sapien convallis, vel cursus nunc aliquet. Pellentesque in hendrerit sapien, nec suscipit erat. Vestibulum eget molestie nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus ullamcorper orci sed dolor lacinia, nec tristique elit luctus. Suspendisse maximus vitae urna sed sodales. Cras elit neque, tempor eu libero vel, tristique rhoncus libero. Quisque eu lacus volutpat, ullamcorper tellus vitae, suscipit eros. Maecenas consectetur porttitor congue. Vivamus erat metus, facilisis eget facilisis eu, scelerisque quis magna. Maecenas dapibus cursus ipsum, sed tincidunt turpis commodo et. Donec porta lacus rhoncus mauris semper, ac vehicula neque imperdiet.</p><p>Pellentesque blandit porttitor feugiat. Vestibulum scelerisque eros lectus, ut ullamcorper lorem ornare ut. Sed maximus lorem nec tellus convallis malesuada. Aliquam lacinia dignissim neque. Cras rutrum urna at auctor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sit amet semper urna, at congue neque. Vestibulum ac sapien quam. Ut enim nibh, dictum non malesuada non, elementum eu urna. Donec non metus quis dui fermentum laoreet.</p>', 'berita3.jpeg', '2020-05-18 07:06:16'),
(16, 'Berita Kelima', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor congue lectus vulputate porttitor. Aenean bibendum quis tellus quis sagittis. In hac habitasse platea dictumst. Vestibulum feugiat sem eget turpis lacinia, id facilisis justo luctus. Ut id quam ac neque consequat suscipit. Integer lacinia sapien ac turpis sodales, eu efficitur ante cursus. Donec faucibus tortor eu nisi mattis semper a quis est. Fusce mollis pretium justo ut molestie. Duis varius dui efficitur, interdum augue sit amet, rhoncus magna. Pellentesque a orci ante. Donec ultrices sit amet dui consequat vulputate. Curabitur viverra tincidunt quam. Nunc nec dapibus ligula. Fusce a nulla purus. Aenean vel blandit ligula.</p><p>Integer sit amet odio nunc. Praesent condimentum malesuada lectus eu hendrerit. Sed rhoncus, ex finibus dignissim ullamcorper, orci diam euismod ipsum, ac efficitur massa est sed neque. Mauris elementum diam non eros tincidunt dictum. Ut elementum sapien eget suscipit aliquet. Aenean in mi odio. Praesent erat ante, ultrices a egestas eu, consequat at eros. Nullam sed orci augue. Maecenas nunc sem, vulputate eget mollis nec, vulputate et nulla. Ut nisi neque, vulputate sit amet porttitor non, sodales et dui. Sed congue fringilla ipsum et pulvinar. Morbi id gravida lacus, quis maximus justo. Praesent porta ac metus sollicitudin rutrum. Nulla viverra rhoncus sollicitudin. Maecenas nunc metus, bibendum sed bibendum at, placerat in justo. Vivamus porttitor odio sit amet elit porttitor aliquam.</p><p>Mauris vehicula leo tempor nibh faucibus vulputate. Nulla quis libero at diam gravida commodo vel ullamcorper quam. Nulla auctor enim in dui porta, sed facilisis sapien semper. Integer a bibendum nunc. Aenean tincidunt posuere ex, at lobortis nisi vulputate et. Maecenas tempus a eros a facilisis. Suspendisse pharetra eros quis arcu faucibus, et volutpat felis pellentesque. Sed nibh turpis, porttitor vel arcu eget, interdum semper nibh. Maecenas consectetur neque a lorem euismod, quis maximus dui dictum. Integer efficitur elit nec auctor volutpat. Proin et mollis felis, bibendum gravida tellus. Curabitur suscipit lectus non lacus lacinia, id hendrerit libero scelerisque. Vestibulum euismod sapien vel leo vulputate porta. Sed euismod, urna a porta pellentesque, nulla nisi venenatis quam, sit amet ultrices erat neque quis libero.</p><p>Proin iaculis turpis id sapien convallis, vel cursus nunc aliquet. Pellentesque in hendrerit sapien, nec suscipit erat. Vestibulum eget molestie nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus ullamcorper orci sed dolor lacinia, nec tristique elit luctus. Suspendisse maximus vitae urna sed sodales. Cras elit neque, tempor eu libero vel, tristique rhoncus libero. Quisque eu lacus volutpat, ullamcorper tellus vitae, suscipit eros. Maecenas consectetur porttitor congue. Vivamus erat metus, facilisis eget facilisis eu, scelerisque quis magna. Maecenas dapibus cursus ipsum, sed tincidunt turpis commodo et. Donec porta lacus rhoncus mauris semper, ac vehicula neque imperdiet.</p><p>Pellentesque blandit porttitor feugiat. Vestibulum scelerisque eros lectus, ut ullamcorper lorem ornare ut. Sed maximus lorem nec tellus convallis malesuada. Aliquam lacinia dignissim neque. Cras rutrum urna at auctor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sit amet semper urna, at congue neque. Vestibulum ac sapien quam. Ut enim nibh, dictum non malesuada non, elementum eu urna. Donec non metus quis dui fermentum laoreet.</p>', 'berita4.jpeg', '2020-05-18 07:06:32'),
(17, 'Berita Keenam', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor congue lectus vulputate porttitor. Aenean bibendum quis tellus quis sagittis. In hac habitasse platea dictumst. Vestibulum feugiat sem eget turpis lacinia, id facilisis justo luctus. Ut id quam ac neque consequat suscipit. Integer lacinia sapien ac turpis sodales, eu efficitur ante cursus. Donec faucibus tortor eu nisi mattis semper a quis est. Fusce mollis pretium justo ut molestie. Duis varius dui efficitur, interdum augue sit amet, rhoncus magna. Pellentesque a orci ante. Donec ultrices sit amet dui consequat vulputate. Curabitur viverra tincidunt quam. Nunc nec dapibus ligula. Fusce a nulla purus. Aenean vel blandit ligula.</p><p>Integer sit amet odio nunc. Praesent condimentum malesuada lectus eu hendrerit. Sed rhoncus, ex finibus dignissim ullamcorper, orci diam euismod ipsum, ac efficitur massa est sed neque. Mauris elementum diam non eros tincidunt dictum. Ut elementum sapien eget suscipit aliquet. Aenean in mi odio. Praesent erat ante, ultrices a egestas eu, consequat at eros. Nullam sed orci augue. Maecenas nunc sem, vulputate eget mollis nec, vulputate et nulla. Ut nisi neque, vulputate sit amet porttitor non, sodales et dui. Sed congue fringilla ipsum et pulvinar. Morbi id gravida lacus, quis maximus justo. Praesent porta ac metus sollicitudin rutrum. Nulla viverra rhoncus sollicitudin. Maecenas nunc metus, bibendum sed bibendum at, placerat in justo. Vivamus porttitor odio sit amet elit porttitor aliquam.</p><p>Mauris vehicula leo tempor nibh faucibus vulputate. Nulla quis libero at diam gravida commodo vel ullamcorper quam. Nulla auctor enim in dui porta, sed facilisis sapien semper. Integer a bibendum nunc. Aenean tincidunt posuere ex, at lobortis nisi vulputate et. Maecenas tempus a eros a facilisis. Suspendisse pharetra eros quis arcu faucibus, et volutpat felis pellentesque. Sed nibh turpis, porttitor vel arcu eget, interdum semper nibh. Maecenas consectetur neque a lorem euismod, quis maximus dui dictum. Integer efficitur elit nec auctor volutpat. Proin et mollis felis, bibendum gravida tellus. Curabitur suscipit lectus non lacus lacinia, id hendrerit libero scelerisque. Vestibulum euismod sapien vel leo vulputate porta. Sed euismod, urna a porta pellentesque, nulla nisi venenatis quam, sit amet ultrices erat neque quis libero.</p><p>Proin iaculis turpis id sapien convallis, vel cursus nunc aliquet. Pellentesque in hendrerit sapien, nec suscipit erat. Vestibulum eget molestie nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus ullamcorper orci sed dolor lacinia, nec tristique elit luctus. Suspendisse maximus vitae urna sed sodales. Cras elit neque, tempor eu libero vel, tristique rhoncus libero. Quisque eu lacus volutpat, ullamcorper tellus vitae, suscipit eros. Maecenas consectetur porttitor congue. Vivamus erat metus, facilisis eget facilisis eu, scelerisque quis magna. Maecenas dapibus cursus ipsum, sed tincidunt turpis commodo et. Donec porta lacus rhoncus mauris semper, ac vehicula neque imperdiet.</p><p>Pellentesque blandit porttitor feugiat. Vestibulum scelerisque eros lectus, ut ullamcorper lorem ornare ut. Sed maximus lorem nec tellus convallis malesuada. Aliquam lacinia dignissim neque. Cras rutrum urna at auctor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sit amet semper urna, at congue neque. Vestibulum ac sapien quam. Ut enim nibh, dictum non malesuada non, elementum eu urna. Donec non metus quis dui fermentum laoreet.</p>', 'berita5.jpeg', '2020-05-18 07:06:44'),
(18, 'Berita Ketujuh', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor congue lectus vulputate porttitor. Aenean bibendum quis tellus quis sagittis. In hac habitasse platea dictumst. Vestibulum feugiat sem eget turpis lacinia, id facilisis justo luctus. Ut id quam ac neque consequat suscipit. Integer lacinia sapien ac turpis sodales, eu efficitur ante cursus. Donec faucibus tortor eu nisi mattis semper a quis est. Fusce mollis pretium justo ut molestie. Duis varius dui efficitur, interdum augue sit amet, rhoncus magna. Pellentesque a orci ante. Donec ultrices sit amet dui consequat vulputate. Curabitur viverra tincidunt quam. Nunc nec dapibus ligula. Fusce a nulla purus. Aenean vel blandit ligula.</p><p>Integer sit amet odio nunc. Praesent condimentum malesuada lectus eu hendrerit. Sed rhoncus, ex finibus dignissim ullamcorper, orci diam euismod ipsum, ac efficitur massa est sed neque. Mauris elementum diam non eros tincidunt dictum. Ut elementum sapien eget suscipit aliquet. Aenean in mi odio. Praesent erat ante, ultrices a egestas eu, consequat at eros. Nullam sed orci augue. Maecenas nunc sem, vulputate eget mollis nec, vulputate et nulla. Ut nisi neque, vulputate sit amet porttitor non, sodales et dui. Sed congue fringilla ipsum et pulvinar. Morbi id gravida lacus, quis maximus justo. Praesent porta ac metus sollicitudin rutrum. Nulla viverra rhoncus sollicitudin. Maecenas nunc metus, bibendum sed bibendum at, placerat in justo. Vivamus porttitor odio sit amet elit porttitor aliquam.</p><p>Mauris vehicula leo tempor nibh faucibus vulputate. Nulla quis libero at diam gravida commodo vel ullamcorper quam. Nulla auctor enim in dui porta, sed facilisis sapien semper. Integer a bibendum nunc. Aenean tincidunt posuere ex, at lobortis nisi vulputate et. Maecenas tempus a eros a facilisis. Suspendisse pharetra eros quis arcu faucibus, et volutpat felis pellentesque. Sed nibh turpis, porttitor vel arcu eget, interdum semper nibh. Maecenas consectetur neque a lorem euismod, quis maximus dui dictum. Integer efficitur elit nec auctor volutpat. Proin et mollis felis, bibendum gravida tellus. Curabitur suscipit lectus non lacus lacinia, id hendrerit libero scelerisque. Vestibulum euismod sapien vel leo vulputate porta. Sed euismod, urna a porta pellentesque, nulla nisi venenatis quam, sit amet ultrices erat neque quis libero.</p><p>Proin iaculis turpis id sapien convallis, vel cursus nunc aliquet. Pellentesque in hendrerit sapien, nec suscipit erat. Vestibulum eget molestie nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus ullamcorper orci sed dolor lacinia, nec tristique elit luctus. Suspendisse maximus vitae urna sed sodales. Cras elit neque, tempor eu libero vel, tristique rhoncus libero. Quisque eu lacus volutpat, ullamcorper tellus vitae, suscipit eros. Maecenas consectetur porttitor congue. Vivamus erat metus, facilisis eget facilisis eu, scelerisque quis magna. Maecenas dapibus cursus ipsum, sed tincidunt turpis commodo et. Donec porta lacus rhoncus mauris semper, ac vehicula neque imperdiet.</p><p>Pellentesque blandit porttitor feugiat. Vestibulum scelerisque eros lectus, ut ullamcorper lorem ornare ut. Sed maximus lorem nec tellus convallis malesuada. Aliquam lacinia dignissim neque. Cras rutrum urna at auctor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sit amet semper urna, at congue neque. Vestibulum ac sapien quam. Ut enim nibh, dictum non malesuada non, elementum eu urna. Donec non metus quis dui fermentum laoreet.</p>', 'berita6.jpeg', '2020-05-18 07:06:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instagram`
--

CREATE TABLE `instagram` (
  `id_instagram` int(11) NOT NULL,
  `gambar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `instagram`
--

INSERT INTO `instagram` (`id_instagram`, `gambar`) VALUES
(1, 'slider-ig-1.jpg'),
(2, 'slider-ig-2.jpg'),
(3, 'slider-ig-3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Games'),
(2, 'Technology'),
(3, 'Computer'),
(4, 'Science'),
(5, 'IoT'),
(7, 'Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `urutan` int(11) NOT NULL,
  `menu` varchar(64) NOT NULL,
  `link` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `urutan`, `menu`, `link`) VALUES
(2, 2, 'Profil', '#'),
(3, 3, 'Studi', '#'),
(6, 1, 'Home', 'page'),
(8, 5, 'Mahasiswa', '#'),
(9, 6, 'Berita TIF', 'page/beritatif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `organisasi`
--

CREATE TABLE `organisasi` (
  `id_organisasi` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `link` varchar(256) NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `organisasi`
--

INSERT INTO `organisasi` (`id_organisasi`, `nama`, `gambar`, `link`) VALUES
(1, 'HM-TIF', 'organisasi-.png', '#'),
(2, 'LAZISMU', 'organisasi-1.png', '#'),
(3, 'IMM', 'organisasi-2.png', '#'),
(4, 'UMRI', 'organisasi-3.png', 'http://umri.ac.id/home/lang/id'),
(5, 'Tapak Suci Muhammadiyah', 'organisasi-4.png', '#'),
(6, 'Muhammadiyah', 'organisasi-5.png', '#');

-- --------------------------------------------------------

--
-- Struktur dari tabel `page`
--

CREATE TABLE `page` (
  `id_page` int(11) NOT NULL,
  `judul` longtext NOT NULL,
  `isi` longtext NOT NULL,
  `gambar` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `page`
--

INSERT INTO `page` (`id_page`, `judul`, `isi`, `gambar`) VALUES
(1, 'PROFIL PRODI', '<h2>Mempersiapkan Para Profesional Teknologi Informasi</h2><p>Sejak didirikan pada tahun 2008 di Pekanbaru, Prodi Teknik Informatika FASILKOM UMRI tetap menjaga komitmennya untuk terus belajar dan berkembang serta merespon perkembangan teknologi informasi terkini. Perjalanan selama lebih dari satu dasawarsa telah memberikan banyak pengalaman untuk selalu menjadi yang terdepan. Didukung dengan sumber daya manusia yang kompeten dan berkomitmen tinggi serta fasilitas pembelajaran yang memadai, Prodi Teknik Informatika bertekad untuk mendidik mahasiswa-mahasiswanya sehingga menghasilkan profesional teknologi informasi yang berjiwa entrepreneur serta menjunjung tinggi etika.</p><blockquote><p>Saat ini prodi Teknik Informatika telah terakreditasi <strong>“B” Sangat Baik </strong>dengan SK No. 2786/SK/BAN-PT/Akred/S/XI/2016</p></blockquote>', NULL),
(2, 'KURIKULUM', '<p>Kurikulum Program Studi Teknik Informatika Universitas Muhammadiyah Riau disusun dengan fokus yang terletak pada teori, riset dan penerapan di bidang Teknik Informatika, bidang ilmu lainnya serta masyarakat dan industri serta merujuk kepada perkembangan teknologi terkini dalam bidang ilmu komputer dan informatika.</p><p>Pendidikan Sarjana ditempuh selama 4 tahun / 8 Semester dengan minimal telah menempuh sebanyak 144 SKS.</p><figure class=\"table\"><table><thead><tr><th colspan=\"5\">Semester : 1 (Semester)</th></tr><tr><th>No</th><th>Kode</th><th>Nama</th><th>STS</th><th>SKS</th></tr></thead><tbody><tr><th>1</th><td>401011</td><td>LOGIKA DAN ALGORITMA</td><td>*</td><td>3</td></tr><tr><th>2</th><td>401012</td><td>PENGANTAR TEKNOLOGI INFORMASI</td><td>*</td><td>3</td></tr><tr><th>3</th><td>401013</td><td>PRAKTIKUM PENGANTAR TEKNOLOGI INFORMASI</td><td>*</td><td>1</td></tr><tr><th>4</th><td>401114</td><td>SISTEM DIGITAL</td><td>*</td><td>3</td></tr><tr><th>5</th><td>401115</td><td>PRAKTIKUM SISTEM DIGITAL</td><td>*</td><td>1</td></tr><tr><th>6</th><td>401116</td><td>KALKULUS</td><td>*</td><td>3</td></tr><tr><th>7</th><td>UM101</td><td>AL – ISLAM 1</td><td>*</td><td>2</td></tr><tr><th>8</th><td>UM105</td><td>BAHASA INGGRIS</td><td>*</td><td>2</td></tr><tr><th colspan=\"4\">Total</th><td>18</td></tr></tbody></table></figure><figure class=\"table\"><table><thead><tr><th colspan=\"5\">Semester : 2 (Semester)</th></tr><tr><th>#</th><th>Kode</th><th>Nama</th><th>STS</th><th>SKS</th></tr></thead><tbody><tr><th>1</th><td>401021</td><td>PEMROGRAMAN DASAR</td><td>*</td><td>3</td></tr><tr><th>2</th><td>401022</td><td>PRAKTIKUM PEMROGRAMAN DASAR</td><td>*</td><td>1</td></tr><tr><th>3</th><td>401123</td><td>ETIKA PROFESI</td><td>*</td><td>2</td></tr><tr><th>4</th><td>401124</td><td>SISTEM OPERASI</td><td>*</td><td>3</td></tr><tr><th>5</th><td>401125</td><td>PRAKTIKUM SISTEM OPERASI</td><td>*</td><td>1</td></tr><tr><th>6</th><td>401126</td><td>BASIS DATA</td><td>*</td><td>3</td></tr><tr><th>7</th><td>401127</td><td>ALJABAR LINEAR</td><td>*</td><td>3</td></tr><tr><th>8</th><td>UM202</td><td>AL – ISLAM 2</td><td>*</td><td>2</td></tr><tr><th>9</th><td>UM207</td><td>PANCASILA</td><td>*</td><td>2</td></tr><tr><th colspan=\"4\">Total :</th><td>20</td></tr></tbody></table></figure><figure class=\"table\"><table><thead><tr><th colspan=\"5\">Semester : 3 (Semester)</th></tr><tr><th>#</th><th>Kode</th><th>Nama</th><th>STS</th><th>SKS</th></tr></thead><tbody><tr><th>1</th><td>401031</td><td>JARINGAN KOMPUTER</td><td>*</td><td>3</td></tr><tr><th>2</th><td>401032</td><td>PRAKTIKUM JARINGAN KOMPUTER</td><td>*</td><td>1</td></tr><tr><th>3</th><td>401033</td><td>PEMROGRAMAN BERORIENTASI OBJEK</td><td>*</td><td>3</td></tr><tr><th>4</th><td>401034</td><td>PRAKTIKUM PEMROGRAMAN BERORIENTASI OBJEK</td><td>*</td><td>1</td></tr><tr><th>5</th><td>401135</td><td>SISTEM INFORMASI MANAJEMEN</td><td>*</td><td>3</td></tr><tr><th>6</th><td>401136</td><td>KOMUNIKASI INTERPERSONAL</td><td>*</td><td>2</td></tr><tr><th>7</th><td>401137</td><td>STATISTIKA &amp; PROBABILITAS</td><td>*</td><td>3</td></tr><tr><th>8</th><td>UM303</td><td>AL – ISLAM 3</td><td>*</td><td>2</td></tr><tr><th>9</th><td>UM308</td><td>KEWARGANEGARAAN</td><td>*</td><td>2</td></tr><tr><th colspan=\"4\">Total :</th><td>&nbsp;20</td></tr></tbody></table></figure><figure class=\"table\"><table><thead><tr><th colspan=\"5\">Semester : 4 (Semester)</th></tr><tr><th>#</th><th>Kode</th><th>Nama</th><th>STS</th><th>SKS</th></tr></thead><tbody><tr><th>1</th><td>401041</td><td>REKAYASA WEB</td><td>*</td><td>3</td></tr><tr><th>2</th><td>401042</td><td>PRAKTIKUM REKAYASA WEB</td><td>*</td><td>1</td></tr><tr><th>3</th><td>401043</td><td>MULTIMEDIA</td><td>*</td><td>2</td></tr><tr><th>4</th><td>401044</td><td>KOMUNIKASI DATA</td><td>*</td><td>3</td></tr><tr><th>5</th><td>401311</td><td>ANALISIS JARINGAN</td><td>&nbsp;</td><td>3</td></tr><tr><th>6</th><td>401312</td><td>PRAKTIKUM ANALISIS JARINGAN</td><td>&nbsp;</td><td>1</td></tr><tr><th>7</th><td>401313</td><td>MANAJEMEN SERVER</td><td>&nbsp;</td><td>3</td></tr><tr><th>8</th><td>401411</td><td>PEMROGRAMAN FRAME WORK</td><td>&nbsp;</td><td>3</td></tr><tr><th>9</th><td>401412</td><td>PRAKTIKUM PEMROGRAMAN FRAMEWORK</td><td>&nbsp;</td><td>1</td></tr><tr><th>10</th><td>401413</td><td>SEMANTIK WEB</td><td>&nbsp;</td><td>3</td></tr><tr><th>11</th><td>UM404</td><td>AL – ISLAM 4</td><td>*</td><td>2</td></tr><tr><th>12</th><td>UM406</td><td>BAHASA INDONESIA</td><td>*</td><td>2</td></tr></tbody></table></figure><figure class=\"table\"><table><thead><tr><th colspan=\"5\">Semester : 5 (Semester)</th></tr><tr><th>#</th><th>Kode</th><th>Nama</th><th>STS</th><th>SKS</th></tr></thead><tbody><tr><th>1</th><td>401051</td><td>JARINGAN NIRKABEL</td><td>*</td><td>3</td></tr><tr><th>2</th><td>401152</td><td>INTERAKSI MANUSIA DAN KOMPUTER</td><td>*</td><td>3</td></tr><tr><th>3</th><td>401153</td><td>TEORI BAHASA &amp; OTOMATA</td><td>*</td><td>3</td></tr><tr><th>4</th><td>401154</td><td>METODOLOGI PENELITIAN</td><td>*</td><td>2</td></tr><tr><th>5</th><td>401314</td><td>KRIPTOGRAPY</td><td>&nbsp;</td><td>3</td></tr><tr><th>6</th><td>401315</td><td>PRAKTIKUM KRIPTOGRAPY</td><td>&nbsp;</td><td>1</td></tr><tr><th>7</th><td>401316</td><td>ADMINISTRASI &amp; DESAIN JARINGAN KOMPUTER</td><td>&nbsp;</td><td>3</td></tr><tr><th>8</th><td>401414</td><td>ADMINISTRASI BASIS DATA</td><td>&nbsp;</td><td>3</td></tr><tr><th>9</th><td>401415</td><td>PRAKTIKUM ADMINISTRASI BASIS DATA</td><td>&nbsp;</td><td>1</td></tr><tr><th>10</th><td>401416</td><td>SISTEM INFORMASI GEOGRAFIS</td><td>&nbsp;</td><td>3</td></tr><tr><th>11</th><td>UM509</td><td>KEWIRAUSAHAAN</td><td>*</td><td>2</td></tr><tr><th colspan=\"4\">Total :</th><td>27</td></tr></tbody></table></figure><figure class=\"table\"><table><thead><tr><th colspan=\"5\">Semester : 6 (Semester)</th></tr><tr><th>#</th><th>Kode</th><th>Nama</th><th>STS</th><th>SKS</th></tr></thead><tbody><tr><th>1</th><td>401061</td><td>PEMROGRAMAN MOBILE</td><td>*</td><td>3</td></tr><tr><th>2</th><td>401062</td><td>PRAKTIKUM PEMROGRAMAN MOBILE</td><td>*</td><td>1</td></tr><tr><th>3</th><td>401163</td><td>REKAYASA PERANGKAT LUNAK</td><td>*</td><td>3</td></tr><tr><th>4</th><td>401164</td><td>DIGITAL FORENSIC</td><td>*</td><td>3</td></tr><tr><th>5</th><td>401165</td><td>KEAMANAN JARINGAN</td><td>*</td><td>2</td></tr><tr><th>6</th><td>401317</td><td>PEMROGRAMAN PARALEL</td><td>&nbsp;</td><td>3</td></tr><tr><th>7</th><td>401318</td><td>SMART CITY</td><td>&nbsp;</td><td>3</td></tr><tr><th>8</th><td>401417</td><td>E – BISNIS</td><td>&nbsp;</td><td>3</td></tr><tr><th>9</th><td>401418</td><td>GRAFIKA KOMPUTER</td><td>&nbsp;</td><td>3</td></tr><tr><th>10</th><td>UM610</td><td>KKN</td><td>*</td><td>2</td></tr><tr><th colspan=\"4\">Total :</th><td>26</td></tr></tbody></table></figure><figure class=\"table\"><table><thead><tr><th colspan=\"5\">Semester : 7 (Semester)</th></tr><tr><th>#</th><th>Kode</th><th>Nama</th><th>STS</th><th>SKS</th></tr></thead><tbody><tr><th>1</th><td>401071</td><td>KERJA PRAKTEK</td><td>*</td><td>2</td></tr><tr><th>2</th><td>401172</td><td>KECERDASAN BUATAN</td><td>*</td><td>3</td></tr><tr><th>3</th><td>401173</td><td>HUKUM SIBER</td><td>*</td><td>3</td></tr><tr><th>4</th><td>401174</td><td>SISTEM BERKAS</td><td>*</td><td>3</td></tr><tr><th>5</th><td>401175</td><td>KOMPUTASI AWAN</td><td>*</td><td>3</td></tr><tr><th>6</th><td>401319</td><td>DIGITAL EVIDENCE</td><td>&nbsp;</td><td>3</td></tr><tr><th>7</th><td>401320</td><td>MANAJEMEN INVESTIGASI DIGITAL FORENSIK</td><td>&nbsp;</td><td>3</td></tr><tr><th>8</th><td>401419</td><td>TEKNIK KOMPULASI</td><td>&nbsp;</td><td>3</td></tr><tr><th>9</th><td>401420</td><td>E – GOVERMENT</td><td>&nbsp;</td><td>3</td></tr></tbody></table></figure><figure class=\"table\"><table><thead><tr><th colspan=\"5\">Semester : 8(Semester)</th></tr><tr><th>#</th><th>Kode</th><th>Nama</th><th>STS</th><th>SKS</th></tr></thead><tbody><tr><th>1</th><td>401411</td><td>SKRIPSI</td><td>*</td><td>6</td></tr></tbody></table></figure>', NULL),
(3, 'PROFIL LULUSAN', '<p>Program Studi Teknik Informatika Menetapkan peran yang dapat dilakukan oleh lulusan/Alumni nya baik dibidang keahlian atau bidang kerja tertentu.</p><p>Penetapan profil lulusan yaitu menetapkan peran yang dapat dilakukan oleh lulusan dibidang keahlian atau bidang kerja tertentu antara 1-3 tahun setelah menyelesaikan program studi.</p><p>Profil dapat ditetapkan atas hasil kajian:</p><ol><li>Kebutuhan pasar kerja oleh pemerintahan</li><li>Dunia&nbsp; usaha&nbsp; maupun&nbsp; industri, serta</li><li>Kebutuhan&nbsp; dalam&nbsp; mengembangkan&nbsp; ilmu&nbsp; pengetahuan&nbsp; dan&nbsp; teknologi.</li></ol><figure class=\"table\"><table><tbody><tr><td>evel Kualifikasi</td><td>Kata kunci Tingkat Kemampuan Kerja</td><td>Program</td></tr><tr><td>6</td><td>Mengaplikasikan, mengkaji, membuat desain,memanfaatkan IPTEKS,menyelesaikan masalah.</td><td>Sarjana</td></tr></tbody></table></figure><p><i>Sumber: panduan penyusunancapaian pembelajaranlulusanprogram studi, Belmawa Ristekdikti 2014</i></p><p>Deskripsi kompetensi dari lulusan program sarjana sesuai dengan KKNI level 6 adalah sebagai berikut:</p><ol><li>Mampu mengaplikasikan bidang keahliannya dan memanfaatkan IPTEKS pada bidangnya dalam penyelesaian masalah serta mampu beradaptasi terhadap situasi yang dihadapi.</li><li>Menguasai konsep teoritis bidang pengetahuan tertentu secara umum dan konsep teoritis bagian khusus dalam bidang pengetahuan tersebut secara mendalam, serta mampu memformulasikan penyelesaian masalah prosedural.</li><li>Mampu mengambil keputusan yang tepat berdasarkan analisis informasi dan data, dan memberikan petunjuk dalam memilih berbagai alternatif solusi secara mandiri dan kelompok.</li><li>Bertanggung jawab pada pekerjaan sendiri dan dapat diberi tanggung jawab atas pencapaian hasil kerja organisasi.</li></ol><p>Kompetensi Lulusan Program Studi Teknik Informatika/Ilmu Komputer</p><p>Tabel A-1.&nbsp; Kompetensi Lulusan Program Studi Teknik Informatika/Ilmu Komputer</p><figure class=\"table\"><table><tbody><tr><td><strong>Kompetensi Umum</strong></td><td>Memiliki pengetahuan yang memadai terkait dengan cara kerja sistem komputer dan mampu merancang dan mengembangkan berbagai produk piranti berbasis digital.</td></tr><tr><td><strong>Kompetensi Inti</strong></td><td>Mampu melakukan rancang bangun perangkat keras dan lunak (<i>embedded system</i>) dengan menggunakan metode, teknik dan alat bantu sesuai kebutuhan pengguna.Mempunyai pengetahuan dasar ilmiah dan mekanisme kerja komputer sehingga mampu memecahkan masalah melalui pembuatan model solusi sistem berbasis komputer.Memiliki kemampuan untuk mengembangkan perancangan jaringan dan perangkat keras (hardware) dalam organisasi.</td></tr><tr><td><strong>Kompetensi Pilihan</strong></td><td>Mampu mendesain, merancang maupun menganalisis bidang otomasi baik skala kecil maupun kontrol sistem dan perawatan serta pengembangannya, keamanan jaringan komputer,&nbsp; <i>Embedded Systems</i>, &nbsp;<i>Digital Signal Processing</i>, <i>Computer Systems Engineering</i>,dan lain-lainnya.</td></tr></tbody></table></figure>', NULL),
(5, 'Sejarah Prodi Teknik Informatika', '<p><i>Software engineering</i> termasuk bagian dari ilmu komputer, lebih tepatnya yaitu pengembangan dan pembangunan <i>software</i> sistem komputer dan <i>software</i> aplikasi. <i>System software</i> terdiri dari <i>program</i> yang mengatur utilitas komputisasi dan sistem operasi. Aplikasi <i>software</i> termasuk <i>user-focused</i> program, seperti <i>program database</i>, <i>web browser</i>, dan lainnya.</p><p>Pengetahuan mengenai bahasa pemograman, pengembangan <i>software</i>, dan sistem operasi komputer adalah tiga komponen utama dari ilmu komputer. <i>Software Engineering</i> berhubungan, tetapi mempunyai sedikit perbedaan dengan <i>hardware engineering</i>. <i>Hardware engineering</i> adalah proses <i>design</i> dan pengembangan perangkat keras teknologi komputer, seperti <i>design processor, networking</i>, dll.</p><p>Beberapa cabang utama dan cabang karir dalam <i>software engineering</i> antara lain :</p><p><i>1.</i> <i>Application Development</i></p><p>Berdasarkan pada kemampuan <i>problem-solving</i>, <i>non-Web software development</i>. Bahasa pemograman yang digunakan diantaranya Java dan C#.</p><p><i>2.</i> <i>System Development</i></p><p><i>Design</i> dan <i>Coding</i>. Digunakan untuk <i>support application development</i>. Bahasa pemograman yang digunakan antara lain C dan C++.</p><p><i>3.</i> <i>Web Development</i></p><p>Melakukan <i>design software</i> atau aplikasi untuk dijalankan pada <i>web browser</i>. Menggunakan bahasa pemograman seperti HTML, JavaScript dan PHP.</p><p><i>4.</i> <i>Embedded System Development</i></p><p>Melakukan <i>design</i> sistem komputer dan <i>software</i> untuk digunakan pada perangkat non-komputer, seperti mobil. Menggunakan bahasa pemograman seperti C dan gabungan bahasa lainnya.</p><p>Sumber : <a href=\"http://medium.com/\">http://medium.com</a></p>', NULL),
(6, 'Sambutan Ketua Program Studi', '<p>Artificial Intelligence disingkat AI adalah sebuah entitas cerdas secara ilmiah yang diciptakan oleh manusia. Entitas tersebut di tanamkan ke dalam sebuah mesin, sehingga membuat mesin tersebut seolah-olah mampu berpikir sendiri untuk mengambil sebuah keputusan.</p><p>AI bisa dibilang bukan sebuah perangkat komputer, karena komputer hanya bisa mengambil keputusan dan menghasilkan fungsi-fungsi saat diarahkan penggunanya. Sedangkan AI atau kecerdasan buatan ini rupanya mampu menentukan sendiri keputusan apa yang akan di ambil berdasarkan pengalaman yang sudah direkam menjadi sebuah pengetahuan. Rekaman tersebut tersimpan pada database perangkat AI itu sendiri, dan kemudian diterapkan jika diperlukan.</p><p>Kemunculan perangkat kecerdasan buatan ini bisa dibilang merupakan kemajuan teknologi yang sangat luar biasa, karena konsep perangkat berbasis AI perlahan-lahan sudah mulai diterapkan dalam berbagai bidang seperti multimedia, search engine, robotik, smart home, dan lain sebagainya. Intinya, AI adalah sebuah program kecerdasan buatan yang ditanamkan di sebuah mesin atau perangkat agar lebih memudahkan manusia mengerjakan pekerjaannya. Selain itu lewat ini juga akan dibahas mengenai sejarah AI, dari mulai dibuat hingga dikembangkan. Ada juga contoh-contoh dari perangkat AI.</p><p>Menelusuri Sejarah AI (Artificial Intelligence)</p><ul><li>Program kecerdasan buatan atau Artificial Intelligence pertama kali dicetuskan pada tahun 1951an. Tidak bisa dipungkiri bahwa di tahun tersebut memang sedang gencar-gencarnya pembuatan cikal bakal, konsep, hingga teknologi berbasis AI. Dan, AI sendiri pertama kali digunakan di University of Manchester untuk menjalankan sebuah mesin bernama Ferranti Mark 1.</li><li>Beberapa waktu kemudian, Christopher Strachey melanjutkan konsep kecerdasan buatan untuk menjalankan sebuah permainan catur, dimana bidak catur tersebut dapat berjalan secara otomatis dan mampu bermain melawan manusia sungguhan. Pada saat itu konsep papan catur Christopher Strachey disambut hangat oleh pemain catur seluruh dunia, sebab mereka masih bisa bermain catur walau hanya seorang diri.</li><li>Berlanjut pada tahun 1956, kecerdasan buatan tidak hanya dibuat untuk memudahkan bermain catur saja. Melainkan pada saat konferensi pertamanya, John McCharty menamai algoritma teknologi tersebut dengan sebutan “Artificial Intelligence”. Istilah tersebut masih digunakan hingga sekarang oleh para pakar teknologi.</li><li>Terakhir, konsep dan teknologi kecerdasan buatan disempurnakan oleh seorang ahli yang namanya masih diingat sampai sekarang sebagai seorang pakar kecerdasan buatan, yaitu Alan Turin. Pada saat itu, Alan Turin meneliti dan menguji coba algoritma AI yang diberi nama dengan “Turing Test”. Hingga seiring berkembangnya waktu, konsep teknologi AI banyak digunakan di berbagai teknologi baik itu multimedia, search engine, dan masih banyak lainnya. Rasanya itulah sekilas mengenai sejarah AI yang diramalkan akan membuat kemajuan teknologi dengan sangat luar biasa.</li></ul><p>Sumber : <a href=\"http://indoworx.com/\">http://indoworx.com</a></p>', 'page-.jpg'),
(7, 'Sejarah Prodi Teknik Informatika', '<p><i>Software engineering</i> termasuk bagian dari ilmu komputer, lebih tepatnya yaitu pengembangan dan pembangunan <i>software</i> sistem komputer dan <i>software</i> aplikasi. <i>System software</i> terdiri dari <i>program</i> yang mengatur utilitas komputisasi dan sistem operasi. Aplikasi <i>software</i> termasuk <i>user-focused</i> program, seperti <i>program database</i>, <i>web browser</i>, dan lainnya.</p><p>Pengetahuan mengenai bahasa pemograman, pengembangan <i>software</i>, dan sistem operasi komputer adalah tiga komponen utama dari ilmu komputer. <i>Software Engineering</i> berhubungan, tetapi mempunyai sedikit perbedaan dengan <i>hardware engineering</i>. <i>Hardware engineering</i> adalah proses <i>design</i> dan pengembangan perangkat keras teknologi komputer, seperti <i>design processor, networking</i>, dll.</p><p>Beberapa cabang utama dan cabang karir dalam <i>software engineering</i> antara lain :</p><p><i>1.</i> <i>Application Development</i></p><p>Berdasarkan pada kemampuan <i>problem-solving</i>, <i>non-Web software development</i>. Bahasa pemograman yang digunakan diantaranya Java dan C#.</p><p><i>2.</i> <i>System Development</i></p><p><i>Design</i> dan <i>Coding</i>. Digunakan untuk <i>support application development</i>. Bahasa pemograman yang digunakan antara lain C dan C++.</p><p><i>3.</i> <i>Web Development</i></p><p>Melakukan <i>design software</i> atau aplikasi untuk dijalankan pada <i>web browser</i>. Menggunakan bahasa pemograman seperti HTML, JavaScript dan PHP.</p><p><i>4.</i> <i>Embedded System Development</i></p><p>Melakukan <i>design</i> sistem komputer dan <i>software</i> untuk digunakan pada perangkat non-komputer, seperti mobil. Menggunakan bahasa pemograman seperti C dan gabungan bahasa lainnya.</p><p>Sumber : <a href=\"http://medium.com/\">http://medium.com</a></p>', 'page-1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pojok_prodi`
--

CREATE TABLE `pojok_prodi` (
  `id_pojok_prodi` int(11) NOT NULL,
  `page-1` varchar(128) NOT NULL,
  `page-2` varchar(128) NOT NULL,
  `poster` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pojok_prodi`
--

INSERT INTO `pojok_prodi` (`id_pojok_prodi`, `page-1`, `page-2`, `poster`) VALUES
(1, '6', '7', 'Poster-1.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poster`
--

CREATE TABLE `poster` (
  `id_poster` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `poster`
--

INSERT INTO `poster` (`id_poster`, `gambar`, `link`) VALUES
(1, 'Poster-.jpeg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `paragraf` varchar(5000) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `judul`, `paragraf`, `gambar`) VALUES
(2, 'MENATAP MASA DEPAN BERSAMA INFORMATIKA - UMRI', '<p><strong>WE TURN DREAMS INTO REALITY</strong>&nbsp;- Informatika-UMRI setuju bahwa setiap orang berhak memiliki harapan untuk memiliki masa depan yang indah. Memperoleh pendidikan yang berkualitas merupakan fondasi untuk menciptakan pembangunan berkelanjutan dan meningkatkan kualitas hidup setiap orang (Mahasiswa) khususnya di era teknologi saat ini.</p><p>Informatika - UMRI menggunakan pendekatan Teknologi dalam aktivitas pendidikan guna memajukan kualitas pembelajaran, cara belajar dan mengajar serta juga untuk mempengaruhi dimensi berpikir secara sistematis dan proaktif bagi pelajar dan sarjana. Sehingga terciptalah keseimbangan kompetensi SOFTSKILL dan HARDSKILL bagi setiap Mahasiswa di Program Studi Teknik Informatika.</p>', 'profil.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rel_kategori_berita`
--

CREATE TABLE `rel_kategori_berita` (
  `id_relasi` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `rel_kategori_berita`
--

INSERT INTO `rel_kategori_berita` (`id_relasi`, `id_berita`, `id_kategori`) VALUES
(29, 18, 3),
(30, 18, 4),
(35, 13, 1),
(36, 13, 2),
(37, 13, 5),
(40, 17, 3),
(41, 17, 4),
(42, 12, 1),
(43, 12, 2),
(44, 12, 3),
(45, 12, 4),
(46, 19, 1),
(47, 19, 4),
(48, 14, 2),
(49, 14, 4),
(50, 14, 7),
(51, 16, 5),
(52, 16, 7),
(53, 15, 1),
(54, 15, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `subjudul` varchar(128) NOT NULL,
  `link` varchar(256) NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `gambar`, `judul`, `subjudul`, `link`) VALUES
(7, 'Slider_-_Selamat_Datang.jpg', 'Selamat Datang', 'Web Prodi Teknik Informatika', '#');

-- --------------------------------------------------------

--
-- Struktur dari tabel `submenu`
--

CREATE TABLE `submenu` (
  `id_submenu` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `urutan` int(11) NOT NULL,
  `submenu` varchar(64) NOT NULL,
  `link` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `submenu`
--

INSERT INTO `submenu` (`id_submenu`, `id_menu`, `urutan`, `submenu`, `link`) VALUES
(1, 2, 0, 'Visi dan Misi', 'page/visimisi'),
(2, 2, 0, 'Dosen', 'page/dosen'),
(3, 3, 0, 'Kurikulum', 'page/kurikulum'),
(4, 3, 0, 'Profil Lulusan', 'page/profillulusan'),
(5, 3, 0, 'Program Sarjana', 'page/programsarjana'),
(7, 8, 0, 'HIMATIF', '#');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `instagram`
--
ALTER TABLE `instagram`
  ADD PRIMARY KEY (`id_instagram`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- Indeks untuk tabel `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id_page`);

--
-- Indeks untuk tabel `pojok_prodi`
--
ALTER TABLE `pojok_prodi`
  ADD PRIMARY KEY (`id_pojok_prodi`);

--
-- Indeks untuk tabel `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`id_poster`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `rel_kategori_berita`
--
ALTER TABLE `rel_kategori_berita`
  ADD PRIMARY KEY (`id_relasi`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indeks untuk tabel `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id_submenu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `instagram`
--
ALTER TABLE `instagram`
  MODIFY `id_instagram` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `page`
--
ALTER TABLE `page`
  MODIFY `id_page` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pojok_prodi`
--
ALTER TABLE `pojok_prodi`
  MODIFY `id_pojok_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `poster`
--
ALTER TABLE `poster`
  MODIFY `id_poster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rel_kategori_berita`
--
ALTER TABLE `rel_kategori_berita`
  MODIFY `id_relasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id_submenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
