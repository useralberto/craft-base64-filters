<?php

declare(strict_types=1);

namespace useralberto\craftbase64filters;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Twig\TwigFilter;

use function useralberto\craftbase64filters\stringEnc;
use function useralberto\craftbase64filters\stringDec;
use function useralberto\craftbase64filters\stringEncry;
use function useralberto\craftbase64filters\stringDecry;

class Base64FiltersTwigExtension extends AbstractExtension
{
  /**
   * Get Name
   *
   * @return string
   */
  public function getName()
  {
    return "Base64 Filters";
  }

  /**
   * Get TwigFilter
   *
   * @return array
   */
  public function getFilters()
  {
    return [
      new TwigFilter("base64enc", fn(string $str) => stringEnc($str)),
      new TwigFilter("base64dec", fn(string $str) => stringDec($str)),
      new TwigFilter("base64encry", fn(string $str) => stringEncry($str)),
      new TwigFilter("base64decry", fn(string $str) => stringDecry($str)),
    ];
  }

  /**
   * Get Functions
   *
   * @return array
   */
  public function getFunctions()
  {
    return [
      new TwigFunction("base64enc", fn(string $str) => stringEnc($str)),
      new TwigFunction("base64dec", fn(string $str) => stringDec($str)),
      new TwigFunction("base64encry", fn(string $str) => stringEncry($str)),
      new TwigFunction("base64decry", fn(string $str) => stringDecry($str)),
    ];
  }
}
