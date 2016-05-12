drop table if exists table clients;
create table j1DB
(
    playerId INT(11) primary key auto_increment,
    playerName varchar(32),
    playerPW varchar(64),
    activeSession varchar(128),
    lastLogin datetime
);

