<?php   
namespace App\Models;
use Exception;
class   Vehiculo{

    private $pdo;

    public function __construct(){
        $this->pdo=\Core\Database::getConnection();

    }

    public function listar() : array{
        $result = [];      
        try {
            $stm = $this->pdo->prepare('SELECT  * from admvehtvehiculo');
            $stm->execute();
            $result = $stm->fetchAll();

        } catch(Exception $e) {
            echo 'ERROR!';
            print_r( $e );
        }

        return $result;
    }


    public function obtener(int $id) : Cliente{
        $result = new Vehiculo;

        try {
            $stm = $this->pdo->prepare('select * from admvehtvehiculo where VEHid = ?');
            $stm->execute([$id]);

            $fetch = $stm->fetch();

            $result->VEHplaca = $fetch->VEHplaca;
            $result->VEHmarca	 = $fetch->VEHmarca	;
            $result->VEHmodelo = $fetch->VEHmodelo;
            $result->VEHcolor = $fetch->VEHcolor;
            $result->VEHanio_fabricacion = $fetch->VEHanio_fabricacion;
            $result->VEHestado = $fetch->VEHestado;
           
        } catch(Exception $e) {

        }

        return $result;
    }

    
    public function guardar(Vehiculo $model) : bool{
        $result = false;
        try {

            $sql = '
            insert into admvehtvehiculo(
                VEHplaca,
                VEHmarca,
                VEHmodelo,
                VEHcolor,
                VEHanio_fabricacion,
                VEHestado,
                ruta_foto

            ) values (?, ?, ?, ?,?,?,?)';

        $stm = $this->pdo->prepare($sql);
        $stm->execute([
            $model->VEHplaca,
            $model->VEHmarca,
            $model->VEHmodelo,
            $model->VEHcolor,
            $model->VEHanio_fabricacion,
            $model->VEHestado,
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