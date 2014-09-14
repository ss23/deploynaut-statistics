<?php

class DNRootExtension extends Extension {

	public function DoDeploy($project, $environment, $selectRelease, $buildName) {
		$stat = new DeploymentStat();
		$stat->ProjectID = $project->ID;
		$stat->EnvironmentID = $environment->ID;
		$stat->DeployerID = Member::currentUserID();
		$stat->ReleaseType = $selectRelease;

		$stat->write();
	}
}

