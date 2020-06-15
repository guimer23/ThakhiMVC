<?php   
namespace App\Models;
use Exception;
class   Cliente{

    private $pdo;

    public function __construct(){
        $this->pdo=\Core\Database::getConnection();

    }

    public function listar() : array{
        $result = [];

        try {
            $stm = $this->pdo->prepare('SELECT  * from admclitcliente');
            $stm->execute();

            $result = $stm->fetchAll();
        } catch(Exception $e) {
            echo 'ERROR!';
            print_r( $e );
        }

        return $result;
    }
    public function obtener(int $id) : Cliente{
        $result = new Cliente;

        try {
            $stm = $this->pdo->prepare('select * from admclitcliente where CLIdni = ?');
            $stm->execute([$id]);

            $fetch = $stm->fetch();

            $result->CLIdni = $fetch->CLIdni;
            $result->CLInombre = $fetch->CLInombre;
            $result->CLIapellido = $fetch->CLIapellido;
            $result->CLIcelular = $fetch->CLIcelular;
           
        } catch(Exception $e) {

        }

        return $result;
    }

    
    public function guardar(Cliente $model) : bool{
        $result = false;

        try {

            $sql = '
            insert into admclitcliente(
                CLIdni,
                CLInombre,
                CLIapellido,
                CLIcelular
            ) values (?, ?, ?, ?)';

        $stm = $this->pdo->prepare($sql);
        $stm->execute([
            $model->CLIdni,
            $model->CLInombre,
            $model->CLIapellido,
            $model->CLIcelular
        ]);
        

            $result = true;
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $result;
    }


}


?>