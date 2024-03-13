<?php

namespace App\Models\Users;

trait UserModelMethods
{
    /**
     * @param $email
     * @return mixed
     */
    public static function findByEmail( $email ): mixed
    {
        return self::where( 'email', $email )->first();
    }

    /**
     * @param $user_id
     * @param $tokenName
     * @return mixed
     */
    public static function createTokenByUserId( $user_id, $tokenName ): mixed
    {
        return self::show( $user_id )->createToken( $tokenName );
    }

    /**
     * @param $user_id
     * @return mixed
     */
    public static function deleteToken( $user_id ): mixed
    {
        return self::show( $user_id )->tokens()->delete();
    }
}
