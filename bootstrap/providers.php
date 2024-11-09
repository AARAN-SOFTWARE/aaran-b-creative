<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\FortifyServiceProvider::class,
    App\Providers\JetstreamServiceProvider::class,
    App\Providers\EventServiceProvider::class,

    Aaran\Aadmin\Providers\AadminServiceProvider::class,
    Aaran\Member\Providers\MemberServiceProvider::class,
    Aaran\Web\Providers\WebServiceProvider::class,
    Aaran\Common\Providers\CommonServiceProvider::class,

    Aaran\Blog\Providers\BlogServiceProvider::class,

    Aaran\Network\Providers\NetworkServiceProvider::class,
    Aaran\Profile\Providers\ProfileServiceProvider::class,

];
