<?php namespace Shiv\EnrollForm\Models;

use Model;

/**
 * Subscriber Model
 */
class SubscriberImport extends \Backend\Models\ImportModel
{
	protected $rules = [
		'first_name'                    => 'required|between:4,16',
		'last_name'                     => 'between:4,16',
		'email'                         => 'required|email',
		'phone'                         => 'required|numeric',
		'interested_in'                 => 'required|between:4,32',
		'is_subscriber'                 => 'boolean',
		'comment'						=> 'between:4,32',
	];

	public function importData($results, $sessionKey = null)
	{
		foreach ($results as $row => $data) {
			try {
				$Subscribers = Subscribers::findOrFail($data['id']);
				$Subscribers->fill($data);
				$Subscribers->save();
				$this->logUpdated();
			}
			catch (ModelNotFoundException $ex) {
				$Subscribers = new Subscribers;
				$Subscribers->fill($data);
				$Subscribers->save();
				$this->logCreated();
			}
			catch (\Exception $ex) {
				$this->logError($row, $ex->getMessage());
			}

		}
	}
}
