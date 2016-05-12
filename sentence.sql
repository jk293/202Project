drop table if exists sentence;
create table sentence
  (
    essayId INT(11) primary key auto_increment,
    topic varchar(32),
    sentence varchar(255),
    lastUsed datetime
  );
