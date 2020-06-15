<?php   
namespace App\Models;
use Exception;
class   Usuario{

    private $pdo;

    public function __construct(){
        $this->pdo=\Core\Database::getConnection();

    }

    public function listar() : array{
        $result = [];

        try {
            $stm = $this->pdo->prepare('SELECT  * from admusutusuario');
            $stm->execute();

            $result = $stm->fetchAll();
        } catch(Exception $e) {
            echo 'ERROR!';
            print_r( $e );
        }

        return $result;
    }

    public function obtener(int $id) : Usuario{
        $result = new Usuario;

        try {
            $stm = $this->pdo->prepare('select * from admusutusuario where USUid = ?');
            $stm->execute([$id]);

            $fetch = $stm->fetch();

            $result->USUid = $fetch->USUid;
            $result->USUnombre = $fetch->USUnombre;
            $result->USUapellidos = $fetch->USUapellidos;
            $result->USUemail = $fetch->USUemail;            
            $result->USUusuario = $fetch->USUusuario;
            $result->USUpassword = $fetch->USUpassword;
            $result->USUestado = $fetch->USUestado;
            $result->ruta_foto = $fetch->ruta_foto;
           
        } catch(Exception $e) {

        }

        return $result;
    }

    
    public function guardar(Usuario $model) : bool{
        $result = false;

        try {

            $sql = '
            insert into admusutusuario(             
                USUnombre,
                USUapellidos,
                USUemail,                 
                USUusuario,
                USUpassword,
                USUestado,
                ruta_foto
            ) values (?,?, ?, ?, ?,?,?)';

        $stm = $this->pdo->prepare($sql);
        $stm->execute([
            $model->USUnombre,
            $model->USUapellidos,
            $model->USUemail,
            $model->USUusuario,
            $model->USUpassword,
            $model->USUestado,
            $model->ruta_foto
        ]);        

            $result = true;
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $result;
    }

    public function logear(string $correo) : Usuario{
        $result = new Usuario;

        try {
            $stm = $this->pdo->prepare('select * from admusutusuario where USUemail = ?');
            $stm->execute([$correo]);

            $fetch = $stm->fetch();
            $result->USUnombre = $fetch->USUnombre;
       
        } catch(Exception $e) {

        }

        return $result;
    }

}


?>