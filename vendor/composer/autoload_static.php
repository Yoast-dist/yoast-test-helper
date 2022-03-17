<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b672a93a07919a2d7ea48e871b86423
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Yoast\\WP\\Test_Helper\\Admin_Bar_Panel' => __DIR__ . '/../..' . '/src/admin-bar-panel.php',
        'Yoast\\WP\\Test_Helper\\Admin_Debug_Info' => __DIR__ . '/../..' . '/src/admin-debug-info.php',
        'Yoast\\WP\\Test_Helper\\Admin_Notifications' => __DIR__ . '/../..' . '/src/admin-notifications.php',
        'Yoast\\WP\\Test_Helper\\Admin_Page' => __DIR__ . '/../..' . '/src/admin-page.php',
        'Yoast\\WP\\Test_Helper\\Development_Mode' => __DIR__ . '/../..' . '/src/development-mode.php',
        'Yoast\\WP\\Test_Helper\\Domain_Dropdown' => __DIR__ . '/../..' . '/src/domain-dropdown.php',
        'Yoast\\WP\\Test_Helper\\Downgrader' => __DIR__ . '/../..' . '/src/downgrader.php',
        'Yoast\\WP\\Test_Helper\\Feature_Toggler' => __DIR__ . '/../..' . '/src/feature-toggler.php',
        'Yoast\\WP\\Test_Helper\\Form_Presenter' => __DIR__ . '/../..' . '/src/form-presenter.php',
        'Yoast\\WP\\Test_Helper\\Indexing_Reason_Integration' => __DIR__ . '/../..' . '/src/indexing-reason-integration.php',
        'Yoast\\WP\\Test_Helper\\Inline_Script' => __DIR__ . '/../..' . '/src/inline-script.php',
        'Yoast\\WP\\Test_Helper\\Integration' => __DIR__ . '/../..' . '/src/integration-interface.php',
        'Yoast\\WP\\Test_Helper\\Notification' => __DIR__ . '/../..' . '/src/notification.php',
        'Yoast\\WP\\Test_Helper\\Option' => __DIR__ . '/../..' . '/src/option.php',
        'Yoast\\WP\\Test_Helper\\Plugin' => __DIR__ . '/../..' . '/src/plugin.php',
        'Yoast\\WP\\Test_Helper\\Plugin_Toggler' => __DIR__ . '/../..' . '/src/plugin-toggler.php',
        'Yoast\\WP\\Test_Helper\\Plugin_Version_Control' => __DIR__ . '/../..' . '/src/plugin-version-control.php',
        'Yoast\\WP\\Test_Helper\\Post_Types' => __DIR__ . '/../..' . '/src/post-types.php',
        'Yoast\\WP\\Test_Helper\\Query_Monitor' => __DIR__ . '/../..' . '/src/query-monitor.php',
        'Yoast\\WP\\Test_Helper\\Query_Monitor_Output' => __DIR__ . '/../..' . '/src/query-monitor-output.php',
        'Yoast\\WP\\Test_Helper\\Schema' => __DIR__ . '/../..' . '/src/schema.php',
        'Yoast\\WP\\Test_Helper\\Taxonomies' => __DIR__ . '/../..' . '/src/taxonomies.php',
        'Yoast\\WP\\Test_Helper\\Upgrade_Detector' => __DIR__ . '/../..' . '/src/upgrade-detector.php',
        'Yoast\\WP\\Test_Helper\\WordPress_Plugin_Features' => __DIR__ . '/../..' . '/src/wordpress-plugin-features.php',
        'Yoast\\WP\\Test_Helper\\WordPress_Plugin_Options' => __DIR__ . '/../..' . '/src/wordpress-plugin-options.php',
        'Yoast\\WP\\Test_Helper\\WordPress_Plugin_Version' => __DIR__ . '/../..' . '/src/wordpress-plugin-version.php',
        'Yoast\\WP\\Test_Helper\\WordPress_Plugins\\Local_SEO' => __DIR__ . '/../..' . '/src/wordpress-plugins/local-seo.php',
        'Yoast\\WP\\Test_Helper\\WordPress_Plugins\\News_SEO' => __DIR__ . '/../..' . '/src/wordpress-plugins/news-seo.php',
        'Yoast\\WP\\Test_Helper\\WordPress_Plugins\\Video_SEO' => __DIR__ . '/../..' . '/src/wordpress-plugins/video-seo.php',
        'Yoast\\WP\\Test_Helper\\WordPress_Plugins\\WooCommerce_SEO' => __DIR__ . '/../..' . '/src/wordpress-plugins/woocommerce-seo.php',
        'Yoast\\WP\\Test_Helper\\WordPress_Plugins\\WordPress_Plugin' => __DIR__ . '/../..' . '/src/wordpress-plugins/wordpress-plugin-interface.php',
        'Yoast\\WP\\Test_Helper\\WordPress_Plugins\\Yoast_SEO' => __DIR__ . '/../..' . '/src/wordpress-plugins/yoast-seo.php',
        'Yoast\\WP\\Test_Helper\\WordPress_Plugins\\Yoast_SEO_Premium' => __DIR__ . '/../..' . '/src/wordpress-plugins/yoast-seo-premium.php',
        'Yoast\\WP\\Test_Helper\\XML_Sitemaps' => __DIR__ . '/../..' . '/src/xml-sitemaps.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit2b672a93a07919a2d7ea48e871b86423::$classMap;

        }, null, ClassLoader::class);
    }
}
