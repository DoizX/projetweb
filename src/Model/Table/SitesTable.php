<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\I18n\Time;
use Cake\I18n\FrozenTime;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class SitesTable extends Table
{
	function updatePos($id,$long,$lat)
	{
		$n=$this->get($id);
			$n->x=$long;
			$n->y=$lat;
			$this->save($n);
	}

	public function add($nom,$prenom,$adress,$phone,$datebirth, $about,$Sexe,$Statut,$responsable)
    { 
        $table = TableRegistry::get('personne'); //nom de la table
        $id=md5(uniqid(rand(),true));
        
        
        
        
        $query = $table->query();
        $query->insert(['nom', 'prenom', 'adress', 'phone','datebirth','about', 'sexe','statut','responsable'])
              ->values([
                    'nom'=>$nom,
                    'prenom'=>$prenom,
                    'adress'=>$adress,
                    'phone'=>$phone,
                    'datebirth'=>$datebirth,
                    'about'=>$about,
                    'sexe'=>$Sexe,
                    'statut'=>$statut,
                    'responsable'=>$responsable
                    ])
              ->execute();
    }
}
