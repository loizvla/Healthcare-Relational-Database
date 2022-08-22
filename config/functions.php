<?php
//// patiend functions 
function registerPatient($id, $name, $born, $gender, $insurance, $current_disease, $allergies, $historian, $medicines, $current_situation) {
	include ('db.php');	

	$results = $db->prepare('INSERT INTO patient (amka, name, born, gender, insurance, current_disease, allergies, historian, medicines, current_situation) 
	VALUES (:amka, :name, :born, :gender, :insurance, :current_disease, :allergies, :historian, :medicines, :current_situation)');
	$results->bindValue(':amka', $id);
	$results->bindValue(':name', $name);
	$results->bindValue(':born', $born);
	$results->bindValue(':gender', $gender);
	$results->bindValue(':insurance', $insurance);
	$results->bindValue(':current_disease', $current_disease);
	$results->bindValue(':allergies', $allergies);
	$results->bindValue(':historian', $historian);
	$results->bindValue(':medicines', $medicines);
	$results->bindValue(':current_situation', $current_situation);
	$results->execute();

	return $results->rowCount();
}

function listNamePatientChoose(){
	include ('db.php');
	$results = $db->query('SELECT * FROM patient ORDER BY name asc'); //if the query is wrong $results is false
	$results->execute();
	$datas = $results->fetchAll(PDO::FETCH_ASSOC);
	
	$category = array();

	foreach($datas as $data){
		$category[$data['amka']] = $data['name'];
	}
	
	$temp_str = '';
	$temp_str .= "<select class='form-control' name='name' onchange='CheckByNamePatient(this.value)'>";

	foreach($category as $key => $value){
		$temp_str .= '<option value="'.$key.'" selected>'.$value.'</option>';
	}
	$temp_str .= "</select>";

	return $temp_str;
}

function getPatient() {
	include ('db.php');
	$results = $db->query("select * from patient ORDER BY name ASC"); //if the query is wrong $results is false
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

function getLaboratoryTestPatient($amka) {
	include ('db.php');
	$results = $db->prepare("select * from laboratory_test where patient_id = ?"); //if the query is wrong $results is false
	$results->bindValue(1, $amka);
	$results->execute();
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

function getDischarge($amka) {
	include ('db.php');
	$results = $db->prepare("select * from discharge_patient where patient_id = ?"); //if the query is wrong $results is false
	$results->bindValue(1, $amka);
	$results->execute();
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

function getSurgeryPatient($amka) {
	include ('db.php');
	$results = $db->prepare("select * from surgery where patient_id = ?"); //if the query is wrong $results is false
	$results->bindValue(1, $amka);
	$results->execute();
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

function deletePatient($id) {
	include ('db.php');

	$results = $db->prepare('delete from patient where amka = ?');
	$results->bindValue(1, $id);
	$results->execute();
	return $results->rowCount();
}

function updatePatient($id, $name, $born, $gender, $insurance, $current_disease, $allergies, $historian, $medicines, $current_situation) {
	include ('db.php');

	$results = $db->prepare('UPDATE patient SET name=?, born=?, gender=?, insurance=?, current_disease=?, allergies=?, historian=?, medicines=?, current_situation=? WHERE amka=?');
	$results->bindValue(1, $name);
	$results->bindValue(2, $born);
	$results->bindValue(3, $gender);
	$results->bindValue(4, $insurance);
	$results->bindValue(5, $current_disease);
	$results->bindValue(6, $allergies);
	$results->bindValue(7, $historian);
	$results->bindValue(8, $medicines);
	$results->bindValue(9, $current_situation);
	$results->bindValue(10, $id);
	$results->execute();
	var_dump($results);
	return $results->rowCount();

}

function getPatientById($id) {
	include ('db.php');
	// session_start();
	$results = $db->prepare('SELECT * FROM patient WHERE amka = ?');
	$results->bindValue(1, $id);
	$results->execute();
	$userInfo = $results->fetchAll(PDO::FETCH_ASSOC);

	return $userInfo;
}
////end patient function
///// start doctor functions
function registerDoctor($id, $name, $born, $specialty) {
	include ('db.php');	

	$results = $db->prepare('INSERT INTO doctor (amka, name, born, specialty) 
	VALUES (:amka, :name, :born, :specialty)');
	$results->bindValue(':amka', $id);
	$results->bindValue(':name', $name);
	$results->bindValue(':born', $born);
	$results->bindValue(':specialty', $specialty);
	$results->execute();

	return $results->rowCount();
}

function listNameDoctorChoose(){
	include ('db.php');
	$results = $db->query('SELECT * FROM doctor ORDER BY name asc'); //if the query is wrong $results is false
	$results->execute();
	$datas = $results->fetchAll(PDO::FETCH_ASSOC);
	
	$category = array();

	foreach($datas as $data){
		$category[$data['amka']] = $data['name'];
	}
	
	$temp_str = '';
	$temp_str .= "<select class='form-control' name='name' onchange='CheckByNameDoctor(this.value)'>";

	foreach($category as $key => $value){
		$temp_str .= '<option value="'.$key.'" selected>'.$value.'</option>';
	}
	$temp_str .= '</select>';

	return $temp_str;
}

function getDoctor() {
	include ('db.php');
	$results = $db->query("select * from doctor ORDER BY name ASC"); //if the query is wrong $results is false
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

function getSurgeryMainDoctor($amka) {
	include ('db.php');
	$results = $db->prepare("select *
	FROM surgery as s2 
   WHERE s2.main_doctor_id IN (SELECT mds.doctor_id 
					 FROM main_doctor_surgery as mds
					WHERE amka = ?)"); //if the query is wrong $results is false
	$results->bindValue(1, $amka);
	$results->execute();
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

function getSurgeryPartDoctor($amka) {
	include ('db.php');
	$results = $db->prepare("select *
	FROM surgery as s2 
   WHERE s2.part_doctor_id IN (SELECT pds.doctor_id 
					 FROM part_doctors_surgery as pds
					WHERE amka = ?)"); //if the query is wrong $results is false
	$results->bindValue(1, $amka);
	$results->execute();
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

function deleteDoctor($id) {
	include ('db.php');

	$results = $db->prepare('delete from doctor where amka = ?');
	$results->bindValue(1, $id);
	$results->execute();
	return $results->rowCount();
}

function updateDoctor($id, $name, $born, $specialty) {
	include ('db.php');

	$results = $db->prepare('UPDATE doctor SET name=?, born=?, specialty=? WHERE amka=?');
	$results->bindValue(1, $name);
	$results->bindValue(2, $born);
	$results->bindValue(3, $specialty);
	$results->bindValue(4, $id);
	$results->execute();
	var_dump($results);
	return $results->rowCount();

}

function getDoctorById($id) {
	include ('db.php');
	// session_start();
	$results = $db->prepare('SELECT * FROM doctor WHERE amka = ?');
	$results->bindValue(1, $id);
	$results->execute();
	$userInfo = $results->fetchAll(PDO::FETCH_ASSOC);

	return $userInfo;
}
///// end doctor function
///start laboratory Test function
function getLaboratoryTest() {
	include ('db.php');
	$results = $db->query("select * from laboratory_test"); //if the query is wrong $results is false
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

function getLaboratoryByDateTest() {
	include ('db.php');
	$results = $db->query("select * from laboratory_test where DATE(date_done) = CURDATE() ORDER BY date_done asc"); //if the query is wrong $results is false
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

function registerLaboratoryTest($type, $date_done, $finding) {
	include ('db.php');	

	$results = $db->prepare('INSERT INTO laboratory_test (type, date_done, finding) 
	VALUES (:type, :date_done, :finding)');
	$results->bindValue(':type', $type);
	$results->bindValue(':date_done', $date_done);
	$results->bindValue(':finding', $finding);
	$results->execute();
	var_dump($results);
	return $results->rowCount();
}

function deleteLaboratoryTest($id) {
	include ('db.php');

	$results = $db->prepare('delete from laboratory_test where id = ?');
	$results->bindValue(1, $id);
	$results->execute();
	return $results->rowCount();
}

function updateLaboratoryTest($id, $type, $date_done, $finding) {
	include ('db.php');

	$results = $db->prepare('UPDATE laboratory_test SET type=?, date_done=?, finding=? WHERE id=?');
	$results->bindValue(1, $type);
	$results->bindValue(2, $date_done);
	$results->bindValue(3, $finding);
	$results->bindValue(4, $id);
	$results->execute();
	var_dump($results);
	return $results->rowCount();

}

function getLaboratoryTestById($id) {
	include ('db.php');
	// session_start();
	$results = $db->prepare('SELECT * FROM laboratory_test WHERE id = ?');
	$results->bindValue(1, $id);
	$results->execute();
	$userInfo = $results->fetchAll(PDO::FETCH_ASSOC);

	return $userInfo;
}

///// end laboratory Test function
///start Surgery function
function getSurgery() {
	include ('db.php');
	$results = $db->query("select * from surgery"); //if the query is wrong $results is false
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

function getSurgeryByDate() {
	include ('db.php');
	$results = $db->query("select * from surgery where DATE(date_and_time) = CURDATE()"); //if the query is wrong $results is false
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

function registerSurgery($description, $date_and_time, $report_practical) {
	include ('db.php');	

	$results = $db->prepare('INSERT INTO surgery (description, date_and_time, report_practical) 
	VALUES (:description, :date_and_time, :report_practical)');
	$results->bindValue(':description', $description);
	$results->bindValue(':date_and_time', $date_and_time);
	$results->bindValue(':report_practical', $report_practical);
	$results->execute();

	return $results->rowCount();
}


function deleteSurgery($id) {
	include ('db.php');

	$results = $db->prepare('delete from surgery where id = ?');
	$results->bindValue(1, $id);
	$results->execute();
	return $results->rowCount();
}

function updateSurgery($id, $description, $date_and_time, $report_practical) {
	include ('db.php');

	$results = $db->prepare('UPDATE surgery SET description=?, date_and_time=?, report_practical=? WHERE id=?');
	$results->bindValue(1, $description);
	$results->bindValue(2, $date_and_time);
	$results->bindValue(3, $report_practical);
	$results->bindValue(4, $id);
	$results->execute();
	var_dump($results);
	return $results->rowCount();

}

function getSurgeryById($id) {
	include ('db.php');
	// session_start();
	$results = $db->prepare('SELECT * FROM surgery WHERE id = ?');
	$results->bindValue(1, $id);
	$results->execute();
	$userInfo = $results->fetchAll(PDO::FETCH_ASSOC);

	return $userInfo;
}

///// end Surgery function
///start DischargePatient function
function getDischargePatient() {
	include ('db.php');
	$results = $db->query("select * from discharge_patient"); //if the query is wrong $results is false
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}


function getDischargePatientByDate() {
	include ('db.php');
	$results = $db->query("select * from discharge_patient where DATE(date_leave) = CURDATE()"); //if the query is wrong $results is false
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}


function registerDischargePatient($output_diagnosis, $date_leave, $medication, $activities_are_limited, $description_of_symptoms) {
	include ('db.php');	

	$results = $db->prepare('INSERT INTO discharge_patient (output_diagnosis, date_leave, medication, activities_are_limited, description_of_symptoms) 
	VALUES (:output_diagnosis, :date_leave, :medication, :activities_are_limited, :description_of_symptoms)');
	$results->bindValue(':output_diagnosis', $output_diagnosis);
	$results->bindValue(':date_leave', $date_leave);
	$results->bindValue(':medication', $medication);
	$results->bindValue(':activities_are_limited', $activities_are_limited);
	$results->bindValue(':description_of_symptoms', $description_of_symptoms);
	$results->execute();

	return $results->rowCount();
}

function deleteDischargePatient($id) {
	include ('db.php');

	$results = $db->prepare('delete from discharge_patient where id = ?');
	$results->bindValue(1, $id);
	$results->execute();
	return $results->rowCount();
}

function updateDischargePatient($id,  $output_diagnosis, $date_leave, $medication, $activities_are_limited, $description_of_symptoms) {
	include ('db.php');

	$results = $db->prepare('UPDATE discharge_patient SET output_diagnosis=?, date_leave=?, medication=?, activities_are_limited=?, description_of_symptoms=? WHERE id=?');
	$results->bindValue(1, $output_diagnosis);
	$results->bindValue(2, $date_leave);
	$results->bindValue(3, $medication);
	$results->bindValue(4, $activities_are_limited);
	$results->bindValue(5, $description_of_symptoms);
	$results->bindValue(6, $id);
	$results->execute();
	var_dump($results);
	return $results->rowCount();

}

function getDischargePatientById($id) {
	include ('db.php');
	// session_start();
	$results = $db->prepare('SELECT * FROM discharge_patient WHERE id = ?');
	$results->bindValue(1, $id);
	$results->execute();
	$userInfo = $results->fetchAll(PDO::FETCH_ASSOC);

	return $userInfo;
}



///// end fumction DischargePatient function
?>