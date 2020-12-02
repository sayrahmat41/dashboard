<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class UsersTable
{
    protected $db;

    public  function __construct(ConnectionInterface &$db)
    {
        $this->db =& $db;
    }

    /*
     * Get all rows from table
     */
    function getAll(){
        return $this->db->table('sys_users')->get()->getResult();
    }
    /*
    * Get count of rows from table
    */

    /*
     * get()
     * getRow()
     * getResult()
     * orderBy
     */
    function getData()
    {

      $query = $this->db->query(" 
       SELECT 
       AVG(tinggi_badan) AS 'berat_badan',
       AVG(berat_badan) AS 'tinggi_badan',
       AVG(lingkar_kepala) AS 'lingkar_lengan_atas',
       AVG(lingkar_lengan_atas) AS 'lingkar_kepala',
       AVG(lingkar_perut) AS 'lingkar_perut',
       SUM(hepatitis_b) AS 'hepatitis_b',
       SUM(polio) AS 'polio',
       SUM(bcg) AS 'bcg',
       SUM(dtp) AS 'dtp',
       SUM(hib) AS 'hib',
       SUM(pcv) AS 'pcv',
       SUM(rotavirus) AS 'rotavirus',
       SUM(influenza) AS 'influenza',
       SUM(campak) AS 'campak',
       SUM(mmr) AS 'mmr',
       SUM(tifoid) AS 'tifoid',
       SUM(hepatitis_a) AS 'hepatitis_a',
       SUM(varisela) AS 'varisela',
       SUM(hpv) AS 'hpv',
       SUM(japanese_encephalitis) AS 'japanese_encephalitis',
       SUM(dangue) AS 'dangue'
       FROM
       data
       ")->getResult();
      return $query;
        # code...
  }

}