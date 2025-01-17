<?php

/**
 * Stripe integration for modified
 *
 * You can find informations about system classes and development at:
 * https://docs.module-loader.de
 *
 * @author  Robin Wieschendorf <mail@robinwieschendorf.de>
 * @author  Jay Trees <stripe@grandels.email>
 * @link    https://github.com/RobinTheHood/modified-stripe/
 */

declare(strict_types=1);

namespace RobinTheHood\Stripe\Classes\Framework;

/**
 * "xtc_db_query" and "xtc_db_fetch_array" are functions that have global scope, meaning they can be accessed from
 * anywhere within the software. However, in software architecture, it is generally considered good practice to
 * minimize the use of global functions. To adhere to this principle, we have encapsulated the functionality related
 * to database access within a separate class.
 */
class Database
{
    public function query(string $sql)
    {
        $query = xtc_db_query($sql);

        if (!$query) {
            throw new \Exception("Error in Repository SQL Query, you can find more infos in modified wraning logs - $sql");
        }

        return $query;
    }

    public function fetch($query)
    {
        return xtc_db_fetch_array($query);
    }
}
