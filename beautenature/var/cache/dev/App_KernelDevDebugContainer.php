<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAcMiXnB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAcMiXnB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAcMiXnB.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAcMiXnB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAcMiXnB\App_KernelDevDebugContainer([
    'container.build_hash' => 'AcMiXnB',
    'container.build_id' => '7abd14d9',
    'container.build_time' => 1649620446,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAcMiXnB');
