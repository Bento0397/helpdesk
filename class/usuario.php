<?php 


class usuario {
	private $idusuario;
	private $name_usuario;
	private $adress_usuario;
	private $num_usuario;
	private $cep_usuario;
	private $tel_usuario;
	private $cel_usuario;
	private $email_usuario;
	private $login_usuario;
	private $senha_usuario;


		public function setData($data) {
			$this -> setIdusuario($data['idusuario']);
			$this -> setName($data['name_usuario']);
			$this -> setAdress($data['adress_usuario']);
			$this -> setNum($data['num_usuario']);
			$this -> setCep($data['cep_usuario']);
			$this -> setTel($data['tel_usuario']);
			$this -> setCel($data['cel_usuario']);
			$this -> setEmail($data['email_usuario']);
			$this -> setLogin($data['login_usuario']);
			$this -> setPassword($data['password_usuario']);
		}

		///////////////////////////////////////////////////qqq

		public function getIdusuario (){
			return $this ->idusuario;
		}

		public function setIdusuario($value){
			$this-> idusuario =$value;
		}

		public function getName (){
			return $this ->name_usuario;
		}

		public function setName($value){
			$this-> name_usuario =$value;
		}

		public function getAdress (){
			return $this ->adress_usuario;
		}

		public function setAdress($value){
			$this-> adress_usuario =$value;
		}

		public function getNum (){
			return $this ->num_usuario;
		}

		public function setNum($value){
			$this-> num_usuario =$value;
		}

		public function getCep (){
			return $this ->cep_usuario;
		}

		public function setCep($value){
			$this-> cep_usuario =$value;
		}

		public function getTel (){
			return $this ->tel_usuario;
		}

		public function setTel($value){
			$this-> tel_usuario =$value;
		}

		public function getCel (){
			return $this ->cel_usuario;
		}

		public function setCel($value){
			$this-> cel_usuario =$value;
		}

		public function getEmail (){
			return $this ->email_usuario;
		}

		public function setEmail($value){
			$this-> email_usuario =$value;
		}

		public function getLogin (){
			return $this ->login_usuario;
		}

		public function setLogin($value){
			$this-> login_usuario =$value;
		}

		public function getPassword (){
			return $this ->password_usuario;
		}

		public function setPassword($value){
			$this-> password_usuario =$value;
		}

		/////////////////////////////////////////////////////////

		public function insert(){

			
		}



		public function loadById ($id){
			$sql = new Sql();

			$results = $sql -> SELECT("SELECT * FROM cad_usuario WHERE idusuario = :ID", array(
				":ID"=> $id
			));
		}

}
?>
