<?php

namespace View\Receipt;

use View\View;
use Others\dependency\Dependency;
use Others\dependency\DepEnum;

class Receipt extends View
{


    public function __construct()
    {
        self::$dependency = Dependency::loadDependency(array(DepEnum::ICHECK_BOOTSTRAP), get_class());
    }

    public function contentBody()
    {
?>
        <div class="content-wrapper">
            <div class="card m-2 mt-2" style="top:0.8rem">
                <div class="card-body text-center">
                    <h1>Création d'une facture</h1>

                </div>
            </div>

            <div class="card m-2" style="top:0.8rem">
                <div class="card-body">

                    <div class="row">
                        <!-- CHoix client -->
                        <div class="col-12">
                            <div class="form-group">
                                <label for="custumerName">Client</label>
                                <select class="form-control form-control-sm" name="custumerName" id="custumerName"></select>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-3">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="allowTVA">
                                <label class="custom-control-label" for="allowTVA">TVA Applicable</label>
                            </div>

                        </div>
                    </div>

                    <table class="table table-striped mt-3" id="DtServices">
                        <thead>
                            <tr>
                                <th>Désignation des produits ou prestations</th>
                                <th>Quantité</th>
                                <th>Prix unitaire HT</th>
                                <th>Total HT</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm" readonly>
                                </td>
                                <td>
                                    <button type="bouton" class="btn btn-danger btn-sm btn-block"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>

                    <!-- <div class="row mt-4">

                        <div class="col-3 text-start">
                            <h5>Désignation des produits ou prestations</h5>
                        </div>

                        <div class="col-3 text-start">
                            <h5>Quantité</h5>
                        </div>

                        <div class="col-3 text-start">
                            <h5>Prix unitaire HT</h5>
                        </div>

                        <div class="col-3 text-start">
                            <h5>Total HT</h5>
                        </div>

                    </div>

                    <div class="row mt-4">

                        <div class="col-3 text-start">
                            <div class="from-group">
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="col-3 text-start">
                            <div class="from-group">
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="col-3 text-start">
                            <div class="from-group">
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="col-3 text-start">
                            <div class="from-group">
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </div>

                    </div> -->

                </div>

                <div class="card-footer">
                    <div style="text-align: end;">
                        <button type="button" class="btn btn-lg">
                            <i class="far fa-file-pdf"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>

<?php
    }
}
