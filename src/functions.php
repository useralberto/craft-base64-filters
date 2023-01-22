<?php

declare(strict_types=1);

namespace useralberto\craftbase64filters;
use craft\helpers\StringHelper;

/**
 * Encode String
 *
 * @param mixed $str
 *
 * @return string
 */
function stringEnc(string $str): string
{
  return base64_encode($str);
}

/**
 * Decode String
 *
 * @param mixed $str
 *
 * @return string
 */

function stringDec(string $str): string
{
  return base64_decode($str);
}

/**
 * Encrypts and base64-encodes String
 *
 * @param mixed $str
 *
 * @return string
 */

function stringEncry(string $str): string
{
  return StringHelper::encenc($str);
}

/**
 * Base64-decodes and decrypts
 *
 * @param mixed $str
 *
 * @return string
 */

function stringDecry(string $str): string
{
  return StringHelper::decdec($str);
}
