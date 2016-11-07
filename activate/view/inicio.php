<br/><br/><br/><br/>
<div class="container">
    <div class="row">
      <script type="text/javascript">
        $(document).ready(function(){
          $('#pasos').hide();
          //accedemos al metodo ajax
          $('#E').on('click',function(){
            $('#pasos').show('swing')
            $('#pasos').hide('swing')
            $.ajax(
            {
            //incluimos la prrpopiedades de ajax
              type: "POST",
              url: "insertRunAjax.php",
              //los campos que contiene el formuario
              data: $("#fomrm_Pasos").serialize(),
              //respuesta de la validación del formulario
              success: function(data)
              {
                $("#ver_resul").html(data)
              }
            })
            //para evitar el submit del botn
            return false;
      		})
          })
      </script>
      <img src="tema/img/runF.gif" id="ver_run" width="500px">
      <form method="post" id="fomrm_Pasos">
        <button class="btn btn-primary btn-lg" id="E">::::Caminar/Correr::::</button>
      </form>
      <div id="ver_resul"></div>
      <h3 id="pasos">Diste un paso...</h3>
    </div>
</div>
