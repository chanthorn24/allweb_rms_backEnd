<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUUh4Itx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUUh4Itx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUUh4Itx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUUh4Itx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUUh4Itx\App_KernelDevDebugContainer([
    'container.build_hash' => 'UUh4Itx',
    'container.build_id' => 'bd35147e',
    'container.build_time' => 1661482058,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUUh4Itx');
