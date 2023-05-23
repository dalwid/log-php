<?php

namespace app\enums;

enum EnumLog:string
{
    case LoginError = 'Login Error';
    case DatabaseError = 'DataBase Error';
}