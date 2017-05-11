<?php namespace Shiv\EnrollForm;

use Backend;
use System\Classes\PluginBase;

/**
 * EnrollForm Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Shiv.EnrollForm::EnrollForm',
            'description' => 'Cyberange Enrollment Form',
            'author'      => 'Shiv',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Shiv\EnrollForm\Components\Enroll' => 'EnrollForm',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'shiv.enrollform.some_permission' => [
                'tab' => 'EnrollForm',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'subscribers' => [
                'label'       => 'Subscribers',
                'url'         => Backend::url('shiv/enrollform/subscribers'),
                'icon'        => 'icon-leaf',
                'permissions' => ['cyberange.enroll.*'],
                'order'       => 500,
            ],
        ];
    }
}
