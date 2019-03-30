#
# Table structure for table `shipment`
#

CREATE TABLE shipment (
  serial int(10) default NULL,
  HAWB varchar(255) default NULL,
  origin varchar(255) default NULL,
  destination varchar(255) default NULL,
  media varchar(255) default NULL,
  AWB varchar(255) default NULL,
  pdate varchar(255) default NULL,
  status varchar(255) default NULL
) TYPE=MyISAM;
# --------------------------------------------------------

#
# Table structure for table `tracking`
#

CREATE TABLE tracking (
  serial int(10) default NULL,
  sid varchar(255) default NULL,
  activity varchar(255) default NULL,
  location varchar(255) default NULL,
  pdate varchar(255) default NULL
) TYPE=MyISAM;

