<?php

namespace View\Custumer;

use View\View;
use Others\dependency\DepEnum;
use Others\dependency\Dependency;

class DataTables extends View
{


    public function __construct()
    {
        self::$dependency = Dependency::loadDependency(array(DepEnum::DATATABLESJS, DepEnum::SELECT2), get_class());
    }

    public function contentBody()
    {
?>
        <div class="content-wrapper">
            <div class="container-fluid">
                <br>
                <div class="card">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <span class="mr-auto text-lg">Client(s)</span>
                        <span class="ml-auto"><a href="index.php?controller=Custumer&view=CRUD&type=create" class="btn btn-primary">Création d'un client</a></span>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                     
                    
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <label for="filter-id">ID:</label>
                                <div class="filter-container">
                                </div>
                            </div>

                            <div class="col-md-4 mb-2">
                                <label for="filter-nom">Nom du client:</label>
                                <div class="filter-container">
                                </div>
                            </div>

                            <div class="col-md-4 mb-2">
                                <label for="filter-montant">Adresse client:</label>
                                <div class="filter-container">
                                </div>
                            </div>
                        </div>
                        <br>
                        <table class="table table-striped table-hover mt-2" id="dtCustumer">
                            <thead>
                                <tr></tr>
                                <tr>
                                    <td>#</td>
                                    <td>Client</td>
                                    <td>Adresse client</td>
                                </tr>
                            </thead>
                            <tbody>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

<?php
    }
}
