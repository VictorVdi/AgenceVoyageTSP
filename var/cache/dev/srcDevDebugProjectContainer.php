<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLqGt1JK\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLqGt1JK/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerLqGt1JK.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerLqGt1JK\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerLqGt1JK\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'LqGt1JK',
    'container.build_id' => 'eff48a3d',
    'container.build_time' => 1539685280,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerLqGt1JK');
