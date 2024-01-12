<?php

namespace System\Databases\Objects;

use System\Databases\BaseObject;

/**
 * Class Album
 * @package System\Databases\Objects
 * @method static Album[] getAll()
 * @method static Album getById($id)
 */
class Web extends BaseObject
{
  protected static string $table = 'appointment';

  public ?int $id = null;
  public string $name = '';
  public string $email = '';
  public string $startDate = '';
  public string $endDate = '';
  public string $message = '';
}
