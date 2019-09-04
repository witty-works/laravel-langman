<?php

return [
    /*
     * --------------------------------------------------------------------------
     * Path to the language directories
     * --------------------------------------------------------------------------
     *
     * This option determines the path to the languages directory, it's where
     * the package will be looking for translation files. These files are
     * usually located in resources/lang but you may change that.
     */

    'path' => realpath(base_path('resources/lang')),

    /*
     * --------------------------------------------------------------------------
     * Paths to the code directories
     * --------------------------------------------------------------------------
     *
     * This option determines the path to the code directory, it's where the
     * package will be looking for translations files. Add any files in addition
     * to the "view.paths" (ie. "resources/views") and the app "path" (ie. "/app")
     */

    'code_paths' => [],

    /*
     * --------------------------------------------------------------------------
     * Functions to look for
     * --------------------------------------------------------------------------
     *
     * This pattern is derived from Barryvdh\TranslationManager by Barry vd. Heuvel <barryvdh@gmail.com>
     *
     * https://github.com/barryvdh/laravel-translation-manager/blob/master/src/Manager.php
     */

    'functions' => ['__', 'trans', 'trans_choice', 'Lang::get', 'Lang::choice', 'Lang::trans', 'Lang::transChoice', '@lang', '@choice'],

    /*
     * --------------------------------------------------------------------------
     * Missing default text behavior
     * --------------------------------------------------------------------------
     *
     * This option defines if missing translations keys are initialized with an
     * empty string or if it should be a value derived from the translation key
     * with ".", "_" and "-" converted to " ".
     *
     */

    'missing_from_key' => true,
];
