-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 01:12 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elearningbk`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE IF NOT EXISTS `data_guru` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nip` int(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id`, `nama`, `nip`) VALUES
(1, 'siti mardiyah', 1962110619),
(2, 'nina ernawati', 1964010119),
(3, 'linda jayanti', 1963890320);

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nomor_induk` varchar(10) NOT NULL,
  `nilai` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nama`, `nomor_induk`, `nilai`) VALUES
(1, 'akbar ardhavian ', '8332', '70'),
(2, 'akifan aqila', '8333', '80'),
(3, 'aprillia heardearini', '8334', '40'),
(4, 'arya azhara', '8335', '60'),
(5, 'deby lia', '8336', '60'),
(6, 'dian febriyanti', '8337', '90'),
(7, 'dinabila rofiana', '8338', '100'),
(8, 'dinda novi', '8339', '60'),
(9, 'ellisya putri', '8340', '80'),
(10, 'fandrea dwi', '8341', '40'),
(11, 'farhansyah alam', '8342', '50'),
(12, 'gemi sabrina', '8343', '0'),
(13, 'geizka nauval', '8344', '0'),
(14, 'iva aulia', '8345', '0'),
(15, 'kadek deva', '8346', '0'),
(16, 'kiara thana', '8347', '0'),
(17, 'mahmud wajar', '8348', '0'),
(18, 'maria fallicia', '8349', '0'),
(19, 'miftah izdaini', '8350', '0'),
(20, 'mohammad lukman', '8351', '0'),
(21, 'adinda indar', '8027', '0'),
(22, 'adisty wahyu', '8028', '0'),
(23, 'adjie agung', '8029', '0'),
(24, 'afifatun muslikhah', '8030', '0'),
(25, 'alma benanda', '8031', '0'),
(26, 'alvi syams', '8032', '0'),
(27, 'amanda rahma', '8033', '0'),
(28, 'arsyi syarief', '8034', '0'),
(29, 'bimo kholifah', '8035', '0'),
(30, 'cindra tri', '8036', '0'),
(31, 'daffa antarsyah', '8037', '0'),
(32, 'eka sari', '8038', '0'),
(33, 'fanissa nilam', '8039', '0'),
(34, 'farhan bintang', '8040', '0'),
(35, 'frida ayunissa', '8041', '0'),
(36, 'haida mardiyanti', '8042', '0'),
(37, 'hisyam', '8043', '0'),
(38, 'jatra ario8044', '8044', '0'),
(39, 'maylano ahnaf', '8045', '0'),
(40, 'mita daniyah', '8046', '0'),
(41, 'Fikri', '1234', '100');

-- --------------------------------------------------------

--
-- Table structure for table `unggah_materi`
--

CREATE TABLE IF NOT EXISTS `unggah_materi` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `kelas` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `topik` varchar(100) NOT NULL,
  `sub_topik` varchar(800) NOT NULL,
  `file` varchar(800) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `unggah_materi`
--

INSERT INTO `unggah_materi` (`id`, `kelas`, `tanggal`, `topik`, `sub_topik`, `file`, `type`, `size`) VALUES
(1, 10, '2017-07-31', 'pengenalan jati diri', 'dvcdsvdv', '20170316165548_58cac3946fa22.pdf', 'application/pdf', 878),
(2, 11, '2017-07-31', 'narkoba', 'ssdvfds', 'flowchart.jpg', 'image/jpeg', 349),
(3, 10, '0000-00-00', 'pengenalan jati diri', 'hvhvhj', 'laporan keuangan hima multimedia revisi.pdf', 'application/pdf', 802),
(4, 10, '2017-07-31', 'narkoba', 'gchgvch', 'laporan keuangan hima multimedia revisi.pdf', 'application/pdf', 802),
(5, 10, '2017-07-31', 'Narkoba', 'DVDV', 'kanbart tumiss.docx', 'application/vnd.openxmlformats', 25),
(6, 10, '2017-07-31', '', 'lagu korea', 'actonia_personal.ttf', 'application/octet-stream', 145),
(7, 10, '2017-07-31', '', 'ujuu', '20170316165548_58cac3946fa22.pdf', 'application/pdf', 878),
(8, 10, '2017-07-31', 'Manajemen Diri Berorientasi Masa Depan', 'sdfghjkl;', '20170316165548_58cac3946fa22.pdf', 'application/pdf', 878),
(9, 11, '2017-08-02', 'Menumbuhkan Jiwa Kepemimpinan Sejak Dini', 'sdfghj', '20170316165548_58cac3946fa22.pdf', 'application/pdf', 878);

-- --------------------------------------------------------

--
-- Table structure for table `unggah_soal`
--

CREATE TABLE IF NOT EXISTS `unggah_soal` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `kelas` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `topik` varchar(100) NOT NULL,
  `sub_topik` varchar(100) NOT NULL,
  `soal_1` varchar(800) NOT NULL,
  `soal_2` varchar(800) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `unggah_soal`
--

INSERT INTO `unggah_soal` (`id`, `kelas`, `tanggal`, `topik`, `sub_topik`, `soal_1`, `soal_2`) VALUES
(1, 11, '2017-07-22', 'narkoba', 'fcfcg', 'xggx', 'dgxdg'),
(2, 10, '2017-07-25', 'pengenalan jati diri', 'fsdf', 'test nih ya', '123456'),
(3, 11, '2017-07-27', 'narkoba', 'sdfghj', 'sdfg', 'cfvgbhn'),
(4, 10, '2017-08-02', 'Manajemen Diri Berorientasi Masa Depan', 'fgvh', 'xvcbn', 'zxcv'),
(5, 10, '2017-08-02', 'Manajemen Diri Berorientasi Masa Depan', 'rtgyhujio', 'xdfcvghbjnkm', 'cfvgbjnk'),
(6, 10, '2017-08-02', 'Manajemen Diri Berorientasi Masa Depan', 'rtgyhujio', 'xdfcvghbjnkm', 'cfvgbjnk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
