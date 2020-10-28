<?php
namespace backend\models;

use common\models\OrganizationRequests;

class OrganizationRequest extends OrganizationRequests
{

    const confirm = 10;
    const unConfirm = 9;
    const cancel = 0;
}
