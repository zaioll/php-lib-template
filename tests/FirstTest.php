<?php

// Copyright 2020 Láyro Chrystofer <zaioll@protonmail.com>. All rights reserved.
// Use of this source code is governed by a BSD-style
// license that can be found in the LICENSE file.

namespace Tests;

use PHPUnit\Framework\TestCase;
use Zaioll\MyAwesomeLib;

class FirstTest extends TestCase
{
    public function testMyFirstMethod()    
    {
        $myLib = new MyAwesomeLib();

        $this->assertTrue($myLib->myMethod(), 'Must be true');
    }
}
