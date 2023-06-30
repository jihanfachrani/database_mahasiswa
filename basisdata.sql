-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 09:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basisdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `NOANG` varchar(50) NOT NULL,
  `NMANG` varchar(50) NOT NULL,
  `ALAMAT` varchar(50) NOT NULL,
  `TELEPON` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`NOANG`, `NMANG`, `ALAMAT`, `TELEPON`) VALUES
('A1', 'Ajie', 'ciledug', '021-585375'),
('A2', 'Andi', 'tangerang', '021-123456'),
('A3', 'Ani', 'cengkareng', '021-654321'),
('A4', 'Ana', 'ciledug', '021-585370'),
('A5', 'Agus', 'tangerang', '021-212121'),
('A6 ', 'Angga', 'tangerang', ''),
('A7 ', 'Ade', 'ciledug', '021-585310');

-- --------------------------------------------------------

--
-- Table structure for table `anggota_kr`
--

CREATE TABLE `anggota_kr` (
  `id_anggota` varchar(10) NOT NULL,
  `nama_anggota` varchar(20) NOT NULL,
  `jabatan_anggota` varchar(10) NOT NULL,
  `usia_anggota` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota_kr`
--

INSERT INTO `anggota_kr` (`id_anggota`, `nama_anggota`, `jabatan_anggota`, `usia_anggota`, `id_kegiatan`) VALUES
('A001', 'Faturachman achmad', 'Ketua', 20, 1),
('A002', 'Risfan Novrian', 'Wakil', 21, 2),
('A003', 'Jihan Fachrani', 'Anggota', 18, 3),
('A004', 'Aldino Ogi', 'Anggota', 24, 4),
('A005', 'Jordi Sugino', 'Anggota', 19, 5);

-- --------------------------------------------------------

--
-- Table structure for table `angsuran`
--

CREATE TABLE `angsuran` (
  `NOANGS` varchar(50) NOT NULL,
  `TGANGS` varchar(50) NOT NULL,
  `JMANGS` int(50) NOT NULL,
  `ANGSKE` varchar(50) NOT NULL,
  `NOKREDIT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `angsuran`
--

INSERT INTO `angsuran` (`NOANGS`, `TGANGS`, `JMANGS`, `ANGSKE`, `NOKREDIT`) VALUES
('T01', '01-02-2006', 500000, '1', 'B01'),
('T02', '01-02-2006', 200000, '1', 'B02'),
('T03', '01-03-2006', 750000, '1', 'B03'),
('T04', '01-03-2006', 500000, '2', 'B01'),
('T05', '01-03-2006', 200000, '2', 'B02'),
('T06', '01-04-2006', 750000, '2', 'B03'),
('T07', '01-05-2006', 200000, '3', 'B02'),
('T08', '01-06-2006', 200000, '4', 'B02'),
('T09', '01-09-2006', 500000, '1', 'B04'),
('T10', '01-09-2006', 1000000, '1', 'B05'),
('T11', '01-10-2006', 500000, '2', 'B04');

-- --------------------------------------------------------

--
-- Table structure for table `bkredit`
--

CREATE TABLE `bkredit` (
  `NOKREDIT` varchar(50) NOT NULL,
  `TGKREDIT` varchar(50) NOT NULL,
  `JMKREDIT` int(50) NOT NULL,
  `JKWAKTU` varchar(50) NOT NULL,
  `TDLUNAS` varchar(50) NOT NULL,
  `NOANG` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bkredit`
--

INSERT INTO `bkredit` (`NOKREDIT`, `TGKREDIT`, `JMKREDIT`, `JKWAKTU`, `TDLUNAS`, `NOANG`) VALUES
('B01', '10-01-2006', 1000000, '2', 'LUNAS', 'A1'),
('B02', '15-01-2006', 1200000, '6', '	', 'A2'),
('B03', '20-02-2006', 1500000, '2', 'LUNAS', 'A5'),
('B04', '25-08-2006', 1000000, '2', 'LUNAS', 'A1'),
('B05', '20-08-2006', 2000000, '5', '	', 'A5');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `Branch_name` varchar(50) DEFAULT NULL,
  `account_number` int(11) DEFAULT NULL,
  `Customer_name` varchar(50) DEFAULT NULL,
  `balance` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`Branch_name`, `account_number`, `Customer_name`, `balance`) VALUES
('Hillside', 305, 'Lowman', 500),
('Hillside', 226, 'Camp', 336),
('Valleyview', 117, 'Camp', 205),
('Valleyview', 402, 'Khan', 10000),
('Hillside', 115, 'Khan', 62),
('Valleyview', 408, 'Khan', 1123),
('Valleyview', 639, 'Green', 750);

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `id_dok` varchar(10) NOT NULL,
  `id_kegiatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumentasi`
--

INSERT INTO `dokumentasi` (`id_dok`, `id_kegiatan`) VALUES
('D001', 1),
('D002', 2),
('D003', 3),
('D004', 4),
('D005', 5);

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_barang`
--

CREATE TABLE `inventaris_barang` (
  `id_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `kondisi_barang` varchar(10) NOT NULL,
  `id_kegiatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventaris_barang`
--

INSERT INTO `inventaris_barang` (`id_barang`, `nama_barang`, `kondisi_barang`, `id_kegiatan`) VALUES
('B001', 'Kamera', 'baik', 2),
('B002', 'Speaker', 'baik', 1),
('B003', 'Laptop', 'baik', 4),
('B004', 'Handy talkie', 'rusak', 3),
('B005', 'Bendera Indonesia', 'baik', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(20) NOT NULL,
  `waktu_kegiatan` date NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `id_dok` varchar(10) NOT NULL,
  `id_barang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `waktu_kegiatan`, `id_anggota`, `id_dok`, `id_barang`) VALUES
(1, 'Tabligh akbar', '2022-04-01', 'A001', 'D001', 'B002'),
(2, 'Turnamen futsal', '2022-05-02', 'A002', 'D002', 'B001'),
(3, 'Perbaikan jalan', '2022-06-03', 'A003', 'D003', 'B004'),
(4, 'Vaksinasi', '2022-07-04', 'A004', 'D004', 'B003'),
(5, 'HUT RI', '2022-08-17', 'A005', 'D005', 'B005');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id_dana` varchar(10) NOT NULL,
  `keluar_dana` int(11) NOT NULL,
  `masuk_dana` int(11) NOT NULL,
  `saldo_dana` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id_dana`, `keluar_dana`, `masuk_dana`, `saldo_dana`, `id_kegiatan`) VALUES
('K001', 300000, 500000, 200000, 1),
('K002', 200000, 450000, 400000, 2),
('K003', 500000, 800000, 750000, 3),
('K004', 200000, 300000, 250000, 4),
('K005', 250000, 400000, 200000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` varchar(10) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_dana` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_kegiatan`, `id_dana`) VALUES
('L001', 1, 'K001'),
('L002', 2, 'K002'),
('L003', 3, 'K003'),
('L004', 4, 'K004'),
('L005', 5, 'K005');

-- --------------------------------------------------------

--
-- Stand-in structure for view `mhs_bdg`
-- (See below for the actual view)
--
CREATE TABLE `mhs_bdg` (
`nim` char(10)
,`nama` char(10)
,`kelas` char(10)
,`asal` char(20)
,`nilai` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mhs_bgr`
-- (See below for the actual view)
--
CREATE TABLE `mhs_bgr` (
`nim` char(10)
,`nama` char(10)
,`kelas` char(10)
,`asal` char(20)
,`nilai` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mhs_bks`
-- (See below for the actual view)
--
CREATE TABLE `mhs_bks` (
`nim` char(10)
,`nama` char(10)
,`kelas` char(10)
,`asal` char(20)
,`nilai` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mhs_v1`
-- (See below for the actual view)
--
CREATE TABLE `mhs_v1` (
`nim` char(10)
,`nama` char(10)
,`nilai` int(11)
,`tuple_id` int(2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mhs_v2`
-- (See below for the actual view)
--
CREATE TABLE `mhs_v2` (
`nama` char(10)
,`kelas` char(10)
,`asal` char(20)
,`tuple_id` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absensi`
--

CREATE TABLE `tbl_absensi` (
  `nim` char(10) NOT NULL,
  `a1` int(11) NOT NULL,
  `a2` int(11) NOT NULL,
  `a3` int(11) NOT NULL,
  `a4` int(11) NOT NULL,
  `a5` int(11) NOT NULL,
  `a6` int(11) NOT NULL,
  `a7` int(11) NOT NULL,
  `a8` int(11) NOT NULL,
  `a9` int(11) NOT NULL,
  `a10` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_absensi`
--

INSERT INTO `tbl_absensi` (`nim`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `nilai`) VALUES
('MHS001', 100, 100, 0, 100, 100, 100, 100, 0, 100, 100, 80),
('MHS002', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100),
('MHS003', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100),
('MHS004', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100),
('MHS005', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100),
('MHS006', 100, 0, 100, 100, 100, 100, 0, 100, 100, 0, 70),
('MHS007', 100, 100, 100, 100, 100, 100, 100, 100, 100, 0, 90),
('MHS008', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100),
('MHS009', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100),
('MHS010', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100),
('MHS011', 0, 100, 100, 100, 100, 100, 100, 0, 100, 100, 80),
('MHS012', 100, 100, 100, 0, 100, 100, 100, 100, 100, 100, 90),
('MHS013', 100, 100, 100, 100, 100, 0, 0, 100, 100, 100, 80);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akhir`
--

CREATE TABLE `tbl_akhir` (
  `nim` char(10) NOT NULL,
  `abs` int(11) NOT NULL,
  `frm` int(11) NOT NULL,
  `tgs` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `akhir` int(11) NOT NULL,
  `hm` char(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_akhir`
--

INSERT INTO `tbl_akhir` (`nim`, `abs`, `frm`, `tgs`, `uts`, `uas`, `akhir`, `hm`, `ket`) VALUES
('MHS001', 80, 96, 71, 69, 73, 75, 'B', 'LULUS Memuaskan'),
('MHS002', 100, 94, 61, 57, 76, 72, 'B', 'LULUS Memuaskan'),
('MHS003', 100, 94, 65, 67, 53, 68, 'C', 'LULUS'),
('MHS004', 100, 94, 75, 87, 60, 78, 'B', 'LULUS Memuaskan'),
('MHS005', 100, 92, 79, 57, 81, 78, 'B', 'LULUS Memuaskan'),
('MHS006', 70, 92, 76, 86, 51, 72, 'B', 'LULUS Memuaskan'),
('MHS007', 90, 94, 93, 97, 99, 96, 'A', 'LULUS Sangat Memuaskan'),
('MHS008', 100, 94, 91, 100, 92, 95, 'A', 'LULUS Sangat Memuaskan'),
('MHS009', 100, 96, 91, 95, 91, 93, 'A', 'LULUS Sangat Memuaskan'),
('MHS010', 100, 94, 93, 100, 95, 96, 'A', 'LULUS Sangat Memuaskan'),
('MHS011', 80, 94, 90, 82, 82, 85, 'A', 'LULUS Sangat Memuaskan'),
('MHS012', 90, 97, 87, 83, 82, 86, 'A', 'LULUS Sangat Memuaskan'),
('MHS013', 80, 95, 82, 82, 80, 83, 'A', 'LULUS Sangat Memuaskan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dopem`
--

CREATE TABLE `tbl_dopem` (
  `nid` char(10) DEFAULT NULL,
  `nim` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dopem`
--

INSERT INTO `tbl_dopem` (`nid`, `nim`) VALUES
('DOS001', 'MHS002'),
('DOS002', 'MHS003'),
('DOS003', 'MHS007'),
('DOS004', 'MHS004'),
('DOS005', 'MHS012'),
('DOS006', 'MHS015'),
('DOS007', 'MHS016'),
('DOS001', 'MHS008'),
('DOS002', 'MHS009');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `nid` char(10) DEFAULT NULL,
  `nama` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`nid`, `nama`) VALUES
('DOS001', 'MUHAMMAD ENCEP'),
('DOS002', 'HILMY ALIY ANDRA PUTRA'),
('DOS003', 'MASHUM ABDUL JABBAR'),
('DOS004', 'RISDIANTO IRAWAN'),
('DOS005', 'UUS FIRDAUS'),
('DOS006', 'MULIL KHAIRA'),
('DOS007', 'AZHARUDIN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forum`
--

CREATE TABLE `tbl_forum` (
  `nim` char(10) NOT NULL,
  `f1` int(11) NOT NULL,
  `f2` int(11) NOT NULL,
  `f3` int(11) NOT NULL,
  `f4` int(11) NOT NULL,
  `f5` int(11) NOT NULL,
  `f6` int(11) NOT NULL,
  `f7` int(11) NOT NULL,
  `f8` int(11) NOT NULL,
  `f9` int(11) NOT NULL,
  `f10` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_forum`
--

INSERT INTO `tbl_forum` (`nim`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `nilai`) VALUES
('MHS001', 100, 97, 94, 94, 98, 97, 91, 93, 97, 100, 96),
('MHS002', 100, 88, 97, 98, 92, 88, 88, 88, 97, 100, 94),
('MHS003', 100, 98, 90, 97, 86, 94, 88, 91, 95, 100, 94),
('MHS004', 100, 100, 88, 90, 100, 86, 91, 99, 90, 100, 94),
('MHS005', 100, 91, 91, 87, 85, 87, 92, 97, 85, 100, 92),
('MHS006', 100, 88, 91, 91, 94, 87, 90, 94, 86, 100, 92),
('MHS007', 100, 88, 97, 94, 90, 85, 92, 90, 99, 100, 94),
('MHS008', 100, 99, 97, 92, 93, 85, 95, 90, 86, 100, 94),
('MHS009', 100, 94, 98, 96, 86, 95, 89, 99, 99, 100, 96),
('MHS010', 100, 85, 88, 100, 93, 94, 98, 87, 94, 100, 94),
('MHS011', 100, 94, 93, 88, 94, 90, 100, 94, 87, 100, 94),
('MHS012', 100, 98, 96, 95, 100, 92, 90, 99, 100, 100, 97),
('MHS013', 100, 99, 89, 98, 95, 89, 92, 100, 91, 100, 95);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_krs`
--

CREATE TABLE `tbl_krs` (
  `nim` char(10) DEFAULT NULL,
  `kodekul` char(10) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_krs`
--

INSERT INTO `tbl_krs` (`nim`, `kodekul`, `nilai`) VALUES
('MHS001', 'SD01', 0),
('MHS001', 'BD01', 0),
('MHS002', 'SD01', 0),
('MHS002', 'BD01', 0),
('MHS003', 'SD01', 0),
('MHS003', 'BD01', 0),
('MHS013', 'SD01', 0),
('MHS013', 'BD01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_krsx`
--

CREATE TABLE `tbl_krsx` (
  `nim` char(10) DEFAULT NULL,
  `kodemk` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_krsx`
--

INSERT INTO `tbl_krsx` (`nim`, `kodemk`) VALUES
('MHS001', 'MK02'),
('MHS002', 'MK02'),
('MHS001', 'MK04'),
('MHS003', 'MK04'),
('MHS004', 'MK07'),
('MHS002', 'MK04'),
('MHS005', 'MK05'),
('MHS007', 'MK01'),
('MHS008', 'MK01'),
('MHS009', 'MK03'),
('MHS010', 'MK02'),
('MHS011', 'MK05'),
('MHS012', 'MK06'),
('MHS013', 'MK04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kuliah`
--

CREATE TABLE `tbl_kuliah` (
  `kodekul` char(10) DEFAULT NULL,
  `kodemk` char(10) DEFAULT NULL,
  `nid` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kuliah`
--

INSERT INTO `tbl_kuliah` (`kodekul`, `kodemk`, `nid`) VALUES
('SD01', 'MK02', 'DOS005'),
('BD01', 'MK04', 'DOS005');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `nim` char(10) DEFAULT NULL,
  `namamhs` char(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `tuple_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`nim`, `namamhs`, `kota`, `tuple_id`) VALUES
('MHS001', 'CONAN EDOGAWA', 'Bandung', 1),
('MHS002', 'DORAEMON', 'Bandung', 2),
('MHS003', 'NOBITA', 'Bogor', 3),
('MHS004', 'SHIZUKA', 'Bogor', 4),
('MHS005', 'BRUCE WAYNE', 'Jakarta', 5),
('MHS006', 'BARRY ALLEN', 'Bandung', 6),
('MHS007', 'CLARK KENT', 'Jakarta', 7),
('MHS008', 'PETER PARKER', 'Bogor', 8),
('MHS009', 'MATT MURDOCK', 'Bogor', 9),
('MHS010', 'BRUCE BANNER', 'Bandung', 10),
('MHS011', 'TONY STARK', 'Bandung', 11),
('MHS012', 'KARA ZOR EL', 'Jakarta', 12),
('MHS013', 'AI HAIBARA', 'Jakarta', 13),
('MHS014', 'ANYA FORGER', 'Jakarta', 15);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs1`
--

CREATE TABLE `tbl_mhs1` (
  `nim` char(10) DEFAULT NULL,
  `nama` char(10) DEFAULT NULL,
  `kelas` char(10) DEFAULT NULL,
  `asal` char(20) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `tuple_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mhs1`
--

INSERT INTO `tbl_mhs1` (`nim`, `nama`, `kelas`, `asal`, `nilai`, `tuple_id`) VALUES
('MHS001', 'Budi', 'Pagi', 'Bogor', 88, 1),
('MHS004', 'Beni', 'Pagi', 'Bandung', 81, 2),
('MHS021', 'Beno', 'Sore', 'Bekasi', 90, 3),
('MHS033', 'Citra', 'Pagi', 'Bogor', 79, 4),
('MHS004', 'Cita', 'Sore', 'Bandung', 85, 5),
('MHS007', 'Desi', 'Sore', 'Bandung', 75, 6),
('MHS015', 'Dedi', 'Pagi', 'Bekasi', 70, 7),
('MHS033', 'Dewi', 'Pagi', 'Bogor', 84, 8);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tbl_mhs_bdg`
-- (See below for the actual view)
--
CREATE TABLE `tbl_mhs_bdg` (
`nim` char(10)
,`namamhs` char(50)
,`kota` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tbl_mhs_bgr`
-- (See below for the actual view)
--
CREATE TABLE `tbl_mhs_bgr` (
`nim` char(10)
,`namamhs` char(50)
,`kota` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tbl_mhs_jkt`
-- (See below for the actual view)
--
CREATE TABLE `tbl_mhs_jkt` (
`nim` char(10)
,`namamhs` char(50)
,`kota` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tbl_mhs_v1`
-- (See below for the actual view)
--
CREATE TABLE `tbl_mhs_v1` (
`nim` char(10)
,`namamhs` char(50)
,`tuple_id` int(2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tbl_mhs_v2`
-- (See below for the actual view)
--
CREATE TABLE `tbl_mhs_v2` (
`namamhs` char(50)
,`kota` varchar(50)
,`tuple_id` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mk`
--

CREATE TABLE `tbl_mk` (
  `kodemk` char(5) DEFAULT NULL,
  `nama` char(50) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mk`
--

INSERT INTO `tbl_mk` (`kodemk`, `nama`, `sks`) VALUES
('MK01', 'ALGORITMA DAN PEMROGRAMAN', 2),
('MK02', 'STRUKTUR DATA', 3),
('MK03', 'APLIKASI KOMPUTER', 2),
('MK04', 'BASIS DATA 1', 3),
('MK05', 'BASIS DATA 2', 3),
('MK06', 'MATEMATIKA DASAR', 2),
('MK07', 'MATEMATIKA 2', 2),
('MK08', 'BAHASA PEMROGRAMAN 1', 3),
('MK09', 'BAHASA PEMROGRAMAN 2', 3),
('MK10', 'SISTEM OPERASI', 3),
('MK11', 'JARINGAN KOMPUTER', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mutu1`
--

CREATE TABLE `tbl_mutu1` (
  `nilai` char(10) NOT NULL,
  `hm` char(11) NOT NULL,
  `ket` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mutu1`
--

INSERT INTO `tbl_mutu1` (`nilai`, `hm`, `ket`) VALUES
('80-100', 'A', 'Lulus Sangat Memuask'),
('70-79', 'B', 'Lulus Kurang  Memuas'),
('59-69', 'C', 'Lulus'),
('45-58', 'D', 'Lulus Kurang Memuask'),
('0-44', 'E', 'Tidak Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rack`
--

CREATE TABLE `tbl_rack` (
  `id_rack` int(11) NOT NULL,
  `nama_rack` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tugas`
--

CREATE TABLE `tbl_tugas` (
  `nim` char(10) NOT NULL,
  `t1` int(11) NOT NULL,
  `t2` int(11) NOT NULL,
  `t3` int(11) NOT NULL,
  `t4` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tugas`
--

INSERT INTO `tbl_tugas` (`nim`, `t1`, `t2`, `t3`, `t4`, `nilai`) VALUES
('MHS001', 69, 73, 73, 69, 71),
('MHS002', 57, 76, 52, 60, 61),
('MHS003', 67, 53, 71, 69, 65),
('MHS004', 87, 60, 71, 83, 75),
('MHS005', 57, 81, 93, 86, 79),
('MHS006', 86, 51, 85, 82, 76),
('MHS007', 97, 99, 92, 82, 93),
('MHS008', 100, 92, 88, 84, 91),
('MHS009', 95, 91, 89, 88, 91),
('MHS010', 100, 95, 84, 91, 93),
('MHS011', 82, 82, 99, 98, 90),
('MHS012', 83, 82, 93, 91, 87),
('MHS013', 82, 80, 83, 82, 82);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ujian`
--

CREATE TABLE `tbl_ujian` (
  `nim` char(10) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ujian`
--

INSERT INTO `tbl_ujian` (`nim`, `uts`, `uas`) VALUES
('MHS001', 69, 73),
('MHS002', 57, 76),
('MHS003', 67, 53),
('MHS004', 87, 60),
('MHS005', 57, 81),
('MHS006', 86, 51),
('MHS007', 97, 99),
('MHS008', 100, 92),
('MHS009', 95, 91),
('MHS010', 100, 95),
('MHS011', 82, 82),
('MHS012', 83, 82),
('MHS013', 82, 80);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` varchar(11) DEFAULT NULL,
  `nama` char(50) DEFAULT NULL,
  `pwd` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `nama`, `pwd`) VALUES
('I2111735', 'JIHAN FACHRANI', 'estetik');

-- --------------------------------------------------------

--
-- Structure for view `mhs_bdg`
--
DROP TABLE IF EXISTS `mhs_bdg`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mhs_bdg`  AS SELECT `tbl_mhs1`.`nim` AS `nim`, `tbl_mhs1`.`nama` AS `nama`, `tbl_mhs1`.`kelas` AS `kelas`, `tbl_mhs1`.`asal` AS `asal`, `tbl_mhs1`.`nilai` AS `nilai` FROM `tbl_mhs1` WHERE `tbl_mhs1`.`asal` = 'Bandung' ;

-- --------------------------------------------------------

--
-- Structure for view `mhs_bgr`
--
DROP TABLE IF EXISTS `mhs_bgr`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mhs_bgr`  AS SELECT `tbl_mhs1`.`nim` AS `nim`, `tbl_mhs1`.`nama` AS `nama`, `tbl_mhs1`.`kelas` AS `kelas`, `tbl_mhs1`.`asal` AS `asal`, `tbl_mhs1`.`nilai` AS `nilai` FROM `tbl_mhs1` WHERE `tbl_mhs1`.`asal` = 'Bogor' ;

-- --------------------------------------------------------

--
-- Structure for view `mhs_bks`
--
DROP TABLE IF EXISTS `mhs_bks`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mhs_bks`  AS SELECT `tbl_mhs1`.`nim` AS `nim`, `tbl_mhs1`.`nama` AS `nama`, `tbl_mhs1`.`kelas` AS `kelas`, `tbl_mhs1`.`asal` AS `asal`, `tbl_mhs1`.`nilai` AS `nilai` FROM `tbl_mhs1` WHERE `tbl_mhs1`.`asal` = 'Bekasi' ;

-- --------------------------------------------------------

--
-- Structure for view `mhs_v1`
--
DROP TABLE IF EXISTS `mhs_v1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mhs_v1`  AS SELECT `tbl_mhs1`.`nim` AS `nim`, `tbl_mhs1`.`nama` AS `nama`, `tbl_mhs1`.`nilai` AS `nilai`, `tbl_mhs1`.`tuple_id` AS `tuple_id` FROM `tbl_mhs1` ;

-- --------------------------------------------------------

--
-- Structure for view `mhs_v2`
--
DROP TABLE IF EXISTS `mhs_v2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mhs_v2`  AS SELECT `tbl_mhs1`.`nama` AS `nama`, `tbl_mhs1`.`kelas` AS `kelas`, `tbl_mhs1`.`asal` AS `asal`, `tbl_mhs1`.`tuple_id` AS `tuple_id` FROM `tbl_mhs1` ;

-- --------------------------------------------------------

--
-- Structure for view `tbl_mhs_bdg`
--
DROP TABLE IF EXISTS `tbl_mhs_bdg`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbl_mhs_bdg`  AS SELECT `tbl_mhs`.`nim` AS `nim`, `tbl_mhs`.`namamhs` AS `namamhs`, `tbl_mhs`.`kota` AS `kota` FROM `tbl_mhs` WHERE `tbl_mhs`.`kota` = 'Bandung' ;

-- --------------------------------------------------------

--
-- Structure for view `tbl_mhs_bgr`
--
DROP TABLE IF EXISTS `tbl_mhs_bgr`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbl_mhs_bgr`  AS SELECT `tbl_mhs`.`nim` AS `nim`, `tbl_mhs`.`namamhs` AS `namamhs`, `tbl_mhs`.`kota` AS `kota` FROM `tbl_mhs` WHERE `tbl_mhs`.`kota` = 'Bogor' ;

-- --------------------------------------------------------

--
-- Structure for view `tbl_mhs_jkt`
--
DROP TABLE IF EXISTS `tbl_mhs_jkt`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbl_mhs_jkt`  AS SELECT `tbl_mhs`.`nim` AS `nim`, `tbl_mhs`.`namamhs` AS `namamhs`, `tbl_mhs`.`kota` AS `kota` FROM `tbl_mhs` WHERE `tbl_mhs`.`kota` = 'Jakarta' ;

-- --------------------------------------------------------

--
-- Structure for view `tbl_mhs_v1`
--
DROP TABLE IF EXISTS `tbl_mhs_v1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbl_mhs_v1`  AS SELECT `tbl_mhs`.`nim` AS `nim`, `tbl_mhs`.`namamhs` AS `namamhs`, `tbl_mhs`.`tuple_id` AS `tuple_id` FROM `tbl_mhs` ;

-- --------------------------------------------------------

--
-- Structure for view `tbl_mhs_v2`
--
DROP TABLE IF EXISTS `tbl_mhs_v2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbl_mhs_v2`  AS SELECT `tbl_mhs`.`namamhs` AS `namamhs`, `tbl_mhs`.`kota` AS `kota`, `tbl_mhs`.`tuple_id` AS `tuple_id` FROM `tbl_mhs` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_kr`
--
ALTER TABLE `anggota_kr`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`id_dok`),
  ADD KEY `id_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `inventaris_barang`
--
ALTER TABLE `inventaris_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id_dok` (`id_dok`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id_dana`),
  ADD KEY `id_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id_kegiatan` (`id_kegiatan`),
  ADD KEY `id_dana` (`id_dana`);

--
-- Indexes for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_akhir`
--
ALTER TABLE `tbl_akhir`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_forum`
--
ALTER TABLE `tbl_forum`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`tuple_id`);

--
-- Indexes for table `tbl_mhs1`
--
ALTER TABLE `tbl_mhs1`
  ADD PRIMARY KEY (`tuple_id`);

--
-- Indexes for table `tbl_rack`
--
ALTER TABLE `tbl_rack`
  ADD PRIMARY KEY (`id_rack`) USING BTREE;

--
-- Indexes for table `tbl_tugas`
--
ALTER TABLE `tbl_tugas`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_ujian`
--
ALTER TABLE `tbl_ujian`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  MODIFY `tuple_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_mhs1`
--
ALTER TABLE `tbl_mhs1`
  MODIFY `tuple_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_rack`
--
ALTER TABLE `tbl_rack`
  MODIFY `id_rack` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota_kr`
--
ALTER TABLE `anggota_kr`
  ADD CONSTRAINT `FK_anggota_kegiatan` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD CONSTRAINT `FK_dokumentasi_kegiatan` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `inventaris_barang`
--
ALTER TABLE `inventaris_barang`
  ADD CONSTRAINT `FK_inventaris_barang_kegiatan` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `FK_kegiatan_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `anggota_kr` (`id_anggota`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_kegiatan_dokumentasi` FOREIGN KEY (`id_dok`) REFERENCES `dokumentasi` (`id_dok`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_kegiatan_inventaris_barang` FOREIGN KEY (`id_barang`) REFERENCES `inventaris_barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD CONSTRAINT `FK_keuangan_kegiatan` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `FK_laporan_kegiatan` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_laporan_keuangan` FOREIGN KEY (`id_dana`) REFERENCES `keuangan` (`id_dana`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
