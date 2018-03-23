<?php

namespace App\Charts\DataTable;

use Carbon\Carbon;
use JK\LaraChartie\Contracts\DataTable;
use JK\LaraChartie\Contracts\Source;
use JK\LaraChartie\DataTable\Type;
use App\Models\User;



class UsersSource implements JK\LaraChartie\Contracts\Source
{

	/**
	 * @param DataTable $dataTable
	 */
	public function columns(DataTable $dataTable)
	{
		$dataTable
			->addColumn(Type::DATE, 'Created At')
			->addStringColumn('Name')
			->addStringColumn('Country');
	}



	/**
	 * @param DataTable $dataTable
	 */
	public function fill(DataTable $dataTable)
	{
		foreach (User::all() as $user) {
			$dataTable->addRow(
				$user->created_at,
				$user->name,
				[
					'value' => $user->email,
					'format' => 'User email is ' . $user->email
				]
			);
		}
	}
}