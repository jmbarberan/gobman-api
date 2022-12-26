<?php

namespace Intelligob\Modelos;

use Phalcon\Mvc\Model;

class Modelo extends Model
{
    public function onConstruct()
    {
        $this->skipAttributesOnCreate(['id',]);
        $this->getModelsManager()->setModelSchema($this, 'public');
    }
}
