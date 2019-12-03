<?php

auth_protection();

if (resolve('/login.*')) {
    include __DIR__ . '/auth/routes.php';
} elseif (resolve('/inicio.*')) {
    include __DIR__ . '/home/routes.php';
} elseif (resolve('/ficha.*')) {
    include __DIR__ . '/pages/routes.php';
} elseif (resolve('/C112245.*')) {
    include __DIR__ . '/users/routes.php';
} else {
    render('site/pages/erro', 'site');
}
