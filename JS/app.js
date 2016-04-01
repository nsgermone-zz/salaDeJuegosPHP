var angularapp = angular.module("MiApp", []);

angularapp.controller('contppt2', function($scope){
	$scope.empatadas = 0;
	$scope.ganadas = 0;
	$scope.perdidas = 0;	
	$scope.eleccionMaquina = "papel";
	$scope.comenzar = function()
	{
		$scope.numeroSecreto =Math.floor( Math.random()*3)+1;

		switch($scope.numeroSecreto)
		{
			case 1:
				$scope.eleccionMaquina="piedra";
				break;
			case 2:
				$scope.eleccionMaquina="papel";
				break;
			case 3:
				$scope.eleccionMaquina="tijera";
				break;

		}
	}
	$scope.papel = function()
	{
		$scope.comenzar();
		alert("la maquina selecciono: "+ $scope.eleccionMaquina);
		$scope.eleccionHumano="papel";
		if($scope.eleccionHumano==$scope.eleccionMaquina)
		{
			alert("empate.");
			$scope.empatadas++;		
		}
		else if($scope.eleccionMaquina=="piedra")
		{
			alert("vos ganastes.");
			$scope.ganadas++;
		}
		else
		{
			alert("ganó la Maquina.");
			$scope.perdidas++;
		}	
	}
	$scope.tijera = function()
	{
		$scope.comenzar();
		alert("la maquina selecciono: "+ $scope.eleccionMaquina);
		$scope.eleccionHumano="tijera";
		if($scope.eleccionHumano==$scope.eleccionMaquina)
		{
			alert("empate.");
			$scope.empatadas++;		
		}
		else if($scope.eleccionMaquina=="piedra")
		{
			alert("ganó la máquina.");
			$scope.ganadas++;
		}
		else
		{
			alert("vos ganaste.");
			$scope.perdidas++;
		}	
	}
	$scope.piedra = function()
	{
		$scope.comenzar();
		alert("la maquina selecciono: "+ $scope.eleccionMaquina);
		$scope.eleccionHumano="piedra";
		if($scope.eleccionHumano==$scope.eleccionMaquina)
		{
			alert("empate.");
			$scope.empatadas++;		
		}
		else if($scope.eleccionMaquina=="tijera")
		{
			alert("vos ganastes.");
			$scope.ganadas++;
		}
		else
		{
			alert("ganó la Maquina.");
			$scope.perdidas++;
		}	
	}
	$scope.verificar = function()
	{

	}
});