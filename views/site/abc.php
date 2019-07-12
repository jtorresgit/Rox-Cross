<?php

 /*@var $this yii\web\View; */
use yii\helpers\Html;


$this->title = 'El método ABC';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        El método ABC:
        Es una herramienta para el manejo de los inventarios, ,consiste en efectuar un analisis en los inventarios, estableciendo capas de inversión o categorías. El objetivo es lograr un mayor control y atención sobre los inventarios, debido aque por su número y monto merecen una vigilancia y atención permanente.
    </p>
    <p>
      Los niveles se establecen de la siguiente manera:
    </p>

    <code><?= __FILE__ ?></code>
</div>
<!-- Inicio-Accordion-Collapse jtorres@itmgroup.mx 16-05-2019-->
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Nivel A (Mayor control)
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Artículos con mayor inversión, pero representan un número menor dentro del inventario.         
      </div>
    </div>
  </div>
  <div class="card">
  	<div class="card-header" id="headingTwo">
  		<h2 class="mb-0">
  			<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false">
  				Nivel B 
  			</button>
  		</h2>
  	</div>
  	<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="accordionExample">
  		<div class="card-body">
  			Artículos con una inversión media, pero representa un número intermedio dentro del inventario. 
  		</div>
  	</div>
  </div>
  <div class="card">
    <div class="card-header" id="headinThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false">
          Nivel C (Menor control)
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headinThree" data-parent="accordionExample">
      <div class="card-body">
        Artículos con menor inversión, pero representan un número mayor dentro del inventario.
      </div>
    </div>
  </div>
  <h1>JIT</h1>
  <div class="card">
    <div class="card-header" id="headinFor">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFor" aria-expanded="false">
          JIT (conocido como Sistema Justo a Tiempo)
        </button>
      </h2>
    </div>
    <div id="collapseFor" class="collapse" aria-labelledby="headinFor" data-parent="accordionExample">
      <div class="card-body">
        Lo ideal es que la empresa sólo tenga inventario para trabajo en proceso. (según en JIT).
      </div>
    </div>
  </div>
  <h1>Técnicas de Análisis</h1>
  <div class="card">
     <div class="card-header" id="headinFive">
       <h2 class="mb-0">
         <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false">
          Inventarios a activo circulante
         </button>
       </h2>
     </div>
     <div id="collapseFive" class="collapse" aria-labelledby="headinFive" data-parent="accordionExample">
       <div class="card-body">
          Representa la parte que constituye los inventarios del total de los activos circulantes.
          <br>
          Ejemplo:
          <br>
          Inventarios(netos) = 8,320 = 42%
          Activo Circulante  = 20,000
          <br><br>
          Debe vigilarse su tendencia y en su caso reducir su participación, dependiendo de la política de la inversión que se quiera mantener.
          <br>
          Activo circulante: es el dinero que una empresa tiene para disponer en cualquier momento.
       </div>
     </div>
  </div>
</div>
<!--Fin del accordion collapse jtorres@itmgroup.mx 16-05-2019-->


