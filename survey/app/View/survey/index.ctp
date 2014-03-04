<html>
<body>
<form name="surveyQuestion" method="post" action="http://localhost/lexus/survey/save">
<input type="hidden"  name="id_question"  value="<?php echo $question['Questions']['id']; ?>" id="id_question"/>
<input type="hidden"  name="id_user"  value="<?php echo $userid; ?>" id="id_user"/>
<input type="hidden"  name="id_survey"  value="<?php echo $question['Survey']['id']; ?>" id="id_survey"/>
<input type="hidden"  name="next_survey"  value="<?php echo $question['SurveyQuestions']['next_question']; ?>" id="next_survey"/>
Question : <?php echo $question['Questions']['question']; ?>
<br/>
<?php foreach ( $answer as $item ) {
	if( $question['Questions']['multichoice'] ) {
?>
		<input type="radio" name="answer[]" value="<?php echo $item["Answer"]["id"]?>"><?php echo $item["Answer"]["answer"]?><br/><br/>
<?php
	} else {
?>
	<input type="checkbox" name="answer[]" value="<?php echo $item["Answer"]["id"]?>"><?php echo $item["Answer"]["answer"]?><br/><br/>
<?php
	}
}
?>
	
<br/>
<?php 
if ($question['SurveyQuestions']['next_question'] == 0) {
?>
<input type="submit" value="Finnish">
<?php
	} else {
?>
<input type="submit" value=" Next">
<?php
	}
?>
</form>
	
</body>
</html>