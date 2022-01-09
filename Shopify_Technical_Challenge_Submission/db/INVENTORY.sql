drop database if exists INVENTORY;
create database if not exists INVENTORY;
use INVENTORY;

create table INVENTORY (
	inv_id INT unsigned not null auto_increment primary key,
	inv_weight INT not null,
	inv_height INT not null,
	inv_length INT not null,
	inv_width INT not null,
	inv_received DATE not null,
	inv_sent DATE not null,
	inv_aisle INT not null,
	inv_shelf_no DECIMAL(2,1) not null
);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (262, 981, 283, 202, '2022-01-02', '2022-01-11', 26, 3.9);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (858, 374, 394, 302, '2022-01-07', '2022-01-12', 10, 1.3);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (619, 212, 303, 366, '2022-01-01', '2022-01-09', 29, 1.6);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (451, 843, 422, 363, '2022-01-07', '2022-01-15', 16, 4.9);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (598, 694, 419, 465, '2022-01-05', '2022-01-09', 14, 1.9);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (929, 275, 202, 391, '2022-01-06', '2022-01-15', 25, 5.8);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (737, 404, 104, 291, '2022-01-03', '2022-01-12', 23, 5.0);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (493, 846, 474, 444, '2022-01-05', '2022-01-10', 7, 1.2);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (306, 548, 325, 347, '2022-01-02', '2022-01-14', 16, 2.2);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (825, 752, 136, 477, '2022-01-04', '2022-01-11', 24, 3.9);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (415, 110, 263, 236, '2022-01-07', '2022-01-13', 14, 5.8);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (714, 685, 384, 430, '2022-01-06', '2022-01-12', 4, 1.3);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (912, 149, 142, 289, '2022-01-01', '2022-01-12', 25, 3.7);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (360, 193, 193, 66, '2022-01-01', '2022-01-09', 3, 1.6);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (535, 402, 170, 322, '2022-01-06', '2022-01-11', 2, 4.7);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (732, 994, 115, 337, '2022-01-03', '2022-01-09', 5, 3.4);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (953, 115, 431, 372, '2022-01-05', '2022-01-11', 27, 3.4);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (305, 402, 207, 64, '2022-01-01', '2022-01-09', 27, 5.2);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (421, 876, 123, 142, '2022-01-01', '2022-01-09', 14, 2.5);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (894, 767, 123, 486, '2022-01-04', '2022-01-11', 6, 4.6);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (977, 796, 436, 355, '2022-01-03', '2022-01-15', 10, 2.8);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (640, 572, 365, 424, '2022-01-02', '2022-01-11', 2, 2.8);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (393, 404, 317, 436, '2022-01-02', '2022-01-09', 29, 1.5);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (608, 979, 428, 158, '2022-01-02', '2022-01-09', 10, 2.8);
insert into INVENTORY (inv_weight, inv_height, inv_length, inv_width, inv_received, inv_sent, inv_aisle, inv_shelf_no) values (778, 780, 93, 100, '2022-01-06', '2022-01-09', 27, 5.9);
