<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTM7BPfw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTM7BPfw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTM7BPfw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTM7BPfw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTM7BPfw\App_KernelDevDebugContainer([
    'container.build_hash' => 'TM7BPfw',
    'container.build_id' => '7eb9a6e8',
    'container.build_time' => 1661741014,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTM7BPfw');
