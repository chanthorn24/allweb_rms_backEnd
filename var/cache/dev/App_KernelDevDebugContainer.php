<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSbZx2wS\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSbZx2wS/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSbZx2wS.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSbZx2wS\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSbZx2wS\App_KernelDevDebugContainer([
    'container.build_hash' => 'SbZx2wS',
    'container.build_id' => 'eb0173bc',
    'container.build_time' => 1660719711,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSbZx2wS');
