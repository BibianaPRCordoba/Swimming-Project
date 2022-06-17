<?php

class Query_Model extends CI_Model{
/* =============================================================================================================================================================================================================================== */
/* START - CONTROLLER: Padres */

    /* Insertar datos en las tablas */
    function InsertPadreInTbPadres($datos_padre_padres){
        $this->db->insert('padres',$datos_padre_padres);
    }

    function InsertPadreInTbUsuarios($datos_padre_usuarios){
        $this->db->insert('usuarios',$datos_padre_usuarios);
    }

    /* Actualizar datos en las tablas */
    function UpdatePadreInTbPadres($id,$datos_padre_padres){
        $this->db->where('id_padre',$id);
        $this->db->update('padres',$datos_padre_padres);
    }

    function UpdatePadreInTbUsuarios($id,$datos_padre_usuarios){
        $this->db->where('id_padre',$id);
        $this->db->update('usuarios',$datos_padre_usuarios);
    }

    function UpdatePadreInTbNinos($id,$datos_padre_ninos){
        $this->db->where('id_padre',$id);
        $this->db->update('ninos',$datos_padre_ninos);
    }

    /* Borrar datos en las tablas */
    function DeletePadreTbPadres($id){        
        $this->db->where('id_padre', $id);
        $this->db->delete('padres');
    }

    function DeletePadreTbUsuarios($id){        
        $this->db->where('id_padre', $id);
        $this->db->delete('usuarios');
    }

    function DeleteNinoTbNinos($id){
        $this->db->where('id_padre', $id);
        $this->db->delete('ninos');
    }

    /* Obtener los datos de las tablas */
    function DataPadres(){
        $this->db->select('*');
        $this->db->from('padres');
        $query = $this->db->get();
        return $query->result();
    }

    function DataNinos(){
        $this->db->select('*');
        $this->db->from('ninos');
        $query = $this->db->get();
        return $query->result();
    }

    /* Obtener el ID del Padre */
    function GetPadreById($id){
        $query = $this->db->query("SELECT p.id_padre, p.nombre, p.apaterno, p.amaterno, p.telefono, p.direccion, 
            u.email, u.username, u.password, u.role, u.estado, 
            n.nombre_nino, n.apaterno_nino, n.amaterno_nino, n.tel_emergencia, n.nivel, n.role_nino, n.id_nino 
            FROM padres AS p 
            INNER JOIN ninos AS n ON p.id_nino = n.id_nino
            INNER JOIN usuarios AS u ON u.id_padre = p.id_padre
            WHERE p.id_padre = '$id'"
        );
        return $query->result();
    }

