<?php
/**
 * Created by PhpStorm.
 * PHP高阶作业,mvcphp 框架单一入口文件
 * User: littleboy <qinwei4@100tal.com>
 * Date: 2019-04-18
 * Time: 16:31
 */
define("CSTART","0");
//默认模板存放的目录
define("TPLSTYLE","default");
//框架源文件的位置
define("MVCPHP", "./mvcphp");
//设置当前应用的目录
define("APP", "./app");
//调试模式
define("DEBUG", true);
//缓存时间
define("CTIME", 100);
//加载框架的入口文件
require(MVCPHP.'/mvcphp.php');


