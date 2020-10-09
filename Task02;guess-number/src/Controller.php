  
<?php 
	namespace Durnaev\guessnumber\Controller;
	use function Durnaev\guessnumber\View\showGame;
	
	function startGame() {
		echo "Game started".PHP_EOL;
		showGame();
	}
?>