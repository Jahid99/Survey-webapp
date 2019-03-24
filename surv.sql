-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2019 at 05:21 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surv`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Result_ID` int(11) NOT NULL,
  `Result` text,
  `Username_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Result_ID`, `Result`, `Username_ID`) VALUES
(7, 'YToxMjp7aTowO2E6Mjp7czo4OiJxdWVzdGlvbiI7czoxODoiV2hhdCBpcyB5b3VyIG5hbWU/IjtzOjY6ImFuc3dlciI7czo1OiJKYWhpZCI7fWk6MTthOjI6e3M6ODoicXVlc3Rpb24iO3M6MzIzOiJXZSBrbm93IHRoYXQgIjY2NjciIGlzIG5vcm1hbGx5IHVzZWQgZm9yIElSQyBjb21tdW5pY2F0aW9uLiBEbyB5b3UgdGhpbmsgdGhlIGFuYWx5c3QgaGFzIG5vdGljZWQgdGhlIElSQyBjb21tdW5pY2F0aW9uIGV2ZW50IGluIHRoZSByYXcgZGF0YSBkdXJpbmcgaGlzIGFuYWx5c2lzPyBJZiBzbywgaG93IGRvIHlvdSB0aGluayBkaWQgdGhlIGFuYWx5c3QgZGV0ZWN0IHRoZSBJUkMgY29tbXVuaWNhdGlvbj8gKFBsZWFzZSBhbHNvIGxpc3QgdGhlIGZpbHRlcmluZyBvcGVyYXRpb25zIHRoYXQgZW5hYmxlIHRoZSBhbmFseXN0IHRvIG9idGFpbiB0aGlzIGZpbmRpbmcuKSI7czo2OiJhbnN3ZXIiO3M6MjoiaXMiO31pOjI7YToyOntzOjg6InF1ZXN0aW9uIjtzOjMxMjoiV2Uga25vdyB0aGF0ICIyMSIgaXMgbm9ybWFsbHkgdXNlZCBmb3IgRlRQIGNvbm5lY3Rpb24uIERvIHlvdSB0aGluayB0aGUgYW5hbHlzdCBoYXMgbm90aWNlZCB0aGUgRlRQIGNvbm5lY3Rpb24gZXZlbnRzIGluIHRoZSByYXcgZGF0YSBkdXJpbmcgaGlzIGFuYWx5c2lzPyBJZiBzbywgaG93IGRvIHlvdSB0aGluayBkaWQgdGhlIGFuYWx5c3QgdG8gZGV0ZWN0IHRoZSBGVFAgY29ubmVjdGlvbnM/IChQbGVhc2UgbGlzdCB0aGUgZmlsdGVyaW5nIG9wZXJhdGlvbnMgdGhhdCBlbmFibGUgdGhlIGFuYWx5c3QgdG8gb2J0YWluIHRoaXMgZmluZGluZy4pIjtzOjY6ImFuc3dlciI7czoxOiJhIjt9aTozO2E6Mjp7czo4OiJxdWVzdGlvbiI7czozMTY6IldlIGtub3cgdGhhdCAiMjIiIGlzIG5vcm1hbGx5IHVzZWQgZm9yIFNTSCBjb25uZWN0aW9uLiBEbyB5b3UgdGhpbmsgdGhlIGFuYWx5c3QgaGFzIG5vdGljZWQgdGhlIFNTSCBjb25uZWN0aW9uIGV2ZW50cyBpbiB0aGUgcmF3IGRhdGEgZHVyaW5nIGhpcyBhbmFseXNpcz8gSWYgc28sIGhvdyBkbyB5b3UgdGhpbmsgZGlkIHRoZSBhbmFseXN0IHRvIGRldGVjdCB0aGUgU1NIIGNvbm5lY3Rpb25zPyAoUGxlYXNlIGxpc3QgdGhlIGZpbHRlcmluZyBvcGVyYXRpb25zIHRoYXQgZW5hYmxlIHRoZSBhbmFseXN0IHRvIG9idGFpbiB0aGlzIGtleSBmaW5kaW5nLikiO3M6NjoiYW5zd2VyIjtzOjM6Im5hZCI7fWk6NDthOjI6e3M6ODoicXVlc3Rpb24iO3M6MTAwOiJCYXNlZCBvbiB5b3VyIHVuZGVyc3RhbmRpbmcgb2YgdGhlIHZpc3VhbCBtYXAsIHdoYXQgYXJlIHRoZSBhYm5vcm1hbCBldmVudHMgZGV0ZWN0ZWQgYnkgdGhlIGFuYWx5c3Q/IjtzOjY6ImFuc3dlciI7czozOiJkeWEiO31pOjU7YToyOntzOjg6InF1ZXN0aW9uIjtzOjU2OiJEbyB5b3UgaGF2ZSBhbnkgc3VnZ2VzdGlvbnMgb24gaW1wcm92aW5nIHRoZSB2aXN1YWwgbWFwPyI7czo2OiJhbnN3ZXIiO3M6NDoibmljZSI7fWk6NjthOjI6e3M6ODoicXVlc3Rpb24iO3M6ODk6IlJlYWRpbmcgdGhyb3VnaCB0aGUgdmlzdWFsIG1hcCBlbmFibGVzIG1lIHRvIGZpZ3VyZSBvdXQgdGhlIG1haW4gZmluZGluZ3Mgb2YgdGhlIGFuYWx5c3QuIjtzOjY6ImFuc3dlciI7czo1OiJBZ3JlZSI7fWk6NzthOjI6e3M6ODoicXVlc3Rpb24iO3M6MTc2OiJUaGlzIHZpc3VhbCBtYXAgdmlzdWFsaXplcyB0aGUgbWFpbiBhY3Rpb25zIChvcGVyYXRpb25zKSBjb25kdWN0ZWQgYnkgdGhlIGFuYWx5c3RzLiBJdCBoZWxwcyBtZSB1bmRlcnN0YW5kIGhvdyB0aGUgYW5hbHlzdCBvYnRhaW5lZCB0aGUgZmluZGluZ3MgYW5kIHJlYWNoZWQgdG8gaGlzIGNvbmNsdXNpb24uICI7czo2OiJhbnN3ZXIiO3M6MTc6IlNvbWV3aGF0IGRpc2FncmVlIjt9aTo4O2E6Mjp7czo4OiJxdWVzdGlvbiI7czo4ODoiQ29tcGFyZSB3aXRoIHRha2luZyBkaXJlY3RseSB0byB0aGUgYW5hbHlzdCwgdGhlIHZpc3VhbCBtYXAgc2F2ZXMgdGltZSBpbiBjb21tdW5pY2F0aW9uLiI7czo2OiJhbnN3ZXIiO3M6MTQ6IlN0cm9uZ2x5IGFncmVlIjt9aTo5O2E6Mjp7czo4OiJxdWVzdGlvbiI7czo4OToiVGhlIHZpc3VhbCBtYXAgaXMgYSBnb29kIHdheSBmb3Igc2hhcmluZyBmaW5kaW5ncyBhbmQgdGhvdWdodHMgYW1vbmcgYSBncm91cCBvZiBhbmFseXN0cy4iO3M6NjoiYW5zd2VyIjtzOjE3OiJTdHJvbmdseSBkaXNhZ3JlZSI7fWk6MTA7YToyOntzOjg6InF1ZXN0aW9uIjtzOjEwOToiT25lIHBlcnNvbiBjYW4gbGVhdmUgYSBxdWVzdGlvbiBtYXJrIGluIHNvbWUgcmVkIG5vZGVzIHRvIG5vdGlmeSB0aGF0IG5vZGUgbmVlZHMgdG8gYmUgZnVydGhlciBpbnZlc3RpZ2F0ZWQuICI7czo2OiJhbnN3ZXIiO3M6MjY6Ik5laXRoZXIgYWdyZWUgbm9yIGRpc2FncmVlIjt9aToxMTthOjI6e3M6ODoicXVlc3Rpb24iO3M6MTIwOiJJZiBJIHdlcmUgYW4gYW5hbHlzdCB3b3JraW5nIGluIGEgZ3JvdXAsIEkgdGhpbmsgdGhpcyB2aXN1YWwgbWFwIGNhbiBiZSB1c2VkIHRvIGRpdmlkZSB0aGUgdGFza3MgaW4gYSBmaW5lLWdyYWluZWQgd2F5Li4iO3M6NjoiYW5zd2VyIjtzOjI2OiJOZWl0aGVyIGFncmVlIG5vciBkaXNhZ3JlZSI7fX0=', 8),
(8, 'YTo2OntpOjA7YToyOntzOjg6InF1ZXN0aW9uIjtzOjE4OiJXaGF0IGlzIHlvdXIgbmFtZT8iO3M6NjoiYW5zd2VyIjtzOjQ6IlJ1bXUiO31pOjE7YToyOntzOjg6InF1ZXN0aW9uIjtzOjMyMzoiV2Uga25vdyB0aGF0ICI2NjY3IiBpcyBub3JtYWxseSB1c2VkIGZvciBJUkMgY29tbXVuaWNhdGlvbi4gRG8geW91IHRoaW5rIHRoZSBhbmFseXN0IGhhcyBub3RpY2VkIHRoZSBJUkMgY29tbXVuaWNhdGlvbiBldmVudCBpbiB0aGUgcmF3IGRhdGEgZHVyaW5nIGhpcyBhbmFseXNpcz8gSWYgc28sIGhvdyBkbyB5b3UgdGhpbmsgZGlkIHRoZSBhbmFseXN0IGRldGVjdCB0aGUgSVJDIGNvbW11bmljYXRpb24/IChQbGVhc2UgYWxzbyBsaXN0IHRoZSBmaWx0ZXJpbmcgb3BlcmF0aW9ucyB0aGF0IGVuYWJsZSB0aGUgYW5hbHlzdCB0byBvYnRhaW4gdGhpcyBmaW5kaW5nLikiO3M6NjoiYW5zd2VyIjtzOjI6ImlzIjt9aToyO2E6Mjp7czo4OiJxdWVzdGlvbiI7czozMTY6IldlIGtub3cgdGhhdCAiMjIiIGlzIG5vcm1hbGx5IHVzZWQgZm9yIFNTSCBjb25uZWN0aW9uLiBEbyB5b3UgdGhpbmsgdGhlIGFuYWx5c3QgaGFzIG5vdGljZWQgdGhlIFNTSCBjb25uZWN0aW9uIGV2ZW50cyBpbiB0aGUgcmF3IGRhdGEgZHVyaW5nIGhpcyBhbmFseXNpcz8gSWYgc28sIGhvdyBkbyB5b3UgdGhpbmsgZGlkIHRoZSBhbmFseXN0IHRvIGRldGVjdCB0aGUgU1NIIGNvbm5lY3Rpb25zPyAoUGxlYXNlIGxpc3QgdGhlIGZpbHRlcmluZyBvcGVyYXRpb25zIHRoYXQgZW5hYmxlIHRoZSBhbmFseXN0IHRvIG9idGFpbiB0aGlzIGtleSBmaW5kaW5nLikiO3M6NjoiYW5zd2VyIjtzOjI6Im5vIjt9aTozO2E6Mjp7czo4OiJxdWVzdGlvbiI7czo4OToiUmVhZGluZyB0aHJvdWdoIHRoZSB2aXN1YWwgbWFwIGVuYWJsZXMgbWUgdG8gZmlndXJlIG91dCB0aGUgbWFpbiBmaW5kaW5ncyBvZiB0aGUgYW5hbHlzdC4iO3M6NjoiYW5zd2VyIjtzOjU6IkFncmVlIjt9aTo0O2E6Mjp7czo4OiJxdWVzdGlvbiI7czo4OToiVGhlIHZpc3VhbCBtYXAgaXMgYSBnb29kIHdheSBmb3Igc2hhcmluZyBmaW5kaW5ncyBhbmQgdGhvdWdodHMgYW1vbmcgYSBncm91cCBvZiBhbmFseXN0cy4iO3M6NjoiYW5zd2VyIjtzOjE3OiJTdHJvbmdseSBkaXNhZ3JlZSI7fWk6NTthOjI6e3M6ODoicXVlc3Rpb24iO3M6MTA5OiJPbmUgcGVyc29uIGNhbiBsZWF2ZSBhIHF1ZXN0aW9uIG1hcmsgaW4gc29tZSByZWQgbm9kZXMgdG8gbm90aWZ5IHRoYXQgbm9kZSBuZWVkcyB0byBiZSBmdXJ0aGVyIGludmVzdGlnYXRlZC4gIjtzOjY6ImFuc3dlciI7czoxNDoiU29tZXdoYXQgYWdyZWUiO319', 10);

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `Username_ID` int(11) NOT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Password` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`Username_ID`, `Email`, `Password`) VALUES
(8, 'jahidulpathan@gmail.com', '$2y$10$8FslfWjDvrbNjvquCLZD.OBtpMCc1.H3QXpiEokpMnlgqylXD/cHe'),
(10, 'rumman@gmail.com', '$2y$10$906bJSDtJEEHy4tPHEZAmeKcw4EF00sdoVBdSHnaW37PqfutxRzxa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`Result_ID`),
  ADD KEY `Username_ID` (`Username_ID`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`Username_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `Result_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `Username_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`Username_ID`) REFERENCES `username` (`Username_ID`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
