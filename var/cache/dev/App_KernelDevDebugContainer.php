<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWf0qKEX\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWf0qKEX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWf0qKEX.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWf0qKEX\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWf0qKEX\App_KernelDevDebugContainer([
    'container.build_hash' => 'Wf0qKEX',
    'container.build_id' => 'eb75725b',
    'container.build_time' => 1662613080,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWf0qKEX');
