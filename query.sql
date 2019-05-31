--
-- Database : Institute 
--
CREATE DATABASE IF NOT EXISTS  Institute;
--
-- Table structure for table Branch_Details 
--
USE Institute;
CREATE TABLE IF NOT EXISTS Branch_Details (
Branch_ID INT(10) NOT NULL AUTO_INCREMENT,
Branch_Name Varchar(30) NOT NULL,
Branch_Date Date NOT NULL,
Contact1 INT(10) NOT NULL,
Contact2 INT(10),
Administrator_Name Varchar(30) NOT NULL,
Email Varchar(20) NOT NULL,
Username Varchar(20),
Password Varchar(20),
PRIMARY KEY ( Branch_ID )
);
--
-- Table structure for table Enquiry_Details
--
CREATE TABLE IF NOT EXISTS Enquiry_Details (
En_ID INT(10) NOT NULL AUTO_INCREMENT,
Branch_ID INT(10) NOT NULL,
FullName Varchar(30) NOT NULL,
En_Date Date NOT NULL,
Course_ID INT(10) NOT NULL,
Gender ENUM('Male','Female') NOT NULL,
Email Varchar(30) NOT NULL,
Contact_No1 char(12) NOT NULL,
Contact_No2 char(12) NOT NULL,
Enquiry_Status Varchar(30) NOT NULL,
Qualification Varchar(30) NOT NULL,
Reference_ID Varchar(30) NOT NULL,
PRIMARY KEY ( En_ID )
); 
--
-- Table structure for table Admission
--
CREATE TABLE IF NOT EXISTS Admission (
Add_ID INT(9) NOT NULL AUTO_INCREMENT,
Branch_ID INT(10) NOT NULL,
En_ID INT(9) NOT NULL ,
FullName Varchar(30) NOT NULL,
DOB Date NOT NULL,
DOA Date NOT NULL,
Address Varchar(30) NOT NULL,
Gender ENUM('Male','Female') NOT NULL,
Email Varchar(30) NOT NULL,
Contact_No1 char(12) NOT NULL,
Contact_No2 char(12) NOT NULL,
Qualification Varchar(30) NOT NULL,
Cource_ID INT(10) NOT NULL,
Total_Course_Fees INT(10),
Paid_Fees INT(10) NOT NULL,
Next_Installment_Date Date NOT NULL,
Payment_Mode Varchar(30) NOT NULL,
Staff_ID INT(10) NOT NULL,
Batch_ID INT(10) NOT NULL,
Photo Varbinary(20),
Document Varbinary(70),
PRIMARY KEY ( Add_ID )
);
--
-- Table structure for table Staff_Details
--
CREATE TABLE IF NOT EXISTS Staff_Details (
Staff_ID INT(10) NOT NULL AUTO_INCREMENT,
Branch_ID INT(10) NOT NULL,
En_ID INT(9) NOT NULL ,
FullName Varchar(30) NOT NULL,
Staff_Type Varchar(30) NOT NULL,
Gender ENUM('Male','Female') NOT NULL,
DOJ Date NOT NULL,
Course_ID INT(10) NOT NULL,
Username Varchar(20),
Password Varchar(20),
Email Varchar(30) NOT NULL,
Contact_No1 char(12) NOT NULL,
Contact_No2 char(12) NOT NULL,
SSC INT(10) NOT NULL,
HSC INT(10) NOT NULL,
Qualification Varchar(30) NOT NULL,
Reference_Name Varchar(30) NOT NULL,
Reference_Contact char(12) NOT NULL,
Permanent_Address Varchar(30) NOT NULL,
Temporary_Address Varchar(30) NOT NULL,
Photo Varbinary(20),
Document Varbinary(70),
PRIMARY KEY ( Staff_ID )
);
--
-- Table structure for table Course_Details
--
CREATE TABLE IF NOT EXISTS Course_Details (
Course_ID INT(10) NOT NULL AUTO_INCREMENT,
Course_Name Varchar(10) NOT NULL,
Course_Fees INT(10),
Course_Syllabus Varbinary(70),
PRIMARY KEY ( Course_ID )
);
--
-- Table structure for table Batch_Details
--
CREATE TABLE IF NOT EXISTS Batch_Details (
Batch_ID INT(10) NOT NULL AUTO_INCREMENT,
Branch_ID INT(10) NOT NULL,
Batch_Name Varchar(20) NOT NULL,
Staff_ID INT(10) NOT NULL,
In_Time	Time,
Out_Time Time,
Start_date Date,
End_Date Date,
PRIMARY KEY ( Batch_ID )
);
--
-- Table structure for table Reference_Details
--
CREATE TABLE IF NOT EXISTS Reference_Details (
Reference_ID INT(10),
Add_ID INT(10) NOT NULL,
Reference_Name Varchar(20),
PRIMARY KEY ( Reference_ID )
);
--
-- Table structure for table Invest
--
CREATE TABLE IF NOT EXISTS Invest (
Invest_ID INT(10) NOT NULL AUTO_INCREMENT,
Reference_ID INT(10),
Cost INT(10),
DOI Date,
PRIMARY KEY ( Invest_ID )
);
--
-- Table structure for table Fees_Details
--
CREATE TABLE IF NOT EXISTS Fees_Details (
Fees_ID INT(10) NOT NULL AUTO_INCREMENT,
Branch_ID INT(10) NOT NULL,
Add_ID INT(10) NOT NULL,
DOA Date,
Fees_Type Varchar(20) NOT NULL,
Total_Fees INT(10) NOT NULL,
Paid_Fees INT(10) NOT NULL,
Rem_Fees INT(10) NOT NULL,
PRIMARY KEY ( Fees_ID )
);
--
-- Table structure for table User_Log
--
CREATE TABLE IF NOT EXISTS User_Log (
User_ID INT(10) NOT NULL AUTO_INCREMENT,
user_Name Varchar(20) NOT NULL UNIQUE,
user_Password Varchar(20) NOT NULL,
User_Type Varchar(20) NOT NULL,
User_Login_Time Time,
User_Logout_Time Time,
PRIMARY KEY ( User_ID )
);


--
-- Table structure for table Mobile_Verify
--
CREATE TABLE IF NOT EXISTS Mobile_Verify (
MV_ID INT(10) NOT NULL AUTO_INCREMENT,
MV_No INT(10) NOT NULL ,
MV_OTP INT(10) NOT NULL ,
MV_Datetime Datetime NOT NULL ,
MV_Status Varchar(10) NOT NULL,
PRIMARY KEY ( MV_ID )
);