<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\Log;
use App\Jobs\SearchLogJob;

class OrganizationRepository
{


	function getAll(){
		return Organization::paginate(15);
	}

	function save(Request $request){
		
		$organization = new Organization();
		$organization->organization_name = $request->organization_name;
		$organization->organization_description = $request->description;
		$organization->save();
	}


}


?>