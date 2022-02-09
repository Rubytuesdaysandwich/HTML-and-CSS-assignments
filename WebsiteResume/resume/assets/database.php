<?php
$dsn = "mysql:host=localhost;dbname=resume";
$username = "mgs_user";
$password = "pa55word";

try {
    $db = new PDO($dsn,$username,$password);
} catch (Exception $ex) {
    $error_message = $ex->getMessage();
    echo "<p>An error occurred while connecting to the database: $error_message</p>";
}

$about_query = "SELECT * FROM about";
$about_statement = $db->prepare($about_query);
$about_statement->execute();
$about_results = $about_statement->fetchAll(PDO::FETCH_ASSOC);

$about_data = $about_results[0];


$experience_query = "SELECT * FROM experience";
$experience_statement = $db->prepare($experience_query);
$experience_statement->execute();
$experience_results = $experience_statement->fetchAll(PDO::FETCH_ASSOC);

$experience_data = array();
foreach($experience_results as $experience){
    $job_id = $experience['job_id'];
    foreach ($experience as $key => $data){
        $experience_data[$job_id][$key] = $data;
    }
}

$education_query = "SELECT * FROM education";
$education_statement = $db->prepare($education_query);
$education_statement->execute();
$education_results = $education_statement->fetchAll(PDO::FETCH_ASSOC);

$education_data = array();
foreach($education_results as $education){
    $education_id = $education['education_id'];
    foreach ($education as $key => $data){
        $education_data[$education_id][$key] = $data;
    }
}

$skills_query = "SELECT * FROM skills";
$skills_statement = $db->prepare($skills_query);
$skills_statement->execute();
$skills_results = $skills_statement->fetchAll(PDO::FETCH_ASSOC);

$skills_data = array();
foreach($skills_results as $skill){
    $skill_id = $skill['skill_id'];
    foreach ($skill as $key => $data){
        $skills_data[$skill_id][$key] = $data;
    }
}

$interests_query = "SELECT * FROM interests";
$interests_statement = $db->prepare($interests_query);
$interests_statement->execute();
$interests_results = $interests_statement->fetchAll(PDO::FETCH_ASSOC);

$interests_data = array();
foreach($interests_results as $interest){
    $interest_id = $interest['interest_id'];
    foreach ($interest as $key => $data){
        $interests_data[$interest_id][$key] = $data;
    }
}

$awards_query = "SELECT * FROM awards";
$awards_statement = $db->prepare($awards_query);
$awards_statement->execute();
$awards_results = $awards_statement->fetchAll(PDO::FETCH_ASSOC);

$awards_data = array();
foreach($awards_results as $award){
    $award_id = $award['award_id'];
    foreach ($award as $key => $data){
        $awards_data[$award_id][$key] = $data;
    }
}

?>
