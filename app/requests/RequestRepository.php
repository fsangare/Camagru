<?php
namespace App\Requests;

use PDO;
use App\Requests\Request;

class RequestRepository
{
    protected $db_host = 'mysql';
    protected $db_name = 'camagru';
    protected $db_user = 'root';
    protected $db_pass = 'root';

    public function __construct(PDO $db = null)
    {
        $this->db = $db;
        if ($this->db === null) {
            $dsn = "mysql:host={$this->db_host};dbname={$this->db_name}";
            $this->db = new PDO(
                $dsn,
                $this->db_user,
                $this->db_pass
            );
            $this->db->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        }
    }

    public function save(Request $request)
    {
        $statement = $this->db->prepare(
            'insert into requests
            (email, frame, image, test)
            values
            (:email, :frame, :image, :test)'
        );
        $statement->bindParam(':email', $request->email);
        $statement->bindParam(':frame', $request->frame);
        $statement->bindParam(':image', $request->image);
        $statement->bindParam(':test', $request->test);

        $statement->execute();
    }

    public function countAll()
    {
        $count = $this->db->query('select count(*) from requests')->fetchColumn();
        return $count;
    }
}
