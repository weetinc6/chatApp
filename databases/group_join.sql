create table `group_join` (
`gjid` int(30) auto_increment,
`groupname` text not null,
`groupdescrip` text not null,
`grid` text not null,
`ccphone` text not null,
`tym_joined` timestamp not null,
primary key(`gjid`)
)
engine=myisam character set utf8 collate="utf8_general_ci";