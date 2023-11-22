<?php declare(strict_types=1);

namespace Phpbergen\User;

final class User {

    public function __construct(
      private readonly UserName $userName,
    ) {

    }

}
