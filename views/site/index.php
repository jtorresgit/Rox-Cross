<?php

 /*@var $this yii\web\View;*/

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Welcome to House Stock!</h1>

        <p class="lead">This APP will let us to fill a data base with information about the food pantry which we use for to consume every day</p>

        <p><a class="btn btn-lg btn-success" href="">Let's start Rox</a></p>
    </div>

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
