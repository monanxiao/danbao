<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Xmbgjsp extends Model
{
    //
    //操作数据库表
		protected $table = 'items_xmbgjsp_tables';
    //白名单字段
      	protected $fillable = [
								'loan_bank',
                                'items_id',
                                'alteration',
                                'table_status',
                                'created_at'
						    ];

}
