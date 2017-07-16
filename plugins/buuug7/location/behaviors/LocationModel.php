<?php namespace Buuug7\Location\Behaviors;


use Buuug7\Location\Models\County;
use Buuug7\Location\Models\Town;
use Buuug7\Location\Models\Village;
use System\Classes\ModelBehavior;

class LocationModel extends ModelBehavior
{

    public function __construct($model)
    {
        parent::__construct($model);
        $model->addFillable([
            'county',
            'county_id',
            'county_code',
            'town',
            'town_id',
            'town_code',
            'village',
            'village_id',
            'village_code'
        ]);
        $model->belongsTo['county'] = ['Buuug7\Location\Models\County'];
        $model->belongsTo['town'] = ['Buuug7\Location\Models\Town'];
        $model->belongsTo['village'] = ['Buuug7\Location\Models\Village'];
    }

    public function getCountyOptions()
    {
        return County::getNameList();
    }

    public function getTownOptions()
    {
        return Town::getNameList($this->model->county_id);
    }

    public function getVillageOptions()
    {
        return Village::getNameList($this->model->town_id);
    }

    public function setCountyCodeAttribute($code)
    {
        if (!$county = County::whereCode($code)->first()) {
            return;
        }
        $this->model->county = $county;
    }

    public function setTownCodeAttribute($code)
    {
        if (!$town = Town::whereCode($code)->first()) {
            return;
        }
        $this->model->town = $town;
    }

    public function setVillageCodeAttribute($code)
    {
        if (!$village = Village::whereCode($code)->first()) {
            return;
        }
        $this->model->village = $village;
    }

    public function getCountyCodeAttribute()
    {
        return $this->model->county ? $this->model->county->code : null;
    }

    public function getTownCodeAttribute()
    {
        return $this->model->town ? $this->model->town->code : null;
    }

    public function getVillageCodeAttribute()
    {
        return $this->model->village ? $this->model->village->code : null;
    }

    public function setCountyIdAttribute($value)
    {
        $this->model->attributes['county_id'] = $value ?: null;
    }

    public function setTownIdAttribute($value)
    {
        $this->model->attributes['town_id'] = $value ?: null;
    }

    public function setVillageIdAttribute($value)
    {
        $this->model->attributes['village_id'] = $value ?: null;
    }
}

