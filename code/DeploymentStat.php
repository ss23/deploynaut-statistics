<?php

class DeploymentStat extends DataObject
{
    private static $db = array(
        'ReleaseType' => 'Varchar',
    );

    private static $has_one = array(
        'Project' => 'DNProject',
        'Environment' => 'DNEnvironment',
        'Deployer' => 'Member',
    );
}
