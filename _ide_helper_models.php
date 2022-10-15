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
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $usertype
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsertype($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\cart
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $name
 * @property string $email
 * @property string $title
 * @property string $decription
 * @property string $image
 * @property string $price
 * @property string $discunt_price
 * @property string $quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $product_id
 * @method static \Illuminate\Database\Eloquent\Builder|cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|cart query()
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereDecription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereDiscuntPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cart whereUserId($value)
 * @mixin \Eloquent
 */
	class cart extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\catagory
 *
 * @property int $id
 * @property string $catagory
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|catagory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|catagory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|catagory query()
 * @method static \Illuminate\Database\Eloquent\Builder|catagory whereCatagory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catagory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catagory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catagory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class catagory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\order
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $user_id
 * @property string|null $product_title
 * @property string|null $price
 * @property string|null $quentity
 * @property string|null $product_id
 * @property string|null $product_image
 * @property string|null $payment_status
 * @property string|null $delevery_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|order query()
 * @method static \Illuminate\Database\Eloquent\Builder|order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereDeleveryStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereProductImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereProductTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereQuentity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereUserId($value)
 * @mixin \Eloquent
 */
	class order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\product
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $decription
 * @property string|null $image
 * @property string|null $price
 * @property string|null $discunt_price
 * @property string|null $quantity
 * @property string|null $catagory
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|product query()
 * @method static \Illuminate\Database\Eloquent\Builder|product whereCatagory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product whereDecription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product whereDiscuntPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|product whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class product extends \Eloquent {}
}

