<?php


namespace App\queryFilters;

class Active extends Filter
{
    protected function applyFilter($builder)
    {
        // TODO: Implement applyFilter() method.
        return $builder->where($this->filterName(), request($this->filterName()));
    }
}