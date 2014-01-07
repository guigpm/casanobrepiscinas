<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model
{
	function pegaListaPiscinas() {	
		$query = $this->db->get('modelos');
		return $query->result();
	}

	function pegaListaSpas() {
		$query = $this->db->get('spas');
		return $query->result();
	}
}


/*
		Para pegar a lista em SESSION:

		$lista = array();
		$lista[] = array(base_url().'img/modelos/amazonas.jpg', 'Amazonas');
		$lista[] = array(base_url().'img/modelos/atlantic.jpg', 'Atlantic');
		$lista[] = array(base_url().'img/modelos/caribe_classic.jpg', 'Caribe Classic');
		$lista[] = array(base_url().'img/modelos/caribe.jpg', 'Caribe');
		$lista[] = array(base_url().'img/modelos/indic.jpg', 'Indic');
		$lista[] = array(base_url().'img/modelos/java.jpg', 'Java');
		$lista[] = array(base_url().'img/modelos/mediterranea_plus.jpg', 'Mediterr&circ;nea Plus');
		$lista[] = array(base_url().'img/modelos/mediterranea.jpg', 'Mediterr&circ;nea');
		$lista[] = array(base_url().'img/modelos/oasis.jpg', 'Oasis');
		$lista[] = array(base_url().'img/modelos/praia_bella.jpg', 'Praia Bella');
		$lista[] = array(base_url().'img/modelos/spa_ilha_redonda.jpg', 'Spa Ilha Redonda');
		$lista[] = array(base_url().'img/modelos/suprema.jpg', 'Suprema');
		return $lista;
*/