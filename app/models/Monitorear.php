<?php   
namespace App\Models;
use Exception;
class Monitorear{

    private $pdo;

    public function __construct(){
        $this->pdo=\Core\Database::getConnection();

    }

    public function listar() : array{
        $result = [];     
        try {
            $stm = $this->pdo->prepare('SELECT ent.ENTid, vhi.VEHid, vhi.CONdni,co.CONnombre,co.CONapellido,co.CONcelular,vehi.VEHplaca,  vhi.VEClatitud,vhi.VEClongitud,cli.CLInombre,ent.ENTestado FROM admvectvehiculo_conductor as vhi
            inner join admcontconductor as co
            on vhi.condni= co.CONdni
            inner join admvehtvehiculo as vehi
            on vhi.VEHid=vehi.VEHid
            inner join admenttentrega as ent
            on vhi.VECid= ent.VECid
            inner join admclitcliente as cli
            on ent.CLIdni =cli.CLIdni
              where ent.ENTfechahora=curdate()');
            $stm->execute();

            $result = $stm->fetchAll();
        } catch(Exception $e) {
            echo 'ERROR!';
            print_r( $e );
        }

        return $result;
    }


    public function monitorear() : array{
        $result = [];     
        try {
            $stm = $this->pdo->prepare('SELECT vhi.CONdni,vhi.VEClatitud,vhi.VEClongitud,co.CONnombre,vhi.VEHid FROM admvectvehiculo_conductor as vhi
            inner join admcontconductor as co          
            on vhi.CONdni=co.CONdni
            inner join admenttentrega as ent
            on ent.VECid=vhi.VECid          
            where ent.ENTfechahora=curdate()');
            $stm->execute();

            $result = $stm->fetchAll();
        } catch(Exception $e) {
            echo 'ERROR!';
            print_r( $e );
        }

        return $result;
    }



    public function obtener(int $id) : Monitorear{
        $result = new Monitorear;

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
           
        } catch(Exception $e) {

        }

        return $result;
    }
    public function guardar(Conductor $model) : bool{
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