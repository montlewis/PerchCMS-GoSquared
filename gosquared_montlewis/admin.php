<?php
	if ($CurrentUser->logged_in() && $CurrentUser->has_priv('gosquared_montlewis')) {
		$this->register_app('gosquared_montlewis', 'Go Squared', 1, 'View GoSquared analytics as a Perch app', '1.0');
	    $this->require_version('gosquared_montlewis', '3.0');
	    
	    $this->add_setting('gs_api', 'GoSquared API', 'text', false);
	    $this->add_setting('gs_site_id', 'Site ID', 'text', false);
	}
?>