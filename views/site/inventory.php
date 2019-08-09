<?php

 /*@var $this yii\web\View;*/
$this->title = 'House Stock';
use yii\helpers\Html;
use yii\bootstrap\ButtonDropdown;

?>

<div class="site-index ">
  <?php  echo ButtonDropdown::widget([
    'label' => 'Type of filter',
    'dropdown' => [
        'items' => [
            ['label' => 'Department', 'url' => '/'],
            ['label' => 'Provider', 'url' => '#'],
            ],
        ],
    ]); 

  ?>

    
  <?php  echo ButtonDropdown::widget([    
    'label' => 'Filter by',
    'dropdown' => [
        'items' => [
            ['label' => 'Bakery (panadería)', 'url' => '#'],
            ['label' => 'Dairy  (lacteos)',  'url' => '#'],
            ['label' => 'Grocery (abarrotes)', 'url' => '#'],
            ['label' => 'Meat (carnes)', 'url' => '#'],
            ['label' => 'Seafood (Mariscos)', 'url' => '#'],
        ],
      ],
    ]);
  ?>
   <!-- <div class="btn-group buttonfiltertype">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Select type of filter
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="">Department</a>
            <a class="dropdown-item" href="">Provider</a>
        </div>
    </div>
    <div class="btn-group buttonfilterby">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filter filter by
        </button>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="">Bakery (panadería)</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="">Dairy (Lacteos)</a>
          <a class="dropdown-item" href="">Grocery (Abarrotes)</a>
          <a class="dropdown-item" href="">Meat (Carnes)</a>
          <a class="dropdown-item" href="">Seafood (Mariscos)</a>
      </div>  
    </div>-->
  
    <div class="jumbotron">
        <!--We have this jumbotron to have space between the buttons filters and the table of articles -->
    </div>

  
<?= yii\bootstrap\Progress::widget(['percent' => 60, 'label' => 'test']) ?>
    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
                <h2>Table of Articles</h2>

                <p>This table show all articles which we  have actuality</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">
                              #  
                            </th>
                            <th scope="col">
                                Article
                            </th>
                            <th scope="col">
                                Inventory
                            </th>
                            <th scope="col">
                                Unit of measurement
                            </th>
                            <th scope="col">
                                Price
                            </th>
                            <th scope="col">
                                Currency
                            </th>
                            <th scope="col">
                                Super market  
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                    1
                            </th> 
                            <td>
                              Cacahuates enchilados
                            </td>
                            <td>
                               1
                            </td>
                            <td>
                               Bolsa
                            </td>
                            <td>
                               $20
                            </td>
                            <td>
                               MXN
                            </td>
                            <td>
                               Walt Mart
                            </td>
                            <td>
                               <button class="btn btn-default">Dar de baja del inventario</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <p><a class="btn btn-default" href="">Entrada de Mercancia &raquo;</a>

                <a class="btn btn-default" href="">Salida de Inventario &raquo;</a>
                </p>
            </div>

            
        </div>

    </div>
</div>
