#!/usr/bin/env php
<?php

include_once 'common.php';

run('vendor/bin/phpunit');

if (shouldBuildDocs()) {
    run('venv/bin/sphinx-build -E -W Resources/doc Resources/doc/_build');
}
