<?php

namespace app\models;

use Yii;
use yii\base\Model;

class LeadForm extends Model
{
    public $customer_name;
    public $phone;
    public $location;
    public $unit_type;
    public $service_type;

    public function rules()
    {
        return [
            [['customer_name', 'phone', 'location', 'unit_type', 'service_type'], 'required'],
            [['customer_name', 'phone', 'location', 'unit_type', 'service_type'], 'string', 'max' => 255],
            ['phone', 'match', 'pattern' => '/^[0-9\-\+\(\)\s]+$/', 'message' => 'Invalid phone number format.'],
        ];
    }
}
