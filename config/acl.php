<?php

return [
    'roles'       => [
        ['name' => 'admin', 'label' => 'Administrador'],
    ],
    'permissions' => [
        ['name' => 'list_acl_roles', 'label' => 'Listar Perfis'],
        ['name' => 'store_acl_roles', 'label' => 'Criar Perfis'],
        ['name' => 'update_acl_roles', 'label' => 'Editar Perfis'],
        ['name' => 'show_acl_roles', 'label' => 'Visualizar Perfis'],
        ['name' => 'destroy_acl_roles', 'label' => 'Deletar Perfis'],

        ['name' => 'list_acl_permissions', 'label' => 'Listar Permissões'],
        ['name' => 'store_acl_permissions', 'label' => 'Criar Permissões'],
        ['name' => 'update_acl_permissions', 'label' => 'Editar Permissões'],
        ['name' => 'show_acl_permissions', 'label' => 'Visualizar Permissões'],
        ['name' => 'destroy_acl_permissions', 'label' => 'Deletar Permissões'],

        ['name' => 'home', 'label' => 'Home'],
        ['name' => 'list_users', 'label' => 'Listar Usuários'],
        ['name' => 'store_users', 'label' => 'Criar Usuários'],
        ['name' => 'update_users', 'label' => 'Editar Usuários'],
        ['name' => 'show_users', 'label' => 'Visualizar Usuários'],
        ['name' => 'destroy_users', 'label' => 'Deletar Usuários'],

        ['name' => 'list_product_categories', 'label' => 'Listar Categorias de Produtos'],
        ['name' => 'store_product_categories', 'label' => 'Criar Categoria de Produtos'],
        ['name' => 'show_product_categories', 'label' => 'Editar Categoria de Produtos'],
        ['name' => 'update_product_categories', 'label' => 'Visualizar Categoria de Produtos'],
        ['name' => 'destroy_product_categories', 'label' => 'Deletar Categoria de Produtos'],

        ['name' => 'list_products', 'label' => 'Listar Produtos'],
        ['name' => 'store_products', 'label' => 'Criar Produtos'],
        ['name' => 'show_products', 'label' => 'Editar Produtos'],
        ['name' => 'update_products', 'label' => 'Visualizar Produtos'],
        ['name' => 'destroy_products', 'label' => 'Deletar Produtos'],
    ],
];
