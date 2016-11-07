<br/><br/><br/>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <script>
      $(document).ready(function(){
        //accedemos al metodo ajax
        $('#C').on('click',function(){
          if($('#fe').val() == "") {
              alert("Seleccione una fecha");
              return false;
          }
          $.ajax(
          {
          //incluimos la prrpopiedades de ajax
            type: "POST",
            url: "resUTPAjax.php",
            //los campos que contiene el formuario
            data: $("#formE").serialize(),
            //respuesta de la validación del formulario
            success: function(data)
            {
              $("#mostrar_result").html(data)
            }
          })
          //para evitar el submit del botn
          return false;
        })
        })
      </script>
      <h1 class="text-center">::Resultados::</h1>
      <p>¿Quién fue el usuario que recorrió más distancia en el lapso de un día en específico?</p>
      <form method="POST" id="formE">
        <p>Fecha: <input type="date" name="tiempo" class="form-control" placeholder="seleccione fecha" id="fe"></p>
        <button class="btn btn-primary btn-lg" id="C">Consultar</button>
      </form>
      <div id="mostrar_result"></div>
    </div>
  </div>
</div>
