<?php
/**
 * This configuration will be read and overlayed on top of the
 * default configuration. Command line arguments will be applied
 * after this file is read.
 *
 * @see src/Phan/Config.php
 * See Config for all configurable options.
 */
return [

    // If true, missing properties will be created when
    // they are first seen. If false, we'll report an
    // error message.
    "allow_missing_properties" => false,

    // Allow null to be cast as any type and for any
    // type to be cast to null.
    "null_casts_as_any_type" => false,

    // Backwards Compatibility Checking
    'backward_compatibility_checks' => true,

    // If a file path is given, the code base will be
    // read from and written to the given location in
    // order to attempt to save some work from being
    // done. Only changed files will get analyzed if
    // the file is read
    "stored_state_file_path" => ".phan/database",

    // Run a quick version of checks that takes less
    // time
    "quick_mode" => false,

    // A list of directories holding code that we want
    // to parse, but not analyze
    "exclude_analysis_directory_list" => [],

];
