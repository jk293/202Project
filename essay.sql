drop table if exists sentence;
create table sentence
  (
    sentenceId INT(11) primary key auto_increment,
    essayId INT(11),
    sentence varchar(255),
    last_used_date DATETIME,
    last_user INT(11)
        
  );
