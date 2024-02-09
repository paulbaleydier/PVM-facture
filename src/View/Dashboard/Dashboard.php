<?php

namespace View\Dashboard;

use View\View;
use Others\dependency\Dependency;
use Others\dependency\DepEnum;

class Dashboard extends View
{


    public function __construct()
    {
        self::$dependency = Dependency::loadDependency(array(DepEnum::CHARTJS), get_class());
    }

    public function contentBody()
    {
?>
        <div class="content-wrapper">
            <div class="card m-2 mt-2" style="top:0.8rem">
                <div class="card-body text-center">
                    <h1>Bienvenue !</h1>

                </div>
            </div>
        </div>

<?php
    }
}
