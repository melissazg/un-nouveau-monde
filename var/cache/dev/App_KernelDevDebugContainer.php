<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUDjRk0W\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUDjRk0W/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUDjRk0W.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUDjRk0W\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUDjRk0W\App_KernelDevDebugContainer([
    'container.build_hash' => 'UDjRk0W',
    'container.build_id' => '852c2294',
    'container.build_time' => 1675090379,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUDjRk0W');