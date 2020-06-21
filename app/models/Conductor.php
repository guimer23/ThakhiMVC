<?php   
namespace App\Models;
use Exception;
class   Conductor{

    private $pdo;

    public function __construct(){
        $this->pdo=\Core\Database::getConnection();

    }

    public function listar() : array{
        $result = [];

        try {
            $stm = $this->pdo->prepare('SELECT  * from admcontconductor');
            $stm->execute();

            $result = $stm->fetchAll();
        } catch(Exception $e) {
            echo 'ERROR!';
            print_r( $e );
        }

        return $result;
    }
    public function obtener(int $id) : Conductor{
        $result = new Conductor;

        try {
            $stm = $this->pdo->prepare('select * from admcontconductor where CONdni = ?');
            $stm->execute([$id]);

            $fetch = $stm->fetch();

            $result->CONdni = $fetch->CONdni;
            $result->CONnombre = $fetch->CONnombre;
            $result->CONapellido = $fetch->CONapellido;
            $result->CONlicencia = $fetch->CONlicencia;
            $result->CONvigencialicencia = $fetch->CONvigencialicencia;
            $result->CONcelular = $fetch->CONcelular;
            $result->CONemail = $fetch->CONemail;
            $result->CONdireccion = $fetch->CONdireccion;
            
           
        } catch(Exception $e) {

        }

        return $result;
    }
    public function guardar(Conductor $model) : bool{
        $result = false;

        try {

            if(empty($model->VCONdni)){
                $sql = '
                insert into admcontconductor(
                    CONdni,
                    CONnombre,
                    CONapellido,
                    CONlicencia,
                    CONvigencialicencia,
                    CONcelular,
                    CONemail,
                    CONclave,
                    CONdireccion,
                    ruta_foto
                ) values (?, ?, ?, ?,?,?,?,?,?,?)';
    
            $stm = $this->pdo->prepare($sql);
            $stm->execute([
                $model->CONdni,
                $model->CONnombre,
                $model->CONapellido,
                $model->CONlicencia,
                $model->CONvigencialicencia,
                $model->CONcelular,
                $model->CONemail,
                $model->CONclave,
                $model->CONdireccion,
                $model->ruta_foto
            ]); 

            } else {
                $sql = '
                    update admcontconductor
                    set 
                    CONnombre = ?,
                    CONapellido = ?,
                    CONlicencia = ?,
                    CONvigencialicencia = ?,
                    CONcelular = ?,
                    CONemail = ?,
                    CONdireccion = ?
                    where CONdni = ?
                ';

                $stm = $this->pdo->prepare($sql);
                $stm->execute([
                    $model->CONnombre,
                    $model->CONapellido,
                    $model->CONlicencia,
                    $model->CONvigencialicencia,
                    $model->CONcelular,
                    $model->CONemail,
                    $model->CONdireccion,
                    $model->VCONdni
                ]);
            }

            $result = true;
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $result;
    }
    public function guardar2(Conductor $model) : bool{
        $result = false;
        try {
            $sql = '
            insert into admcontconductor(
                CONdni,
                CONnombre,
                CONapellido,
                CONlicencia,
                CONvigencialicencia,
                CONcelular,
                CONemail,
                CONclave,
                CONdireccion,
                ruta_foto
            ) values (?, ?, ?, ?,?,?,?,?,?,?)';

        $stm = $this->pdo->prepare($sql);
        $stm->execute([
            $model->CONdni,
            $model->CONnombre,
            $model->CONapellido,
            $model->CONlicencia,
            $model->CONvigencialicencia,
            $model->CONcelular,
            $model->CONemail,
            $model->CONclave,
            $model->CONdireccion,
            $model->ruta_foto
        ]);       

            $result = true;
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $result;
    }

}


?>