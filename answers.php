<?php


class need_answer{
	
	
	public $count;
	public $question;
	public $answer;


	//set up member fields to hook with POST variables
	public function __construct(){

		$count = 0;

		if(isset($_POST['question'])){
		
			$this->question = htmlspecialchars($_POST['question']);
			$this->answer = $_POST['answer'];
		
		}else{
		
			echo 'I need a question';
		
		}

		// Count POST answers coming in. JS will be set up in the future to let user add
		// more potential answers so this function has to be dynamic.
		$this->count_answers();

	}

	private function count_answers(){

		foreach($this->answer as $value){
		
			$this->count++;
		
		}		
	}

	

	private function get_random_number($count){

		$rand = rand(0, $count - 1);

		return $rand;

	}



	public function show_answer($count){
		
		echo htmlspecialchars($_POST['answer'][$this->get_random_number($count)]);
	
	}	

}

?>


<?php $ans = new need_answer(); ?>

<h1>The answer to "<?php echo $ans->question; ?>" is: </h1><br />

<br />

<?php $ans->show_answer($ans->count); ?>

