<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'api-platform/api-pack' => 'v1.3.0@0fb12343362f565b65eb374d3c49bec580ffcf8d',
  'api-platform/core' => 'v2.5.9@4f05477b5ec5cff7c9324a7510900db2a1173d70',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.11.1@ce77a7ba1770462cd705a91a151b6c3746f9c6ad',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.0@9f3e3f3cc5399604c0325d5ffa92609d694d950d',
  'doctrine/dbal' => '2.12.1@adce7a954a1c2f14f85e94aed90c8489af204086',
  'doctrine/doctrine-bundle' => '2.2.2@044d33eeffdb236d5013b6b4af99f87519e10751',
  'doctrine/doctrine-migrations-bundle' => '3.0.2@b8de89fe811e62f1dea8cf9aafda0ea45ca6f1f3',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.2@6195e836ffc2e1bd5ddea468fa46015fbea00b3a',
  'doctrine/orm' => '2.8.1@242cf1a33df1b8bc5e1b86c3ebd01db07851c833',
  'doctrine/persistence' => '2.1.0@9899c16934053880876b920a3b8b02ed2337ac1d',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'fig/link-util' => '1.1.1@c038ee75ca13663ddc2d1f185fe6f7533c00832a',
  'friendsofphp/proxy-manager-lts' => 'v1.0.1@aa76978a8feaf7ddffaf346ba4f409efbfe5f9a9',
  'laminas/laminas-code' => '3.5.1@b549b70c0bb6e935d497f84f750c82653326ac77',
  'laminas/laminas-eventmanager' => '3.3.0@1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'nelmio/cors-bundle' => '2.1.0@be4d5824caebc86da9e224e935e02e1201b3ea54',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'symfony/asset' => 'v4.4.18@7339980f70621f26db6208a75a8ee2a48a7ede5b',
  'symfony/cache' => 'v4.4.18@23cc546c9104693d6fce1b3aaa31c1fd47198bdc',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v4.4.18@e501c56d2fa70798075b9811d0eb4c27de491459',
  'symfony/console' => 'v4.4.18@12e071278e396cc3e1c149857337e9e192deca0b',
  'symfony/debug' => 'v4.4.18@5dfc7825f3bfe9bb74b23d8b8ce0e0894e32b544',
  'symfony/dependency-injection' => 'v4.4.18@3860f64c6deb2cb48b1ada27460c58ae479bdc0f',
  'symfony/doctrine-bridge' => 'v4.4.18@f53aca820d88b279ccb22525226f35518c6d0045',
  'symfony/dotenv' => 'v4.4.18@2befc49ec50b4d6ffd100b332389260c9069ba1c',
  'symfony/error-handler' => 'v4.4.18@ef2f7ddd3b9177bbf8ff2ecd8d0e970ed48da0c3',
  'symfony/event-dispatcher' => 'v4.4.18@5d4c874b0eb1c32d40328a09dbc37307a5a910b0',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/expression-language' => 'v4.4.18@c1763368a38d5061e5aa03160b328075d000291b',
  'symfony/filesystem' => 'v4.4.18@d99fbef7e0f69bf162ae6131b31132fa3cc4bcbe',
  'symfony/finder' => 'v4.4.18@ebd0965f2dc2d4e0f11487c16fbb041e50b5c09b',
  'symfony/flex' => 'v1.11.0@ceb2b4e612bd0b4bb36a4d7fb2e800c861652f48',
  'symfony/framework-bundle' => 'v4.4.18@3347605c98b598ad114ac6203ec855ddb2c47569',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v4.4.18@5ebda66b51612516bf338d5f87da2f37ff74cf34',
  'symfony/http-kernel' => 'v4.4.18@eaff9a43e74513508867ecfa66ef94fbb96ab128',
  'symfony/inflector' => 'v4.4.18@311180fcc84daaf6f07f49acdaa2cd61becbea2d',
  'symfony/mime' => 'v4.4.18@7a4176a1cbc4cc99268c531de547fccbd0beb370',
  'symfony/orm-pack' => 'v2.1.0@357f6362067b1ebb94af321b79f8939fc9118751',
  'symfony/polyfill-intl-idn' => 'v1.20.0@3b75acd829741c768bc8b1f84eb33265e7cc5117',
  'symfony/polyfill-intl-normalizer' => 'v1.20.0@727d1096295d807c309fb01a851577302394c897',
  'symfony/polyfill-mbstring' => 'v1.20.0@39d483bdf39be819deabf04ec872eb0b2410b531',
  'symfony/polyfill-php72' => 'v1.20.0@cede45fcdfabdd6043b3592e83678e42ec69e930',
  'symfony/polyfill-php73' => 'v1.20.0@8ff431c517be11c78c48a39a66d37431e26a6bed',
  'symfony/polyfill-php80' => 'v1.20.0@e70aa8b064c5b72d3df2abd5ab1e90464ad009de',
  'symfony/property-access' => 'v4.4.18@439d92bc88fdda717f2c31335e8db41483ca5c8d',
  'symfony/property-info' => 'v4.4.18@6a84a401122a17fb2a37d2135672284ee9146682',
  'symfony/proxy-manager-bridge' => 'v4.4.18@373d72703ef24b6a22c8592f53c7f0e333d9f038',
  'symfony/routing' => 'v4.4.18@80b042c20b035818daec844723e23b9825134ba0',
  'symfony/security-bundle' => 'v4.4.18@3ca01785c1711d5c8dd714d861e900de25fdb753',
  'symfony/security-core' => 'v4.4.18@4f6cd03ce14a74c1af680becc4c2e417fedf95aa',
  'symfony/security-csrf' => 'v4.4.18@e8ef12198a5f90117ef223cacbfddb9d46e347d5',
  'symfony/security-guard' => 'v4.4.18@2671aff170d19f850bf1cc802e3edaa5cf1045f5',
  'symfony/security-http' => 'v4.4.18@2d311398b026429c62845e1cd368c893b945f085',
  'symfony/serializer' => 'v4.4.18@f5a4c865c6c9d8af89915101c8a67efa7415f430',
  'symfony/serializer-pack' => 'v1.0.4@61173947057d5e1bf1c79e2a6ab6a8430be0602e',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v4.4.18@c7a594108ed01c89555c4e1bb123b4a54aee2595',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v4.4.18@18e73526b4e499646111739c118a6d8dad062d91',
  'symfony/twig-bundle' => 'v4.4.18@10d55db1fd9e506c6f074c3e9d566c25b407877a',
  'symfony/validator' => 'v4.4.18@f212e0520097c3a283358a83fd202a66d85c21ee',
  'symfony/var-dumper' => 'v4.4.18@4f31364bbc8177f2a6dbc125ac3851634ebe2a03',
  'symfony/var-exporter' => 'v4.4.18@f04b7d187b120e0a44c18a2d479c2dd0abe99d9c',
  'symfony/web-link' => 'v4.4.18@4965045a9a0052537bef698be0e5859de27f4d32',
  'symfony/yaml' => 'v4.4.18@bbce94f14d73732340740366fcbe63363663a403',
  'twig/twig' => 'v3.1.1@b02fa41f3783a2616eccef7b92fbc2343ffed737',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'willdurand/negotiation' => '3.0.0@04e14f38d4edfcc974114a07d2777d90c98f3d9c',
  'nikic/php-parser' => 'v4.10.4@c6d052fc58cb876152f89f532b95a8d7907e7f0e',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/maker-bundle' => 'v1.26.1@0f1d3ed2584349dc8700d7908e8a92b3742b1c99',
  'paragonie/random_compat' => '2.*@2f3c02e9f806474ccbe0b40cb2d545c370e8a7ed',
  'symfony/polyfill-ctype' => '*@2f3c02e9f806474ccbe0b40cb2d545c370e8a7ed',
  'symfony/polyfill-iconv' => '*@2f3c02e9f806474ccbe0b40cb2d545c370e8a7ed',
  'symfony/polyfill-php71' => '*@2f3c02e9f806474ccbe0b40cb2d545c370e8a7ed',
  'symfony/polyfill-php70' => '*@2f3c02e9f806474ccbe0b40cb2d545c370e8a7ed',
  'symfony/polyfill-php56' => '*@2f3c02e9f806474ccbe0b40cb2d545c370e8a7ed',
  '__root__' => 'dev-main@2f3c02e9f806474ccbe0b40cb2d545c370e8a7ed',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
