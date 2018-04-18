<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5fb978d035cb8b74ff62a7384d723d92
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yoast\\Test_Helper\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yoast\\Test_Helper\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Yoast\\Test_Helper\\Admin_Debug_Info' => __DIR__ . '/../..' . '/src/Admin_Debug_Info.php',
        'Yoast\\Test_Helper\\Admin_Notifications' => __DIR__ . '/../..' . '/src/Admin_Notifications.php',
        'Yoast\\Test_Helper\\Admin_Page' => __DIR__ . '/../..' . '/src/Admin_Page.php',
        'Yoast\\Test_Helper\\Form_Presenter' => __DIR__ . '/../..' . '/src/Form_Presenter.php',
        'Yoast\\Test_Helper\\Integration' => __DIR__ . '/../..' . '/src/Integration.php',
        'Yoast\\Test_Helper\\Notification' => __DIR__ . '/../..' . '/src/Notification.php',
        'Yoast\\Test_Helper\\Option' => __DIR__ . '/../..' . '/src/Option.php',
        'Yoast\\Test_Helper\\Plugin' => __DIR__ . '/../..' . '/src/Plugin.php',
        'Yoast\\Test_Helper\\Plugin_Toggler' => __DIR__ . '/../..' . '/src/Plugin_Toggler.php',
        'Yoast\\Test_Helper\\Post_Types' => __DIR__ . '/../..' . '/src/Post_Types.php',
        'Yoast\\Test_Helper\\Taxonomies' => __DIR__ . '/../..' . '/src/Taxonomies.php',
        'Yoast\\Test_Helper\\Upgrade_Detector' => __DIR__ . '/../..' . '/src/Upgrade_Detector.php',
        'Yoast\\Test_Helper\\WordPress_Plugin_Features' => __DIR__ . '/../..' . '/src/WordPress_Plugin_Features.php',
        'Yoast\\Test_Helper\\WordPress_Plugin_Options' => __DIR__ . '/../..' . '/src/WordPress_Plugin_Options.php',
        'Yoast\\Test_Helper\\WordPress_Plugin_Version' => __DIR__ . '/../..' . '/src/WordPress_Plugin_Version.php',
        'Yoast\\Test_Helper\\WordPress_Plugin_Version_Control' => __DIR__ . '/../..' . '/src/WordPress_Plugin_Version_Control.php',
        'Yoast\\Test_Helper\\WordPress_Plugins\\Local_SEO' => __DIR__ . '/../..' . '/src/WordPress_Plugins/Local_SEO.php',
        'Yoast\\Test_Helper\\WordPress_Plugins\\News_SEO' => __DIR__ . '/../..' . '/src/WordPress_Plugins/News_SEO.php',
        'Yoast\\Test_Helper\\WordPress_Plugins\\Video_SEO' => __DIR__ . '/../..' . '/src/WordPress_Plugins/Video_SEO.php',
        'Yoast\\Test_Helper\\WordPress_Plugins\\WooCommerce_SEO' => __DIR__ . '/../..' . '/src/WordPress_Plugins/WooCommerce_SEO.php',
        'Yoast\\Test_Helper\\WordPress_Plugins\\WordPress_Plugin' => __DIR__ . '/../..' . '/src/WordPress_Plugins/WordPress_Plugin.php',
        'Yoast\\Test_Helper\\WordPress_Plugins\\Yoast_SEO' => __DIR__ . '/../..' . '/src/WordPress_Plugins/Yoast_SEO.php',
        'Yoast\\Test_Helper\\XML_Sitemaps' => __DIR__ . '/../..' . '/src/XML_Sitemaps.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5fb978d035cb8b74ff62a7384d723d92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5fb978d035cb8b74ff62a7384d723d92::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5fb978d035cb8b74ff62a7384d723d92::$classMap;

        }, null, ClassLoader::class);
    }
}
