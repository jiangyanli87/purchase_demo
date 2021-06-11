<?php

namespace app\http\middleware;
use think\facade\Request;
class CheckAuth
{
    protected $check_out = [
        'admin/user/login',
	'admin/mymap/*'
    ];

    public function handle($request, \Closure $next)
    {
        $path = strtolower(Request::path());
        if(Request::module() == 'admin'){
            $_path = strtolower(Request::module() .'/' . Request::controller() . '/' . '*');
            if(!in_array($path, $this->check_out) && !in_array($_path, $this->check_out)){
                if(!session('?username')) return redirect('admin/user/login');
            }
        }
        return $next($request);
    }
}
