<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3N1tx05\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3N1tx05/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3N1tx05.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3N1tx05\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container3N1tx05\App_KernelDevDebugContainer([
    'container.build_hash' => '3N1tx05',
    'container.build_id' => 'fbc1570e',
    'container.build_time' => 1662619594,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3N1tx05');
