
------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------
-- --------------------------------------------------------
-- SQL Commands to set up the pmadb as described in the documentation.
--
-- This file is meant for use with MySQL 5 and above!
--
-- This script expects the user pma to already be existing. If we would put a
-- line here to create him too many users might just use this script and end
-- up with having the same password for the controluser.
--
-- This user "pma" must be defined in config.inc.php (controluser/controlpass)
--
-- Please don't forget to set up the tablenames in config.inc.php
--

-- --------------------------------------------------------

--
-- Database :  phpmyadmin 
--
CREATE DATABASE IF NOT EXISTS  phpmyadmin 
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;
USE phpmyadmin;

-- --------------------------------------------------------

--
-- Privileges
--
-- (activate this statement if necessary)
-- GRANT SELECT, INSERT, DELETE, UPDATE, ALTER ON  phpmyadmin .* TO
--    'pma'@localhost;

-- --------------------------------------------------------

--
-- Table structure for table  pma__bookmark 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__bookmark  (
   id  INT(10) unsigned NOT NULL auto_increment,
   dbase  varVarchar(255) NOT NULL default '',
   user  varVarchar(255) NOT NULL default '',
   label  varVarchar(255) COLLATE utf8_general_ci NOT NULL default '',
   query  text NOT NULL,
  PRIMARY KEY  ( id )
)
  COMMENT='Bookmarks'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table  pma__column_info 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__column_info  (
   id  INT(5) unsigned NOT NULL auto_increment,
   db_name  varVarchar(64) NOT NULL default '',
   table_name  varVarchar(64) NOT NULL default '',
   column_name  varVarchar(64) NOT NULL default '',
   comment  varVarchar(255) COLLATE utf8_general_ci NOT NULL default '',
   mimetype  varVarchar(255) COLLATE utf8_general_ci NOT NULL default '',
   transformation  varVarchar(255) NOT NULL default '',
   transformation_options  varVarchar(255) NOT NULL default '',
   input_transformation  varVarchar(255) NOT NULL default '',
   input_transformation_options  varVarchar(255) NOT NULL default '',
  PRIMARY KEY  ( id ),
  UNIQUE KEY  db_name  ( db_name , table_name , column_name )
)
  COMMENT='Column information for phpMyAdmin'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table  pma__history 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__history  (
   id  bigINT(20) unsigned NOT NULL auto_increment,
   username  varVarchar(64) NOT NULL default '',
   db  varVarchar(64) NOT NULL default '',
   table  varVarchar(64) NOT NULL default '',
   timevalue  timestamp NOT NULL default CURRENT_TIMESTAMP,
   sqlquery  text NOT NULL,
  PRIMARY KEY  ( id ),
  KEY  username  ( username , db , table , timevalue )
)
  COMMENT='SQL history for phpMyAdmin'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table  pma__pdf_pages 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__pdf_pages  (
   db_name  varVarchar(64) NOT NULL default '',
   page_nr  INT(10) unsigned NOT NULL auto_increment,
   page_descr  varVarchar(50) COLLATE utf8_general_ci NOT NULL default '',
  PRIMARY KEY  ( page_nr ),
  KEY  db_name  ( db_name )
)
  COMMENT='PDF relation pages for phpMyAdmin'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table  pma__recent 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__recent  (
   username  varVarchar(64) NOT NULL,
   tables  text NOT NULL,
  PRIMARY KEY ( username )
)
  COMMENT='Recently accessed tables'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table  pma__favorite 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__favorite  (
   username  varVarchar(64) NOT NULL,
   tables  text NOT NULL,
  PRIMARY KEY ( username )
)
  COMMENT='Favorite tables'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table  pma__table_uiprefs 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__table_uiprefs  (
   username  varVarchar(64) NOT NULL,
   db_name  varVarchar(64) NOT NULL,
   table_name  varVarchar(64) NOT NULL,
   prefs  text NOT NULL,
   last_update  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY ( username , db_name , table_name )
)
  COMMENT='Tables'' UI preferences'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table  pma__relation 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__relation  (
   master_db  varVarchar(64) NOT NULL default '',
   master_table  varVarchar(64) NOT NULL default '',
   master_field  varVarchar(64) NOT NULL default '',
   foreign_db  varVarchar(64) NOT NULL default '',
   foreign_table  varVarchar(64) NOT NULL default '',
   foreign_field  varVarchar(64) NOT NULL default '',
  PRIMARY KEY  ( master_db , master_table , master_field ),
  KEY  foreign_field  ( foreign_db , foreign_table )
)
  COMMENT='Relation table'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table  pma__table_coords 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__table_coords  (
   db_name  varVarchar(64) NOT NULL default '',
   table_name  varVarchar(64) NOT NULL default '',
   pdf_page_number  INT(11) NOT NULL default '0',
   x  float unsigned NOT NULL default '0',
   y  float unsigned NOT NULL default '0',
  PRIMARY KEY  ( db_name , table_name , pdf_page_number )
)
  COMMENT='Table coordinates for phpMyAdmin PDF output'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table  pma__table_info 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__table_info  (
   db_name  varVarchar(64) NOT NULL default '',
   table_name  varVarchar(64) NOT NULL default '',
   display_field  varVarchar(64) NOT NULL default '',
  PRIMARY KEY  ( db_name , table_name )
)
  COMMENT='Table information for phpMyAdmin'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table  pma__tracking 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__tracking  (
   db_name  varVarchar(64) NOT NULL,
   table_name  varVarchar(64) NOT NULL,
   version  INT(10) unsigned NOT NULL,
   date_created  datetime NOT NULL,
   date_updated  datetime NOT NULL,
   schema_snapshot  text NOT NULL,
   schema_sql  text,
   data_sql  longtext,
   tracking  set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE IF NOT EXISTS','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') default NULL,
   tracking_active  INT(1) unsigned NOT NULL default '1',
  PRIMARY KEY  ( db_name , table_name , version )
)
  COMMENT='Database changes tracking for phpMyAdmin'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table  pma__userconfig 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__userconfig  (
   username  varVarchar(64) NOT NULL,
   timevalue  timestamp NOT NULL default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   config_data  text NOT NULL,
  PRIMARY KEY  ( username )
)
  COMMENT='User preferences storage for phpMyAdmin'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table  pma__users 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__users  (
   username  varVarchar(64) NOT NULL,
   usergroup  varVarchar(64) NOT NULL,
  PRIMARY KEY ( username , usergroup )
)
  COMMENT='Users and their assignments to user groups'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table  pma__usergroups 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__usergroups  (
   usergroup  varVarchar(64) NOT NULL,
   tab  varVarchar(64) NOT NULL,
   allowed  enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY ( usergroup , tab , allowed )
)
  COMMENT='User groups with configured menu items'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table  pma__navigationhiding 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__navigationhiding  (
   username  varVarchar(64) NOT NULL,
   item_name  varVarchar(64) NOT NULL,
   item_type  varVarchar(64) NOT NULL,
   db_name  varVarchar(64) NOT NULL,
   table_name  varVarchar(64) NOT NULL,
  PRIMARY KEY ( username , item_name , item_type , db_name , table_name )
)
  COMMENT='Hidden items of navigation tree'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table  pma__savedsearches 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__savedsearches  (
   id  INT(5) unsigned NOT NULL auto_increment,
   username  varVarchar(64) NOT NULL default '',
   db_name  varVarchar(64) NOT NULL default '',
   search_name  varVarchar(64) NOT NULL default '',
   search_data  text NOT NULL,
  PRIMARY KEY  ( id ),
  UNIQUE KEY  u_savedsearches_username_dbname  ( username , db_name , search_name )
)
  COMMENT='Saved searches'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table  pma__central_columns 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__central_columns  (
   db_name  varVarchar(64) NOT NULL,
   col_name  varVarchar(64) NOT NULL,
   col_type  varVarchar(64) NOT NULL,
   col_length  text,
   col_collation  varVarchar(64) NOT NULL,
   col_isNull  boolean NOT NULL,
   col_extra  varVarchar(255) default '',
   col_default  text,
  PRIMARY KEY ( db_name , col_name )
)
  COMMENT='Central list of columns'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table  pma__designer_settings 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__designer_settings  (
   username  varVarchar(64) NOT NULL,
   settings_data  text NOT NULL,
  PRIMARY KEY ( username )
)
  COMMENT='Settings related to Designer'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table  pma__export_templates 
--

CREATE TABLE IF NOT EXISTS IF NOT EXISTS  pma__export_templates  (
   id  INT(5) unsigned NOT NULL AUTO_INCREMENT,
   username  varVarchar(64) NOT NULL,
   export_type  varVarchar(10) NOT NULL,
   template_name  varVarchar(64) NOT NULL,
   template_data  text NOT NULL,
  PRIMARY KEY ( id ),
  UNIQUE KEY  u_user_type_template  ( username , export_type , template_name )
)
  COMMENT='Saved export templates'
  DEFAULT VarcharACTER SET utf8 COLLATE utf8_bin;

------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------