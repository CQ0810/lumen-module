<?php

namespace App\Britton\Http\Controllers\PcWeb;

use App\Common\Controller\Controller;
use App\System\Services\SPermissionsService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     *
     * @version  2019年03月01日
     * @author   zj chen <britton@126.com>
     * @license  PHP Version 7.x.x {@link http://www.php.net/license/3_0.txt}
     *
     * @param Request             $request
     * @param SPermissionsService $testService
     *
     * @return array|null
     *
     */
    public function testPC(Request $request, SPermissionsService $testService): ?array
    {
        return ['name' => 'jack', 'age' => 234];
    }

    public function createOrUpdate(array $data)
    {
        // TODO: Implement createOrUpdate() method.
    }

    public function delete(array $data)
    {
        // TODO: Implement delete() method.
    }

    public function listOrSearch(array $data)
    {
        // TODO: Implement listOrSearch() method.
    }


}
