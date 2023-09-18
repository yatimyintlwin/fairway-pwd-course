<?php

namespace Foo;

include("a.php");
include("b.php");

Fiz\add(1, 2);

\Bar\Baz\add(1, 2, 9);

use function Bar\Baz\add;

add(1, 2, 3);
add(1, 4, 6);
add(1, 3, 3);
