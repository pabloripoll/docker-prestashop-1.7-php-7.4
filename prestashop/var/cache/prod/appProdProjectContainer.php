<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0u2ynrq\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0u2ynrq/appProdProjectContainer.php') {
    touch(__DIR__.'/Container0u2ynrq.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container0u2ynrq\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container0u2ynrq\appProdProjectContainer([
    'container.build_hash' => '0u2ynrq',
    'container.build_id' => '757c8299',
    'container.build_time' => 1710009147,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0u2ynrq');
