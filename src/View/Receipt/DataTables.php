<?php

namespace View\Receipt;

use View\View;
use Others\dependency\Dependency;
use Others\dependency\DepEnum;

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
                        <span class="mr-auto text-lg">Factures</span>
                        <span class="ml-auto"><a href="index.php?controller=Receipt&view=CRUD&type=create" class="btn btn-primary">Création d'une facture</a></span>
                    </div>
                </div>
                <!-- <br> -->
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
                        <table class="table table-striped table-hover mt-2" id="dtFactures">
                            <thead>
                                <tr></tr>
                                <tr>
                                    <td>#</td>
                                    <td>Client</td>
                                    <td>Adresse client</td>
                                    <td>Total HT</td>
                                    <td>Payement</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <th>Test</th>
                                    <th>Test</th>
                                    <th>Test</th>
                                    <th><i class="fa-solid fa-circle text-success mr-2"></i>Effectuer</th>
                                    <th></th>
                                </tr>
                                
                                <tr>
                                    <th>1</th>
                                    <th>Test</th>
                                    <th>Test</th>
                                    <th>Test</th>
                                    <th><i class="fa-solid fa-circle text-warning mr-2"></i>En retard...</th>
                                    <th></th>

                                </tr>

                                <tr>
                                    <th>1</th>
                                    <th>Test</th>
                                    <th>Test</th>
                                    <th>Test</th>
                                    <th><i class="fa-solid fa-circle text-danger mr-2"></i>En retard (+ 1 mois)</th>
                                    <th></th>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
<?php
    }
}
