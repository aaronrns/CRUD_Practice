SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `student_registry` (
  `student_id` int(15) NOT NULL AUTO_INCREMENT,
  `given_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `age_val` varchar(3) NOT NULL,
  `dob` date NOT NULL,
  `home_address` varchar(200) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `student_registry` (`given_name`, `middle_name`, `surname`, `age_val`, `dob`, `home_address`) VALUES
('James Michael', '', 'Mirasol', '20', '2006-01-15', 'Plaridel, Bulacan'),
('Roybert Hameezan', '', 'Royberto', '21', '2005-03-22', 'Malolos, Bulacan'),
('Justin Lian', '', 'Enriquez', '20', '2006-05-10', 'Guiguinto, Bulacan'),
('Telisha Simone', '', 'Dela Cruz', '22', '2004-11-30', 'Bocaue, Bulacan'),
('Saimon Adrian', '', 'Banta', '21', '2005-08-18', 'Calumpit, Bulacan'),
('Aaron Gabriel', '', 'Lopez', '19', '2007-02-05', 'Balagtas, Bulacan');

COMMIT;
