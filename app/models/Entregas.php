<?php   
namespace App\Models;
use Exception;

class   Entregas{

    private $pdo;

    public function __construct(){
        $this->pdo=\Core\Database::getConnection();

    }

    public function listar() : array{
        $result = [];
        try {
            $sql = "SELECT a.ENTid,a.ENTdescripcion,a.ENTtipo,c.CONnombre ,a.ENTfechahora,cli.CLInombre,a.ENTprecio,a.ENTestado,a.ENTfoto from admenttentrega as a
            inner join admclitcliente as cli
            on a.CLIdni=cli.CLIdni
            inner join admvectvehiculo_conductor as co
            on a.VECid=co.VECid
            inner join admcontconductor as c
            on co.CONdni=c.CONdni
            order by  a.ENTid desc
            ";

            $stm = $this->pdo->prepare($sql);
            $stm->execute();

            $result = $stm->fetchAll();
        } catch(Exception $e) {

        }

        return $result;
    }
     
    public function guardar(Entregas $model) : bool{
        $result = false;

        try {

            if(empty($model->ENTid)){
                $sql = '
            insert into admenttentrega(
                ENTdescripcion,
                ENTtipo,
                VECid,
                ENTfechahora,
                CLIdni,
                ENTprecio,
                ENTestado
            ) values (?, ?, ?, ?,?,?,?)';

        $stm = $this->pdo->prepare($sql);
        $stm->execute([
            $model->ENTdescripcion,
            $model->ENTtipo,
            $model->VECid,
            $model->ENTfechahora,
            $model->CLIdni,
            $model->ENTprecio,
            $model->ENTestado
        ]); 
            } else {
                $sql = '
                    update admenttentrega
                    set 
                    ENTdescripcion = ?,
                    ENTtipo = ?,
                    VECid = ?,
                    ENTfechahora = ?,
                    CLIdni = ?,
                    ENTprecio = ?,
                    ENTestado = ?
                    where ENTid = ?
                ';

                $stm = $this->pdo->prepare($sql);
                $stm->execute([
                    $model->ENTdescripcion,
                    $model->ENTtipo,
                    $model->VECid,
                    $model->ENTfechahora,
                    $model->CLIdni,
                    $model->ENTprecio,
                    $model->ENTestado,
                    $model->ENTid
                ]);
            }    

            $result = true;
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $result;
    }

    public function obtener(int $id) : Entregas{
        $result = new Entregas;

        try {
            $stm = $this->pdo->prepare('select * from admenttentrega where ENTid = ?');
            $stm->execute([$id]);
            $result = $stm->fetchObject('\App\Models\Entregas');

        } catch(Exception $e) {

        }

        return $result;
    }



}


?>