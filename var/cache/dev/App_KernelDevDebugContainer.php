<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXejq8BQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXejq8BQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXejq8BQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXejq8BQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXejq8BQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'Xejq8BQ',
    'container.build_id' => '29ca14cc',
    'container.build_time' => 1660726535,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXejq8BQ');
