<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;

class ModelKustom 
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function getData()
    {
        $builder = $this->db->table("posts");
        $builder->select("*");
        //$builder->where("id", 1);
        //$builder->where("author_id", 1);
        //$builder->where("id= '1' and author_id = '1'");

        //$builder->where("id", 1);
        //$builder->orWhere("id", 2);
        //$builder->where("id= '1' or id = '2'");


        // $idPilihan = ['1', '2', '3'];
        // $builder->whereIn('id', $idPilihan);

        //$builder->like('title', "Quisquam voluptatem delectus sit id");


        //$builder->selectMax("date", "tanggal");
        //$builder->selectMin("date", "tanggal");
        // $builder->select("id, first_name, last_name, email");
        //SelectAvg, selectSum, selectCount
        //$builder->join("authors", "authors.id = posts.author_id");

        $builder->orderBy('title', 'asc');
        $data = $builder->get()->getResult();
        //$data = $builder->getWhere(['id' => 2])->getResult();
        //$sql = $builder->getCompiledSelect();
        return $data;
    }
    
}

?>