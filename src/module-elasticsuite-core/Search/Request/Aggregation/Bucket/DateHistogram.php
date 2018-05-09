<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Smile ElasticSuite to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile\ElasticsuiteCore
 * @author    Aurelien FOUCRET <aurelien.foucret@smile.fr>
 * @copyright 2018 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */

namespace Smile\ElasticsuiteCore\Search\Request\Aggregation\Bucket;

use Smile\ElasticsuiteCore\Search\Request\BucketInterface;
use Smile\ElasticsuiteCore\Search\Request\QueryInterface;

/**
 * Date historgram bucket implementation.
 *
 * @category Smile
 * @package  Smile\ElasticsuiteCore
 * @author   Aurelien FOUCRET <aurelien.foucret@smile.fr>
 */
class DateHistogram extends Histogram
{
    /**
     * Constructor.
     *
     * @param string            $name         Bucket name.
     * @param string            $field        Bucket field.
     * @param Metric[]          $metrics      Bucket metrics.
     * @param BucketInterface[] $childBuckets Child buckets.
     * @param string            $nestedPath   Nested path for nested bucket.
     * @param QueryInterface    $filter       Bucket filter.
     * @param QueryInterface    $nestedFilter Nested filter for the bucket.
     * @param integer           $interval     Histogram interval.
     * @param integer           $minDocCount  Histogram min doc count.
     */
    public function __construct(
        $name,
        $field,
        array $metrics,
        array $childBuckets = [],
        $nestedPath = null,
        QueryInterface $filter = null,
        QueryInterface $nestedFilter = null,
        $interval = "1d",
        $minDocCount = 0
    ) {
        parent::__construct($name, $field, $metrics, $childBuckets, $nestedPath, $filter, $nestedFilter, $interval, $minDocCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {
        return BucketInterface::TYPE_DATE_HISTOGRAM;
    }
}
