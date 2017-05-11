<?php namespace Shiv\EnrollForm\Models;

use Model;

/**
 * Subscriber Model
 */
class SubscriberExport extends \Backend\Models\ExportModel
{
    public function exportData($columns, $sessionKey = null) {
        $entries = Subscriber::all();
        $entries->each(function($subscriber) use ($columns) {
            $subscriber->addVisible($columns);
        });
        return $entries->toArray();
    }
}