    /* Insertar el ID del Padre en la tabla de usuarios */
    function InsertIdPadreIntoTbUsuarios(){
        $query = $this->db->query("UPDATE usuarios
        JOIN padres
        ON usuarios.nombre = padres.nombre
        AND usuarios.apaterno = padres.apaterno
        AND usuarios.amaterno = padres.amaterno
        SET usuarios.id_padre = padres.id_padre");
    }
    
    /* Obtener el username del padre */
    function GetPadreByUsername($usuario){
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('username', $usuario);
        $query = $this->db->get();
        return $query->result();
    }

/* END - CONTROLLER: Padres */
/* =============================================================================================================================================================================================================================== */

/* =============================================================================================================================================================================================================================== */
/* START - CONTROLLER: Alumnos */

    /* Insertar datos en las tablas */    
    function InsertAlumnoInTbNinos($datos_alumno_ninos){
        $this->db->insert('ninos',$datos_alumno_ninos);
    }

    /* Actualizar datos en las tablas */
    function UpdateAlumnoInTbNinos($id,$datos_alumno_ninos){
        $this->db->where('id_nino',$id);
        $this->db->update('ninos',$datos_alumno_ninos);
    }

    /* Borrar datos en las tablas */
    function DeleteAlumnoTbNinos($id){
        $this->db->where('id_nino', $id);
        $this->db->delete('ninos');
    }

    /* Obtener el ID del alumno */
    function GetAlumnoById($id){
        $query = $this->db->query("SELECT p.id_padre, p.nombre, p.apaterno, p.amaterno,
            n.nombre_nino, n.apaterno_nino, n.amaterno_nino, n.tel_emergencia, n.nivel, n.role_nino, n.estado_nino, n.id_nino 
            FROM padres AS p 
            INNER JOIN ninos AS n ON p.id_padre = n.id_padre
            WHERE n.id_nino = '$id'"
        );
        return $query->result();
    }

/* END - CONTROLLER: Alumnos */
/* =============================================================================================================================================================================================================================== */

/* =============================================================================================================================================================================================================================== */
/* START - CONTROLLER: Maestros */

    /* Insertar datos en las tablas */
    function InsertMaestroInTbMaestros($datos_maestro_maestros){
        $this->db->insert('maestros',$datos_maestro_maestros);
    }

    function InsertMaestroInTbUsuarios($datos_maestro_usuarios){
        $this->db->insert('usuarios',$datos_maestro_usuarios);
    }

    /* Actualizar datos en las tablas */
    function UpdateMaestroInTbMaestros($id,$datos_maestro_maestros){
        $this->db->where('id_maestro',$id);
        $this->db->update('maestros',$datos_maestro_maestros);
    }

    function UpdateMaestroInTbUsuarios($id,$datos_maestro_usuarios){
        $this->db->where('id_maestro',$id);
        $this->db->update('usuarios',$datos_maestro_usuarios);
    }

	/* Borrar datos en las tablas */
    function DeleteMaestroTbMaestros($id){        
	    $this->db->where('id_maestro', $id);
	    $this->db->delete('maestros');
	}

	function DeleteMaestroTbUsuarios($id){        
	    $this->db->where('id_maestro', $id);
	    $this->db->delete('usuarios');
	}

	/* Obtener datos de la tabla */
    function DataMaestros(){
	    $this->db->select('*');
	    $this->db->from('maestros');
	    $query = $this->db->get();
	    return $query->result();
	}

	/* Obtener el ID del maestro */
    function GetMaestroById($id){
	    $query = $this->db->query("SELECT m.id_maestro, m.nombre, m.apaterno, m.amaterno, m.telefono, m.direccion, m.nivel,
	        u.email, u.username, u.password, u.role, u.estado
	        FROM maestros AS m
	        INNER JOIN usuarios AS u ON u.nombre = m.nombre AND u.apaterno = m.apaterno AND u.amaterno = m.amaterno
	        WHERE m.id_maestro = '$id'"
	    );
	    return $query->result();
	}

	/* Insertar el ID del Maestro en la tabla de usuarios */
    function InsertIdMaestroIntoTbUsuarios($id,$datos_maestro_usuarios){
	    $query = $this->db->query("UPDATE usuarios
	    JOIN maestros
	    ON usuarios.nombre = maestros.nombre
	    AND usuarios.apaterno = maestros.apaterno
	    AND usuarios.amaterno = maestros.amaterno
	    SET usuarios.id_maestro = maestros.id_maestro");
	}

	/* Obtener el username del maestro */
    function GetMaestroByUsername($usuario){
	    $this->db->select('*');
	    $this->db->from('usuarios');
	    $this->db->where('username', $usuario);
	    $query = $this->db->get();
	    return $query->result();
	}

/* END - CONTROLLER: Maestros */
/* =============================================================================================================================================================================================================================== */

/* =============================================================================================================================================================================================================================== */
/* START - CONTROLLER: Nivel 1 */
	function DataNivel1(){
	    $this->db->select('*');
	    $this->db->from('ninos');
	    $this->db->where('nivel','1');
	    $query = $this->db->get();
	    return $query->result();
	}
/* END - CONTROLLER: Nivel 1 */
/* =============================================================================================================================================================================================================================== */

/* =============================================================================================================================================================================================================================== */
/* START - CONTROLLER: Nivel 2 */
	function DataNivel2(){
	    $this->db->select('*');
	    $this->db->from('ninos');
	    $this->db->where('nivel','2');
	    $query = $this->db->get();
	    return $query->result();
	}
/* END - CONTROLLER: Nivel 2 */
/* =============================================================================================================================================================================================================================== */
/* =============================================================================================================================================================================================================================== */
/* START - CONTROLLER: Nivel 3 */
	function DataNivel3(){
	    $this->db->select('*');
	    $this->db->from('ninos');
	    $this->db->where('nivel','3');
	    $query = $this->db->get();
	    return $query->result();
	}
/* END - CONTROLLER: Nivel 3 */
/* =============================================================================================================================================================================================================================== */

	function GetPadreByUser($user){
        $query = $this->db->query("SELECT p.id_padre, p.nombre, p.apaterno, p.amaterno,
			u.id_usuario, u.username, u.email,
			n.nombre_nino, n.apaterno_nino, n.amaterno_nino, n.tel_emergencia, n.nivel, n.id_nino 
			FROM padres AS p 
			INNER JOIN ninos AS n ON p.id_padre = n.id_padre
			INNER JOIN usuarios AS u ON p.id_padre = u.id_padre
			WHERE u.username = '$user'"
        );
        return $query->result();
    }

    function GetMaestroByUser($user){
        $query = $this->db->query("SELECT m.id_maestro, m.nombre, m.apaterno, m.amaterno, m.nivel,
			u.id_usuario, u.username, u.email
			FROM maestros AS m 
			INNER JOIN usuarios AS u ON m.id_maestro = u.id_maestro
			WHERE u.username = '$user'"
        );
        return $query->result();
    }


}