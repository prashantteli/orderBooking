CREATE DATABASE IF NOT EXISTS angularcode_task;
 
USE angularcode_task;
--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task`, `status`, `created_at`) VALUES
(1, 'My first task', 0, 1390815970),
(2, 'Perform unit testing', 2, 1390815993),
(3, 'Find bugs', 2, 1390817659),
(4, 'Test in small devices', 2, 1390818389);

alter table tasks add column created_by int(10);
alter table tasks add column created_on varchar(20);
alter table tasks add column updated_by int(10);
alter table tasks add column updated_on varchar(20);
alter table tasks drop column created_at;
alter table tasks add column description varchar(500);

create table user_details (user_id int(10) primary key,first_name varchar(255),last_name varchar(255),email varchar(500),password varchar(200));
alter table user_details add column role int(10);

use angularcode_task;
select * from user_details;
select email,password,role from user_details where email='prashant.teli@acceltree.com' and role='Developer' and password='a39ef2e92279c4ae8d7da9966a061c01' ;
update user_details set role="Developer" where user_id=1;
select email,password,role from user_details where email='prashant.teli@acceltree.com' and role='Developer' and password='a39ef2e92279c4ae8d7da9966a061c01' ;
