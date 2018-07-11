-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--

-- Required table wich contains emails and recipient name
CREATE TABLE `Emails` (
  `EmailID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `Emails`
  ADD PRIMARY KEY (`EmailID`);

ALTER TABLE `Emails`
  MODIFY `EmailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


