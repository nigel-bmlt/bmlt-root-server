<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $table = 'comdef_meetings_main';
    protected $primaryKey = 'id_bigint';
    public $timestamps = false;
    protected $fillable = [
        'worldid_mixed',
        'service_body_bigint',
        'weekday_tinyint',
        'venue_type',
        'start_time',
        'duration_time',
        'time_zone',
        'formats',
        'lang_enum',
        'longitude',
        'latitude',
    ];

    public function getName()
    {
        return $this->data->where('key', 'meeting_name')->pluck('data_string')->first();
    }

    public function data()
    {
        return $this->hasMany(MeetingData::class, 'meetingid_bigint');
    }
}
