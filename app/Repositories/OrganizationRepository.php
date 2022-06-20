<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\Log;
use App\Jobs\SearchLogJob;

class OrganizationRepository
{


	function getAll(Request $request = null){
		$per_page = ($request && $request->per_page)?$request->per_page:1000;
		return Organization::paginate($per_page);
	}

	function save(Request $request){
		
		$organization = new Organization();
		$organization->organization_name = $request->organization_name;
		$organization->organization_description = $request->description;
		return $organization->save();
	}


}


?>