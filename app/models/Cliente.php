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
            $result->CLIemail = $fetch->CLIemail;

            
           
        } catch(Exception $e) {

        }

        return $result;
    }
    public function guardar(Cliente $model) : bool{
        $result = false;

        try {

            if(empty($model->VCLIdni)){
                        $sql = '
                        insert into admclitcliente(
                            CLIdni,
                            CLInombre,
                            CLIapellido,
                            CLIcelular,
                            CLIemail
                        ) values (?, ?, ?, ?,?)';
            
                    $stm = $this->pdo->prepare($sql);
                    $stm->execute([
                        $model->CLIdni,
                        $model->CLInombre,
                        $model->CLIapellido,
                        $model->CLIcelular,
                        $model->CLIemail
                    ]);
        
            } else {
                $sql = '
                    update admclitcliente
                    set 
                    CLInombre = ?,
                    CLIapellido = ?,
                    CLIcelular = ?,
                    CLIemail = ?
                    where CLIdni = ?
                ';

                $stm = $this->pdo->prepare($sql);
                $stm->execute([
                    $model->CLInombre,
                    $model->CLIapellido,
                    $model->CLIcelular,
                    $model->CLIemail,
                    $model->VCLIdni
                ]);
            }

            $result = true;
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $result;
    }

    //  $model->VCLIdni=$_POST['VCLIdni'];
    public function guardar2(Cliente $model) : bool{
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