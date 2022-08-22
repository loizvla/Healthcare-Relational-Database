CREATE TABLE doctor (  
    amka int NOT NULL,  
    name varchar(255),  
    born Date,  
    specialty varchar(255),  
    PRIMARY KEY (amka)  
);  
  
INSERT INTO doctor  
(amka, name, born, specialty)  
VALUES(2015222, 'Maria Papa', '1980-01-01', 'Cardiologist');  
  
INSERT INTO doctor  
(amka, name, born, specialty)  
VALUES(2015211, 'Kwstas Papa', '1982-04-15', 'Pulmonologist');  
  
INSERT INTO doctor  
(amka, name, born, specialty)  
VALUES(2015311, 'Hlias Manou', '1988-04-08', 'Pulmonologist');  
  
INSERT INTO doctor  
(amka, name, born, specialty)  
VALUES(2011332, 'Xronhs Pol', '1988-09-20', 'Cardiologist');  
  
INSERT INTO doctor  
(amka, name, born, specialty)  
VALUES(2012332, 'Katerina Kosta', '1989-09-20', 'Pulmonologist');  
  
INSERT INTO doctor  
(amka, name, born, specialty)  
VALUES(2013332, 'Katerina Maria', '1985-08-20', 'Dentist');  
  
INSERT INTO doctor  
(amka, name, born, specialty)  
VALUES(2014332, 'Kwstas Hlias', '1987-02-15', 'Pathologist');  
  
INSERT INTO doctor  
(amka, name, born, specialty)  
VALUES(2017332, 'Katerina Papa', '1975-12-02', 'Pathologist');  
  
  
CREATE TABLE patient (  
    amka int NOT NULL,  
    name varchar(255),  
    born date,  
    gender varchar(255),  
    insurance varchar(255),  
    current_disease varchar(255),  
    allergies varchar(255),  
    historian varchar(255),  
    medicines varchar(255),  
    current_situation varchar(255),  
    PRIMARY KEY (amka)  
);  
  
INSERT INTO patient  
(amka, name, born, gender, insurance, current_disease, allergies, historian, medicines, current_situation)  
VALUES(1021251, 'Kwstas Mavros', '1975-12-02', 'Male', 'EOPH', 'Canser', 'None', 'Cancer heart', 'chemotherapy', 'good');  
  
INSERT INTO patient  
(amka, name, born, gender, insurance, current_disease, allergies, historian, medicines, current_situation)  
VALUES(1021245, 'Xara Sarianidou', '1985-12-02', 'Female', 'EOPH', 'Canser', 'None', 'Cancer lungs', 'chemotherapy', 'good');  
  
INSERT INTO patient  
(amka, name, born, gender, insurance, current_disease, allergies, historian, medicines, current_situation)  
VALUES(1021240, 'Giannhs Luperidhs', '1982-04-02', 'Male', 'Generali', 'Coth', 'Panadole', 'Cancer lungs', 'Algofren', 'excelent');  
  
INSERT INTO patient  
(amka, name, born, gender, insurance, current_disease, allergies, historian, medicines, current_situation)  
VALUES(1021239, 'Nikolaos Papas', '1975-06-08', 'Male', 'EOPH', 'Pneumonia', 'None', 'None', 'Algofren', 'excelent');  
  
INSERT INTO patient  
(amka, name, born, gender, insurance, current_disease, allergies, historian, medicines, current_situation)  
VALUES(1021228, 'Hlias Mavros', '1968-09-06', 'Male', 'EOPH', 'Tooth', 'None', 'None', 'None', 'bad');  
  
INSERT INTO patient  
(amka, name, born, gender, insurance, current_disease, allergies, historian, medicines, current_situation)  
VALUES(1021225, 'Kwstas Vretos', '1985-02-02', 'Male', 'Genikh', 'Tooth', 'None', 'None', 'None', 'bad');  
  
INSERT INTO patient  
(amka, name, born, gender, insurance, current_disease, allergies, historian, medicines, current_situation)  
VALUES(1021220, 'Manos Papas', '1972-10-02', 'Male', 'Genikh', 'Cholisterol', 'None', 'Choristerol', 'Crestols', 'good');  
  
INSERT INTO patient  
(amka, name, born, gender, insurance, current_disease, allergies, historian, medicines, current_situation)  
VALUES(1021218, 'Maria Phrou', '1988-05-02', 'Female', 'Generali', 'Head Pain', 'None', 'None', 'Panadole and Depon', 'excelent');  
  
CREATE table main_doctor_surgery (  
    doctor_id int NOT NULL,  
    amka int,  
    PRIMARY KEY (doctor_id),  
    FOREIGN KEY (amka) REFERENCES doctor(amka)  
);  
  
INSERT INTO main_doctor_surgery  
(doctor_id, amka)  
VALUES(0, NULL);  
  
CREATE table part_doctors_surgery (  
    doctor_id int NOT NULL,  
    amka int,  
    PRIMARY KEY (doctor_id),  
    FOREIGN KEY (amka) REFERENCES doctor(amka)  
);  
  
INSERT INTO part_doctors_surgery  
(doctor_id, amka)  
VALUES(0, NULL);  
  
  
CREATE TABLE laboratory_test (  
    id int NOT NULL,  
    type varchar(255),  
    date_done datetime,  
    finding varchar(255),  
    doctor_id int,  
    patient_id int,  
    PRIMARY KEY (id),  
    FOREIGN KEY (doctor_id) REFERENCES doctor(amka),  
    FOREIGN KEY (patient_id) REFERENCES patient(amka)  
);  
  
INSERT INTO laboratory_test  
(id, `type`, date_done, finding, doctor_id, patient_id)  
VALUES(0, NULL, NULL, NULL, NULL, NULL);  
  
  
CREATE table surgery (  
    id int NOT NULL,  
    description varchar(255),  
    date_and_time datetime,  
    report_practical varchar(255),  
    main_doctor_id int,  
    part_doctor_id int,  
    patient_id int,  
    PRIMARY KEY (id),  
    FOREIGN KEY (main_doctor_id) REFERENCES main_doctor_surgery(doctor_id),  
    FOREIGN KEY (part_doctor_id) REFERENCES part_doctors_surgery(doctor_id),  
    FOREIGN KEY (patient_id) REFERENCES patient(amka)  
);  
  
INSERT INTO surgery  
(id, description, date_and_time, report_practical, main_doctor_id, part_doctor_id, patient_id)  
VALUES(0, NULL, NULL, NULL, NULL, NULL, NULL);  
  
  
CREATE TABLE discharge_patient (  
    id int NOT NULL,  
    output_diagnosis varchar(255),  
    date_leave datetime,  
    medication varchar(255),  
    activities_are_limited varchar(255),  
    description_of_symptoms varchar(255),  
    doctor_id int,  
    patient_id int,  
    PRIMARY KEY (id),  
   FOREIGN KEY (doctor_id) REFERENCES doctor(amka),  
    FOREIGN KEY (patient_id) REFERENCES patient(amka)  
);  
  
INSERT INTO discharge_patient  
(id, output_diagnosis, date_leave, medication, activities_are_limited, description_of_symptoms, doctor_id, patient_id)  
VALUES(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL); 
