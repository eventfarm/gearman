<?php
namespace GearmanHandler\Tests\Jobs;

use GearmanHandler\JobInterface;
use GearmanJob;

class CreateFile implements JobInterface
{
    public static function getFilePath()
    {
        return sys_get_temp_dir() . '/GearmanHandlerJobTest';
    }

    public function getName()
    {
        return 'CreateFile';
    }

    public function execute(GearmanJob $job = null)
    {
        file_put_contents(self::getFilePath(), 'true');
    }
}