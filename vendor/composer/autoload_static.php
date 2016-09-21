<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit934b6c5f0d9576f6d744810784c17751
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yii\\swiftmailer\\' => 16,
            'yii\\jui\\' => 8,
            'yii\\gii\\' => 8,
            'yii\\faker\\' => 10,
            'yii\\debug\\' => 10,
            'yii\\composer\\' => 13,
            'yii\\codeception\\' => 16,
            'yii\\bootstrap\\' => 14,
            'yii\\' => 4,
        ),
        'r' => 
        array (
            'rico\\yii2images\\' => 16,
        ),
        'm' => 
        array (
            'mihaildev\\elfinder\\' => 19,
            'mihaildev\\ckeditor\\' => 19,
        ),
        'c' => 
        array (
            'cebe\\markdown\\' => 14,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yii\\swiftmailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-swiftmailer',
        ),
        'yii\\jui\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-jui',
        ),
        'yii\\gii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-gii',
        ),
        'yii\\faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-faker',
        ),
        'yii\\debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-debug',
        ),
        'yii\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-composer',
        ),
        'yii\\codeception\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-codeception',
        ),
        'yii\\bootstrap\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-bootstrap',
        ),
        'yii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2',
        ),
        'rico\\yii2images\\' => 
        array (
            0 => __DIR__ . '/..' . '/costa-rico/yii2-images',
        ),
        'mihaildev\\elfinder\\' => 
        array (
            0 => __DIR__ . '/..' . '/mihaildev/yii2-elfinder',
        ),
        'mihaildev\\ckeditor\\' => 
        array (
            0 => __DIR__ . '/..' . '/mihaildev/yii2-ckeditor',
        ),
        'cebe\\markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $prefixesPsr0 = array (
        'a' => 
        array (
            'abeautifulsite' => 
            array (
                0 => __DIR__ . '/..' . '/abeautifulsite/simpleimage/src',
            ),
        ),
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
        'D' => 
        array (
            'Diff' => 
            array (
                0 => __DIR__ . '/..' . '/phpspec/php-diff/lib',
            ),
        ),
    );

    public static $classMap = array (
        'RecursiveCallbackFilterIterator' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderVolumeLocalFileSystem.class.php',
        'elFinder' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinder.class.php',
        'elFinderConnector' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderConnector.class.php',
        'elFinderLibGdBmp' => __DIR__ . '/..' . '/studio-42/elfinder/php/libs/GdBmp.php',
        'elFinderPluginAutoResize' => __DIR__ . '/..' . '/studio-42/elfinder/php/plugins/AutoResize/plugin.php',
        'elFinderPluginAutoRotate' => __DIR__ . '/..' . '/studio-42/elfinder/php/plugins/AutoRotate/plugin.php',
        'elFinderPluginNormalizer' => __DIR__ . '/..' . '/studio-42/elfinder/php/plugins/Normalizer/plugin.php',
        'elFinderPluginSanitizer' => __DIR__ . '/..' . '/studio-42/elfinder/php/plugins/Sanitizer/plugin.php',
        'elFinderPluginWatermark' => __DIR__ . '/..' . '/studio-42/elfinder/php/plugins/Watermark/plugin.php',
        'elFinderSession' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderSession.php',
        'elFinderSessionInterface' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderSessionInterface.php',
        'elFinderVolumeDriver' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderVolumeDriver.class.php',
        'elFinderVolumeDropbox' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderVolumeDropbox.class.php',
        'elFinderVolumeFTP' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderVolumeFTP.class.php',
        'elFinderVolumeFlysystemGoogleDriveCache' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderFlysystemGoogleDriveNetmount.php',
        'elFinderVolumeFlysystemGoogleDriveNetmount' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderFlysystemGoogleDriveNetmount.php',
        'elFinderVolumeGroup' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderVolumeGroup.class.php',
        'elFinderVolumeLocalFileSystem' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderVolumeLocalFileSystem.class.php',
        'elFinderVolumeMySQL' => __DIR__ . '/..' . '/studio-42/elfinder/php/elFinderVolumeMySQL.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit934b6c5f0d9576f6d744810784c17751::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit934b6c5f0d9576f6d744810784c17751::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit934b6c5f0d9576f6d744810784c17751::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit934b6c5f0d9576f6d744810784c17751::$classMap;

        }, null, ClassLoader::class);
    }
}
