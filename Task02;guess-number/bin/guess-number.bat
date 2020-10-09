  
<?php 
	namespace GulyaBulatova\guessnumber\Controller;
	use function GulyaBulatova\guessnumber\View\showGame;
	
	function startGame() {
		echo "Game started".PHP_EOL;
		showGame();
	}
?>