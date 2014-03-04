<?php
class Questions extends AppModel {
    
    public $hasMany = array(
	    "Answers" => array(
	         "className" => "Answers"
	        ,"foreignKey" => "id_question"
	        ,"dependent" => true
	    )
	    ,"SurveyQuestions" => array(
	         "className" => "SurveyQuestions"
	        ,"foreignKey" => "id_question"
	        ,"dependent" => true
	    )
	);
	
	public $belongsTo = array(
	    
	);
}