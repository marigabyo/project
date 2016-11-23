  <head>
    <title>Comfor</title>
    <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/fullcalendar.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/blue.css" class="skin-color" />
    <script type="text/javascript"  src="<?php echo base_url();?>js/jquery-1.10.2.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

  <body style="background-color: transparent">



      <div class="container-fluid">

          <div class="row-fluid">
              <div class="span12">

                  <div class="widget-box">
                      <div class="widget-title">
                          <h4 style="text-align: center">Servicios</h4>
                      </div>
                      <div class="widget-content nopadding">

                  <table class="table table-bordered">
                      <thead>
                          <tr>
                               <th style="font-size: 1.2em; padding: 5px;">Nº Partida</th>
                              <th style="font-size: 1.2em; padding: 5px;">Descripción</th>
                              
                           
                          <th style="font-size: 1.2em; padding: 5px;">Unidad</th>
                          <th style="font-size: 1.2em; padding: 5px;">Cantidad Proyecto</th>
                          <th style="font-size: 1.2em; padding: 5px;">Punto Baremo</th>
                          <th style="font-size: 1.2em; padding: 5px;">Cantidad Construida</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                          foreach ($servicos as $s) {
 
                              echo '<tr>';
                              echo '<td>' . $s->nome. '</td>';
                              echo '<td>' . $s->descricao . '</td>';
                              echo '<td>' . $s->preco. '</td>';
                               echo '<td>' . $s->nume. '</td>';
                              echo '<td>' . $s->pbaremo . '</td>';
                              echo '<td>' . $s->cantconst. '</td>';
     
                              echo '</tr>';
                          }
                          ?>
                      </tbody>
                  </table>

                  </div>

              </div>
                  <h5 style="text-align: right">Fecha del informe: <?php echo date('d/m/Y');?></h5>

          </div>



      </div>
</div>




            <!-- Arquivos js-->

            <script src="<?php echo base_url();?>js/excanvas.min.js"></script>
            <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
            <script src="<?php echo base_url();?>js/jquery.flot.min.js"></script>
            <script src="<?php echo base_url();?>js/jquery.flot.resize.min.js"></script>
            <script src="<?php echo base_url();?>js/jquery.peity.min.js"></script>
            <script src="<?php echo base_url();?>js/fullcalendar.min.js"></script>
            <script src="<?php echo base_url();?>js/sosmc.js"></script>
            <script src="<?php echo base_url();?>js/dashboard.js"></script>
  </body>
</html>






