  <?php
	// $header_corausel = getHeader();
	// var_dump($header_corausel);
	// die();
	$profil = array('profil' => getProfil());
	$menu = array('menu' => getMenu());
	// $dataContent['profil'] = getProfil();
	// echo json_encode($dataContent);
	// die();
	// $profils = array('profil' => getProfil());
	if (empty($dataContent)) {
		$dataContent = array();
	}
	$dataContent['profil'] = $profil['profil'];
	$this->load->view('template/header', $profil);
	$this->load->view('template/header_menu', $profil);
	$this->load->view($pageContent, $dataContent);
	// echo $captcha_img;

	$this->load->view('template/footer');
	?>
