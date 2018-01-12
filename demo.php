<?php

namespace  app;
use QcloudApi\QcloudApi;
class Demo{

    public function __construct()
    {
        $config = array('SecretId'       => 'AKIDrcFj5Mkgc7XGrU7cyAKbmpldLwTsab3N',
            'SecretKey'      => 'PrBe4LcllfR3fwDTgomy5UnzGRcfYO7g',
            'RequestMethod'  => 'GET',
            'DefaultRegion'  => 'cd');

        $wenzhi = QcloudApi::load(QcloudApi::MODULE_WENZHI, $config);

        $package = array("content"=>"李亚鹏挺王菲：加油！孩儿他娘。");

        $a = $wenzhi->TextSentiment($package);

        $error = $wenzhi->getError();
        echo "Error code:" . $error->getCode() . ".\n";
        echo "message:" . $error->getMessage() . ".\n";
        echo "ext:" . var_export($error->getExt(), true) . ".\n";
        exit;

        if ($a === false) {
            $error = $wenzhi->getError();
            echo "Error code:" . $error->getCode() . ".\n";
            echo "message:" . $error->getMessage() . ".\n";
            echo "ext:" . var_export($error->getExt(), true) . ".\n";
        } else {
            var_dump($a);}
    }

}
$dome = new Demo();
