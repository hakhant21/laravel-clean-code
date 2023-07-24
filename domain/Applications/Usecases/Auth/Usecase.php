<?php

namespace Domain\Applications\Usecases\Auth;

interface Usecase
{
    public function indexHandler();

    public function loginHandler($params);

    public function logoutHandler();
}
