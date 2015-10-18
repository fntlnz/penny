<?php
namespace Penny\Route;

interface RouteInfoInterface
{
    public static function matched($name, $callable, $params);
    public function getName();
    public function getCallable();
    public function getParams();
}
