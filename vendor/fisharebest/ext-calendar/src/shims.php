<?php

/**
 * If ext/calendar is not installed, then provide the necessary shims.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2014-2021 Greg Roach
 * @license   This program is free software: you can redistribute it and/or modify
 *            it under the terms of the GNU General Public License as published by
 *            the Free Software Foundation, either version 3 of the License, or
 *            (at your option) any later version.
 *
 *            This program is distributed in the hope that it will be useful,
 *            but WITHOUT ANY WARRANTY; without even the implied warranty of
 *            MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *            GNU General Public License for more details.
 *
 *            You should have received a copy of the GNU General Public License
 *            along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

use Fisharebest\ExtCalendar\Shim;

if (!defined('CAL_GREGORIAN')) {
    Shim::create();

    define('CAL_GREGORIAN', 0);
    define('CAL_JULIAN', 1);
    define('CAL_JEWISH', 2);
    define('CAL_FRENCH', 3);
    define('CAL_NUM_CALS', 4);
    define('CAL_DOW_DAYNO', 0);
    define('CAL_DOW_SHORT', Shim::shouldEmulateBug67960() ? 1 : 2);
    define('CAL_DOW_LONG', Shim::shouldEmulateBug67960() ? 2 : 1);
    define('CAL_MONTH_GREGORIAN_SHORT', 0);
    define('CAL_MONTH_GREGORIAN_LONG', 1);
    define('CAL_MONTH_JULIAN_SHORT', 2);
    define('CAL_MONTH_JULIAN_LONG', 3);
    define('CAL_MONTH_JEWISH', 4);
    define('CAL_MONTH_FRENCH', 5);
    define('CAL_EASTER_DEFAULT', 0);
    define('CAL_EASTER_ROMAN', 1);
    define('CAL_EASTER_ALWAYS_GREGORIAN', 2);
    define('CAL_EASTER_ALWAYS_JULIAN', 3);
    define('CAL_JEWISH_ADD_ALAFIM_GERESH', 2);
    define('CAL_JEWISH_ADD_ALAFIM', 4);
    define('CAL_JEWISH_ADD_GERESHAYIM', 8);

    /**
     * @param int $calendar_id
     * @param int $month
     * @param int $year
     *
     * @return int|bool
     */

    function cal_days_in_month($calendar_id, $month, $year)
    {
        return Shim::calDaysInMonth($calendar_id, $month, $year);
    }

    /**
     * @param int $julian_day
     * @param int $calendar_id
     *
     * @return array|bool
     */
    function cal_from_jd($julian_day, $calendar_id)
    {
        return Shim::calFromJd($julian_day, $calendar_id);
    }

    /**
     * @param int $calendar_id
     *
     * @return array|bool
     */
    function cal_info($calendar_id = -1)
    {
        return Shim::calInfo($calendar_id);
    }

    /**
     * @param int $calendar_id
     * @param int $month
     * @param int $day
     * @param int $year
     *
     * @return int|bool
     */
    function cal_to_jd($calendar_id, $month, $day, $year)
    {
        return Shim::calToJd($calendar_id, $month, $day, $year);
    }

    /**
     * @param int|null $year
     *
     * @return int|bool
     */
    function easter_date($year = null)
    {
        return Shim::easterDate($year ? $year : (int)date('Y'));
    }

    /**
     * @param int|null $year
     * @param int      $method
     *
     * @return int
     */
    function easter_days($year = null, $method = CAL_EASTER_DEFAULT)
    {
        return Shim::easterDays($year ? $year : (int)date('Y'), $method);
    }

    /**
     * @param int $month
     * @param int $day
     * @param int $year
     *
     * @return int
     */
    function FrenchToJD($month, $day, $year)
    {
        return Shim::frenchToJd($month, $day, $year);
    }

    /**
     * @param int $month
     * @param int $day
     * @param int $year
     *
     * @return int
     */
    function GregorianToJD($month, $day, $year)
    {
        return Shim::gregorianToJd($month, $day, $year);
    }

    /**
     * @param int $julian_day
     * @param int $mode
     *
     * @return int|string
     */
    function JDDayOfWeek($julian_day, $mode = CAL_DOW_DAYNO)
    {
        return Shim::jdDayOfWeek($julian_day, $mode);
    }

    /**
     * @param int $julian_day
     * @param int $mode
     *
     * @return string
     */
    function JDMonthName($julian_day, $mode)
    {
        return Shim::jdMonthName($julian_day, $mode);
    }

    /**
     * @param int $julian_day
     *
     * @return string
     */
    function JDToFrench($julian_day)
    {
        return Shim::jdToFrench($julian_day);
    }

    /**
     * @param int $julian_day
     *
     * @return string
     */
    function JDToGregorian($julian_day)
    {
        return Shim::jdToGregorian($julian_day);
    }

    /**
     * @param int $julian_day
     * @param bool $hebrew
     * @param int $flags
     *
     * @return string|bool
     */
    function jdtojewish($julian_day, $hebrew = false, $flags = 0)
    {
        return Shim::jdToJewish($julian_day, $hebrew, $flags);
    }

    /**
     * @param int $julian_day
     *
     * @return string
     */
    function JDToJulian($julian_day)
    {
        return Shim::jdToJulian($julian_day);
    }

    /**
     * @param int $julian_day
     *
     * @return int|false
     */
    function jdtounix($julian_day)
    {
        return Shim::jdToUnix($julian_day);
    }

    /**
     * @param int $month
     * @param int $day
     * @param int $year
     *
     * @return int
     */
    function JewishToJD($month, $day, $year)
    {
        return Shim::jewishToJd($month, $day, $year);
    }

    /**
     * @param int $month
     * @param int $day
     * @param int $year
     *
     * @return int
     */
    function JulianToJD($month, $day, $year)
    {
        return Shim::julianToJd($month, $day, $year);
    }

    /**
     * @param int|null $timestamp
     *
     * @return false|int
     */
    function unixtojd($timestamp = null)
    {
        return Shim::unixToJd($timestamp ? $timestamp : time());
    }
}
