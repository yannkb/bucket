<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYqlz1xk\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYqlz1xk/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerYqlz1xk.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerYqlz1xk\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerYqlz1xk\appProdProjectContainer([
    'container.build_hash' => 'Yqlz1xk',
    'container.build_id' => '5287c420',
    'container.build_time' => 1552317275,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYqlz1xk');
