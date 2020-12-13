<?php

namespace Maxtc\SmsRu\Response;

use Maxtc\SmsRu\Entity\StoplistPhone;

class StoplistGetResponse extends AbstractResponse
{

    /**
     * @var StoplistPhone[]
     */
    public $phones = [];

    /**
     * @var array
     */
    protected $availableDescriptions = [
        '100' => 'Запрос обработан. На последующих строчках будут идти номера телефонов, указанных в стоплисте в формате номер;примечание.',
    ];
}
