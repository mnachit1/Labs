<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJyk10Oy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJyk10Oy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJyk10Oy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJyk10Oy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJyk10Oy\App_KernelDevDebugContainer([
    'container.build_hash' => 'Jyk10Oy',
    'container.build_id' => '0b5d7a6d',
    'container.build_time' => 1687440685,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJyk10Oy');
