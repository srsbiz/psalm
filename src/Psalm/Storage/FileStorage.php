<?php
namespace Psalm\Storage;

class FileStorage
{
    /**
     * @var array<string, string>
     */
    public $classlikes_in_file = [];

    /**
     * @var array<string>
     */
    public $referenced_classlikes = [];

    /**
     * @var array<string>
     */
    public $required_classes = [];

    /**
     * @var array<string>
     */
    public $required_interfaces = [];

    /**
     * @var bool
     */
    public $has_trait = false;

    /** @var string */
    public $file_path;

    /**
     * @var array<string, FunctionLikeStorage>
     */
    public $functions = [];

    /** @var array<string, string> */
    public $declaring_function_ids = [];

    /**
     * @var array<string, \Psalm\Type\Union>
     */
    public $constants = [];

    /** @var array<string, string> */
    public $declaring_constants = [];

    /** @var array<string, string> */
    public $included_file_paths = [];

    /** @var bool */
    public $populated = false;

    /** @var bool */
    public $deep_scan = false;

    /**
     * @var string
     */
    public $hash = '';
    
    /**
     * @var array|null
     */
    public $reference_map = null;

    /**
     * @var array|null
     */
    public $type_map = null;
}
