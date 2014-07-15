<?php
namespace Aura\Session;

class SessionFactory
{
    public function newInstance(array $cookies)
    {
        $phpfunc = new Phpfunc;
        return new Session(
            new SegmentFactory,
            new CsrfTokenFactory(new Randval($phpfunc)),
            $phpfunc,
            $cookies
        );
    }
}
