<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;
class DataModel extends Model{
	protected $table              = 'data';
	protected $returnType         = 'array';
	protected $primaryKey = 'id';
	protected $allowedFields      = [
		'nama_anak' ,
		'alamat',
		'berat_badan',
		'tinggi_badan',
		'lingkar_lengan_atas',
		'lingkar_kepala',
		'lingkar_perut',
		'hepatitis_b',
		'polio',
		'bcg',
		'dtp',
		'hib',
		'pcv',
		'rotavirus',
		'influenza',
		'campak',
		'mmr',
		'tifoid',
		'hepatitis_a',
		'varisela',
		'hpv',
		'japanese_encephalitis',
		'dangue',

	];

}