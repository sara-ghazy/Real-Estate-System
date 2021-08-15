
delimiter $
create trigger DateAnn
before insert on register_an_advertisement
for each row
begin

set new.dateAn= curdate();
end $

delimiter ;

drop  trigger DateAnn;





