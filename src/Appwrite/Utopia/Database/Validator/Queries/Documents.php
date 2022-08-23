<?php

namespace Appwrite\Utopia\Database\Validator\Queries;

use Appwrite\Utopia\Database\Validator\IndexedQueries;
use Appwrite\Utopia\Database\Validator\Query\Limit;
use Appwrite\Utopia\Database\Validator\Query\Offset;
use Appwrite\Utopia\Database\Validator\Query\Cursor;
use Appwrite\Utopia\Database\Validator\Query\Filter;
use Appwrite\Utopia\Database\Validator\Query\Order;
use Utopia\Database\Database;
use Utopia\Database\Document;

class Documents extends IndexedQueries
{
    /**
     * Expression constructor
     *
     * @param Document[] $attributes
     * @param Document[] $indexes
     */
    public function __construct(array $attributes, array $indexes)
    {
        $validators = [
            new Limit(),
            new Offset(),
            new Cursor(),
            new Filter($attributes),
            new Order($attributes),
        ];

        parent::__construct($attributes, $indexes, ...$validators);
    }
}
