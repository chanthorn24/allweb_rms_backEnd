<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXhUFwnW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXhUFwnW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXhUFwnW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXhUFwnW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXhUFwnW\App_KernelDevDebugContainer([
    'container.build_hash' => 'XhUFwnW',
    'container.build_id' => '4403e5f0',
    'container.build_time' => 1660811452,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXhUFwnW');
