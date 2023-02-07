create database nhansu;
use nhansu;

CREATE TABLE regions(
	region_id INT,
	region_name VARCHAR (25),
	constraint pk_regions primary key(region_id)
);

CREATE TABLE countries (
	country_id CHAR (2),
	country_name VARCHAR (40),
	region_id INT ,
	constraint pk_countries primary key(country_id),
	constraint fk_countries_regions foreign key (region_id) references regions(region_id)
);

CREATE TABLE locations(
	location_id INT,
	street_address VARCHAR (40),
	postal_code VARCHAR (12),
	city VARCHAR (30),
	state_province VARCHAR (25),
	country_id CHAR (2),
	constraint pk_locations primary key(location_id),
	constraint fk_locationss_countries foreign key (country_id) references countries(country_id)
);

CREATE TABLE jobs (
	job_id INT,
	job_title VARCHAR (35),
	min_salary DECIMAL (8, 2) ,
	max_salary DECIMAL (8, 2),
	constraint pk_jobs primary key(job_id)
);

CREATE TABLE departments (
	department_id INT,
	department_name VARCHAR (30),
	location_id INT,
	constraint pk_departments primary key(department_id),
	constraint fk_departments_locations foreign key (location_id) references locations(location_id)
);

CREATE TABLE employees (
	employee_id INT,
	first_name VARCHAR (20),
	last_name VARCHAR (25),
	email VARCHAR (100),
	phone_number VARCHAR (20),
	hire_date DATE,
	job_id INT,
	salary DECIMAL (8, 2),
	manager_id INT,
	department_id INT,
	constraint pk_employees primary key(employee_id),
	constraint fk_employees_jobs foreign key (job_id) references jobs(job_id),
	constraint fk_employees_departments foreign key (department_id) references departments(department_id),
		FOREIGN KEY (manager_id) REFERENCES employees (employee_id)
);

CREATE TABLE dependents (
	dependent_id INT ,
	first_name VARCHAR (50) ,
	last_name VARCHAR (50),
	relationship VARCHAR (25),
	employee_id INT,
	constraint pk_dependents primary key(dependent_id),
	constraint fk_dependents_employees foreign key (employee_id) references employees(employee_id)
);

/*Data for the table regions */

INSERT INTO regions(region_id,region_name) VALUES (1,'Europe');
INSERT INTO regions(region_id,region_name) VALUES (2,'Americas');
INSERT INTO regions(region_id,region_name) VALUES (3,'Asia');
INSERT INTO regions(region_id,region_name) VALUES (4,'Middle East and Africa');


/*Data for the table countries */
INSERT INTO countries(country_id,country_name,region_id) VALUES ('AR','Argentina',2);
INSERT INTO countries(country_id,country_name,region_id) VALUES ('AU','Australia',3);
INSERT INTO countries(country_id,country_name,region_id) VALUES ('BE','Belgium',1);
INSERT INTO countries(country_id,country_name,region_id) VALUES ('BR','Brazil',2);
INSERT INTO countries(country_id,country_name,region_id) VALUES ('CA','Canada',2);
INSERT INTO countries(country_id,country_name,region_id) VALUES ('CH','Switzerland',1);
INSERT INTO countries(country_id,country_name,region_id) VALUES ('CN','China',3);
INSERT INTO countries(country_id,country_name,region_id) VALUES ('DE','Germany',1);