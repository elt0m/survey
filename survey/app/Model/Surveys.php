<?php
class Surveys extends AppModel {
	public $hasMany = array(
	    "SurveyQuestions" =>array(
	         "className" => "SurveyQuestions"
	        ,"foreignKey" => "id_survey"
	        
	    )
	);
}