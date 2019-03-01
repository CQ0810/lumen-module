<?php

namespace App\Contents\Http\Controllers\PcWeb;

use App\Common\Controller\Controller;
use App\Common\Services\HttpClientService;
use App\Common\Services\MySQLCustomFuncService;
use App\Common\Utils\SmsUtil;
use App\Common\Utils\TokenManager;
use App\Contents\Services\MongoDBService;
use App\Contents\Services\TestService;
use App\System\Entities\SAdminModel;
use App\System\Services\SPermissionsService;
use Doctrine\Common\Inflector\Inflector;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $httpClient;

    public function __construct(HttpClientService $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     *
     * @version  2018年12月01日
     * @author   zj chen <britton@126.com>
     * @license  PHP Version 7.x.x {@link http://www.php.net/license/3_0.txt}
     *
     * @param Request     $request
     * @param TestService $testService
     *
     * @return array|null
     *
     */
    public function testPC(Request $request, SPermissionsService $testService): ?array
    {
        /*$this->httpClient->setBaseUri('http://192.168.1.113:8080');
        $this->httpClient->setExtraData(['auth' => ['user2', 'hello']]);
        $this->httpClient->setSignKey('hello');
        $this->httpClient->setSecret('123456');
        $this->httpClient->setHeaders(['Foo' => 'Hello World']);
        $this->httpClient->setExpiry(1);
        $data = $this->httpClient->get('/spring-boot-mp/test/xx', ['name' => 'jack001', 'age' => '23']);
        print_r($data);
        echo '<br/>';
        $testService->testService();*/
        //$array = $testService->getPermissionsTree();
        $admin = SAdminModel::find(1);
        $admin->addMedia($request->file('test'))->toMediaCollection('images');
        return null;
    }


    public function createArticle(): ?string
    {
        echo TokenManager::generateToken(['user_id' => 1]);
        return 'create Articles';
    }

    public function updateArticle(): ?string
    {
        return 'update Articles';
    }

    public function editArticle(): ?string
    {
        return 'edit Articles';
    }

    public function deleteArticle(): ?string
    {
        return 'delete Articles';
    }

    public function sms()
    {
        SmsUtil::send('15882215295', SmsUtil::CHANGE_PASSWORD);
    }

    public function verifySMS()
    {
        SmsUtil::verifySMS('aaa', 'nnnn');
    }

    /**
     * 测试MONGODB
     *
     * @version  2018年12月02日
     * @author   zj chen <britton@126.com>
     * @license  PHP Version 7.x.x {@link http://www.php.net/license/3_0.txt}
     *
     * @param MongoDBService $service
     */
    public function mongo(MongoDBService $service)
    {
        echo $service->create();
    }

    /**
     * 生成MySQL自定义函数文档
     *
     * @version  2018年10月29日
     * @author   zj chen <britton@126.com>
     * @license  PHP Version 7.x.x {@link http://www.php.net/license/3_0.txt}
     *
     * @param MySQLCustomFuncService $service
     *
     */
    public function generateDoc(MySQLCustomFuncService $service): void
    {
        $service->generateMySQLFunc();
    }

    /**
     * 模块处理逻辑
     *
     * @version  2018年11月11日
     * @author   zj chen <britton@126.com>
     * @license  PHP Version 7.x.x {@link http://www.php.net/license/3_0.txt}
     *
     * @param Request $request
     *
     * @return string
     */
    public function single(Request $request): string
    {
        $namespace = 'App\\Contents\\Services\\';
        $moduleNameClass = $namespace . Inflector::classify($request->get('module')) . 'Services';
        if (class_exists($moduleNameClass)) {
            return json_encode((new $moduleNameClass)->handler($request->all()));
        }
        return '出错了';
    }

    public function login(Request $request)
    {
        $salt = "asdsad";
        if ($request->has('username') && $request->has('password')) {
            $user = User:: where('username', '=', $request->input('username'))
                ->where("password", "=", sha1($salt . $request->input('password')))
                ->first();

            if ($user) {
                $token = str_random(60);
                $user->api_token = $token;
                $user->save();
                return $user->api_token;
            } else {
                return "用户名或密码不正确，登录失败！";
            }
        } else {
            return "登录信息不完整，请输入用户名和密码登录！";
        }
    }
}
