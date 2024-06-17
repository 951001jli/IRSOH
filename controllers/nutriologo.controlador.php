<?php

class ControladorNutriologo
{

    /*=============================================
    MOSTRAR TOTAL PRODUCTOS
    =============================================*/

    public static function ctrMostrarSolNutr($id_usuario)
    {
        $tabla = "tb_nutriologos";

        $respuesta = ModeloNutriologo::mdlMostrarNutriologo($tabla, $id_usuario);

        return $respuesta;

    }

    public static function ctrBuscarNutri($busqueda)
    {
        $respuesta = ModeloNutriologo::mdlBuscarNutri($busqueda);
        return $respuesta;
    }



    /*=============================================
    MOSTRAR TOTAL PRODUCTOS
    =============================================*/

    public static function ctrMostrarTotalNutri()
    {

        $tabla = "tb_nutriologos";

        $respuesta = ModeloNutriologo::mdlMostrarTotalNutri($tabla);

        return $respuesta;

    }

    public static function ctrMostrarTotalNutriRe()
    {

        $tabla = "tb_nutriologos";

        $respuesta = ModeloNutriologo::mdlMostrarTotalNutriRe($tabla);

        return $respuesta;

    }


     /*=============================================
    ELIMINAR PRODUCTO
    =============================================*/

    public static function ctrEliminarNutri()
    {

        if (isset($_GET["ID_NUTRIOLOGO"])) {

            $datos = $_GET["ID_NUTRIOLOGO"];

            if ($_GET["foto"] != "" && $_GET["foto"] != "vistas/img/productos/default/default.jpg") {

                unlink($_GET["foto"]);

            }

            $respuesta = ModeloNutriologo::mdlEliminarNutri("nutriologos", $datos);

            if ($respuesta == "ok") {

                echo '<script>

				swal({
					  type: "success",
					  title: "La solicitud ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "nutriologos";

								}
							})

				</script>';

            }

        }

    }



    public static function ctrRechazarNutri($id_nutriologo)
    {
        $respuesta = ModeloNutriologo::mdlRechazarNutri("tb_usuarios", $id_nutriologo);

        if ($respuesta == "ok") {

            echo '<script>
		            window.location.href = "solNutri";
				</script>';
        }

    }


    public static function ctrAceptarNutri($id_nutriologo)
    {
        $respuesta = ModeloNutriologo::mdlAceptarNutri("tb_usuarios", $id_nutriologo);

        if ($respuesta == "ok") {

            echo '<script>
		            window.location.href = "solNutri";
				</script>';
        }

    }


    public static function ctrRevisarCalNutr($id_nutriologo, $id_usuario)
    {
        $respuesta = ModeloNutriologo::mdlRevisarCalNutr($id_nutriologo, $id_usuario);

        return $respuesta;

    }

    public static function ctrMostrarCalNutr($id_nutriologo)
    {
        $respuesta = ModeloNutriologo::mdlMostrarCalNutr($id_nutriologo);

        return $respuesta;

    }

    public static function ctrAgregarCalNutri($id_nutriologo, $calificacion, $id_usuario, $cita)
    {
        $respuesta = ModeloNutriologo::mdlAgregarCalNutri($id_nutriologo, $calificacion, $id_usuario, $cita);

        if ($respuesta == "ok") {

            echo '<script>
		            window.location.href = "profile?medico=' . $id_nutriologo . '";
				</script>';
        }

    }
}        