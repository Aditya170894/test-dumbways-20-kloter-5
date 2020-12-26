SELECT * FROM `users_tb` AS u JOIN post_tb AS p ON p.id_user = u.id;

INSERT INTO `waysgram`.`users_tb` (`id`, `name`, `photo`, `email`, `password`) VALUES ('1', 'gon felix', 'https://hottopic.scene7.com/is/image/HotTopic/14304589_hi?$pdp_hero_standard$', 'gon.felix@gmail.com', 'kumb4ng1708');

SELECT * FROM `post_tb` WHERE id_user = 1;

UPDATE `users_tb` SET `name`="kurapika",`photo`="https://i.pinimg.com/236x/10/6c/cd/106ccd99741ad168a16739276c956b6c.jpg",`email`="thechain1708@gmail.com",`password`="dragon1708" WHERE id=1

