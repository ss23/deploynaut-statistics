<?php

class DNRootExtension extends Extension {

	public function doDeploy($project, $environment, $buildName, $data) {
		// We only want to log user initiated deployments
		if (empty($data['SelectRelease'])) {
			return;
		}
		$stat = new DeploymentStat();
		$stat->ProjectID = $project->ID;
		$stat->EnvironmentID = $environment->ID;
		$stat->DeployerID = Member::currentUserID();
		$stat->ReleaseType = $data['SelectRelease'];

		$stat->write();
	}
}

