<?php
return [
    'service_manager' => [
        'factories' => [
            \Connect\V1\Rest\Authentify\AuthentifyResource::class => \Connect\V1\Rest\Authentify\AuthentifyResourceFactory::class,
            \Connect\V1\Rest\User\UserResource::class => \Connect\V1\Rest\User\UserResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'connect.rest.authentify' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/authentify',
                    'defaults' => [
                        'controller' => 'Connect\\V1\\Rest\\Authentify\\Controller',
                    ],
                ],
            ],
            'connect.rest.user' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/user[/:user_id]',
                    'defaults' => [
                        'controller' => 'Connect\\V1\\Rest\\User\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'connect.rest.authentify',
            1 => 'connect.rest.user',
        ],
        'default_version' => 1,
    ],
    'zf-rest' => [
        'Connect\\V1\\Rest\\Authentify\\Controller' => [
            'listener' => \Connect\V1\Rest\Authentify\AuthentifyResource::class,
            'route_name' => 'connect.rest.authentify',
            'route_identifier_name' => 'authentify_id',
            'collection_name' => 'authentify',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
                3 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Connect\V1\Rest\Authentify\AuthentifyEntity::class,
            'collection_class' => \Connect\V1\Rest\Authentify\AuthentifyCollection::class,
            'service_name' => 'authentify',
        ],
        'Connect\\V1\\Rest\\User\\Controller' => [
            'listener' => \Connect\V1\Rest\User\UserResource::class,
            'route_name' => 'connect.rest.user',
            'route_identifier_name' => 'user_id',
            'collection_name' => 'user',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Connect\V1\Rest\User\UserEntity::class,
            'collection_class' => \Connect\V1\Rest\User\UserCollection::class,
            'service_name' => 'user',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Connect\\V1\\Rest\\Authentify\\Controller' => 'Json',
            'Connect\\V1\\Rest\\User\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Connect\\V1\\Rest\\Authentify\\Controller' => [
                0 => 'application/vnd.connect.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Connect\\V1\\Rest\\User\\Controller' => [
                0 => 'application/vnd.connect.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Connect\\V1\\Rest\\Authentify\\Controller' => [
                0 => 'application/vnd.connect.v1+json',
                1 => 'application/json',
            ],
            'Connect\\V1\\Rest\\User\\Controller' => [
                0 => 'application/vnd.connect.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \Connect\V1\Rest\Authentify\AuthentifyEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'connect.rest.authentify',
                'route_identifier_name' => 'authentify_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \Connect\V1\Rest\Authentify\AuthentifyCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'connect.rest.authentify',
                'route_identifier_name' => 'authentify_id',
                'is_collection' => true,
            ],
            \Connect\V1\Rest\User\UserEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'connect.rest.user',
                'route_identifier_name' => 'user_id',
                'hydrator' => \Zend\Hydrator\ClassMethods::class,
            ],
            \Connect\V1\Rest\User\UserCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'connect.rest.user',
                'route_identifier_name' => 'user_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-mvc-auth' => [
        'authorization' => [
            'Connect\\V1\\Rest\\Authentify\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
        ],
    ],
    'zf-content-validation' => [
        'Connect\\V1\\Rest\\Authentify\\Controller' => [
            'input_filter' => 'Connect\\V1\\Rest\\Authentify\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Connect\\V1\\Rest\\Authentify\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'uuid',
                'description' => 'User UUID',
                'field_type' => 'uuid',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'password',
                'description' => 'User\'s password',
                'field_type' => 'string',
            ],
        ],
    ],
];
