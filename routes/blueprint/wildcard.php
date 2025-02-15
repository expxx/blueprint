<?php

foreach (File::allFiles(__DIR__ . '/extensions') as $partial) {
  if ($partial->getExtension() == 'php') {
    Route::prefix('/extensions'.'/'.basename($partial->getFilename(), '.php'))
      ->group(function () use ($partial) {require_once $partial->getPathname();}
    );
  }
}