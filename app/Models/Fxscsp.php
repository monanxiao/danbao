<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fxscsp extends Model
{
	//操作数据库表
		protected $table = 'items_fxscsp_tables';
    //白名单字段
      	protected $fillable = [
								'risk_name',
	                            'item_name',
	                            'assure',
	                            'commit',
	                            'content',
	                            'items_id',
	                            'table_status',
	                            'created_at'
						    ];

  
}
