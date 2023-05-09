<?php

declare(strict_types=1);

return [
    'lastFullAnalysisTime' => 1683630772,
    'meta' => [
        'cacheVersion' => 'v10-collectedData',
        'phpstanVersion' => '1.10.14',
        'phpVersion' => 80105,
        'projectConfig' => '{parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], excludePaths: {analyseAndScan: [*.blade.php, F:\\var\\www\\_bases\\_modules\\module_extrafield\\build\\*, F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\*, F:\\var\\www\\_bases\\_modules\\module_extrafield\\*\\vendor\\*, F:\\var\\www\\_bases\\_modules\\module_extrafield\\docs\\*, F:\\var\\www\\_bases\\_modules\\module_extrafield\\Tests\\*, F:\\var\\www\\_bases\\_modules\\module_extrafield\\_ide_helper.php], analyse: []}, mixinExcludeClasses: [Eloquent], bootstrapFiles: [F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\bootstrap.php], checkOctaneCompatibility: false, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, viewDirectories: [], checkModelProperties: false, checkPhpDocMissingReturn: false, checkUnusedViews: false, level: 1, paths: [F:\\var\\www\\_bases\\_modules\\module_extrafield], tmpDir: F:\\var\\www\\_bases\\_modules\\module_extrafield\\build\\phpstan, reportUnmatchedIgnoredErrors: false, checkMissingIterableValueType: false, checkGenericClassInNonGenericObjectType: false}, conditionalTags: {NunoMaduro\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, NunoMaduro\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, NunoMaduro\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule: {phpstan.rules.rule: %checkModelProperties%}, NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule: {phpstan.rules.rule: %checkModelProperties%}, NunoMaduro\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}}, services: [{class: NunoMaduro\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Types\\RelationDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\ModelRelationsDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: NunoMaduro\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RelationFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Support\\CollectionHelper}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionFilterDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionGenericStaticMethodDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionGenericStaticMethodDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: NunoMaduro\\Larastan\\Rules\\NoModelMakeRule}, {class: NunoMaduro\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule}, {class: NunoMaduro\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: NunoMaduro\\Larastan\\Types\\RelationParserHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: NunoMaduro\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @currentPhpVersionSimpleDirectParser}}, {class: NunoMaduro\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: NunoMaduro\\Larastan\\Properties\\ModelCastHelper}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertiesRuleHelper}, {class: NunoMaduro\\Larastan\\Rules\\ModelRuleHelper}, {class: NunoMaduro\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: NunoMaduro\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: NunoMaduro\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: NunoMaduro\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, NunoMaduro\\Larastan\\Properties\\Schema\\PhpMyAdminDataTypeToPhpTypeConverter, {class: NunoMaduro\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: NunoMaduro\\Larastan\\Rules\\UnusedViewsRule}, {class: NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: NunoMaduro\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: NunoMaduro\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: NunoMaduro\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: NunoMaduro\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: NunoMaduro\\Larastan\\Collectors\\UsedViewInAnotherViewCollector, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: NunoMaduro\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, NunoMaduro\\Larastan\\ReturnTypes\\AppMakeHelper, NunoMaduro\\Larastan\\Internal\\ConsoleApplicationResolver, NunoMaduro\\Larastan\\Internal\\ConsoleApplicationHelper, NunoMaduro\\Larastan\\Support\\HigherOrderCollectionProxyHelper], rules: [NunoMaduro\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, NunoMaduro\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, NunoMaduro\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, NunoMaduro\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule]}',
        'analysedPaths' => [
            0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield',
        ],
        'scannedFiles' => [
        ],
        'composerLocks' => [
            'F:\\var\\www\\_bases\\_modules\\module_extrafield/composer.lock' => '6452aa1d205f7f15af9d6098cc1ccec07966082f',
        ],
        'composerInstalled' => [
            'F:\\var\\www\\_bases\\_modules\\module_extrafield/vendor/composer/installed.php' => [
                'versions' => [
                    'brianium/paratest' => [
                        'pretty_version' => 'v7.1.4',
                        'version' => '7.1.4.0',
                        'reference' => '153e68eb9e697baa3acf1db1d8ae1d1eb19fb816',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../brianium/paratest',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'brick/math' => [
                        'pretty_version' => '0.11.0',
                        'version' => '0.11.0.0',
                        'reference' => '0ad82ce168c82ba30d1c01ec86116ab52f589478',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../brick/math',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'calebporzio/sushi' => [
                        'pretty_version' => 'v2.4.4',
                        'version' => '2.4.4.0',
                        'reference' => '8eeafda290e9a09abe6b102c3925c9434d1c87a5',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../calebporzio/sushi',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'cordoval/hamcrest-php' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'davedevelopment/hamcrest-php' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'defuse/php-encryption' => [
                        'pretty_version' => 'v2.3.1',
                        'version' => '2.3.1.0',
                        'reference' => '77880488b9954b7884c25555c2a0ea9e7053f9d2',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../defuse/php-encryption',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'dflydev/dot-access-data' => [
                        'pretty_version' => 'v3.0.2',
                        'version' => '3.0.2.0',
                        'reference' => 'f41715465d65213d644d3141a6a93081be5d3549',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../dflydev/dot-access-data',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'doctrine/cache' => [
                        'pretty_version' => '2.2.0',
                        'version' => '2.2.0.0',
                        'reference' => '1ca8f21980e770095a31456042471a57bc4c68fb',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../doctrine/cache',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'doctrine/dbal' => [
                        'pretty_version' => '3.6.2',
                        'version' => '3.6.2.0',
                        'reference' => 'b4bd1cfbd2b916951696d82e57d054394d84864c',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../doctrine/dbal',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'doctrine/deprecations' => [
                        'pretty_version' => 'v1.0.0',
                        'version' => '1.0.0.0',
                        'reference' => '0e2a4f1f8cdfc7a92ec3b01c9334898c806b30de',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../doctrine/deprecations',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'doctrine/event-manager' => [
                        'pretty_version' => '2.0.0',
                        'version' => '2.0.0.0',
                        'reference' => '750671534e0241a7c50ea5b43f67e23eb5c96f32',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../doctrine/event-manager',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'doctrine/inflector' => [
                        'pretty_version' => '2.0.6',
                        'version' => '2.0.6.0',
                        'reference' => 'd9d313a36c872fd6ee06d9a6cbcf713eaa40f024',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../doctrine/inflector',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'doctrine/lexer' => [
                        'pretty_version' => '3.0.0',
                        'version' => '3.0.0.0',
                        'reference' => '84a527db05647743d50373e0ec53a152f2cde568',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../doctrine/lexer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'dragonmantank/cron-expression' => [
                        'pretty_version' => 'v3.3.2',
                        'version' => '3.3.2.0',
                        'reference' => '782ca5968ab8b954773518e9e49a6f892a34b2a8',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../dragonmantank/cron-expression',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'egulias/email-validator' => [
                        'pretty_version' => '4.0.1',
                        'version' => '4.0.1.0',
                        'reference' => '3a85486b709bc384dae8eb78fb2eec649bdb64ff',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../egulias/email-validator',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'ezyang/htmlpurifier' => [
                        'pretty_version' => 'v4.16.0',
                        'version' => '4.16.0.0',
                        'reference' => '523407fb06eb9e5f3d59889b3978d5bfe94299c8',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../ezyang/htmlpurifier',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'facade/ignition-contracts' => [
                        'pretty_version' => '1.0.2',
                        'version' => '1.0.2.0',
                        'reference' => '3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../facade/ignition-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'fakerphp/faker' => [
                        'pretty_version' => 'v1.21.0',
                        'version' => '1.21.0.0',
                        'reference' => '92efad6a967f0b79c499705c69b662f738cc9e4d',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../fakerphp/faker',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'fidry/cpu-core-counter' => [
                        'pretty_version' => '0.5.1',
                        'version' => '0.5.1.0',
                        'reference' => 'b58e5a3933e541dc286cc91fc4f3898bbc6f1623',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../fidry/cpu-core-counter',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'fidum/laravel-eloquent-morph-to-one' => [
                        'pretty_version' => '2.2.0',
                        'version' => '2.2.0.0',
                        'reference' => '8a42d5941869bae52a335881813873e2841a7b21',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../fidum/laravel-eloquent-morph-to-one',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'filp/whoops' => [
                        'pretty_version' => '2.15.2',
                        'version' => '2.15.2.0',
                        'reference' => 'aac9304c5ed61bf7b1b7a6064bf9806ab842ce73',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../filp/whoops',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'firebase/php-jwt' => [
                        'pretty_version' => 'v6.4.0',
                        'version' => '6.4.0.0',
                        'reference' => '4dd1e007f22a927ac77da5a3fbb067b42d3bc224',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../firebase/php-jwt',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'fruitcake/php-cors' => [
                        'pretty_version' => 'v1.2.0',
                        'version' => '1.2.0.0',
                        'reference' => '58571acbaa5f9f462c9c77e911700ac66f446d4e',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../fruitcake/php-cors',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'graham-campbell/result-type' => [
                        'pretty_version' => 'v1.1.1',
                        'version' => '1.1.1.0',
                        'reference' => '672eff8cf1d6fe1ef09ca0f89c4b287d6a3eb831',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../graham-campbell/result-type',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/guzzle' => [
                        'pretty_version' => '7.5.1',
                        'version' => '7.5.1.0',
                        'reference' => 'b964ca597e86b752cd994f27293e9fa6b6a95ed9',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../guzzlehttp/guzzle',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/promises' => [
                        'pretty_version' => '1.5.2',
                        'version' => '1.5.2.0',
                        'reference' => 'b94b2807d85443f9719887892882d0329d1e2598',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../guzzlehttp/promises',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/psr7' => [
                        'pretty_version' => '2.5.0',
                        'version' => '2.5.0.0',
                        'reference' => 'b635f279edd83fc275f822a1188157ffea568ff6',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../guzzlehttp/psr7',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/uri-template' => [
                        'pretty_version' => 'v1.0.1',
                        'version' => '1.0.1.0',
                        'reference' => 'b945d74a55a25a949158444f09ec0d3c120d69e2',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../guzzlehttp/uri-template',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'hamcrest/hamcrest-php' => [
                        'pretty_version' => 'v2.0.1',
                        'version' => '2.0.1.0',
                        'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../hamcrest/hamcrest-php',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'illuminate/auth' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/broadcasting' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/bus' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/cache' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/collections' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/conditionable' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/config' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/console' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/container' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/contracts' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/cookie' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/database' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/encryption' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/events' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/filesystem' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/hashing' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/http' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/log' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/macroable' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/mail' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/notifications' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/pagination' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/pipeline' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/process' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/queue' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/redis' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/routing' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/session' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/support' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/testing' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/translation' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/validation' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'illuminate/view' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v10.9.0',
                        ],
                    ],
                    'intervention/image' => [
                        'pretty_version' => '2.7.2',
                        'version' => '2.7.2.0',
                        'reference' => '04be355f8d6734c826045d02a1079ad658322dad',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../intervention/image',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'jean85/pretty-package-versions' => [
                        'pretty_version' => '2.0.5',
                        'version' => '2.0.5.0',
                        'reference' => 'ae547e455a3d8babd07b96966b17d7fd21d9c6af',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../jean85/pretty-package-versions',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'kalnoy/nestedset' => [
                        'pretty_version' => 'v6.0.2',
                        'version' => '6.0.2.0',
                        'reference' => '2d5c99fe1bfbaa4004f8d6fb24475f7ff88bb526',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../kalnoy/nestedset',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'kodova/hamcrest-php' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'laminas/laminas-escaper' => [
                        'pretty_version' => '2.12.0',
                        'version' => '2.12.0.0',
                        'reference' => 'ee7a4c37bf3d0e8c03635d5bddb5bb3184ead490',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../laminas/laminas-escaper',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/framework' => [
                        'pretty_version' => 'v10.9.0',
                        'version' => '10.9.0.0',
                        'reference' => '35078125f61ef0b125edf524de934f108d4b47fd',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../laravel/framework',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/passport' => [
                        'pretty_version' => 'v11.8.7',
                        'version' => '11.8.7.0',
                        'reference' => '48a03ffbfce7217b7ceba2c8e685ae8caa68db10',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../laravel/passport',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/pint' => [
                        'pretty_version' => 'v1.10.0',
                        'version' => '1.10.0.0',
                        'reference' => 'c7a01fa9bdd79819e7a2f1ba63ac1b02e6692dbc',
                        'type' => 'project',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../laravel/pint',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'laravel/serializable-closure' => [
                        'pretty_version' => 'v1.3.0',
                        'version' => '1.3.0.0',
                        'reference' => 'f23fe9d4e95255dacee1bf3525e0810d1a1b0f37',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../laravel/serializable-closure',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/ui' => [
                        'pretty_version' => 'v4.2.1',
                        'version' => '4.2.1.0',
                        'reference' => '05ff7ac1eb55e2dfd10edcfb18c953684d693907',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../laravel/ui',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravelcollective/html' => [
                        'pretty_version' => 'v6.4.1',
                        'version' => '6.4.1.0',
                        'reference' => '64ddfdcaeeb8d332bd98bef442bef81e39c3910b',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../laravelcollective/html',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laraxot/module_blog' => [
                        'pretty_version' => 'dev-master',
                        'version' => 'dev-master',
                        'reference' => '3e8f6235928f4277dd4ef32b5945f268e5c84780',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../laraxot/module_blog',
                        'aliases' => [
                            0 => '9999999-dev',
                        ],
                        'dev_requirement' => false,
                    ],
                    'laraxot/module_cms' => [
                        'pretty_version' => 'dev-master',
                        'version' => 'dev-master',
                        'reference' => '2db2d8802f3455a090bd876df5d1735bbf611675',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../laraxot/module_cms',
                        'aliases' => [
                            0 => '9999999-dev',
                        ],
                        'dev_requirement' => false,
                    ],
                    'laraxot/module_lang' => [
                        'pretty_version' => 'dev-master',
                        'version' => 'dev-master',
                        'reference' => '4c51d735926205b770aa7de99d6416784f6f2610',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../laraxot/module_lang',
                        'aliases' => [
                            0 => '9999999-dev',
                        ],
                        'dev_requirement' => false,
                    ],
                    'laraxot/module_lu' => [
                        'pretty_version' => 'dev-master',
                        'version' => 'dev-master',
                        'reference' => 'c4624c56f8981b5720b0ba7b53a9aa433460a2ca',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../laraxot/module_lu',
                        'aliases' => [
                            0 => '9999999-dev',
                        ],
                        'dev_requirement' => false,
                    ],
                    'laraxot/module_rating' => [
                        'pretty_version' => 'dev-master',
                        'version' => 'dev-master',
                        'reference' => 'd8914225ab42bd666b8cc6c69f7c0f50a9e44f58',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../laraxot/module_rating',
                        'aliases' => [
                            0 => '9999999-dev',
                        ],
                        'dev_requirement' => false,
                    ],
                    'laraxot/module_tenant' => [
                        'pretty_version' => 'dev-master',
                        'version' => 'dev-master',
                        'reference' => 'e48be5df53478fe20d6263d9f76385d6acdfcf86',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../laraxot/module_tenant',
                        'aliases' => [
                            0 => '9999999-dev',
                        ],
                        'dev_requirement' => false,
                    ],
                    'laraxot/module_ui' => [
                        'pretty_version' => 'dev-master',
                        'version' => 'dev-master',
                        'reference' => '5a94d708508692707f27c4dbb4468b5875139959',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../laraxot/module_ui',
                        'aliases' => [
                            0 => '9999999-dev',
                        ],
                        'dev_requirement' => false,
                    ],
                    'laraxot/module_xot' => [
                        'pretty_version' => 'dev-master',
                        'version' => 'dev-master',
                        'reference' => '607f601458519e7145694e33c43bbc57be9419b0',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../laraxot/module_xot',
                        'aliases' => [
                            0 => '9999999-dev',
                        ],
                        'dev_requirement' => false,
                    ],
                    'lcobucci/clock' => [
                        'pretty_version' => '3.0.0',
                        'version' => '3.0.0.0',
                        'reference' => '039ef98c6b57b101d10bd11d8fdfda12cbd996dc',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../lcobucci/clock',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'lcobucci/jwt' => [
                        'pretty_version' => '5.0.0',
                        'version' => '5.0.0.0',
                        'reference' => '47bdb0e0b5d00c2f89ebe33e7e384c77e84e7c34',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../lcobucci/jwt',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/commonmark' => [
                        'pretty_version' => '2.4.0',
                        'version' => '2.4.0.0',
                        'reference' => 'd44a24690f16b8c1808bf13b1bd54ae4c63ea048',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../league/commonmark',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/config' => [
                        'pretty_version' => 'v1.2.0',
                        'version' => '1.2.0.0',
                        'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../league/config',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/event' => [
                        'pretty_version' => '2.2.0',
                        'version' => '2.2.0.0',
                        'reference' => 'd2cc124cf9a3fab2bb4ff963307f60361ce4d119',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../league/event',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/flysystem' => [
                        'pretty_version' => '3.15.1',
                        'version' => '3.15.1.0',
                        'reference' => 'a141d430414fcb8bf797a18716b09f759a385bed',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../league/flysystem',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/flysystem-local' => [
                        'pretty_version' => '3.15.0',
                        'version' => '3.15.0.0',
                        'reference' => '543f64c397fefdf9cfeac443ffb6beff602796b3',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../league/flysystem-local',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/mime-type-detection' => [
                        'pretty_version' => '1.11.0',
                        'version' => '1.11.0.0',
                        'reference' => 'ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../league/mime-type-detection',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/oauth2-server' => [
                        'pretty_version' => '8.5.1',
                        'version' => '8.5.1.0',
                        'reference' => '43cd4d406906c6be5c8de2cee9bd3ad3753544ef',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../league/oauth2-server',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/oauth2server' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'league/uri' => [
                        'pretty_version' => '6.8.0',
                        'version' => '6.8.0.0',
                        'reference' => 'a700b4656e4c54371b799ac61e300ab25a2d1d39',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../league/uri',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/uri-interfaces' => [
                        'pretty_version' => '2.3.0',
                        'version' => '2.3.0.0',
                        'reference' => '00e7e2943f76d8cb50c7dfdc2f6dee356e15e383',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../league/uri-interfaces',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'livewire/livewire' => [
                        'pretty_version' => 'v2.12.3',
                        'version' => '2.12.3.0',
                        'reference' => '019b1e69d8cd8c7e749eba7a38e4fa69ecbc8f74',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../livewire/livewire',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'lncd/oauth2' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'maennchen/zipstream-php' => [
                        'pretty_version' => 'v2.4.0',
                        'version' => '2.4.0.0',
                        'reference' => '3fa72e4c71a43f9e9118752a5c90e476a8dc9eb3',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../maennchen/zipstream-php',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'markbaker/complex' => [
                        'pretty_version' => '3.0.2',
                        'version' => '3.0.2.0',
                        'reference' => '95c56caa1cf5c766ad6d65b6344b807c1e8405b9',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../markbaker/complex',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'markbaker/matrix' => [
                        'pretty_version' => '3.0.1',
                        'version' => '3.0.1.0',
                        'reference' => '728434227fe21be27ff6d86621a1b13107a2562c',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../markbaker/matrix',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'masterminds/html5' => [
                        'pretty_version' => '2.8.0',
                        'version' => '2.8.0.0',
                        'reference' => '3c5d5a56d56f48a1ca08a0670f0f80c1dad368f3',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../masterminds/html5',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'mcamara/laravel-localization' => [
                        'pretty_version' => 'V1.8.0',
                        'version' => '1.8.0.0',
                        'reference' => '9b1779a963c1779d1977d8ad0558a681608e3ec1',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../mcamara/laravel-localization',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'mockery/mockery' => [
                        'pretty_version' => '1.5.1',
                        'version' => '1.5.1.0',
                        'reference' => 'e92dcc83d5a51851baf5f5591d32cb2b16e3684e',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../mockery/mockery',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'monolog/monolog' => [
                        'pretty_version' => '3.3.1',
                        'version' => '3.3.1.0',
                        'reference' => '9b5daeaffce5b926cac47923798bba91059e60e2',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../monolog/monolog',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'mtdowling/cron-expression' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => '^1.0',
                        ],
                    ],
                    'myclabs/deep-copy' => [
                        'pretty_version' => '1.11.1',
                        'version' => '1.11.1.0',
                        'reference' => '7284c22080590fb39f2ffa3e9057f10a4ddd0e0c',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../myclabs/deep-copy',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'myclabs/php-enum' => [
                        'pretty_version' => '1.8.4',
                        'version' => '1.8.4.0',
                        'reference' => 'a867478eae49c9f59ece437ae7f9506bfaa27483',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../myclabs/php-enum',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nesbot/carbon' => [
                        'pretty_version' => '2.66.0',
                        'version' => '2.66.0.0',
                        'reference' => '496712849902241f04902033b0441b269effe001',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../nesbot/carbon',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nette/schema' => [
                        'pretty_version' => 'v1.2.3',
                        'version' => '1.2.3.0',
                        'reference' => 'abbdbb70e0245d5f3bf77874cea1dfb0c930d06f',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../nette/schema',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nette/utils' => [
                        'pretty_version' => 'v4.0.0',
                        'version' => '4.0.0.0',
                        'reference' => 'cacdbf5a91a657ede665c541eda28941d4b09c1e',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../nette/utils',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nikic/php-parser' => [
                        'pretty_version' => 'v4.15.4',
                        'version' => '4.15.4.0',
                        'reference' => '6bb5176bc4af8bcb7d926f88718db9b96a2d4290',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../nikic/php-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'nunomaduro/collision' => [
                        'pretty_version' => 'v7.x-dev',
                        'version' => '7.9999999.9999999.9999999-dev',
                        'reference' => '7a3dd0b97a2ceea14a6d8c9a68336e4c52f46551',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../nunomaduro/collision',
                        'aliases' => [
                            0 => '9999999-dev',
                        ],
                        'dev_requirement' => true,
                    ],
                    'nunomaduro/larastan' => [
                        'pretty_version' => 'v2.6.0',
                        'version' => '2.6.0.0',
                        'reference' => 'ccac5b25949576807862cf32ba1fce1769c06c42',
                        'type' => 'phpstan-extension',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../nunomaduro/larastan',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'nunomaduro/termwind' => [
                        'pretty_version' => 'v1.15.1',
                        'version' => '1.15.1.0',
                        'reference' => '8ab0b32c8caa4a2e09700ea32925441385e4a5dc',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../nunomaduro/termwind',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nwidart/laravel-modules' => [
                        'pretty_version' => 'v9.0.6',
                        'version' => '9.0.6.0',
                        'reference' => 'a31b003b9e1dd100d2bcf7da7e036a758d33986d',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../nwidart/laravel-modules',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nyholm/psr7' => [
                        'pretty_version' => '1.8.0',
                        'version' => '1.8.0.0',
                        'reference' => '3cb4d163b58589e47b35103e8e5e6a6a475b47be',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../nyholm/psr7',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'orchestra/testbench' => [
                        'pretty_version' => 'v8.5.1',
                        'version' => '8.5.1.0',
                        'reference' => '636bb5079170f1b49ca754e648712a2b32fa7aef',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../orchestra/testbench',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'orchestra/testbench-core' => [
                        'pretty_version' => 'v8.5.0',
                        'version' => '8.5.0.0',
                        'reference' => '4d0ed25a83179d8e59487198f619b57b64d4410f',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../orchestra/testbench-core',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'paragonie/constant_time_encoding' => [
                        'pretty_version' => 'v2.6.3',
                        'version' => '2.6.3.0',
                        'reference' => '58c3f47f650c94ec05a151692652a868995d2938',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../paragonie/constant_time_encoding',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'paragonie/random_compat' => [
                        'pretty_version' => 'v9.99.100',
                        'version' => '9.99.100.0',
                        'reference' => '996434e5492cb4c3edcb9168db6fbb1359ef965a',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../paragonie/random_compat',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'pestphp/pest' => [
                        'pretty_version' => 'v2.6.0',
                        'version' => '2.6.0.0',
                        'reference' => 'a34767fa15abd098c763db605fd0fc72665b7f69',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../pestphp/pest',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'pestphp/pest-plugin' => [
                        'pretty_version' => 'v2.0.1',
                        'version' => '2.0.1.0',
                        'reference' => 'e3a3da262b73bdcbf3fad4dc9846c3c4921f2147',
                        'type' => 'composer-plugin',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../pestphp/pest-plugin',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'pestphp/pest-plugin-arch' => [
                        'pretty_version' => 'v2.1.2',
                        'version' => '2.1.2.0',
                        'reference' => '485cbfbe2e194e9cfd8284625bd8922c9d27ac6f',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../pestphp/pest-plugin-arch',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'pestphp/pest-plugin-laravel' => [
                        'pretty_version' => 'v2.0.0',
                        'version' => '2.0.0.0',
                        'reference' => 'fc28f077fc3a461dfc11de4f50dbfef2aba1186d',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../pestphp/pest-plugin-laravel',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phar-io/manifest' => [
                        'pretty_version' => '2.0.3',
                        'version' => '2.0.3.0',
                        'reference' => '97803eca37d319dfa7826cc2437fc020857acb53',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phar-io/manifest',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phar-io/version' => [
                        'pretty_version' => '3.2.1',
                        'version' => '3.2.1.0',
                        'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phar-io/version',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'php-http/message-factory-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'phpdocumentor/reflection-common' => [
                        'pretty_version' => '2.2.0',
                        'version' => '2.2.0.0',
                        'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpdocumentor/reflection-common',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpdocumentor/reflection-docblock' => [
                        'pretty_version' => '5.3.0',
                        'version' => '5.3.0.0',
                        'reference' => '622548b623e81ca6d78b721c5e029f4ce664f170',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpdocumentor/reflection-docblock',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpdocumentor/type-resolver' => [
                        'pretty_version' => '1.7.1',
                        'version' => '1.7.1.0',
                        'reference' => 'dfc078e8af9c99210337325ff5aa152872c98714',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpdocumentor/type-resolver',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpmyadmin/sql-parser' => [
                        'pretty_version' => '5.7.0',
                        'version' => '5.7.0.0',
                        'reference' => '0f5895aab2b6002d00b6831b60983523dea30bff',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpmyadmin/sql-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpoffice/phpspreadsheet' => [
                        'pretty_version' => '1.28.0',
                        'version' => '1.28.0.0',
                        'reference' => '6e81cf39bbd93ebc3a4e8150444c41e8aa9b769a',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpoffice/phpspreadsheet',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpoffice/phpword' => [
                        'pretty_version' => '1.0.0',
                        'version' => '1.0.0.0',
                        'reference' => '8521612b39edeec9055d3688ad555342a40857dd',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpoffice/phpword',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpoption/phpoption' => [
                        'pretty_version' => '1.9.1',
                        'version' => '1.9.1.0',
                        'reference' => 'dd3a383e599f49777d8b628dadbb90cae435b87e',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpoption/phpoption',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpseclib/phpseclib' => [
                        'pretty_version' => '3.0.19',
                        'version' => '3.0.19.0',
                        'reference' => 'cc181005cf548bfd8a4896383bb825d859259f95',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpseclib/phpseclib',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpstan/extension-installer' => [
                        'pretty_version' => '1.3.0',
                        'version' => '1.3.0.0',
                        'reference' => 'f5e02d40f277d28513001976f444d9ff1dc15e9a',
                        'type' => 'composer-plugin',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpstan/extension-installer',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpstan/phpdoc-parser' => [
                        'pretty_version' => '1.20.4',
                        'version' => '1.20.4.0',
                        'reference' => '7d568c87a9df9c5f7e8b5f075fc469aa8cb0a4cd',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpstan/phpdoc-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpstan/phpstan' => [
                        'pretty_version' => '1.10.14',
                        'version' => '1.10.14.0',
                        'reference' => 'd232901b09e67538e5c86a724be841bea5768a7c',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpstan/phpstan',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpstan/phpstan-deprecation-rules' => [
                        'pretty_version' => '1.1.3',
                        'version' => '1.1.3.0',
                        'reference' => 'a22b36b955a2e9a3d39fe533b6c1bb5359f9c319',
                        'type' => 'phpstan-extension',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpstan/phpstan-deprecation-rules',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpstan/phpstan-phpunit' => [
                        'pretty_version' => '1.3.11',
                        'version' => '1.3.11.0',
                        'reference' => '9e1b9de6d260461f6e99b6a8f2dbb0bbb98b579c',
                        'type' => 'phpstan-extension',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpstan/phpstan-phpunit',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-code-coverage' => [
                        'pretty_version' => '10.1.1',
                        'version' => '10.1.1.0',
                        'reference' => '884a0da7f9f46f28b2cb69134217fd810b793974',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpunit/php-code-coverage',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-file-iterator' => [
                        'pretty_version' => '4.0.2',
                        'version' => '4.0.2.0',
                        'reference' => '5647d65443818959172645e7ed999217360654b6',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpunit/php-file-iterator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-invoker' => [
                        'pretty_version' => '4.0.0',
                        'version' => '4.0.0.0',
                        'reference' => 'f5e568ba02fa5ba0ddd0f618391d5a9ea50b06d7',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpunit/php-invoker',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-text-template' => [
                        'pretty_version' => '3.0.0',
                        'version' => '3.0.0.0',
                        'reference' => '9f3d3709577a527025f55bcf0f7ab8052c8bb37d',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpunit/php-text-template',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-timer' => [
                        'pretty_version' => '6.0.0',
                        'version' => '6.0.0.0',
                        'reference' => 'e2a2d67966e740530f4a3343fe2e030ffdc1161d',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpunit/php-timer',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/phpunit' => [
                        'pretty_version' => '10.1.2',
                        'version' => '10.1.2.0',
                        'reference' => '6f0cd95be71add539f8fd2be25b2a4a29789000b',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../phpunit/phpunit',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'pimple/pimple' => [
                        'pretty_version' => 'v3.5.0',
                        'version' => '3.5.0.0',
                        'reference' => 'a94b3a4db7fb774b3d78dad2315ddc07629e1bed',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../pimple/pimple',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'psr/cache' => [
                        'pretty_version' => '3.0.0',
                        'version' => '3.0.0.0',
                        'reference' => 'aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../psr/cache',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/clock' => [
                        'pretty_version' => '1.0.0',
                        'version' => '1.0.0.0',
                        'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../psr/clock',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/clock-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/container' => [
                        'pretty_version' => '2.0.2',
                        'version' => '2.0.2.0',
                        'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../psr/container',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/container-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.1|2.0',
                        ],
                    ],
                    'psr/event-dispatcher' => [
                        'pretty_version' => '1.0.0',
                        'version' => '1.0.0.0',
                        'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../psr/event-dispatcher',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/event-dispatcher-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/http-client' => [
                        'pretty_version' => '1.0.2',
                        'version' => '1.0.2.0',
                        'reference' => '0955afe48220520692d2d09f7ab7e0f93ffd6a31',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../psr/http-client',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/http-client-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/http-factory' => [
                        'pretty_version' => '1.0.2',
                        'version' => '1.0.2.0',
                        'reference' => 'e616d01114759c4c489f93b099585439f795fe35',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../psr/http-factory',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/http-factory-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/http-message' => [
                        'pretty_version' => '1.1',
                        'version' => '1.1.0.0',
                        'reference' => 'cb6ce4845ce34a8ad9e68117c10ee90a29919eba',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../psr/http-message',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/http-message-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/log' => [
                        'pretty_version' => '3.0.0',
                        'version' => '3.0.0.0',
                        'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../psr/log',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/log-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '3.0.0',
                            1 => '1.0|2.0|3.0',
                        ],
                    ],
                    'psr/simple-cache' => [
                        'pretty_version' => '3.0.0',
                        'version' => '3.0.0.0',
                        'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../psr/simple-cache',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/simple-cache-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0|2.0|3.0',
                        ],
                    ],
                    'ralouphie/getallheaders' => [
                        'pretty_version' => '3.0.3',
                        'version' => '3.0.3.0',
                        'reference' => '120b605dfeb996808c31b6477290a714d356e822',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../ralouphie/getallheaders',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'ramsey/collection' => [
                        'pretty_version' => '2.0.0',
                        'version' => '2.0.0.0',
                        'reference' => 'a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../ramsey/collection',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'ramsey/uuid' => [
                        'pretty_version' => '4.7.4',
                        'version' => '4.7.4.0',
                        'reference' => '60a4c63ab724854332900504274f6150ff26d286',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../ramsey/uuid',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'rhumsaa/uuid' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => '4.7.4',
                        ],
                    ],
                    'sebastian/cli-parser' => [
                        'pretty_version' => '2.0.0',
                        'version' => '2.0.0.0',
                        'reference' => 'efdc130dbbbb8ef0b545a994fd811725c5282cae',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../sebastian/cli-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/code-unit' => [
                        'pretty_version' => '2.0.0',
                        'version' => '2.0.0.0',
                        'reference' => 'a81fee9eef0b7a76af11d121767abc44c104e503',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../sebastian/code-unit',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/code-unit-reverse-lookup' => [
                        'pretty_version' => '3.0.0',
                        'version' => '3.0.0.0',
                        'reference' => '5e3a687f7d8ae33fb362c5c0743794bbb2420a1d',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../sebastian/code-unit-reverse-lookup',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/comparator' => [
                        'pretty_version' => '5.0.0',
                        'version' => '5.0.0.0',
                        'reference' => '72f01e6586e0caf6af81297897bd112eb7e9627c',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../sebastian/comparator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/complexity' => [
                        'pretty_version' => '3.0.0',
                        'version' => '3.0.0.0',
                        'reference' => 'e67d240970c9dc7ea7b2123a6d520e334dd61dc6',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../sebastian/complexity',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/diff' => [
                        'pretty_version' => '5.0.3',
                        'version' => '5.0.3.0',
                        'reference' => '912dc2fbe3e3c1e7873313cc801b100b6c68c87b',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../sebastian/diff',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/environment' => [
                        'pretty_version' => '6.0.1',
                        'version' => '6.0.1.0',
                        'reference' => '43c751b41d74f96cbbd4e07b7aec9675651e2951',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../sebastian/environment',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/exporter' => [
                        'pretty_version' => '5.0.0',
                        'version' => '5.0.0.0',
                        'reference' => 'f3ec4bf931c0b31e5b413f5b4fc970a7d03338c0',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../sebastian/exporter',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/global-state' => [
                        'pretty_version' => '6.0.0',
                        'version' => '6.0.0.0',
                        'reference' => 'aab257c712de87b90194febd52e4d184551c2d44',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../sebastian/global-state',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/lines-of-code' => [
                        'pretty_version' => '2.0.0',
                        'version' => '2.0.0.0',
                        'reference' => '17c4d940ecafb3d15d2cf916f4108f664e28b130',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../sebastian/lines-of-code',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/object-enumerator' => [
                        'pretty_version' => '5.0.0',
                        'version' => '5.0.0.0',
                        'reference' => '202d0e344a580d7f7d04b3fafce6933e59dae906',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../sebastian/object-enumerator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/object-reflector' => [
                        'pretty_version' => '3.0.0',
                        'version' => '3.0.0.0',
                        'reference' => '24ed13d98130f0e7122df55d06c5c4942a577957',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../sebastian/object-reflector',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/recursion-context' => [
                        'pretty_version' => '5.0.0',
                        'version' => '5.0.0.0',
                        'reference' => '05909fb5bc7df4c52992396d0116aed689f93712',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../sebastian/recursion-context',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/type' => [
                        'pretty_version' => '4.0.0',
                        'version' => '4.0.0.0',
                        'reference' => '462699a16464c3944eefc02ebdd77882bd3925bf',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../sebastian/type',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/version' => [
                        'pretty_version' => '4.0.1',
                        'version' => '4.0.1.0',
                        'reference' => 'c51fa83a5d8f43f1402e3f32a005e6262244ef17',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../sebastian/version',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'spatie/backtrace' => [
                        'pretty_version' => '1.4.0',
                        'version' => '1.4.0.0',
                        'reference' => 'ec4dd16476b802dbdc6b4467f84032837e316b8c',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../spatie/backtrace',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'spatie/eloquent-sortable' => [
                        'pretty_version' => '4.0.2',
                        'version' => '4.0.2.0',
                        'reference' => '74994d10a17d15d2cdb319d6b2ad7cb6fa067c0a',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../spatie/eloquent-sortable',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/laravel-activitylog' => [
                        'pretty_version' => '4.7.3',
                        'version' => '4.7.3.0',
                        'reference' => 'ec65a478a909b8df1b4f0c3c45de2592ca7639e5',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../spatie/laravel-activitylog',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/laravel-collection-macros' => [
                        'pretty_version' => '7.12.4',
                        'version' => '7.12.4.0',
                        'reference' => 'b1e2ec2b75ba308b707ac4bb09150c072a7c795d',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../spatie/laravel-collection-macros',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/laravel-data' => [
                        'pretty_version' => '2.2.3',
                        'version' => '2.2.3.0',
                        'reference' => 'cbc712e5fac04173b49662eff777500f850c8a64',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../spatie/laravel-data',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/laravel-livewire-wizard' => [
                        'pretty_version' => '1.2.0',
                        'version' => '1.2.0.0',
                        'reference' => '5ff6ef2a83059727ed30ede1102219734afce61d',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../spatie/laravel-livewire-wizard',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/laravel-model-states' => [
                        'pretty_version' => '2.4.6',
                        'version' => '2.4.6.0',
                        'reference' => '87730e48fdbbec9d59767a68211c8cbedf096b63',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../spatie/laravel-model-states',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/laravel-model-status' => [
                        'pretty_version' => '1.11.1',
                        'version' => '1.11.1.0',
                        'reference' => 'ebb18fb69efd65d1887f1da0b9e383206660c804',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../spatie/laravel-model-status',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/laravel-package-tools' => [
                        'pretty_version' => '1.15.0',
                        'version' => '1.15.0.0',
                        'reference' => 'efab1844b8826443135201c4443690f032c3d533',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../spatie/laravel-package-tools',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/laravel-permission' => [
                        'pretty_version' => '5.10.1',
                        'version' => '5.10.1.0',
                        'reference' => 'd08b3ffc5870cce4a47a39f22174947b33c191ae',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../spatie/laravel-permission',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/laravel-queueable-action' => [
                        'pretty_version' => '2.14.10',
                        'version' => '2.14.10.0',
                        'reference' => '70d84f048f25a0faef66572ffc96d15cf0317fbb',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../spatie/laravel-queueable-action',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/laravel-ray' => [
                        'pretty_version' => '1.32.4',
                        'version' => '1.32.4.0',
                        'reference' => '2274653f0a90dd87fbb887437be1c1ea1388a47c',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../spatie/laravel-ray',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'spatie/laravel-sluggable' => [
                        'pretty_version' => '3.4.2',
                        'version' => '3.4.2.0',
                        'reference' => 'e62c6b5de2d41d900749a1b6d339d05c5f4974fa',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../spatie/laravel-sluggable',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/laravel-tags' => [
                        'pretty_version' => '4.3.7',
                        'version' => '4.3.7.0',
                        'reference' => '490a8828dc9396ddee60ed580f6b5924b7c497db',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../spatie/laravel-tags',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/laravel-translatable' => [
                        'pretty_version' => '6.5.1',
                        'version' => '6.5.1.0',
                        'reference' => 'b8f102492f816608d832cfe9e420da6a856312cf',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../spatie/laravel-translatable',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/macroable' => [
                        'pretty_version' => '2.0.0',
                        'version' => '2.0.0.0',
                        'reference' => 'ec2c320f932e730607aff8052c44183cf3ecb072',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../spatie/macroable',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'spatie/ray' => [
                        'pretty_version' => '1.37.1',
                        'version' => '1.37.1.0',
                        'reference' => 'a915e327f04c0fbed3bdd26e076e39feea091062',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../spatie/ray',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'spipu/html2pdf' => [
                        'pretty_version' => 'v5.2.7',
                        'version' => '5.2.7.0',
                        'reference' => 'b0f477711de3052041072897510e690975aa37ce',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../spipu/html2pdf',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'staudenmeir/eloquent-has-many-deep' => [
                        'pretty_version' => 'v1.18',
                        'version' => '1.18.0.0',
                        'reference' => '26ec7056da877ee03e06d5d7535d1ba24c81b865',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../staudenmeir/eloquent-has-many-deep',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'staudenmeir/eloquent-has-many-deep-contracts' => [
                        'pretty_version' => 'v1.1',
                        'version' => '1.1.0.0',
                        'reference' => 'c39317b839d6123be126b9980e4a3d38310f5939',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../staudenmeir/eloquent-has-many-deep-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/console' => [
                        'pretty_version' => 'v6.2.10',
                        'version' => '6.2.10.0',
                        'reference' => '12288d9f4500f84a4d02254d4aa968b15488476f',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/console',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/css-selector' => [
                        'pretty_version' => 'v6.2.7',
                        'version' => '6.2.7.0',
                        'reference' => 'aedf3cb0f5b929ec255d96bbb4909e9932c769e0',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/css-selector',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/deprecation-contracts' => [
                        'pretty_version' => 'v3.2.1',
                        'version' => '3.2.1.0',
                        'reference' => 'e2d1534420bd723d0ef5aec58a22c5fe60ce6f5e',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/deprecation-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/dom-crawler' => [
                        'pretty_version' => 'v6.2.9',
                        'version' => '6.2.9.0',
                        'reference' => '328bc3795059651d2d4e462e8febdf7ec2d7a626',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/dom-crawler',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/error-handler' => [
                        'pretty_version' => 'v6.2.10',
                        'version' => '6.2.10.0',
                        'reference' => '8b7e9f124640cb0611624a9383176c3e5f7d8cfb',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/error-handler',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/event-dispatcher' => [
                        'pretty_version' => 'v6.2.8',
                        'version' => '6.2.8.0',
                        'reference' => '04046f35fd7d72f9646e721fc2ecb8f9c67d3339',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/event-dispatcher',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/event-dispatcher-contracts' => [
                        'pretty_version' => 'v3.2.1',
                        'version' => '3.2.1.0',
                        'reference' => '0ad3b6f1e4e2da5690fefe075cd53a238646d8dd',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/event-dispatcher-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/event-dispatcher-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '2.0|3.0',
                        ],
                    ],
                    'symfony/finder' => [
                        'pretty_version' => 'v6.2.7',
                        'version' => '6.2.7.0',
                        'reference' => '20808dc6631aecafbe67c186af5dcb370be3a0eb',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/finder',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/http-foundation' => [
                        'pretty_version' => 'v6.2.10',
                        'version' => '6.2.10.0',
                        'reference' => '49adbb92bcb4e3c2943719d2756271e8b9602acc',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/http-foundation',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/http-kernel' => [
                        'pretty_version' => 'v6.2.10',
                        'version' => '6.2.10.0',
                        'reference' => '81064a65a5496f17d2b6984f6519406f98864215',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/http-kernel',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/mailer' => [
                        'pretty_version' => 'v6.2.8',
                        'version' => '6.2.8.0',
                        'reference' => 'bfcfa015c67e19c6fdb7ca6fe70700af1e740a17',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/mailer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/mime' => [
                        'pretty_version' => 'v6.2.10',
                        'version' => '6.2.10.0',
                        'reference' => 'b6c137fc53a9f7c4c951cd3f362b3734c7a97723',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/mime',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-ctype' => [
                        'pretty_version' => 'v1.27.0',
                        'version' => '1.27.0.0',
                        'reference' => '5bbc823adecdae860bb64756d639ecfec17b050a',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/polyfill-ctype',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-iconv' => [
                        'pretty_version' => 'v1.27.0',
                        'version' => '1.27.0.0',
                        'reference' => '927013f3aac555983a5059aada98e1907d842695',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/polyfill-iconv',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'symfony/polyfill-intl-grapheme' => [
                        'pretty_version' => 'v1.27.0',
                        'version' => '1.27.0.0',
                        'reference' => '511a08c03c1960e08a883f4cffcacd219b758354',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/polyfill-intl-grapheme',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-intl-idn' => [
                        'pretty_version' => 'v1.27.0',
                        'version' => '1.27.0.0',
                        'reference' => '639084e360537a19f9ee352433b84ce831f3d2da',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/polyfill-intl-idn',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-intl-normalizer' => [
                        'pretty_version' => 'v1.27.0',
                        'version' => '1.27.0.0',
                        'reference' => '19bd1e4fcd5b91116f14d8533c57831ed00571b6',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/polyfill-intl-normalizer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-mbstring' => [
                        'pretty_version' => 'v1.27.0',
                        'version' => '1.27.0.0',
                        'reference' => '8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/polyfill-mbstring',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php72' => [
                        'pretty_version' => 'v1.27.0',
                        'version' => '1.27.0.0',
                        'reference' => '869329b1e9894268a8a61dabb69153029b7a8c97',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/polyfill-php72',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php80' => [
                        'pretty_version' => 'v1.27.0',
                        'version' => '1.27.0.0',
                        'reference' => '7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/polyfill-php80',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-uuid' => [
                        'pretty_version' => 'v1.27.0',
                        'version' => '1.27.0.0',
                        'reference' => 'f3cf1a645c2734236ed1e2e671e273eeb3586166',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/polyfill-uuid',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/process' => [
                        'pretty_version' => 'v6.2.10',
                        'version' => '6.2.10.0',
                        'reference' => 'b34cdbc9c5e75d45a3703e63a48ad07aafa8bf2e',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/process',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/psr-http-message-bridge' => [
                        'pretty_version' => 'v2.2.0',
                        'version' => '2.2.0.0',
                        'reference' => '28a732c05bbad801304ad5a5c674cf2970508993',
                        'type' => 'symfony-bridge',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/psr-http-message-bridge',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/routing' => [
                        'pretty_version' => 'v6.2.8',
                        'version' => '6.2.8.0',
                        'reference' => '69062e2823f03b82265d73a966999660f0e1e404',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/routing',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/service-contracts' => [
                        'pretty_version' => 'v3.2.1',
                        'version' => '3.2.1.0',
                        'reference' => 'a8c9cedf55f314f3a186041d19537303766df09a',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/service-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/stopwatch' => [
                        'pretty_version' => 'v6.2.7',
                        'version' => '6.2.7.0',
                        'reference' => 'f3adc98c1061875dd2edcd45e5b04e63d0e29f8f',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/stopwatch',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'symfony/string' => [
                        'pretty_version' => 'v6.2.8',
                        'version' => '6.2.8.0',
                        'reference' => '193e83bbd6617d6b2151c37fff10fa7168ebddef',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/string',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/translation' => [
                        'pretty_version' => 'v6.2.8',
                        'version' => '6.2.8.0',
                        'reference' => '817535dbb1721df8b3a8f2489dc7e50bcd6209b5',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/translation',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/translation-contracts' => [
                        'pretty_version' => 'v3.2.1',
                        'version' => '3.2.1.0',
                        'reference' => 'dfec258b9dd17a6b24420d464c43bffe347441c8',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/translation-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/translation-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '2.3|3.0',
                        ],
                    ],
                    'symfony/uid' => [
                        'pretty_version' => 'v6.2.7',
                        'version' => '6.2.7.0',
                        'reference' => 'd30c72a63897cfa043e1de4d4dd2ffa9ecefcdc0',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/uid',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/var-dumper' => [
                        'pretty_version' => 'v6.2.10',
                        'version' => '6.2.10.0',
                        'reference' => '41a750a23412ca76fdbbf5096943b4134272c1ab',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/var-dumper',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/yaml' => [
                        'pretty_version' => 'v6.2.10',
                        'version' => '6.2.10.0',
                        'reference' => '61916f3861b1e9705b18cfde723921a71dd1559d',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../symfony/yaml',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'ta-tikoma/phpunit-architecture-test' => [
                        'pretty_version' => '0.7.3',
                        'version' => '0.7.3.0',
                        'reference' => '90b2e1d53b2c09b6371f84476699b69b36e378fd',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../ta-tikoma/phpunit-architecture-test',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'tecnickcom/tcpdf' => [
                        'pretty_version' => '6.6.2',
                        'version' => '6.6.2.0',
                        'reference' => 'e3cffc9bcbc76e89e167e9eb0bbda0cab7518459',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../tecnickcom/tcpdf',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'theseer/tokenizer' => [
                        'pretty_version' => '1.2.1',
                        'version' => '1.2.1.0',
                        'reference' => '34a41e998c2183e22995f158c581e7b5e755ab9e',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../theseer/tokenizer',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'tijsverkoyen/css-to-inline-styles' => [
                        'pretty_version' => '2.2.6',
                        'version' => '2.2.6.0',
                        'reference' => 'c42125b83a4fa63b187fdf29f9c93cb7733da30c',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../tijsverkoyen/css-to-inline-styles',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'vlucas/phpdotenv' => [
                        'pretty_version' => 'v5.5.0',
                        'version' => '5.5.0.0',
                        'reference' => '1a7ea2afc49c3ee6d87061f5a233e3a035d0eae7',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../vlucas/phpdotenv',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'voku/portable-ascii' => [
                        'pretty_version' => '2.0.1',
                        'version' => '2.0.1.0',
                        'reference' => 'b56450eed252f6801410d810c8e1727224ae0743',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../voku/portable-ascii',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'webmozart/assert' => [
                        'pretty_version' => '1.11.0',
                        'version' => '1.11.0.0',
                        'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../webmozart/assert',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'wire-elements/pro' => [
                        'pretty_version' => '3.0.9',
                        'version' => '3.0.9.0',
                        'reference' => 'fe07ddbb07593ed4e8c1c4bccf5ff17c69217b3c',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../wire-elements/pro',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'zbateson/mail-mime-parser' => [
                        'pretty_version' => '2.4.0',
                        'version' => '2.4.0.0',
                        'reference' => '20b3e48eb799537683780bc8782fbbe9bc25934a',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../zbateson/mail-mime-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'zbateson/mb-wrapper' => [
                        'pretty_version' => '1.2.0',
                        'version' => '1.2.0.0',
                        'reference' => 'faf35dddfacfc5d4d5f9210143eafd7a7fe74334',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../zbateson/mb-wrapper',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'zbateson/stream-decorators' => [
                        'pretty_version' => '1.2.0',
                        'version' => '1.2.0.0',
                        'reference' => '712b9e7d25dc665a6c64bdba65929bbb6f0932aa',
                        'type' => 'library',
                        'install_path' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\composer/../zbateson/stream-decorators',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                ],
            ],
        ],
        'executedFilesHashes' => [
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\bootstrap.php' => '83df8de2ac49123d1901c7429060f745055290db',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
        ],
        'phpExtensions' => [
            0 => 'Core',
            1 => 'PDO',
            2 => 'Phar',
            3 => 'Reflection',
            4 => 'SPL',
            5 => 'SimpleXML',
            6 => 'Zend OPcache',
            7 => 'apcu',
            8 => 'bcmath',
            9 => 'calendar',
            10 => 'ctype',
            11 => 'curl',
            12 => 'date',
            13 => 'dom',
            14 => 'exif',
            15 => 'fileinfo',
            16 => 'filter',
            17 => 'gd',
            18 => 'gettext',
            19 => 'hash',
            20 => 'iconv',
            21 => 'intl',
            22 => 'json',
            23 => 'libxml',
            24 => 'mbstring',
            25 => 'mysqli',
            26 => 'mysqlnd',
            27 => 'odbc',
            28 => 'openssl',
            29 => 'pcre',
            30 => 'pdo_mysql',
            31 => 'pdo_sqlite',
            32 => 'readline',
            33 => 'session',
            34 => 'sodium',
            35 => 'sqlite3',
            36 => 'standard',
            37 => 'tidy',
            38 => 'tokenizer',
            39 => 'xml',
            40 => 'xmlreader',
            41 => 'xmlwriter',
            42 => 'zip',
            43 => 'zlib',
        ],
        'stubFiles' => [
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Attribute.stub' => 'bb03f0f4cf7e753f005a97a9c34cd09077ce1b03',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\BelongsTo.stub' => '1a843cfba603ff8abb4ba8daccad30e543d311a3',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\BelongsToMany.stub' => 'e6dc2d01e880b592bfcaecd2f6a430e6fb491ce1',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Collection.stub' => 'fcbcaf262c642973a82713356bed1647e6011419',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Conditionable.stub' => '1397012e80ccb8188e27024dc6d0b1e824c524e0',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Config\\Repository.stub' => '31fa7b9877710999a42a43fdc751b235a299008f',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\Container.stub' => '07d375fd4372a40d348f21370450a5724df7bf47',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\Pagination.stub' => '5d214ab6d2b6cc7c56b846b387292e6a1d0485c6',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\Queue.stub' => 'cd30534d5869982bcf995a98521b3710fdab5eb7',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\Support.stub' => '9c1293dfdc2c79dcdeeb562fc8673d4d3d280ce7',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\Translation.stub' => '00ef14ec92a1facfa8edd3822cac3f664435a0a6',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\UrlGenerator.stub' => 'f29d5ad0d02ca54293a36c0c3a5b1f8201be4d3b',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\View.stub' => '3508f118b8f155f60eed53b0e9fcb07534de0187',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Cookie\\CookieJar.stub' => '41fa714b3989048f3bb042473837c177034d2559',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Cookie\\SymfonyCookie.stub' => '54a800384b675f8852edf7a8c91553564e14b618',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Database\\ManagesTransactions.stub' => 'bb9f6eadc20eb5b4f449e5ee44289bfa0bd91c85',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\EloquentBuilder.stub' => '9ce4da6c6f8c763baba03a544f08777ff6b23327',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\EloquentCollection.stub' => 'abe9f00ebbf0e4c362d0dd11d5745484ff756c33',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Enumerable.stub' => '3e2a0278e7803662460ab3bafb97c02c6c83f0d0',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\EnumeratesValues.stub' => '3601822efadcc13c3bc004b0ac38907e1477bfcd',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Facades.stub' => 'd7cf5c8baf0d059b840dfe7f4700c424e38761b8',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Factory.stub' => '07cc6574c5ebdc8c26b3d52fcd5e5277d019a73d',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Foundation\\Http\\FormRequest.stub' => '9d93d09bceeda56d74ada05a08225b00d95b704c',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Gate.stub' => '54fe6beb129f421af9f212972c7dc387e94ee714',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\HasMany.stub' => '8e659e8330c7a9b7bb4692cde85cd0b4662fe555',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\HasManyThrough.stub' => '7fb5f5e03b61c9fc48e7c83ca29e5a395d06373f',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\HasOne.stub' => '28f14c1b29b7110fd6837432e9d94ee3ad09b4c2',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\HasOneOrMany.stub' => '8c055867941b97c39cd8508ad713c0594de45491',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\HasOneThrough.stub' => 'a7c1344f0fcb94f44795c7547e7c1abc46f255d9',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Helpers.stub' => '7ad008acd25a1ee8936a30922c1b48ca91740440',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\HigherOrderProxies.stub' => '67961792468dad357e38e62d757fb972b1ea9abc',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Http\\RedirectResponse.stub' => 'fd20aea92d8595e8bcd9c60fd8d07573d63bba83',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Http\\Request.stub' => '68fdec73cf449e5b0a7a4b006c9e0aa0dbeafbdc',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Log\\Logger.stub' => '320023c7c0d4e976aae7345f51fb6c5c287e34b2',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Mailable.stub' => '34c4f27c16d557eeec2887892262d6663b8da561',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Model.stub' => '908143337865de371ccd84de0d937365c3bfbf32',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\MorphMany.stub' => 'f963e9ca4853c4b6b6159310f4eacd76f5dec90b',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\MorphOne.stub' => '695ed13bf23b334292bc9ead7cd8a18e31cfa03d',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\MorphOneOrMany.stub' => '4350914cf747c61c8d0ea876397b1095c205dd52',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\MorphTo.stub' => '539a5a05c4bc332fbb997260d17807cc0014282f',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\MorphToMany.stub' => '0f451a6df1ea4c2d70c70cd9fe99cb7ead901ec7',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Pagination.stub' => '6e0b86869940c3701bf440e54da811535cb22353',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\QueryBuilder.stub' => '59a1cd3c18281b198d1243adf328ff84f56dd1c9',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Redis\\Connection.stub' => '594198d0412613f8e8ef487a77e3f63e270ba5a5',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Relation.stub' => 'cf253bf402dd2acc695e486bbbddd6a32740d52f',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Route.stub' => 'c3ec8a67927d116a4f416c5cc44bed0631823397',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Routing\\Redirector.stub' => '423332adae4e21b04a2ec6730b24a0eb1f74279e',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Session\\SessionManager.stub' => 'ac2f374ffd6cdb73a076770d4f29fc6140d564e3',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Support\\Manager.stub' => '86d0cbeedaf5005bdf91c33882642d802dc97e87',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Support\\Optional.stub' => 'c7a4a94afa98efcaa386e8ccb202286eb6b6d6f8',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Support\\Tappable.stub' => 'dace48b1a5b12666f78c11aa96ac19b85999702c',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Support\\ValidatedInput.stub' => '9b59e500ea8acabcfa1f735fe59102dedd4657f0',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\Validation\\Validator.stub' => '328dded807780c353f4f3508d8d94814096050c5',
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\nunomaduro\\larastan\\src/../stubs\\View\\View.stub' => 'dd4e6fc353cd80a13bdb82d7cdcb99b1353f86ac',
            'phar://F:/var/www/_bases/_modules/module_extrafield/vendor/phpstan/phpstan/phpstan.phar/src/PhpDoc/../../stubs/Countable.stub' => 'e3519ee3706ffbe1398770146aadfc6a62b2b66f',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ArrayObject.stub' => '34c9e85af3fe514ea3e18f7fc87e03f7890e3a46',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\Exception.stub' => '7539dffcb4b871de4319a3081c26e79d85ceaed0',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ImagickPixel.stub' => '112be875b5d995ddb4c7fbf5219c14877666aeb1',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\PDOStatement.stub' => '044a82cf796cf7016f4d0ac7fdad01d885aa0f06',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionAttribute.stub' => '614c3dcc562c65118608b1c4e1176684ce1a2cc5',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionClass.stub' => '26d7a3bbc8718b37986bd981e98c792afac9f758',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionClassConstant.stub' => '7c0f2ee95301fed439a48f7d55e5d4d1487c9bb8',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionFunctionAbstract.stub' => '2196325c2433ae733e0e7993400429493a1cd342',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionMethod.stub' => '4fcf212f681a5d09b4c68c617b09dca662576f92',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionParameter.stub' => '3e648b120364fd63447250d11819d6206c9b03e9',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionProperty.stub' => '78f68f13d18db0d71458216a47e9c8cec4b76024',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\SplObjectStorage.stub' => '1288ba1134aa555ef8e6b939208c62691dfd0ca5',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\WeakReference.stub' => '2fadf02e9175d02a0d39240d89ae38bc939aa605',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\arrayFunctions.stub' => '4ada61c98c3cca9f15138a92a3ed65709a1ab858',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\core.stub' => 'fe9162cda4bfb17d901538ae1bf40f7523f95a32',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\date.stub' => 'd1fa162ea2390fc8aa57dc7ab493ceab34c4d6fe',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\dom.stub' => '321cf9a0fc1e803ff5356208de0f9230805aa25a',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ext-ds.stub' => '817a828bc0a45c204ba19d236c4d002967099a4d',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ibm_db2.stub' => '3e0fc890566d3a34126295519ae6552acdce9b06',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\iterable.stub' => '54d934cbe5cf9f0c664d1c5cb0cfc53795badc82',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\mysqli.stub' => 'aff609eb2e3f0c73eeb40a6f288a05d55a6efb45',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\spl.stub' => '6a8ce07b7dc82139ffd4ab1e84414e984801b065',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\typeCheckingFunctions.stub' => '0a12290671e097df66df6e0a13891025346782a2',
            'phar://F:\\var\\www\\_bases\\_modules\\module_extrafield\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\zip.stub' => 'aff61beeb3e9dfaed0eede432921df5eee2d3b40',
        ],
        'level' => '1',
    ],
    'projectExtensionFiles' => [
    ],
    'errorsCallback' => static function (): array {
        return [
        ];
    },
    'collectedDataCallback' => static function (): array {
        return [
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Controllers\\ExtraFieldController.php' => [
                0 => PHPStan\Collectors\CollectedData::__set_state([
                    'data' => 'extrafield::index',
                    'filePath' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Controllers\\ExtraFieldController.php',
                    'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
                ]),
                1 => PHPStan\Collectors\CollectedData::__set_state([
                    'data' => 'extrafield::create',
                    'filePath' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Controllers\\ExtraFieldController.php',
                    'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
                ]),
                2 => PHPStan\Collectors\CollectedData::__set_state([
                    'data' => 'extrafield::store',
                    'filePath' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Controllers\\ExtraFieldController.php',
                    'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
                ]),
                3 => PHPStan\Collectors\CollectedData::__set_state([
                    'data' => 'extrafield::show',
                    'filePath' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Controllers\\ExtraFieldController.php',
                    'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
                ]),
                4 => PHPStan\Collectors\CollectedData::__set_state([
                    'data' => 'extrafield::edit',
                    'filePath' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Controllers\\ExtraFieldController.php',
                    'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
                ]),
                5 => PHPStan\Collectors\CollectedData::__set_state([
                    'data' => 'extrafield::update',
                    'filePath' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Controllers\\ExtraFieldController.php',
                    'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
                ]),
                6 => PHPStan\Collectors\CollectedData::__set_state([
                    'data' => 'extrafield::destroy',
                    'filePath' => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Controllers\\ExtraFieldController.php',
                    'collectorType' => 'NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector',
                ]),
            ],
        ];
    },
    'dependencies' => [
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\Create.php' => [
            'fileHash' => '0f52d22879b482f3e184bdbe9f8a110b3e93c9dd',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\UserExtraFieldGroup\\Create.php',
                1 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Steps\\InsertDescriptionStep.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\FirstOrCreate.php' => [
            'fileHash' => 'a7e93e0cfdfe4debdd856292f00b2fce4766a5c2',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetArrayByModelTypeModelId.php' => [
            'fileHash' => 'e26cca96e15d980b3c26589aaaf9f2cd73e95051',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetBuilderByCategoryId.php' => [
            'fileHash' => 'af2c56f817523e3d65bba42607ca09959ad97c25',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetBuilderByModelTypeModelIdCategoryId.php' => [
            'fileHash' => 'e3e2217548ab6254926bc85dadd6399fe671c8a3',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetOptionsByModelTypeModelIdCategoryIdUserId.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetByModelTypeModelId.php' => [
            'fileHash' => '4915f80cfbdcc5aee4e22d14ac677f08d5e5a418',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetArrayByModelTypeModelId.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetByModelUserIdCategoryId.php' => [
            'fileHash' => 'd56caff57844f1c8c05a31f7c35d302bb2d4a6c0',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\ExtraFieldGroups\\By\\Category.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldCollByUuidModelTypeModelId.php' => [
            'fileHash' => 'ae9fcd2180eab9644b84505aa8108ac10bc249ef',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFieldGroup\\Edit.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldsArrayByGroupId.php' => [
            'fileHash' => 'fe4323ae82ab8a1d2e631b313d3b36fc2a9d0824',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Steps\\InsertDataStep.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetOptionsByModelTypeModelIdCategoryIdUserId.php' => [
            'fileHash' => '75143b6cd078a067834c5fab29d10ce6cbbf0015',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetPivotByModel.php' => [
            'fileHash' => 'e5cbea9556d98c2ffc7bf036eeaac695de175c55',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetRulesByGroupId.php' => [
            'fileHash' => 'cee8f62b2b2f011d33e1602928b718328c0ed099',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFieldGroup\\Edit.php',
                1 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Steps\\InsertDataStep.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\UpdateByUuid.php' => [
            'fileHash' => '9492da49d5645d2f346b3d90e3d32b90e5601f66',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFieldGroup\\Edit.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\GetExtraFieldGroupCategoriesByModelTypeAction.php' => [
            'fileHash' => 'ac09800985ce8ba8b3f01348d6ae00bbe4ad5d2a',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\ExtraFieldGroups\\By\\Category.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\GetUserExtraFieldsDataByGroupId.php' => [
            'fileHash' => '490a6b4a68b3566acdc5bd854bedc5383035a987',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Config\\config.php' => [
            'fileHash' => '40c722f0c9b95fd6360de8d4743848effc389e85',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Factories\\ExtraFieldFactory.php' => [
            'fileHash' => 'd6e495f8427ed6710a8887ed5d380673cba48f9f',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\Create.php',
                1 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\FirstOrCreate.php',
                2 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetArrayByModelTypeModelId.php',
                3 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldCollByUuidModelTypeModelId.php',
                4 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldsArrayByGroupId.php',
                5 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetRulesByGroupId.php',
                6 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Input\\ExtraFields\\Groups.php',
                7 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\User\\DataSteps\\SecondStep.php',
                8 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\UserExtraFieldGroup\\Create.php',
                9 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Contracts\\HasExtraFieldGroupsContract.php',
                10 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraField.php',
                11 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldGroup.php',
                12 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldMorph.php',
                13 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldGroupPanel.php',
                14 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldPanel.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Factories\\ExtraFieldGroupFactory.php' => [
            'fileHash' => 'f87e838e28e30799eeaea5c9d44c7732d016cdf6',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\Create.php',
                1 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\FirstOrCreate.php',
                2 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetArrayByModelTypeModelId.php',
                3 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetBuilderByCategoryId.php',
                4 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetBuilderByModelTypeModelIdCategoryId.php',
                5 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetByModelTypeModelId.php',
                6 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetByModelUserIdCategoryId.php',
                7 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldCollByUuidModelTypeModelId.php',
                8 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldsArrayByGroupId.php',
                9 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetOptionsByModelTypeModelIdCategoryIdUserId.php',
                10 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetPivotByModel.php',
                11 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetRulesByGroupId.php',
                12 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\GetExtraFieldGroupCategoriesByModelTypeAction.php',
                13 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\GetUserExtraFieldsDataByGroupId.php',
                14 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\ExtraFieldGroups\\By\\Category.php',
                15 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Input\\ExtraFields\\Groups.php',
                16 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFieldGroup\\Edit.php',
                17 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\Group\\AssignName.php',
                18 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\User\\DataSteps\\FirstStep.php',
                19 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\UserExtraFieldGroup\\Create.php',
                20 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Contracts\\HasExtraFieldGroupsContract.php',
                21 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraField.php',
                22 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldGroup.php',
                23 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldGroupMorph.php',
                24 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldGroupPanel.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Migrations\\2023_01_01_000005_create_extra_field_group_table.php' => [
            'fileHash' => '2899afefed770891b7f2f9d215ecf81ffd930d72',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Migrations\\2023_01_01_000005_create_extra_fields_table.php' => [
            'fileHash' => '1ad73a39bc2681ef2909e18ac946a74ec08fef79',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Migrations\\2023_01_01_000008_create_extra_field_morph_table.php' => [
            'fileHash' => '17361193b2340722ad633d8224a18469f2f537a9',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Migrations\\2023_01_01_000009_create_extra_field_group_morph_table.php' => [
            'fileHash' => '9117db68df81728ed17666b2ac1eba84f9d5dbf5',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Seeders\\ExtraFieldDatabaseSeeder.php' => [
            'fileHash' => '6514f68adce95f05ac3cab1612539e81c378b936',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Datas\\GroupData.php' => [
            'fileHash' => '43c774fa799447982a0e3a9d1dd38deca7f4719d',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Controllers\\ExtraFieldController.php' => [
            'fileHash' => '459ec6ef5b648051f0ac6c28146e6cca1acb6557',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\ExtraFieldGroups\\By\\Category.php' => [
            'fileHash' => 'a1074755a8f0b5027060d17ee5dfe212ee8ea536',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Input\\ExtraFields.php' => [
            'fileHash' => '84e6f02fcee49efd14911ba8198363e12736e9b7',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Input\\ExtraFields\\Groups.php' => [
            'fileHash' => '54b652b6b350ae556fb34dfd98447dd1d3942f54',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFieldGroup\\Add.php' => [
            'fileHash' => 'd5399b4ed9fcbc61663177181460349d8e992451',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFieldGroup\\Edit.php' => [
            'fileHash' => 'aa5cdbe650eea2e2c0291125909b6365e7f02b72',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\AddData.php' => [
            'fileHash' => 'f1bf9d91a71c8324c22a8e8bcf6e3aa6629f708b',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\Group\\AssignName.php' => [
            'fileHash' => '2df382d3f626c1eb801afe2b4a8d506efe326886',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\Two.php' => [
            'fileHash' => '61e45d18602411cf3f739fb8305bf3b6e44c20f6',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\User\\AddData.php' => [
            'fileHash' => '817a148595744344d9c191d89e707143de51f486',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\User\\DataSteps\\FirstStep.php' => [
            'fileHash' => 'f0be190a99f9d6b860360af8eaa5a00c3640559f',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\User\\DataSteps\\SecondStep.php' => [
            'fileHash' => '43b3506bbe63c81718965c88dbcde3d0fda9f37a',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\User\\History.php' => [
            'fileHash' => 'fdf6f289865d926ee06802a7f4a6215f2cdedc11',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\UserExtraFieldGroup\\Create.php' => [
            'fileHash' => '74527d0a33a562bb9098cdae05ed2d7f56b87934',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Select\\ExtraFields.php' => [
            'fileHash' => 'b8a357533055e819bdb5d1db0b728d64a5efa340',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\UserExtraFields.php' => [
            'fileHash' => 'd33097d8c4bad21d011842d9993511f08c121efe',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Add.php' => [
            'fileHash' => '362a4681dee5f5a2ef4d0c95500d41fd4e340b60',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Steps\\InsertDataStep.php' => [
            'fileHash' => '67fd86e97f9a12a6bf64a6e9ce39576a69e58384',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Add.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Steps\\InsertDescriptionStep.php' => [
            'fileHash' => '9ba5dfaa86c84527fc3f2d131918cda3eba8d04c',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Add.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Steps\\SelectGroupStep.php' => [
            'fileHash' => '9bbbf2ad783bf5ae7cbd2aa8084855dc69a1b0e7',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Add.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\BaseModel.php' => [
            'fileHash' => 'f11d5a84719cfcfd40982475e1ce8f38524f0e1a',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\Create.php',
                1 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\FirstOrCreate.php',
                2 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetArrayByModelTypeModelId.php',
                3 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetBuilderByCategoryId.php',
                4 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetBuilderByModelTypeModelIdCategoryId.php',
                5 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetByModelTypeModelId.php',
                6 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetByModelUserIdCategoryId.php',
                7 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldCollByUuidModelTypeModelId.php',
                8 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldsArrayByGroupId.php',
                9 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetOptionsByModelTypeModelIdCategoryIdUserId.php',
                10 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetPivotByModel.php',
                11 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetRulesByGroupId.php',
                12 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\GetExtraFieldGroupCategoriesByModelTypeAction.php',
                13 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\GetUserExtraFieldsDataByGroupId.php',
                14 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Factories\\ExtraFieldFactory.php',
                15 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Factories\\ExtraFieldGroupFactory.php',
                16 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\ExtraFieldGroups\\By\\Category.php',
                17 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Input\\ExtraFields\\Groups.php',
                18 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFieldGroup\\Edit.php',
                19 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\Group\\AssignName.php',
                20 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\User\\DataSteps\\FirstStep.php',
                21 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\User\\DataSteps\\SecondStep.php',
                22 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\UserExtraFieldGroup\\Create.php',
                23 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Contracts\\HasExtraFieldGroupsContract.php',
                24 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraField.php',
                25 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldGroup.php',
                26 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldGroupMorph.php',
                27 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldMorph.php',
                28 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldGroupPanel.php',
                29 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldPanel.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\BaseModelLang.php' => [
            'fileHash' => '4c20097ecc64e5242c179c294c8f36eab0b0006a',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\BaseMorphPivot.php' => [
            'fileHash' => 'b82631ae6344886db7d93580296d60ff2106862b',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\Create.php',
                1 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\FirstOrCreate.php',
                2 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetArrayByModelTypeModelId.php',
                3 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldCollByUuidModelTypeModelId.php',
                4 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetOptionsByModelTypeModelIdCategoryIdUserId.php',
                5 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\UpdateByUuid.php',
                6 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\ExtraFieldGroups\\By\\Category.php',
                7 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Input\\ExtraFields\\Groups.php',
                8 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraField.php',
                9 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldGroup.php',
                10 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldGroupMorph.php',
                11 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldMorph.php',
                12 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldGroupMorphPanel.php',
                13 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldMorphPanel.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Contracts\\HasExtraFieldGroupsContract.php' => [
            'fileHash' => '3b7013ac4b1becb32faa94ba82e36ed3b89a0719',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetArrayByModelTypeModelId.php',
                1 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetByModelTypeModelId.php',
                2 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetByModelUserIdCategoryId.php',
                3 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldCollByUuidModelTypeModelId.php',
                4 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetPivotByModel.php',
                5 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\ExtraFieldGroups\\By\\Category.php',
                6 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFieldGroup\\Edit.php',
                7 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Steps\\InsertDescriptionStep.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Contracts\\HasExtraFieldsContract.php' => [
            'fileHash' => 'cfa797d22745540324d1447b5edb94d2806615c6',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Input\\ExtraFields.php',
                1 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Input\\ExtraFields\\Groups.php',
                2 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\UserExtraFields.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraField.php' => [
            'fileHash' => 'dfa8ceb11277bc2dc9c8b75263e76f4ffae37799',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\Create.php',
                1 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\FirstOrCreate.php',
                2 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetArrayByModelTypeModelId.php',
                3 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetBuilderByCategoryId.php',
                4 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetBuilderByModelTypeModelIdCategoryId.php',
                5 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetByModelTypeModelId.php',
                6 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetByModelUserIdCategoryId.php',
                7 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldCollByUuidModelTypeModelId.php',
                8 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldsArrayByGroupId.php',
                9 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetOptionsByModelTypeModelIdCategoryIdUserId.php',
                10 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetPivotByModel.php',
                11 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetRulesByGroupId.php',
                12 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\UpdateByUuid.php',
                13 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\GetExtraFieldGroupCategoriesByModelTypeAction.php',
                14 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\GetUserExtraFieldsDataByGroupId.php',
                15 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Factories\\ExtraFieldFactory.php',
                16 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Factories\\ExtraFieldGroupFactory.php',
                17 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\ExtraFieldGroups\\By\\Category.php',
                18 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Input\\ExtraFields.php',
                19 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Input\\ExtraFields\\Groups.php',
                20 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFieldGroup\\Edit.php',
                21 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\Group\\AssignName.php',
                22 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\User\\DataSteps\\FirstStep.php',
                23 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\User\\DataSteps\\SecondStep.php',
                24 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\UserExtraFieldGroup\\Create.php',
                25 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\UserExtraFields.php',
                26 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Steps\\InsertDescriptionStep.php',
                27 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Contracts\\HasExtraFieldGroupsContract.php',
                28 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Contracts\\HasExtraFieldsContract.php',
                29 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldGroup.php',
                30 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldGroupMorph.php',
                31 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldMorph.php',
                32 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldGroupPanel.php',
                33 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldMorphPanel.php',
                34 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldPanel.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldGroup.php' => [
            'fileHash' => 'c132170599fbc3a7f32b11cddbd5cbeacf7af2e7',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\Create.php',
                1 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\FirstOrCreate.php',
                2 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetArrayByModelTypeModelId.php',
                3 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetBuilderByCategoryId.php',
                4 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetBuilderByModelTypeModelIdCategoryId.php',
                5 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetByModelTypeModelId.php',
                6 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetByModelUserIdCategoryId.php',
                7 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldCollByUuidModelTypeModelId.php',
                8 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldsArrayByGroupId.php',
                9 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetOptionsByModelTypeModelIdCategoryIdUserId.php',
                10 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetPivotByModel.php',
                11 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetRulesByGroupId.php',
                12 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\UpdateByUuid.php',
                13 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\GetExtraFieldGroupCategoriesByModelTypeAction.php',
                14 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\GetUserExtraFieldsDataByGroupId.php',
                15 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Factories\\ExtraFieldFactory.php',
                16 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Factories\\ExtraFieldGroupFactory.php',
                17 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\ExtraFieldGroups\\By\\Category.php',
                18 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Input\\ExtraFields\\Groups.php',
                19 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFieldGroup\\Edit.php',
                20 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\Group\\AssignName.php',
                21 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\User\\DataSteps\\FirstStep.php',
                22 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\User\\DataSteps\\SecondStep.php',
                23 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\UserExtraFieldGroup\\Create.php',
                24 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Steps\\InsertDescriptionStep.php',
                25 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Contracts\\HasExtraFieldGroupsContract.php',
                26 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraField.php',
                27 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldGroupMorph.php',
                28 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldMorph.php',
                29 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldGroupMorphPanel.php',
                30 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldGroupPanel.php',
                31 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldPanel.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldGroupMorph.php' => [
            'fileHash' => '74aa23e87573de6bcdc6a8c58ca1048ffe9cf4bd',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\Create.php',
                1 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\FirstOrCreate.php',
                2 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetArrayByModelTypeModelId.php',
                3 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetBuilderByCategoryId.php',
                4 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetBuilderByModelTypeModelIdCategoryId.php',
                5 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetByModelTypeModelId.php',
                6 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetByModelUserIdCategoryId.php',
                7 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldCollByUuidModelTypeModelId.php',
                8 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldsArrayByGroupId.php',
                9 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetOptionsByModelTypeModelIdCategoryIdUserId.php',
                10 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetPivotByModel.php',
                11 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetRulesByGroupId.php',
                12 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\UpdateByUuid.php',
                13 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\GetExtraFieldGroupCategoriesByModelTypeAction.php',
                14 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\GetUserExtraFieldsDataByGroupId.php',
                15 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Factories\\ExtraFieldGroupFactory.php',
                16 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\ExtraFieldGroups\\By\\Category.php',
                17 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Input\\ExtraFields\\Groups.php',
                18 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFieldGroup\\Edit.php',
                19 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\Group\\AssignName.php',
                20 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\User\\DataSteps\\FirstStep.php',
                21 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\UserExtraFieldGroup\\Create.php',
                22 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Contracts\\HasExtraFieldGroupsContract.php',
                23 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraField.php',
                24 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldGroup.php',
                25 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldGroupMorphPanel.php',
                26 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldGroupPanel.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldMorph.php' => [
            'fileHash' => 'bc9c719fbecf37d8656ca1d4b4111e888dc4c536',
            'dependentFiles' => [
                0 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\Create.php',
                1 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\FirstOrCreate.php',
                2 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetArrayByModelTypeModelId.php',
                3 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldCollByUuidModelTypeModelId.php',
                4 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldsArrayByGroupId.php',
                5 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetRulesByGroupId.php',
                6 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\UpdateByUuid.php',
                7 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Factories\\ExtraFieldFactory.php',
                8 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Input\\ExtraFields\\Groups.php',
                9 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\User\\DataSteps\\SecondStep.php',
                10 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\UserExtraFieldGroup\\Create.php',
                11 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Contracts\\HasExtraFieldGroupsContract.php',
                12 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraField.php',
                13 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldGroup.php',
                14 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldGroupPanel.php',
                15 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldMorphPanel.php',
                16 => 'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldPanel.php',
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\Actions\\ExtraFieldsAction.php' => [
            'fileHash' => '74f581ca2a0ea778bc1669fb217525ce74a58f4a',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\Actions\\UserExtraFieldsAction.php' => [
            'fileHash' => '3395cc19e9187749f883ca4fc7e701165639f1ae',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldGroupMorphPanel.php' => [
            'fileHash' => '0e57f23271003113363b226ba5c575a4ca9dd7cf',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldGroupPanel.php' => [
            'fileHash' => 'eae698d66bcf2b6eee55d16ce67e90bab5238caf',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldMorphPanel.php' => [
            'fileHash' => 'a9e984a11739706fdaaa4660aa11a5a891712a5f',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldPanel.php' => [
            'fileHash' => '3a294cde3cdde4b75c2e51b0839d4ab9a380f77b',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\Policies\\EventPanelPolicy.php' => [
            'fileHash' => 'dd00d4b1f14696e63e10af386cc4a34ef052c68c',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\Policies\\ExtraFieldGroupMorphPanelPolicy.php' => [
            'fileHash' => '3e1f31d66e9ede7c37da5f968262a83483f3395f',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\Policies\\ExtraFieldGroupPanelPolicy.php' => [
            'fileHash' => '8c421fa42f78bcded094cd15f1f0ab47190c3183',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\Policies\\ExtraFieldMorphPanelPolicy.php' => [
            'fileHash' => '35c277bdf803051ce3d659f20451435112afc42f',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\Policies\\ExtraFieldPanelPolicy.php' => [
            'fileHash' => 'e61552ec62c3d2bd96db7d5fa40bba37957651f9',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\Policies\\_ModulePanelPolicy.php' => [
            'fileHash' => 'ad28270a0ee6135fcacf28ca032396e800ddba2c',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\_ModulePanel.php' => [
            'fileHash' => 'd97d24d981f11080417a83683c7db4060bbe816f',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Traits\\HasExtraFieldGroups.php' => [
            'fileHash' => '110b8fa00296ad35b235d25860cb58b4e066c465',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Providers\\ExtraFieldServiceProvider.php' => [
            'fileHash' => 'e6ddaadbf0f477d8c78667f4c893480b4aa95c41',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Providers\\RouteServiceProvider.php' => [
            'fileHash' => '33af04240d39d0e7b92783f020e26ce350b1c562',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Resources\\lang\\en\\extra_field_groups.php' => [
            'fileHash' => 'afd7cc473d05b32597cf42e8dfafc3237eabf603',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Resources\\lang\\en\\extra_fields.php' => [
            'fileHash' => '191fd8c33268c64688b1bbcacd81672d3b91773a',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Resources\\lang\\it\\extra_field_groups.php' => [
            'fileHash' => '046b70346d8aeb21afd902f5451adab7c5eca79b',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Resources\\lang\\it\\extra_fields.php' => [
            'fileHash' => 'd5ff9c942d9b4da3673e1e9c91aea7e7bf1cf650',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Resources\\lang\\it\\livewire.php' => [
            'fileHash' => '9d7e2b3206402b4cb2bf393ceb23a8d783d73e2a',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Resources\\lang\\it\\wizard.php' => [
            'fileHash' => '84b8349d3dfa20853e78f51253c1bc187aee7a59',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Resources\\views\\livewire\\extra-fields\\v2.blade copy.php' => [
            'fileHash' => '5363c23a8970f740f45d1cb206fceb139fc96aec',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Routes\\api.php' => [
            'fileHash' => '578c065a41c0b64ff9980468d2d63d59b86e9cf4',
            'dependentFiles' => [
            ],
        ],
        'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Routes\\web.php' => [
            'fileHash' => '654f578208234b4c0ac1086c36f12f85b8a0bd00',
            'dependentFiles' => [
            ],
        ],
    ],
    'exportedNodesCallback' => static function (): array {
        return [
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\Create.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup\\Create',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Spatie\\QueueableAction\\QueueableAction',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'execute',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented function.
     *
     * @return void
     */',
                                'namespace' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup',
                                'uses' => [
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                                    'str' => 'Illuminate\\Support\\Str',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'extrafieldgroupmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                                    'extrafieldmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldMorph',
                                    'queueableaction' => 'Spatie\\QueueableAction\\QueueableAction',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model',
                                    'type' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'extra_field_group_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                3 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'form_data',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\FirstOrCreate.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup\\FirstOrCreate',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Spatie\\QueueableAction\\QueueableAction',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'execute',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * DA FARE.
     * E\' per inserire i dati del servizio solo se non ce ne sono già associati allo stesso id di servizio,
     * altrimenti deve sovrascrivere.
     *
     * @return void
     */',
                                'namespace' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup',
                                'uses' => [
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                                    'str' => 'Illuminate\\Support\\Str',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'extrafieldgroupmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                                    'extrafieldmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldMorph',
                                    'queueableaction' => 'Spatie\\QueueableAction\\QueueableAction',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model',
                                    'type' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'extra_field_group_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                3 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'form_data',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetArrayByModelTypeModelId.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup\\GetArrayByModelTypeModelId',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Spatie\\QueueableAction\\QueueableAction',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_type',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'user_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'execute',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented function.
     */',
                                'namespace' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup',
                                'uses' => [
                                    'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'str' => 'Illuminate\\Support\\Str',
                                    'hasextrafieldgroupscontract' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'extrafieldmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldMorph',
                                    'fielddata' => 'Modules\\UI\\Datas\\FieldData',
                                    'getmodelbymodeltypeaction' => 'Modules\\Xot\\Actions\\GetModelByModelTypeAction',
                                    'xotdata' => 'Modules\\Xot\\Datas\\XotData',
                                    'datacollection' => 'Spatie\\LaravelData\\DataCollection',
                                    'queueableaction' => 'Spatie\\QueueableAction\\QueueableAction',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_type',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getProfile',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getModel',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getOptions',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'group',
                                    'type' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'profile_extra_fields',
                                    'type' => 'Illuminate\\Database\\Eloquent\\Collection',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getFielCollByFields',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return DataCollection<FieldData>
     */',
                                'namespace' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup',
                                'uses' => [
                                    'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'str' => 'Illuminate\\Support\\Str',
                                    'hasextrafieldgroupscontract' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'extrafieldmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldMorph',
                                    'fielddata' => 'Modules\\UI\\Datas\\FieldData',
                                    'getmodelbymodeltypeaction' => 'Modules\\Xot\\Actions\\GetModelByModelTypeAction',
                                    'xotdata' => 'Modules\\Xot\\Datas\\XotData',
                                    'datacollection' => 'Spatie\\LaravelData\\DataCollection',
                                    'queueableaction' => 'Spatie\\QueueableAction\\QueueableAction',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'group',
                                    'type' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_extra_fields',
                                    'type' => 'Illuminate\\Database\\Eloquent\\Collection',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'profile_extra_fields',
                                    'type' => 'Illuminate\\Database\\Eloquent\\Collection',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetBuilderByCategoryId.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup\\GetBuilderByCategoryId',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Spatie\\QueueableAction\\QueueableAction',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'execute',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented function.
     */',
                                'namespace' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup',
                                'uses' => [
                                    'builder' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
                                    'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'queueableaction' => 'Spatie\\QueueableAction\\QueueableAction',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'cat_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetBuilderByModelTypeModelIdCategoryId.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup\\GetBuilderByModelTypeModelIdCategoryId',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Spatie\\QueueableAction\\QueueableAction',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'execute',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented function.
     */',
                                'namespace' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup',
                                'uses' => [
                                    'builder' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
                                    'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'queueableaction' => 'Spatie\\QueueableAction\\QueueableAction',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_type',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_id',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'cat_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetByModelTypeModelId.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup\\GetByModelTypeModelId',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Spatie\\QueueableAction\\QueueableAction',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_type',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model',
                            ],
                            'phpDoc' => null,
                            'type' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'execute',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented function.
     *
     * @return EloquentCollection<ExtraFieldGroup>
     */',
                                'namespace' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup',
                                'uses' => [
                                    'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
                                    'hasextrafieldgroupscontract' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'getmodelbymodeltypeaction' => 'Modules\\Xot\\Actions\\GetModelByModelTypeAction',
                                    'queueableaction' => 'Spatie\\QueueableAction\\QueueableAction',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Collection',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_type',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getModel',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetByModelUserIdCategoryId.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup\\GetByModelUserIdCategoryId',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Spatie\\QueueableAction\\QueueableAction',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'execute',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Collection',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model',
                                    'type' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'cat_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldCollByUuidModelTypeModelId.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup\\GetFieldCollByUuidModelTypeModelId',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Spatie\\QueueableAction\\QueueableAction',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'uuid',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_type',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'execute',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return DataCollection<FieldData>
     */',
                                'namespace' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup',
                                'uses' => [
                                    'hasextrafieldgroupscontract' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                                    'extrafieldgroupmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                                    'extrafieldmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldMorph',
                                    'fielddata' => 'Modules\\UI\\Datas\\FieldData',
                                    'getmodelbymodeltypeaction' => 'Modules\\Xot\\Actions\\GetModelByModelTypeAction',
                                    'datacollection' => 'Spatie\\LaravelData\\DataCollection',
                                    'queueableaction' => 'Spatie\\QueueableAction\\QueueableAction',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Spatie\\LaravelData\\DataCollection',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uuid',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_type',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getModel',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetFieldsArrayByGroupId.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup\\GetFieldsArrayByGroupId',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Spatie\\QueueableAction\\QueueableAction',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'execute',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented function.
     */',
                                'namespace' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup',
                                'uses' => [
                                    'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'fielddata' => 'Modules\\UI\\Datas\\FieldData',
                                    'queueableaction' => 'Spatie\\QueueableAction\\QueueableAction',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'group_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetOptionsByModelTypeModelIdCategoryIdUserId.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup\\GetOptionsByModelTypeModelIdCategoryIdUserId',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Spatie\\QueueableAction\\QueueableAction',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'execute',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented function.
     */',
                                'namespace' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup',
                                'uses' => [
                                    'actions' => 'Modules\\ExtraField\\Actions',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'queueableaction' => 'Spatie\\QueueableAction\\QueueableAction',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_type',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_id',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'cat_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                3 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetPivotByModel.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup\\GetPivotByModel',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Spatie\\QueueableAction\\QueueableAction',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'execute',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented function.
     */',
                                'namespace' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup',
                                'uses' => [
                                    'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
                                    'hasextrafieldgroupscontract' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                                    'queueableaction' => 'Spatie\\QueueableAction\\QueueableAction',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Collection',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model',
                                    'type' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\GetRulesByGroupId.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup\\GetRulesByGroupId',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Spatie\\QueueableAction\\QueueableAction',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'execute',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented function.
     */',
                                'namespace' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup',
                                'uses' => [
                                    'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                                    'arr' => 'Illuminate\\Support\\Arr',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'queueableaction' => 'Spatie\\QueueableAction\\QueueableAction',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'group_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'prefix',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\ExtraFieldGroup\\UpdateByUuid.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Actions\\ExtraFieldGroup\\UpdateByUuid',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Spatie\\QueueableAction\\QueueableAction',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'execute',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'bool',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uuid',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'form_data',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\GetExtraFieldGroupCategoriesByModelTypeAction.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Actions\\GetExtraFieldGroupCategoriesByModelTypeAction',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Spatie\\QueueableAction\\QueueableAction',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'execute',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented function.
     *
     * @return Collection<Category>
     */',
                                'namespace' => 'Modules\\ExtraField\\Actions',
                                'uses' => [
                                    'collection' => 'Illuminate\\Support\\Collection',
                                    'category' => 'Modules\\Blog\\Models\\Category',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'queueableaction' => 'Spatie\\QueueableAction\\QueueableAction',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Support\\Collection',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_type',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Actions\\GetUserExtraFieldsDataByGroupId.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Actions\\GetUserExtraFieldsDataByGroupId',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Spatie\\QueueableAction\\QueueableAction',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'execute',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'group_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uuid',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Factories\\ExtraFieldFactory.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Database\\Factories\\ExtraFieldFactory',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The name of the factory\'s corresponding model.
     *
     * @var class-string<\\Illuminate\\Database\\Eloquent\\Model>
     */',
                                'namespace' => 'Modules\\ExtraField\\Database\\Factories',
                                'uses' => [
                                    'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'definition',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array
     */',
                                'namespace' => 'Modules\\ExtraField\\Database\\Factories',
                                'uses' => [
                                    'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Factories\\ExtraFieldGroupFactory.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Database\\Factories\\ExtraFieldGroupFactory',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The name of the factory\'s corresponding model.
     *
     * @var class-string<\\Illuminate\\Database\\Eloquent\\Model>
     */',
                                'namespace' => 'Modules\\ExtraField\\Database\\Factories',
                                'uses' => [
                                    'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'definition',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array
     */',
                                'namespace' => 'Modules\\ExtraField\\Database\\Factories',
                                'uses' => [
                                    'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Migrations\\2023_01_01_000005_create_extra_field_group_table.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CreateExtraFieldGroupTable',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * Undocumented class.
 */',
                        'namespace' => null,
                        'uses' => [
                            'blueprint' => 'Illuminate\\Database\\Schema\\Blueprint',
                            'xotbasemigration' => 'Modules\\Xot\\Database\\Migrations\\XotBaseMigration',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Xot\\Database\\Migrations\\XotBaseMigration',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'up',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * db up.
     *
     * @return void
     */',
                                'namespace' => null,
                                'uses' => [
                                    'blueprint' => 'Illuminate\\Database\\Schema\\Blueprint',
                                    'xotbasemigration' => 'Modules\\Xot\\Database\\Migrations\\XotBaseMigration',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Migrations\\2023_01_01_000005_create_extra_fields_table.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CreateExtraFieldsTable',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * Undocumented class.
 */',
                        'namespace' => null,
                        'uses' => [
                            'blueprint' => 'Illuminate\\Database\\Schema\\Blueprint',
                            'xotbasemigration' => 'Modules\\Xot\\Database\\Migrations\\XotBaseMigration',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Xot\\Database\\Migrations\\XotBaseMigration',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'up',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * db up.
     *
     * @return void
     */',
                                'namespace' => null,
                                'uses' => [
                                    'blueprint' => 'Illuminate\\Database\\Schema\\Blueprint',
                                    'xotbasemigration' => 'Modules\\Xot\\Database\\Migrations\\XotBaseMigration',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Migrations\\2023_01_01_000008_create_extra_field_morph_table.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CreateExtraFieldMorphTable',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Xot\\Database\\Migrations\\XotBaseMigration',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'up',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * db up.
     *
     * @return void
     */',
                                'namespace' => null,
                                'uses' => [
                                    'blueprint' => 'Illuminate\\Database\\Schema\\Blueprint',
                                    'xotbasemigration' => 'Modules\\Xot\\Database\\Migrations\\XotBaseMigration',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Migrations\\2023_01_01_000009_create_extra_field_group_morph_table.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'CreateExtraFieldGroupMorphTable',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Xot\\Database\\Migrations\\XotBaseMigration',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'up',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * db up.
     *
     * @return void
     */',
                                'namespace' => null,
                                'uses' => [
                                    'blueprint' => 'Illuminate\\Database\\Schema\\Blueprint',
                                    'xotbasemigration' => 'Modules\\Xot\\Database\\Migrations\\XotBaseMigration',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Database\\Seeders\\ExtraFieldDatabaseSeeder.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Database\\Seeders\\ExtraFieldDatabaseSeeder',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Database\\Seeder',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'run',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Run the database seeds.
     *
     * @return void
     */',
                                'namespace' => 'Modules\\ExtraField\\Database\\Seeders',
                                'uses' => [
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'seeder' => 'Illuminate\\Database\\Seeder',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Datas\\GroupData.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Datas\\GroupData',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Spatie\\LaravelData\\Data',
                    'implements' => [
                        0 => 'Livewire\\Wireable',
                    ],
                    'usedTraits' => [
                        0 => 'Spatie\\LaravelData\\Concerns\\WireableData',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'name',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'fields',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var DataCollection<FieldData>
     */',
                                'namespace' => 'Modules\\ExtraField\\Datas',
                                'uses' => [
                                    'wireable' => 'Livewire\\Wireable',
                                    'fielddata' => 'Modules\\UI\\Datas\\FieldData',
                                    'wireabledata' => 'Spatie\\LaravelData\\Concerns\\WireableData',
                                    'data' => 'Spatie\\LaravelData\\Data',
                                    'datacollection' => 'Spatie\\LaravelData\\DataCollection',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => 'Spatie\\LaravelData\\DataCollection',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Controllers\\ExtraFieldController.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Controllers\\ExtraFieldController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Routing\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'index',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Display a listing of the resource.
     *
     * @return Renderable
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Controllers',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'controller' => 'Illuminate\\Routing\\Controller',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'create',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Controllers',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'controller' => 'Illuminate\\Routing\\Controller',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'store',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Store a newly created resource in storage.
     *
     * @return Renderable
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Controllers',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'controller' => 'Illuminate\\Routing\\Controller',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'show',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Show the specified resource.
     *
     * @param int $id
     *
     * @return Renderable
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Controllers',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'controller' => 'Illuminate\\Routing\\Controller',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'id',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'edit',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Renderable
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Controllers',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'controller' => 'Illuminate\\Routing\\Controller',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'id',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'update',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Renderable
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Controllers',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'controller' => 'Illuminate\\Routing\\Controller',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'id',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'destroy',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Renderable
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Controllers',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'controller' => 'Illuminate\\Routing\\Controller',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'id',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\ExtraFieldGroups\\By\\Category.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\ExtraFieldGroups\\By\\Category',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Livewire\\Component',
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'WireElements\\Pro\\Concerns\\InteractsWithConfirmationModal',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'user_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'cat_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'tpl',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model',
                            ],
                            'phpDoc' => null,
                            'type' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_type',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'category_name',
                            ],
                            'phpDoc' => null,
                            'type' => '?string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'listeners',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented variable.
     *
     * @var array<string, string>
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\ExtraFieldGroups\\By',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
                                    'collection' => 'Illuminate\\Support\\Collection',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'component' => 'Livewire\\Component',
                                    'categorymodel' => 'Modules\\Blog\\Models\\Category',
                                    'getviewaction' => 'Modules\\Cms\\Actions\\GetViewAction',
                                    'actions' => 'Modules\\ExtraField\\Actions',
                                    'getextrafieldgroupcategoriesbymodeltypeaction' => 'Modules\\ExtraField\\Actions\\GetExtraFieldGroupCategoriesByModelTypeAction',
                                    'hasextrafieldgroupscontract' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'extrafieldgroupmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                                    'getmodeltypebymodelaction' => 'Modules\\Xot\\Actions\\GetModelTypeByModelAction',
                                    'interactswithconfirmationmodal' => 'WireElements\\Pro\\Concerns\\InteractsWithConfirmationModal',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mount',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model',
                                    'type' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'tpl',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getName',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'string',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        10 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'render',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        11 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getGroups',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented function.
     *
     * @param Collection<CategoryModel> $categories
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\ExtraFieldGroups\\By',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
                                    'collection' => 'Illuminate\\Support\\Collection',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'component' => 'Livewire\\Component',
                                    'categorymodel' => 'Modules\\Blog\\Models\\Category',
                                    'getviewaction' => 'Modules\\Cms\\Actions\\GetViewAction',
                                    'actions' => 'Modules\\ExtraField\\Actions',
                                    'getextrafieldgroupcategoriesbymodeltypeaction' => 'Modules\\ExtraField\\Actions\\GetExtraFieldGroupCategoriesByModelTypeAction',
                                    'hasextrafieldgroupscontract' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'extrafieldgroupmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                                    'getmodeltypebymodelaction' => 'Modules\\Xot\\Actions\\GetModelTypeByModelAction',
                                    'interactswithconfirmationmodal' => 'WireElements\\Pro\\Concerns\\InteractsWithConfirmationModal',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Support\\Collection',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'categories',
                                    'type' => 'Illuminate\\Support\\Collection',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        12 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'showCat',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'cat_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        13 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'toggleFavourite',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uuid',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        14 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'addGroup',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        15 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'edit',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uuid',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        16 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getFieldsByGroup',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Collection',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'group',
                                    'type' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Input\\ExtraFields.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\Input\\ExtraFields',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Livewire\\Component',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'tpl',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'name',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'groups',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'value',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var mixed
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Input',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'component' => 'Livewire\\Component',
                                    'getviewaction' => 'Modules\\Cms\\Actions\\GetViewAction',
                                    'hasextrafieldscontract' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model',
                            ],
                            'phpDoc' => null,
                            'type' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldsContract',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mount',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @param mixed $value
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Input',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'component' => 'Livewire\\Component',
                                    'getviewaction' => 'Modules\\Cms\\Actions\\GetViewAction',
                                    'hasextrafieldscontract' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'name',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model',
                                    'type' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldsContract',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getGroups',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Collection
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Input',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'component' => 'Livewire\\Component',
                                    'getviewaction' => 'Modules\\Cms\\Actions\\GetViewAction',
                                    'hasextrafieldscontract' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'render',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Input\\ExtraFields\\Groups.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\Input\\ExtraFields\\Groups',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * Class Groups.
 *
 * @property string                 $tpl
 * @property string                 $name
 * @property array                  $groups
 * @property array                  $form_data
 * @property mixed                  $value
 * @property HasExtraFieldsContract $model
 * @property Collection             $availableGroups
 * @property Collection             $assignedGroups
 * @property Collection             $availableFields
 * @property Collection             $assignedFields
 */',
                        'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Input\\ExtraFields',
                        'uses' => [
                            'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
                            'collection' => 'Illuminate\\Support\\Collection',
                            'str' => 'Illuminate\\Support\\Str',
                            'component' => 'Livewire\\Component',
                            'getviewaction' => 'Modules\\Cms\\Actions\\GetViewAction',
                            'hasextrafieldscontract' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldsContract',
                            'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                            'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                            'extrafieldmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldMorph',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Livewire\\Component',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'tpl',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'name',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'groups',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'form_data',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'value',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var mixed
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Input\\ExtraFields',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
                                    'collection' => 'Illuminate\\Support\\Collection',
                                    'str' => 'Illuminate\\Support\\Str',
                                    'component' => 'Livewire\\Component',
                                    'getviewaction' => 'Modules\\Cms\\Actions\\GetViewAction',
                                    'hasextrafieldscontract' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldsContract',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'extrafieldmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldMorph',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model',
                            ],
                            'phpDoc' => null,
                            'type' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldsContract',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mount',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @param mixed $value
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Input\\ExtraFields',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
                                    'collection' => 'Illuminate\\Support\\Collection',
                                    'str' => 'Illuminate\\Support\\Str',
                                    'component' => 'Livewire\\Component',
                                    'getviewaction' => 'Modules\\Cms\\Actions\\GetViewAction',
                                    'hasextrafieldscontract' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldsContract',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'extrafieldmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldMorph',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'name',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model',
                                    'type' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldsContract',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                3 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'tpl',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'showPage',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getAvailableGroups',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Collection',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getAssignedGroupsKeys',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented function.
     *
     * @return \\Illuminate\\Support\\Collection<int, (int|string)>
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Input\\ExtraFields',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
                                    'collection' => 'Illuminate\\Support\\Collection',
                                    'str' => 'Illuminate\\Support\\Str',
                                    'component' => 'Livewire\\Component',
                                    'getviewaction' => 'Modules\\Cms\\Actions\\GetViewAction',
                                    'hasextrafieldscontract' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldsContract',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'extrafieldmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldMorph',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        10 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getAssignedGroups',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Support\\Collection',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        11 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'assign',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        12 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'remove',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        13 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'render',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        14 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'attributes',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        15 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'save',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFieldGroup\\Add.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\Modal\\ExtraFieldGroup\\Add',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'WireElements\\Pro\\Components\\Modal\\Modal',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'title',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'form_data',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'user_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_type',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'cat_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'listeners',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var array<string, string>
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Modal\\ExtraFieldGroup',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'getviewaction' => 'Modules\\UI\\Actions\\GetViewAction',
                                    'modal' => 'WireElements\\Pro\\Components\\Modal\\Modal',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mount',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'cat_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_type',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'render',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'behavior',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        10 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'attributes',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFieldGroup\\Edit.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\Modal\\ExtraFieldGroup\\Edit',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'WireElements\\Pro\\Components\\Modal\\Modal',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'form_data',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'uuid',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_type',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'user_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'fields',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model',
                            ],
                            'phpDoc' => null,
                            'type' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'listeners',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var array<string, string>
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Modal\\ExtraFieldGroup',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'actions' => 'Modules\\ExtraField\\Actions',
                                    'hasextrafieldgroupscontract' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                                    'getviewaction' => 'Modules\\UI\\Actions\\GetViewAction',
                                    'fielddata' => 'Modules\\UI\\Datas\\FieldData',
                                    'getmodelbymodeltypeaction' => 'Modules\\Xot\\Actions\\GetModelByModelTypeAction',
                                    'modal' => 'WireElements\\Pro\\Components\\Modal\\Modal',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mount',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uuid',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_type',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getModel',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        10 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'toFieldData',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Modules\\UI\\Datas\\FieldData',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'field',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        11 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'render',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        12 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getName',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'string',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        13 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'save',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        14 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'behavior',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        15 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'attributes',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\AddData.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\Modal\\ExtraFields\\AddData',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'WireElements\\Pro\\Components\\Modal\\Modal',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'title',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'form_data',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'user_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_type',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'cat_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'listeners',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var array<string, string>
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Modal\\ExtraFields',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'getviewaction' => 'Modules\\UI\\Actions\\GetViewAction',
                                    'modal' => 'WireElements\\Pro\\Components\\Modal\\Modal',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mount',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'cat_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_type',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'render',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'behavior',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        10 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'attributes',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\Group\\AssignName.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\Modal\\ExtraFields\\Group\\AssignName',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'WireElements\\Pro\\Components\\Modal\\Modal',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'group_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'form_data',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'listeners',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var array<string, string>
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Modal\\ExtraFields\\Group',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'getviewaction' => 'Modules\\Cms\\Actions\\GetViewAction',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'modal' => 'WireElements\\Pro\\Components\\Modal\\Modal',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mount',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'group_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'save',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented function.
     *
     * @return void
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Modal\\ExtraFields\\Group',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'getviewaction' => 'Modules\\Cms\\Actions\\GetViewAction',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'modal' => 'WireElements\\Pro\\Components\\Modal\\Modal',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'render',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'attributes',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\Two.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\Modal\\ExtraFields\\Two',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'WireElements\\Pro\\Components\\Modal\\Modal',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getName',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'string',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'render',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\User\\AddData.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\Modal\\ExtraFields\\User\\AddData',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'WireElements\\Pro\\Components\\Modal\\Modal',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'title',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'form_data',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'cat_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'user_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_type',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'listeners',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var array<string, string>
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Modal\\ExtraFields\\User',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'getviewaction' => 'Modules\\Cms\\Actions\\GetViewAction',
                                    'modal' => 'WireElements\\Pro\\Components\\Modal\\Modal',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mount',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'cat_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_type',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'render',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'attributes',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\User\\DataSteps\\FirstStep.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\Modal\\ExtraFields\\User\\DataSteps\\FirstStep',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Spatie\\LivewireWizard\\Components\\StepComponent',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'cat_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'form_data',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'group_opts',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'is_first',
                            ],
                            'phpDoc' => null,
                            'type' => 'bool',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'is_last',
                            ],
                            'phpDoc' => null,
                            'type' => 'bool',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mount',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'cat_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_type',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'render',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'stepInfo',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'goNextStep',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\User\\DataSteps\\SecondStep.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\Modal\\ExtraFields\\User\\DataSteps\\SecondStep',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Spatie\\LivewireWizard\\Components\\StepComponent',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'group_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'cat_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'form_data',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'is_first',
                            ],
                            'phpDoc' => null,
                            'type' => 'bool',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'is_last',
                            ],
                            'phpDoc' => null,
                            'type' => 'bool',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'fields',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mount',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'render',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'stepInfo',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'goNextStep',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\ExtraFields\\User\\History.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\Modal\\ExtraFields\\User\\History',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'WireElements\\Pro\\Components\\Modal\\Modal',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'service_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'extrafield_opts',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'extrafield_opts_arr',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mount',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'service_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'extrafield_opts',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'render',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'attributes',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Modal\\UserExtraFieldGroup\\Create.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\Modal\\UserExtraFieldGroup\\Create',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'WireElements\\Pro\\Components\\Modal\\Modal',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'tpl',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'extra_field_group_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'user_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'form_data',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'fields_arr',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mount',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'extra_field_group_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getName',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'string',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'render',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'save',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented function.
     *
     * @return void
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Modal\\UserExtraFieldGroup',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'getviewaction' => 'Modules\\Cms\\Actions\\GetViewAction',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'fielddata' => 'Modules\\UI\\Datas\\FieldData',
                                    'xotdata' => 'Modules\\Xot\\Datas\\XotData',
                                    'modal' => 'WireElements\\Pro\\Components\\Modal\\Modal',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'behavior',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        10 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'attributes',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Select\\ExtraFields.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\Select\\ExtraFields',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Livewire\\Component',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'tpl',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'name',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'groups',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'value',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var mixed
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Select',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'component' => 'Livewire\\Component',
                                    'getviewaction' => 'Modules\\Cms\\Actions\\GetViewAction',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model',
                            ],
                            'phpDoc' => null,
                            'type' => 'Illuminate\\Database\\Eloquent\\Model',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mount',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @param mixed $group
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Select',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'component' => 'Livewire\\Component',
                                    'getviewaction' => 'Modules\\Cms\\Actions\\GetViewAction',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'group',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getGroups',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented function.
     *
     * @return void
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Select',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'component' => 'Livewire\\Component',
                                    'getviewaction' => 'Modules\\Cms\\Actions\\GetViewAction',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'render',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\UserExtraFields.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\UserExtraFields',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Livewire\\Component',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'user_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'cat_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'tpl',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model',
                            ],
                            'phpDoc' => null,
                            'type' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldsContract',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_type',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'category_name',
                            ],
                            'phpDoc' => null,
                            'type' => '?string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'groups',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'listeners',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented variable.
     *
     * @var array<string, string>
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'str' => 'Illuminate\\Support\\Str',
                                    'component' => 'Livewire\\Component',
                                    'category' => 'Modules\\Blog\\Models\\Category',
                                    'getviewaction' => 'Modules\\Cms\\Actions\\GetViewAction',
                                    'hasextrafieldscontract' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldsContract',
                                    'getmodeltypebymodelaction' => 'Modules\\Xot\\Actions\\GetModelTypeByModelAction',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mount',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model',
                                    'type' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldsContract',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'tpl',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        10 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'render',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        11 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'showPage',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Add.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Add',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Spatie\\LivewireWizard\\Components\\WizardComponent',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'cat_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'int',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'user_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model',
                            ],
                            'phpDoc' => null,
                            'type' => 'Illuminate\\Database\\Eloquent\\Model',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_type',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model_id',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mount',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'cat_id',
                                    'type' => 'int',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_type',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'steps',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'initialState',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Steps\\InsertDataStep.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Steps\\InsertDataStep',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\UI\\Http\\Wizard\\BaseStep',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'listeners',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var array<string, string>
     */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Steps',
                                'uses' => [
                                    'actions' => 'Modules\\ExtraField\\Actions',
                                    'getstatedataaction' => 'Modules\\UI\\Actions\\GetStateDataAction',
                                    'basestep' => 'Modules\\UI\\Http\\Wizard\\BaseStep',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'fields',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mount',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'rules',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'initFormData',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'updateFormData',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'data',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Steps\\InsertDescriptionStep.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Steps\\InsertDescriptionStep',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\UI\\Http\\Wizard\\BaseStep',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mount',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'save',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getModel',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Steps\\SelectGroupStep.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Steps\\SelectGroupStep',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\UI\\Http\\Wizard\\BaseStep',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'groups',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'rules',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/** @var array */',
                                'namespace' => 'Modules\\ExtraField\\Http\\Livewire\\Wizard\\ExtraFieldGroup\\Steps',
                                'uses' => [
                                    'actions' => 'Modules\\ExtraField\\Actions',
                                    'getstatedataaction' => 'Modules\\UI\\Actions\\GetStateDataAction',
                                    'basestep' => 'Modules\\UI\\Http\\Wizard\\BaseStep',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mount',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\BaseModel.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\BaseModel',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * Class BaseModel.
 */',
                        'namespace' => 'Modules\\ExtraField\\Models',
                        'uses' => [
                            'cachable' => 'GeneaLabs\\LaravelModelCaching\\Traits\\Cachable',
                            'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                            'model' => 'Illuminate\\Database\\Eloquent\\Model',
                            'factoryservice' => 'Modules\\Xot\\Services\\FactoryService',
                            'updater' => 'Modules\\Xot\\Traits\\Updater',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => true,
                    'final' => false,
                    'extends' => 'Illuminate\\Database\\Eloquent\\Model',
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Modules\\Xot\\Traits\\Updater',
                        1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'connection',
                            ],
                            'phpDoc' => null,
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'casts',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var array<string, string>
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'cachable' => 'GeneaLabs\\LaravelModelCaching\\Traits\\Cachable',
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'factoryservice' => 'Modules\\Xot\\Services\\FactoryService',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'dates',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var string[]
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'cachable' => 'GeneaLabs\\LaravelModelCaching\\Traits\\Cachable',
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'factoryservice' => 'Modules\\Xot\\Services\\FactoryService',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'primaryKey',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var string
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'cachable' => 'GeneaLabs\\LaravelModelCaching\\Traits\\Cachable',
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'factoryservice' => 'Modules\\Xot\\Services\\FactoryService',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'incrementing',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var bool
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'cachable' => 'GeneaLabs\\LaravelModelCaching\\Traits\\Cachable',
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'factoryservice' => 'Modules\\Xot\\Services\\FactoryService',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'hidden',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var array<int, string>
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'cachable' => 'GeneaLabs\\LaravelModelCaching\\Traits\\Cachable',
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'factoryservice' => 'Modules\\Xot\\Services\\FactoryService',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'timestamps',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var bool
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'cachable' => 'GeneaLabs\\LaravelModelCaching\\Traits\\Cachable',
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'factoryservice' => 'Modules\\Xot\\Services\\FactoryService',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'newFactory',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Create a new factory instance for the model.
     *
     * @return \\Illuminate\\Database\\Eloquent\\Factories\\Factory
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'cachable' => 'GeneaLabs\\LaravelModelCaching\\Traits\\Cachable',
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'factoryservice' => 'Modules\\Xot\\Services\\FactoryService',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\BaseModelLang.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\BaseModelLang',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * Class BaseModelLang.
 *
 * @property string $post_type
 */',
                        'namespace' => 'Modules\\ExtraField\\Models',
                        'uses' => [
                            'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                            'model' => 'Illuminate\\Database\\Eloquent\\Model',
                            'linkedtrait' => 'Modules\\Lang\\Models\\Traits\\LinkedTrait',
                            'updater' => 'Modules\\Xot\\Traits\\Updater',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => true,
                    'final' => false,
                    'extends' => 'Illuminate\\Database\\Eloquent\\Model',
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Modules\\Xot\\Traits\\Updater',
                        1 => 'Modules\\Lang\\Models\\Traits\\LinkedTrait',
                        2 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'casts',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var array<string, string>
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'linkedtrait' => 'Modules\\Lang\\Models\\Traits\\LinkedTrait',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'dates',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var string[]
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'linkedtrait' => 'Modules\\Lang\\Models\\Traits\\LinkedTrait',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'primaryKey',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var string
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'linkedtrait' => 'Modules\\Lang\\Models\\Traits\\LinkedTrait',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'incrementing',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var bool
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'linkedtrait' => 'Modules\\Lang\\Models\\Traits\\LinkedTrait',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'hidden',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var array<int, string>
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'linkedtrait' => 'Modules\\Lang\\Models\\Traits\\LinkedTrait',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'timestamps',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var bool
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'linkedtrait' => 'Modules\\Lang\\Models\\Traits\\LinkedTrait',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\BaseMorphPivot.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\BaseMorphPivot',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * Class BaseMorphPivot.
 */',
                        'namespace' => 'Modules\\ExtraField\\Models',
                        'uses' => [
                            'morphpivot' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphPivot',
                            'updater' => 'Modules\\Xot\\Traits\\Updater',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => true,
                    'final' => false,
                    'extends' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphPivot',
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Modules\\Xot\\Traits\\Updater',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'connection',
                            ],
                            'phpDoc' => null,
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'appends',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var array
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'morphpivot' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphPivot',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'primaryKey',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var string
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'morphpivot' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphPivot',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'incrementing',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var bool
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'morphpivot' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphPivot',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'timestamps',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var bool
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'morphpivot' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphPivot',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'dates',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var string[]
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'morphpivot' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphPivot',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'fillable',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var string[]
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'morphpivot' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphPivot',
                                    'updater' => 'Modules\\Xot\\Traits\\Updater',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Contracts\\HasExtraFieldGroupsContract.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldGroupsContract',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * @property string                                                                                    $name
 * @property EloquentCollection<int, ExtraField>                                                       $extraFields
 * @property EloquentCollection<int, Consent>                                                          $consents
 * @property \\Illuminate\\Database\\Eloquent\\Collection<int, \\Modules\\ExtraField\\Models\\ExtraFieldGroup> $extraFieldGroups
 */',
                        'namespace' => 'Modules\\ExtraField\\Models\\Contracts',
                        'uses' => [
                            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
                            'morphtomany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                            'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                            'consent' => 'Modules\\PFed\\Models\\Consent',
                            'modelcontract' => 'Modules\\Xot\\Contracts\\ModelContract',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'extends' => [
                        0 => 'Modules\\Xot\\Contracts\\ModelContract',
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'userExtraFieldGroups',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'noUserExtraFieldGroups',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'extraFieldGroups',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return MorphToMany<ExtraFieldGroup>
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Contracts',
                                'uses' => [
                                    'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
                                    'morphtomany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'consent' => 'Modules\\PFed\\Models\\Consent',
                                    'modelcontract' => 'Modules\\Xot\\Contracts\\ModelContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'extraFieldsByUserId',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'extraFields',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return MorphToMany<ExtraField>
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Contracts',
                                'uses' => [
                                    'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
                                    'morphtomany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'consent' => 'Modules\\PFed\\Models\\Consent',
                                    'modelcontract' => 'Modules\\Xot\\Contracts\\ModelContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Contracts\\HasExtraFieldsContract.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\Contracts\\HasExtraFieldsContract',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * @property string                              $name
 * @property EloquentCollection<int, ExtraField> $extraFields
 * @property EloquentCollection<int, Consent>    $consents
 */',
                        'namespace' => 'Modules\\ExtraField\\Models\\Contracts',
                        'uses' => [
                            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
                            'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                            'morphtomany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'collection' => 'Illuminate\\Support\\Collection',
                            'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                            'consent' => 'Modules\\PFed\\Models\\Consent',
                            'modelcontract' => 'Modules\\Xot\\Contracts\\ModelContract',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'extends' => [
                        0 => 'Modules\\Xot\\Contracts\\ModelContract',
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'extraFields',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'userExtraFields',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'extraFieldsFromGroups',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return \\Staudenmeir\\EloquentHasManyDeep\\HasManyDeep
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Contracts',
                                'uses' => [
                                    'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
                                    'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                                    'morphtomany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                                    'collection' => 'Illuminate\\Support\\Collection',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                    'consent' => 'Modules\\PFed\\Models\\Consent',
                                    'modelcontract' => 'Modules\\Xot\\Contracts\\ModelContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'noUserExtraFields',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'userExtraFieldGroups',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'noUserExtraFieldGroups',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'extraFieldGroups',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getFavouriteGroups',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Support\\Collection',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'cat_id',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'setFavouriteGroup',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'group_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uuid',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'updateUserExtraField',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'data',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uuid',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        10 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'addExtraField',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'data',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'group_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                3 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'note',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        11 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getProfileExtraFieldOptions',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uuid',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        12 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getProfileExtraFieldGroupsOptions',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uuid',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        13 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getUserExtraFieldValue',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uuid',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        14 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getExtraFieldValue',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Collection',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        15 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getExtraFieldRules',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'form_data',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        16 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getUserExtraFieldGroupsFormData',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uuid',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        17 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getUserExtraFieldFormData',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uuid',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        18 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'addExtraFieldByGroup',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'data',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uuid',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        19 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'updateUserExtraFieldByGroupAndProfileFieldUuid',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uuid_data',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        20 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'updateUserExtraFieldByGroup',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'data',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uuid',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        21 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'updateUserExtraFieldByGroupTest',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'data',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uuid',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraField.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\ExtraField',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * Modules\\ExtraField\\Models\\ExtraField.
 *
 * @property int                                                                                       $id
 * @property string                                                                                    $name
 * @property \\Illuminate\\Support\\Carbon|null                                                           $created_at
 * @property \\Illuminate\\Support\\Carbon|null                                                           $updated_at
 * @property string                                                                                    $type
 * @property array|null                                                                                $rules
 * @property string|null                                                                               $created_by
 * @property string|null                                                                               $updated_by
 * @property array|null                                                                                $options
 * @property string|null                                                                               $attributes
 * @property \\Kalnoy\\Nestedset\\Collection<int, \\Modules\\Blog\\Models\\Category>                          $categories
 * @property int|null                                                                                  $categories_count
 * @property \\Illuminate\\Database\\Eloquent\\Collection<int, \\Modules\\ExtraField\\Models\\ExtraFieldGroup> $extraFieldGroups
 * @property int|null                                                                                  $extra_field_groups_count
 * @property \\Modules\\ExtraField\\Models\\ExtraFieldMorph|null                                           $extraFieldMorph
 * @property \\Illuminate\\Database\\Eloquent\\Collection<int, \\Modules\\ExtraField\\Models\\ExtraFieldGroup> $groups
 * @property int|null                                                                                  $groups_count
 *
 * @method static \\Modules\\ExtraField\\Database\\Factories\\ExtraFieldFactory factory($count = null, $state = [])
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraField         newModelQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraField         newQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraField         query()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraField         whereAttributes($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraField         whereCreatedAt($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraField         whereCreatedBy($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraField         whereId($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraField         whereName($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraField         whereOptions($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraField         whereRules($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraField         whereType($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraField         whereUpdatedAt($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraField         whereUpdatedBy($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraField         withAllCategories($categories)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraField         withAnyCategories($categories)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraField         withCategories($categories)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraField         withoutAnyCategories()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraField         withoutCategories($categories)
 *
 * @mixin \\Eloquent
 */',
                        'namespace' => 'Modules\\ExtraField\\Models',
                        'uses' => [
                            'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                            'morphtomany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'hascategory' => 'Modules\\Blog\\Models\\Traits\\HasCategory',
                            'fielddata' => 'Modules\\UI\\Datas\\FieldData',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\ExtraField\\Models\\BaseModel',
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Modules\\Blog\\Models\\Traits\\HasCategory',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'fillable',
                            ],
                            'phpDoc' => null,
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'casts',
                            ],
                            'phpDoc' => null,
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'extraFieldMorph',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'extraFieldGroups',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'groups',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'toData',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Modules\\UI\\Datas\\FieldData',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldGroup.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * Modules\\ExtraField\\Models\\ExtraFieldGroup.
 *
 * @property int                                                                                            $id
 * @property mixed|null                                                                                     $name
 * @property \\Illuminate\\Support\\Carbon|null                                                                $created_at
 * @property \\Illuminate\\Support\\Carbon|null                                                                $updated_at
 * @property string|null                                                                                    $created_by
 * @property string|null                                                                                    $updated_by
 * @property int|null                                                                                       $cardinality
 * @property string|null                                                                                    $description
 * @property \\Kalnoy\\Nestedset\\Collection<int, \\Modules\\Blog\\Models\\Category>                               $categories
 * @property int|null                                                                                       $categories_count
 * @property \\Illuminate\\Database\\Eloquent\\Collection<int, \\Modules\\ExtraField\\Models\\ExtraFieldGroupMorph> $extraFieldGroupMorphs
 * @property int|null                                                                                       $extra_field_group_morphs_count
 * @property \\Illuminate\\Database\\Eloquent\\Collection<int, \\Modules\\ExtraField\\Models\\ExtraField>           $extraFields
 * @property int|null                                                                                       $extra_fields_count
 * @property \\Illuminate\\Database\\Eloquent\\Collection<int, \\Modules\\ExtraField\\Models\\ExtraField>           $fields
 * @property int|null                                                                                       $fields_count
 * @property \\Illuminate\\Database\\Eloquent\\Collection<int, \\Modules\\ExtraField\\Models\\ExtraFieldGroupMorph> $noUserExtraFieldGroupMorphs
 * @property int|null                                                                                       $no_user_extra_field_group_morphs_count
 * @property \\Illuminate\\Database\\Eloquent\\Collection<int, \\Modules\\ExtraField\\Models\\ExtraField>           $noUserFields
 * @property int|null                                                                                       $no_user_fields_count
 * @property \\Illuminate\\Database\\Eloquent\\Collection<int, \\Modules\\ExtraField\\Models\\ExtraField>           $userFields
 * @property int|null                                                                                       $user_fields_count
 *
 * @method static \\Modules\\ExtraField\\Database\\Factories\\ExtraFieldGroupFactory factory($count = null, $state = [])
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroup         newModelQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroup         newQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroup         query()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroup         whereCardinality($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroup         whereCreatedAt($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroup         whereCreatedBy($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroup         whereDescription($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroup         whereId($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroup         whereName($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroup         whereUpdatedAt($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroup         whereUpdatedBy($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroup         withAllCategories($categories)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroup         withAnyCategories($categories)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroup         withCategories($categories)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroup         withPivotFields($model_type, $model_id)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroup         withoutAnyCategories()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroup         withoutCategories($categories)
 *
 * @mixin \\Eloquent
 */',
                        'namespace' => 'Modules\\ExtraField\\Models',
                        'uses' => [
                            'model' => 'Illuminate\\Database\\Eloquent\\Model',
                            'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                            'morphtomany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'auth' => 'Illuminate\\Support\\Facades\\Auth',
                            'hascategory' => 'Modules\\Blog\\Models\\Traits\\HasCategory',
                            'profileservice' => 'Modules\\LU\\Services\\ProfileService',
                            'fielddata' => 'Modules\\UI\\Datas\\FieldData',
                            'datacollection' => 'Spatie\\LaravelData\\DataCollection',
                            'hastranslations' => 'Spatie\\Translatable\\HasTranslations',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\ExtraField\\Models\\BaseModel',
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Modules\\Blog\\Models\\Traits\\HasCategory',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'fillable',
                            ],
                            'phpDoc' => null,
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'with',
                            ],
                            'phpDoc' => null,
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'fields',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'extraFields',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'noUserFields',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'userFields',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'extraFieldGroupMorphs',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'noUserExtraFieldGroupMorphs',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'userExtraFieldGroupMorphs',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'scopeWithPivotFields',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
      * @param \\Illuminate\\Database\\Eloquent\\Builder $query
      * @param string                                $model_type
      * @param string                                $model_id
      *
      * @return \\Illuminate\\Database\\Eloquent\\Builder
      */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                                    'morphtomany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'hascategory' => 'Modules\\Blog\\Models\\Traits\\HasCategory',
                                    'profileservice' => 'Modules\\LU\\Services\\ProfileService',
                                    'fielddata' => 'Modules\\UI\\Datas\\FieldData',
                                    'datacollection' => 'Spatie\\LaravelData\\DataCollection',
                                    'hastranslations' => 'Spatie\\Translatable\\HasTranslations',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'query',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_type',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model_id',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldGroupMorph.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * Modules\\ExtraField\\Models\\ExtraFieldGroupMorph.
 *
 * @property int                                             $id
 * @property string|null                                     $model_type
 * @property int|null                                        $model_id
 * @property int|null                                        $user_id
 * @property string|null                                     $created_by
 * @property string|null                                     $updated_by
 * @property \\Illuminate\\Support\\Carbon|null                 $created_at
 * @property \\Illuminate\\Support\\Carbon|null                 $updated_at
 * @property int|null                                        $extra_field_group_id
 * @property array|null                                      $value
 * @property string|null                                     $value_class
 * @property string|null                                     $uuid
 * @property int                                             $favourite
 * @property string|null                                     $note
 * @property int|null                                        $cardinality
 * @property int|null                                        $is_verified
 * @property string|null                                     $token
 * @property \\Modules\\ExtraField\\Models\\ExtraFieldGroup|null $extraFieldGroup
 *
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph newModelQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph newQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph query()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph whereCardinality($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph whereCreatedAt($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph whereCreatedBy($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph whereExtraFieldGroupId($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph whereFavourite($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph whereId($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph whereIsVerified($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph whereModelId($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph whereModelType($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph whereNote($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph whereToken($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph whereUpdatedAt($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph whereUpdatedBy($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph whereUserId($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph whereUuid($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph whereValue($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldGroupMorph whereValueClass($value)
 *
 * @mixin \\Eloquent
 */',
                        'namespace' => 'Modules\\ExtraField\\Models',
                        'uses' => [
                            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                            'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                            'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                            'auth' => 'Illuminate\\Support\\Facades\\Auth',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\ExtraField\\Models\\BaseMorphPivot',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'fillable',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var string[]
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                                    'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                                    'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'casts',
                            ],
                            'phpDoc' => null,
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'extraFieldGroup',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\ExtraFieldMorph.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\ExtraFieldMorph',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * Modules\\ExtraField\\Models\\ExtraFieldMorph.
 *
 * @property int                                                                              $id
 * @property string|null                                                                      $model_type
 * @property int|null                                                                         $model_id
 * @property int|null                                                                         $user_id
 * @property string|null                                                                      $created_by
 * @property string|null                                                                      $updated_by
 * @property \\Illuminate\\Support\\Carbon|null                                                  $created_at
 * @property \\Illuminate\\Support\\Carbon|null                                                  $updated_at
 * @property int|null                                                                         $extra_field_id
 * @property string|null                                                                      $value
 * @property string|null                                                                      $value_class
 * @property string|null                                                                      $uuid
 * @property int                                                                              $favourite
 * @property string|null                                                                      $note
 * @property array|null                                                                       $rules
 * @property \\Illuminate\\Database\\Eloquent\\Collection<int, \\Modules\\Activity\\Models\\Activity> $activities
 * @property int|null                                                                         $activities_count
 * @property \\Modules\\ExtraField\\Models\\ExtraField|null                                       $extraField
 *
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldMorph newModelQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldMorph newQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldMorph query()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldMorph whereCreatedAt($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldMorph whereCreatedBy($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldMorph whereExtraFieldId($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldMorph whereFavourite($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldMorph whereId($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldMorph whereModelId($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldMorph whereModelType($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldMorph whereNote($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldMorph whereRules($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldMorph whereUpdatedAt($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldMorph whereUpdatedBy($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldMorph whereUserId($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldMorph whereUuid($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldMorph whereValue($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|ExtraFieldMorph whereValueClass($value)
 *
 * @mixin \\Eloquent
 */',
                        'namespace' => 'Modules\\ExtraField\\Models',
                        'uses' => [
                            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                            'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                            'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                            'auth' => 'Illuminate\\Support\\Facades\\Auth',
                            'logoptions' => 'Spatie\\Activitylog\\LogOptions',
                            'logsactivity' => 'Spatie\\Activitylog\\Traits\\LogsActivity',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\ExtraField\\Models\\BaseMorphPivot',
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Spatie\\Activitylog\\Traits\\LogsActivity',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'fillable',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var string[]
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                                    'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                                    'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'logoptions' => 'Spatie\\Activitylog\\LogOptions',
                                    'logsactivity' => 'Spatie\\Activitylog\\Traits\\LogsActivity',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'casts',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var array<string, string>
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                                    'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                                    'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'logoptions' => 'Spatie\\Activitylog\\LogOptions',
                                    'logsactivity' => 'Spatie\\Activitylog\\Traits\\LogsActivity',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'userValue',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented function.
     *
     * @return mixed
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                                    'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                                    'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'logoptions' => 'Spatie\\Activitylog\\LogOptions',
                                    'logsactivity' => 'Spatie\\Activitylog\\Traits\\LogsActivity',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'updateUserValue',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented function.
     *
     * @param mixed $value
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                                    'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                                    'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'logoptions' => 'Spatie\\Activitylog\\LogOptions',
                                    'logsactivity' => 'Spatie\\Activitylog\\Traits\\LogsActivity',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'createUserValue',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Undocumented function.
     *
     * @param mixed $value
     */',
                                'namespace' => 'Modules\\ExtraField\\Models',
                                'uses' => [
                                    'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                                    'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                                    'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'logoptions' => 'Spatie\\Activitylog\\LogOptions',
                                    'logsactivity' => 'Spatie\\Activitylog\\Traits\\LogsActivity',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user_id',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'uuid',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getActivitylogOptions',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Spatie\\Activitylog\\LogOptions',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'extraField',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\Actions\\ExtraFieldsAction.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\Panels\\Actions\\ExtraFieldsAction',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Cms\\Models\\Panels\\Actions\\XotBasePanelAction',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'onItem',
                            ],
                            'phpDoc' => null,
                            'type' => 'bool',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'icon',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'html',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model',
                            ],
                            'phpDoc' => null,
                            'type' => 'Illuminate\\Database\\Eloquent\\Model',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => '__construct',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model',
                                    'type' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'handle',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\Actions\\UserExtraFieldsAction.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\Panels\\Actions\\UserExtraFieldsAction',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Cms\\Models\\Panels\\Actions\\XotBasePanelAction',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'onItem',
                            ],
                            'phpDoc' => null,
                            'type' => 'bool',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'icon',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'html',
                            ],
                            'phpDoc' => null,
                            'type' => 'array',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model',
                            ],
                            'phpDoc' => null,
                            'type' => 'Illuminate\\Database\\Eloquent\\Model',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => '__construct',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'model',
                                    'type' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'handle',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldGroupMorphPanel.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\Panels\\ExtraFieldGroupMorphPanel',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The model the resource corresponds to.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroupmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => true,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'title',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The single value that should be used to represent the resource when being displayed.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroupmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => true,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'search',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The columns that should be searched.
     *
     * @var array
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroupmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => true,
                            'private' => false,
                            'static' => true,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'with',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The relationships that should be eager loaded on index queries.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroupmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'search',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'optionLabel',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * on select the option label.
     *
     * @param ExtraFieldGroupMorph $row
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroupmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'string',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'row',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'indexNav',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * index navigation.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroupmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => '?Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'indexQuery',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Build an "index" query for the given resource.
     *
     * @param RowsContract $query
     *
     * @return RowsContract
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroupmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'data',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'query',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'fields',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the fields displayed by the resource.
        \'value\'=>\'..\',
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroupmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'tabs',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the tabs available.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroupmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        10 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'cards',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the cards available for the request.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroupmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        11 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'filters',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the filters available for the resource.
     *
     * @param \\Illuminate\\Http\\Request $request
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroupmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => '?Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        12 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'lenses',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the lenses available for the resource.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroupmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        13 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'actions',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the actions available for the resource.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroupmorph' => 'Modules\\ExtraField\\Models\\ExtraFieldGroupMorph',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldGroupPanel.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\Panels\\ExtraFieldGroupPanel',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The model the resource corresponds to.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => true,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'title',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The single value that should be used to represent the resource when being displayed.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => true,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'optionLabel',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * on select the option label.
     *
     * @param ExtraFieldGroup $row
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'string',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'row',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'indexNav',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * index navigation.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => '?Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'indexQuery',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Build an "index" query for the given resource.
     *
     * @param RowsContract $query
     *
     * @return RowsContract
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'data',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'query',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'fields',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the fields displayed by the resource.
        \'value\'=>\'..\',
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'infoCategories',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'tabs',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the tabs available.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'cards',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the cards available for the request.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'filters',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the filters available for the resource.
     *
     * @param \\Illuminate\\Http\\Request $request
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => '?Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        10 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'lenses',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the lenses available for the resource.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        11 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'actions',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the actions available for the resource.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafield' => 'Modules\\ExtraField\\Models\\ExtraField',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldMorphPanel.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\Panels\\ExtraFieldMorphPanel',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The model the resource corresponds to.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => true,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'title',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The single value that should be used to represent the resource when being displayed.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => true,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'search',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The columns that should be searched.
     *
     * @var array
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => true,
                            'private' => false,
                            'static' => true,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'with',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The relationships that should be eager loaded on index queries.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'search',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'optionId',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * on select the option id.
     *
     * quando aggiungi un campo select, è il numero della chiave
     * che viene messo come valore su value="id"
     *
     * @param \\Modules\\ExtraField\\Models\\ExtraFieldMorph $row
     *
     * @return int|string|null
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'row',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'optionLabel',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * on select the option label.
     *
     * @param \\Modules\\ExtraField\\Models\\ExtraFieldMorph $row
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'string',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'row',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'indexNav',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * index navigation.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => '?Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'indexQuery',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Build an "index" query for the given resource.
     *
     * @param RowsContract $query
     *
     * @return RowsContract
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'data',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'query',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'fields',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the fields displayed by the resource.
        \'value\'=>\'..\',
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        10 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'tabs',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the tabs available.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        11 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'cards',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the cards available for the request.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        12 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'filters',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the filters available for the resource.
     *
     * @param \\Illuminate\\Http\\Request $request
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => '?Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        13 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'lenses',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the lenses available for the resource.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        14 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'actions',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the actions available for the resource.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\ExtraFieldPanel.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\Panels\\ExtraFieldPanel',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'model',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The model the resource corresponds to.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'category' => 'Modules\\Blog\\Models\\Category',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'getruleswithparamsaction' => 'Modules\\UI\\Actions\\GetRulesWithParamsAction',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => true,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'title',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The single value that should be used to represent the resource when being displayed.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'category' => 'Modules\\Blog\\Models\\Category',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'getruleswithparamsaction' => 'Modules\\UI\\Actions\\GetRulesWithParamsAction',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => true,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'search',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The columns that should be searched.
     *
     * @var array
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'category' => 'Modules\\Blog\\Models\\Category',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'getruleswithparamsaction' => 'Modules\\UI\\Actions\\GetRulesWithParamsAction',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => true,
                            'private' => false,
                            'static' => true,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'with',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The relationships that should be eager loaded on index queries.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'category' => 'Modules\\Blog\\Models\\Category',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'getruleswithparamsaction' => 'Modules\\UI\\Actions\\GetRulesWithParamsAction',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'search',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'optionLabel',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * on select the option label.
     *
     * @param \\Modules\\ExtraField\\Models\\ExtraField $row
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'category' => 'Modules\\Blog\\Models\\Category',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'getruleswithparamsaction' => 'Modules\\UI\\Actions\\GetRulesWithParamsAction',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'string',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'row',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'indexNav',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * index navigation.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'category' => 'Modules\\Blog\\Models\\Category',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'getruleswithparamsaction' => 'Modules\\UI\\Actions\\GetRulesWithParamsAction',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => '?Illuminate\\Contracts\\Support\\Renderable',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'indexQuery',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Build an "index" query for the given resource.
     *
     * @param RowsContract $query
     *
     * @return RowsContract
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'category' => 'Modules\\Blog\\Models\\Category',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'getruleswithparamsaction' => 'Modules\\UI\\Actions\\GetRulesWithParamsAction',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'data',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'query',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'fields',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the fields displayed by the resource.
        \'value\'=>\'..\',
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'category' => 'Modules\\Blog\\Models\\Category',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'getruleswithparamsaction' => 'Modules\\UI\\Actions\\GetRulesWithParamsAction',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'tabs',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the tabs available.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'category' => 'Modules\\Blog\\Models\\Category',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'getruleswithparamsaction' => 'Modules\\UI\\Actions\\GetRulesWithParamsAction',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        10 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'cards',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the cards available for the request.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'category' => 'Modules\\Blog\\Models\\Category',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'getruleswithparamsaction' => 'Modules\\UI\\Actions\\GetRulesWithParamsAction',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        11 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'filters',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the filters available for the resource.
     *
     * @param \\Illuminate\\Http\\Request $request
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'category' => 'Modules\\Blog\\Models\\Category',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'getruleswithparamsaction' => 'Modules\\UI\\Actions\\GetRulesWithParamsAction',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => '?Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        12 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'lenses',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the lenses available for the resource.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'category' => 'Modules\\Blog\\Models\\Category',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'getruleswithparamsaction' => 'Modules\\UI\\Actions\\GetRulesWithParamsAction',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        13 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'actions',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the actions available for the resource.
     */',
                                'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                                'uses' => [
                                    'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'category' => 'Modules\\Blog\\Models\\Category',
                                    'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                                    'extrafieldgroup' => 'Modules\\ExtraField\\Models\\ExtraFieldGroup',
                                    'getruleswithparamsaction' => 'Modules\\UI\\Actions\\GetRulesWithParamsAction',
                                    'rowscontract' => 'Modules\\Xot\\Contracts\\RowsContract',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\Policies\\EventPanelPolicy.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\Panels\\Policies\\EventPanelPolicy',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * Class EventPanelPolicy.
 */',
                        'namespace' => 'Modules\\ExtraField\\Models\\Panels\\Policies',
                        'uses' => [
                            'xotbasepanelpolicy' => 'Modules\\Cms\\Models\\Panels\\Policies\\XotBasePanelPolicy',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Cms\\Models\\Panels\\Policies\\XotBasePanelPolicy',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\Policies\\ExtraFieldGroupMorphPanelPolicy.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\Panels\\Policies\\ExtraFieldGroupMorphPanelPolicy',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Cms\\Models\\Panels\\Policies\\XotBasePanelPolicy',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\Policies\\ExtraFieldGroupPanelPolicy.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\Panels\\Policies\\ExtraFieldGroupPanelPolicy',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Cms\\Models\\Panels\\Policies\\XotBasePanelPolicy',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\Policies\\ExtraFieldMorphPanelPolicy.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\Panels\\Policies\\ExtraFieldMorphPanelPolicy',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Cms\\Models\\Panels\\Policies\\XotBasePanelPolicy',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\Policies\\ExtraFieldPanelPolicy.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\Panels\\Policies\\ExtraFieldPanelPolicy',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Cms\\Models\\Panels\\Policies\\XotBasePanelPolicy',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'index',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'bool',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => '?Modules\\Xot\\Contracts\\UserContract',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'panel',
                                    'type' => 'Modules\\Cms\\Contracts\\PanelContract',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\Policies\\_ModulePanelPolicy.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\Panels\\Policies\\_ModulePanelPolicy',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Cms\\Models\\Panels\\Policies\\XotBasePanelPolicy',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Panels\\_ModulePanel.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Models\\Panels\\_ModulePanel',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * Class _ModulePanel.
 */',
                        'namespace' => 'Modules\\ExtraField\\Models\\Panels',
                        'uses' => [
                            'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'actions',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Models\\Traits\\HasExtraFieldGroups.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state([
                    'traitName' => 'Modules\\ExtraField\\Models\\Traits\\HasExtraFieldGroups',
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Providers\\ExtraFieldServiceProvider.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Providers\\ExtraFieldServiceProvider',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * Undocumented class.
 */',
                        'namespace' => 'Modules\\ExtraField\\Providers',
                        'uses' => [
                            'xotbaseserviceprovider' => 'Modules\\Xot\\Providers\\XotBaseServiceProvider',
                            'bladeservice' => 'Modules\\Xot\\Services\\BladeService',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Xot\\Providers\\XotBaseServiceProvider',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'module_dir',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'module_ns',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'module_name',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => true,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'bootCallback',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'registerCallback',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'F:\\var\\www\\_bases\\_modules\\module_extrafield\\Providers\\RouteServiceProvider.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\ExtraField\\Providers\\RouteServiceProvider',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * Class RouteServiceProvider.
 */',
                        'namespace' => 'Modules\\ExtraField\\Providers',
                        'uses' => [
                            'xotbaserouteserviceprovider' => 'Modules\\Xot\\Providers\\XotBaseRouteServiceProvider',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Modules\\Xot\\Providers\\XotBaseRouteServiceProvider',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'moduleNamespace',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'module_dir',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'module_ns',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
        ];
    },
];
