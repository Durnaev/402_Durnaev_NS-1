  
<?php 
	namespace Durnaev\guessnumber\Controller;
	
	use function Durnaev\guessnumber\Model\setting;
	use function Durnaev\guessnumber\Database\openDatabase;
	use function Durnaev\guessnumber\View\MenuGame;
	
	function startGame() 
	{
		setting();
		openDatabase();
		MenuGame();
	}
?>