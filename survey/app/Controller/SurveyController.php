<?php
/*********The NV****
** date :3/3/2014
*******************/
class SurveyController extends AppController {

public $components = array(
		
	);
	
	public $uses = array(
		 "Questions"
		,"Answer"
		,"Survey"
		,"SurveyQuestions"
		,"Users"
		,"UserAnswers"
		
	);
	
//	public $autoLayout = false;
	/******************start survey ************
	**  save Name  Email 
	** @return to  question 
	*******************************************/
	
	public function start() {
		if ( isset ( $this->request->data['email'] ) && isset( $this->request->data['name'] ) ) {
			if( $this->request->data['email'] != null  && $this->request->data['name'] != null ){
				$this->Users->set(
									array(
											'name'=>$this->request->data['name']
											,'email'=>$this->request->data['email']
										)
								);
				$this->Users->save();
				$this->redirect('/survey/index/'. $this->Users->getLastInsertID() . '/1/0');
			}
		}
	}
	
	/******************Show question ************
	**  
	** @return:
	*******************************************/
	public function index($userid,$id_survey,$next_survey) { 
		//set condition
		if($id_survey !=0 ){
			$conditions = array(
				"SurveyQuestions.id_survey" => $id_survey
				,"SurveyQuestions.is_begin"=> 1
			);
		}else{
			$conditions = array(
				"SurveyQuestions.id" => $next_survey
			);
		}
		$question = $this->SurveyQuestions->find("all"
		    ,array(
				"conditions" => $conditions
				,"fields" => array(
									"`survey`.`titile`"
									,"`survey`.`id`"
									," `questions`.`question`"
									,"`questions`.`id`"
									,"`questions`.`multichoice`"
									,"next_question"
								)
			)
	    );
		
		$answer = $this->Answer->find("all"
		    ,array(
				"conditions" => array(
										"id_question" => $question[0]['Questions']['id']
									)
		       ,"fields" => array(
									"answer"
									,"is_other"
									,"id" 
								)
		       ,"contain" => array(
					
			   )
		    )
	    );
		$this->set('question', $question[0]);
		$this->set('answer', $answer);
		$this->set('userid', $userid);
    }
	/******************Save answer  of user ************
	**  
	** @return:
	*******************************************/
	public function save() {
		if( isset ( $this->request->data['id_survey'] ) ) {
			$this->UserAnswers->set(
									array(
										'id_survey'=>$this->request->data['id_survey']
										,'id_question'=>$this->request->data['id_question']
										,'answer'=>json_encode ($this->request->data['answer'])
										,'id_user'=>$this->request->data['id_user']
										)
									);
			$this->UserAnswers->save();
			if( $this->request->data['next_survey'] == 0) {
				$this->redirect('/survey/finish');
			} else {
				$this->redirect('/survey/index/'.$this->request->data['id_user'].'/0/'.$this->request->data['next_survey']);
			}
		} else {
			$this->redirect('/survey/start');
		}
		
	}
	/******************Finish  ************
	**  
	** @return:
	*******************************************/
	public function finish() {
	
	}
}
