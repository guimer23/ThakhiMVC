<?php
namespace App\Models;

use Exception;

class Empleado {
    private $pdo;

    public function __construct(){
        $this->pdo = \Core\Database::getConnection();
    }

    public function listar() : array{
        $result = [];

        try {
            $sql = "
                SELECT
                    e.id,
                    e.nombre,
                    e.apellido,
                    e.fecha_nacimiento,
                    p.nombre profesion,
                    p.sueldo sueldo_inicial,
                    p.sueldo + IFNULL(sum(es.sueldo), 0) sueldo_final
                FROM empleado e
                INNER JOIN profesion p
                ON e.profesion_id = p.id
                LEFT JOIN empleado_sueldo es
                ON es.empleado_id = e.id
                GROUP BY e.id
                ORDER BY e.nombre
            ";

            $stm = $this->pdo->prepare($sql);
            $stm->execute();

            $result = $stm->fetchAll();
        } catch(Exception $e) {

        }

        return $result;
    }

    public function guardar(Empleado $model) : bool{
        $result = false;

        try {

            if(empty($model->id)){
                $sql = '
                    insert into empleado(
                        nombre,
                        apellido,
                        fecha_nacimiento,
                        profesion_id
                    ) values (?, ?, ?, ?)';

                $stm = $this->pdo->prepare($sql);
                $stm->execute([
                    $model->nombre,
                    $model->apellido,
                    $model->fecha_nacimiento,
                    $model->profesion_id
                ]);
            } else {
                $sql = '
                    update empleado
                    set 
                    nombre = ?,
                    apellido = ?,
                    fecha_nacimiento = ?,
                    profesion_id = ?
                    where id = ?
                ';

                $stm = $this->pdo->prepare($sql);
                $stm->execute([
                    $model->nombre,
                    $model->apellido,
                    $model->fecha_nacimiento,
                    $model->profesion_id,
                    $model->id
                ]);
            }

            $result = true;
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $result;
    }

    public function obtener(int $id) : Empleado{
        $result = new Empleado;

        try {
            $stm = $this->pdo->prepare('select * from empleado where id = ?');
            $stm->execute([$id]);

            $fetch = $stm->fetch();

            $result->id = $fetch->id;
            $result->nombre = $fetch->nombre;
            $result->apellido = $fetch->apellido;
            $result->fecha_nacimiento = $fetch->fecha_nacimiento;
            $result->profesion_id = $fetch->profesion_id;
        } catch(Exception $e) {

        }

        return $result;
    }

    public function eliminar(int $id) : bool{
        $result = false;

        try {
            $stm = $this->pdo->prepare('delete from empleado where id = ?');
            $stm->execute([$id]);

            $result = true;
        } catch(Exception $e) {

        }

        return $result;
    }
}