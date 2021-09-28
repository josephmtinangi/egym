<?php

namespace App\Http\Controllers\Tenant\Api;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Utilities\Helper;

class MembersApiController extends Controller
{
    public function destroy($hashid)
    {
        $member = Member::find(Helper::decode($hashid));

        if(!$microfinance)
        {
            return Helper::createResponse(
                Response::HTTP_NOT_FOUND,
                false,
                null,
                'Not found'
            ); 
        }

        $member->delete();

        return Helper::createResponse(
            Response::HTTP_OK,
            true,
            null,
            'success'
        );        
    }
}
