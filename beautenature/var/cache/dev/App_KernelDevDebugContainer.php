<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCL56j0j\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCL56j0j/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCL56j0j.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCL56j0j\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCL56j0j\App_KernelDevDebugContainer([
    'container.build_hash' => 'CL56j0j',
    'container.build_id' => 'cdc7ea5e',
    'container.build_time' => 1649450073,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCL56j0j');
