<?php
    require('../../Conexion.php');
    //Esta funcion borra los datos
    function resetValues($value){
        $len = count($value);
        for($i=0;$i<$len;$i++){
            unset($value[$len]);
        }
    }

    /*function valCampos($value){
        $error_log = array();
            for($i=0;$i<count($value);$i++){
                $lenAux = strlen($value[$i]);
                if($lenAux<6&&$lenAux>20)
                    $error_log[$i] = $value[$i].'error_type_length';
            }return $error_log;
    }*/

    //valido contraseñas
    function valPass($param){
        global $cNumeros;
        global $cLetrasMinus;
        global $cLetrasMayus;
        if(ctype_alnum($param)){//defino si la contraseña tiene letras y numeros
            for($i=0;$i<strlen($param);$i++){
                $aux = substr($param,$i,1); //extraigo cada caracter de la contraseña 
                if(is_numeric($aux))
                    $GLOBALS['cNumeros'] +=1; //si tiene numeros los cuento
                else if(ctype_lower($aux))
                    $GLOBALS['cLetrasMinus'] += 1; //si letras minusculas las cuento
                else if(ctype_upper($aux))
                    $GLOBALS['cLetrasMayus'] += 1; //si tiene letras mayusculas las cuento
                else 
                    return "tipo_nulo"; //lo puse de relleno
            }if($cNumeros<3 || $cLetrasMayus<3 || $cLetrasMayus<3) /*valido la contraseña si no tiene
                                                                    3 numeros 3 letras mayusculas y 3 letras minusculas
                                                                    como insegura*/
                return "conteo_de_digitos_bajo";
            else if($cNumeros>=3 && $cLetrasMayus>=3 && $cLetrasMayus>=3) /*valido la contraseña si no tiene
                                                                            3 numeros 3 letras mayusculas y 3 letras minusculas
                                                                            como insegura*/
                return "contraseña_segura";
            else
                return "error_desconocido";                              //lo puse de relleno

        }else if(!ctype_alnum($param)) /*este error sale en caso que 
                                        la contraseña no tenga numeros o letras*/
            return "non_alnum";
    }
    function valNom($param){
        if(is_string($param)){
            $aux = strlen($param);
            if($aux>0&& $aux<25)
                return true;
            else if($aux<1)
                return false;
        }
    }
    //aqui valido que al crear una cuenta con un correo , ya no se pueda crear otra con el mismo
function Validar($param,$param2,$param3){
    $sqlC = "SELECT * FROM administrador WHERE $param = \"$param2\" ;";
    $Ingreso = mysqli_query($param3,$sqlC) or die (mysqli_error($param3));
        if($Ingreso){
            while($emails= mysqli_fetch_assoc($Ingreso))
                $datosE = $emails['email'];
            
            if(isset($datosE)){
            if($datosE==$param2)
                return true;
        }else
            return false;
    }
}