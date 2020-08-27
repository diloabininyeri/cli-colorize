<?php

namespace CliColorize;

/**
 * Class Cli
 * @package CliColorize
 * @method string black(string $text, string $background = null)
 * @method string dark_gray(string $text, string $background = null)
 * @method string green(string $text, string $background = null)
 * @method string light_green(string $text, string $background = null)
 * @method string red(string $text, string $background = null)
 * @method string light_red(string $text, string $background = null)
 * @method string blue(string $text, string $background = null)
 * @method string light_blue(string $text, string $background = null)
 * @method string cyan(string $text, string $background = null)
 * @method string light_cyan(string $text, string $background = null)
 * @method string light_purple(string $text, string $background = null)
 * @method string brown(string $text, string $background = null)
 * @method string white(string $text, string $background = null)
 * @method string purple(string $text, string $background = null)
 */
class Cli
{

    /**
     * @param $string
     * @param null $foreground_color
     * @param null $background_color
     * @return string
     */
    private function textColorize($string, $foreground_color = null, $background_color = null): string
    {
        $returnString = null;

        if (isset(Foreground::COLORS[$foreground_color])) {
            $returnString .= "\033[" . Foreground::COLORS[$foreground_color] . "m";
        }

        if (isset(Background::COLORS[$background_color])) {
            $returnString .= "\033[" . Background::COLORS[$background_color] . "m";
        }
        $returnString .= $string . "\033[0m";

        return $returnString;
    }


    /**
     * @param $name
     * @param $arguments
     * @return string
     */
    public function __call($name, $arguments)
    {
        if (isset($arguments[1])) {
            [$text, $background] = $arguments;
        } else {
            $text = $arguments[0];
        }

        return $this->textColorize($text, $name, $background ?? null);
    }
}
