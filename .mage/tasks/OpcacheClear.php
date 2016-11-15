<?php

namespace Task;

use Mage\Task\AbstractTask;

class OpcacheClear extends AbstractTask
{

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'Clearing OpCode cache';
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        return $this->runCommandRemote("pkill lsphp");
    }
}
