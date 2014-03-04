<?php
class SurveyQuestions extends AppModel {
	public $belongsTo = array(
	  "Survey" =>array(
	         "className" => "Survey"
	        ,"foreignKey" => "id_survey"
	        ,"dependent" => true
	    )
		,"Questions" => array(
	         "className" => "Questions"
	        ,"foreignKey" => "id_question"
	        ,"dependent" => true
	    )
	);

}
