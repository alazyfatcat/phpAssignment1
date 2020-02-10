use Quoc_Hung200423359;
CREATE TABLE `Quoc_Hung200423359`.`dropdownlist` (
  `Genres` VARCHAR(45) NOT NULL,
  `id` INT NOT NULL,
  PRIMARY KEY (`Genres`));

INSERT INTO `Quoc_Hung200423359`.`dropdownlist` (`Genres`, `id`) VALUES ('Jazz', '4');
INSERT INTO `Quoc_Hung200423359`.`dropdownlist` (`Genres`, `id`) VALUES ('Pop', '5');
INSERT INTO `Quoc_Hung200423359`.`dropdownlist` (`Genres`, `id`) VALUES ('Rock', '6');
INSERT INTO `Quoc_Hung200423359`.`dropdownlist` (`Genres`, `id`) VALUES ('Country', '3');
INSERT INTO `Quoc_Hung200423359`.`dropdownlist` (`Genres`, `id`) VALUES ('Ballad', '1');
INSERT INTO `Quoc_Hung200423359`.`dropdownlist` (`Genres`, `id`) VALUES ('Classical', '2');


CREATE TABLE `Quoc_Hung200423359`.`inputs` (
  `songId` INT NOT NULL,
  `song` VARCHAR(100) NOT NULL,
  `album` VARCHAR(100) NOT NULL,
  `genres` VARCHAR(45) NULL,
  `awards` VARCHAR(100) NULL,
  `ranking` INT(1) NULL,
  PRIMARY KEY (`songId`));
  
  select * from inputs;
  