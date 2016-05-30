#
# Table structure for table 'pages'
#
CREATE TABLE pages (
  titletag varchar(255) DEFAULT '' NOT NULL,
	meta_robots int(11) DEFAULT '0' NOT NULL,
	canonical varchar(255) DEFAULT '' NOT NULL,
);
