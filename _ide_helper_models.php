<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $uid
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereUpdatedAt($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models\Acl{
/**
 * App\Models\Acl\AclRoleUser
 *
 * @property int $user_id
 * @property int $acl_role_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Acl\AclRoleUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Acl\AclRoleUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Acl\AclRoleUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Acl\AclRoleUser whereAclRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Acl\AclRoleUser whereUserId($value)
 */
	class AclRoleUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $uid
 * @property string $firstname
 * @property string|null $lastname
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $avatar
 * @property bool $is_admin
 * @property string $language
 * @property bool $is_active
 * @property string|null $notes
 * @property string|null $phone_number
 * @property string|null $mobile_number
 * @property string|null $last_login_at
 * @property \Illuminate\Support\Carbon|null $mobile_verified_at
 * @property string|null $currency
 * @property string|null $zipcode
 * @property string|null $city
 * @property string|null $state
 * @property string|null $country
 * @property string|null $address_number
 * @property string|null $neighborhood
 * @property string|null $street_address
 * @property string|null $vat_number
 * @property string|null $company_name
 * @property string|null $type_person
 * @property \Illuminate\Support\Carbon|null $birth
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read string $name
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AclRole[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereAddressNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereLastLoginAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereMobileNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereMobileVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereNeighborhood($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereStreetAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereTypePerson($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereVatNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereZipcode($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AclPermissionAclRole
 *
 * @property string $uid
 * @property int $acl_permission_id
 * @property int $acl_role_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclPermissionAclRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclPermissionAclRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclPermissionAclRole query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclPermissionAclRole whereAclPermissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclPermissionAclRole whereAclRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclPermissionAclRole whereUid($value)
 */
	class AclPermissionAclRole extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AclRole
 *
 * @property int $id
 * @property string $uid
 * @property string $name
 * @property string $label
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AclPermission[] $aclPermissions
 * @property-read int|null $acl_permissions_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclRole query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclRole whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclRole whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclRole whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclRole whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclRole whereUpdatedAt($value)
 */
	class AclRole extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AclPermission
 *
 * @property int $id
 * @property string $uid
 * @property string $name
 * @property string $label
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AclRole[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclPermission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclPermission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclPermission query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclPermission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclPermission whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclPermission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclPermission whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclPermission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclPermission whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AclPermission whereUpdatedAt($value)
 */
	class AclPermission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductCategory
 *
 * @property int $id
 * @property string $uid
 * @property string $name
 * @property string $color
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductCategory whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductCategory whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProductCategory whereUpdatedAt($value)
 */
	class ProductCategory extends \Eloquent {}
}

