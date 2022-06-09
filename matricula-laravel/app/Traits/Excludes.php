<?php
namespace App\Traits;

trait Excludes{

    public function removeAll($repository, $items)
    {
       if(!empty($items)){
            foreach ($items as $item) {
                $result =  $repository->destroy($item);
            }

            return true;
       }

       return false;
    }

}
