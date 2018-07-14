<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class LiveSearch extends Controller
{
	function index()
	{

		return view('live_search');
	}

	function getData(Request $request)
	{
		if ($request->ajax()) {
			$output = '';
			$query = $request->get('query');
			if ($query != '') {
				$data = Customer::where('name', 'like', '%' . $query . '%')
					->orWhere('address', 'like', '%' . $query . '%')
					->orWhere('city', 'like', '%' . $query . '%')
					->orWhere('postal_code', 'like', '%' . $query . '%')
					->orWhere('country', 'like', '%' . $query . '%')
					->get();

			} else {
				$data = Customer::
					orderBy('id', 'desc')
					->get();
			}

			$total_row = $data->count();

			if ($total_row > 0) {

				foreach ($data as $row) {
					$output .= '
					<tr>
						<td>' . $row->name . '</td>
						<td>' . $row->address . '</td>
						<td>' . $row->city . '</td>
						<td>' . $row->postal_code . '</td>
						<td>' . $row->country . '</td>
				';
				}
			} else {
				$output = '
				<tr>
					<td align="center" colspan="5">No Data Found</td>
				</tr>
				';
			}
			$data = array(
				'table_data' => $output,
				'total_data' => $total_row
			);

			echo json_encode($data);
		}
	}
}
