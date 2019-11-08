<?php


namespace App\queryFilters;

class Sort extends Filter
{

    protected function applyFilter($builder)
    {
        // TODO: Implement applyFilter() method.
        return $builder->orderBy('title', request($this->filterName()));
    }

}