<?php

/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *
 * Summry
 *
 * @author David Wingfield <dwingfield@cohere.com>
 */

namespace WebManager\Database\Table;

/**
 * Description of Pages
 *
 * <pre>
 * </pre>
 *
 * @author David Wingfield <dwingfield@cohere.com>
 * @date 01/08/2018
 * @version v.1.0.0
 */
class Pages {

    /** @var int $id Page ID */
    public $id = NULL;

    /** @var int $_employees_id Authors employee ID */
    public $_employees_id = NULL;

    /** @var int $_sites_id Page ID */
    public $_sites_id = NULL;

    /** @var int $_sites_id Page ID */
    public $_page_status_types_id = NULL;

    /** @var int $_side_menu_id Page ID */
    public $_menus_id = NULL;

    /** @var int $_side_submenu_id Page ID */
    public $_submenus_id = NULL;

    /** @var int $_top_nav_section_id Page ID */
    public $_sections_id = NULL;

    /** @var string $title Page ID */
    public $title = "";

    /** @var string $description Page ID */
    public $description = "";

    /** @var string $keywords Page ID */
    public $keywords = "";

    /** @var int $ct_visit Page ID */
    public $ct_visits = 0;

    /** @var bool $file_type Page ID */
    public $file_type = "php";

    /** @var bool $fg_secured Page ID */
    public $fg_secured = false;

    /** @var string $url Page ID */
    public $url = "";

    /** @var string $directory Page ID */
    public $directory = "";

    /** @var string $dd_text Page ID */
    public $dd_text = "";

    /** @var bool $fg_enabled Page ID */
    public $fg_enabled = true;

    /** @var string $dt_modified Page ID */
    public $dt_modified = "DEFAULT";

    /** @var string $notes Page ID */
    public $notes = "";

}
