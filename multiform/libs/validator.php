<?php

class Validator
{
//for storing form field names
 private $fields=array();

 //for storing errors for form  fields
 private $field_errors=array();


private $form_is_valid=true;

public function add_field($field_name)
{

	$this->fields[]=$field_name;
	$this->field_errors[$field_name]=array();
}

public function add_rule_to_field($field_name,$field_rule)
{
  $rule_name=$field_rule[0];
  switch ($rule_name) {
  	case'letters':

  	 break;
  	 case'numbers':
  	 break;
  	 case'email':
  	 break;
  	 case'empty':
  	 	if(strlen($_POST[$field_name])==0)
  	 	{
  	 		$this->add_error_to_field($field_name,ucwords($field_name)."cannot be empty");
  	 	}
  	 break;

  	
  	default:
  		# code...
  		break;
  }
}
private function add_error_to_field($field_name,$error_message){
	$this->form_is_valid=false;
	$this->field_errors[$field_name][]=$error_message;

}

public function form_valid(){
	return $this->form_is_valid;
}


public function out_field_error($field_name){

	if(isset($this->field_errors[$field_name]))
	{

		foreach($this->field_errors[$field_name] as $field_errors)
		{
			echo"<p class='error'>[$field_errors]<p>";
		}
	}
}

}




?>