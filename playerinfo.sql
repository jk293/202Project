drop table if exists j1tbl;
create table j1tbl
(
    playerId INT(11) primary key auto_increment,
    playerName varchar(32),
    playerPW varchar(64),
    activeSession varchar(128),
    lastLogin datetime
);

