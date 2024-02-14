<?php
namespace View\Custumer;

use View\View;
use Others\dependency\DepEnum;
use Others\dependency\Dependency;

class CRUD extends View {

    public function __construct()
    {
        self::$dependency = Dependency::loadDependency(array(), get_class());
    }

    public function contentBody()
    {
?>
        <div class="content-wrapper">
            <div class="card m-2 mt-2" style="top:0.8rem">
                <div class="card-body text-center">
                    <h1>Custumer CRUD</h1>

                </div>
            </div>
        </div>

<?php
    }

    
}

?>