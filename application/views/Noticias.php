<title> AAUE :: Torneio do Reitor - Noticias </title>
<body>
  <div class="container" >
    <div class="panel-group" id="accordion" >
      <div class="panel panel-faq">

       <?php
       $i=0;
       foreach($row as $row):?>
      <div class="panel-heading panel-heading-<?php echo $i%2; ?>" >
        <div class="row">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$i?>" style="color: inherit;">
            <div class="col-xs-4">
              <h4 class="panel-title" >
                <?php print_r( $row['data'] ); ?>
              </h4>
            </div>
            <div class="col-xs-4">
              <h4 class="panel-title" >
                <?php print_r( $row['titulo'] ); ?>
              </h4>
            </div>
            <div class="col-xs-4">
              <span class="glyphicon glyphicon-chevron-down"></span>
            </div>
          </a>
        </div>

      </div>
      <div id="collapse<?=$i?>" class="panel-collapse collapse">
        <div class="panel-body panel-body-<?php echo $i%2; ?>"><?php print_r( $row['corpo'] ); ?></div>
      </div>
    <?php $i++; endforeach; ?>

  </div>
</div>
</div>
