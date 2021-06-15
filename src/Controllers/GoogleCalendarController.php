<?php 

namespace zaupita\GoogleCalendar\Controllers;

use Illuminate\Http\Request;
use GoogleCalendar;
use App\Http\Controllers\Controller;


class GoogleCalendarController extends Controller
{

	public function listCalendars (Request $request) {
		$google_access_token = json_decode($request->header('google-access-token'));


		return GoogleCalendar::listCalendars($google_access_token );

	}

	public function listEvents (Request $request) {
		$google_access_token = json_decode($request->header('google-access-token'));
		return GoogleCalendar::listEvents(
			$request->calendar,
			$google_access_token,
			$request->start,
			$request->end,
			$request->timezone
		);

	}

	public function updateEvent (Request $request) {
		$google_access_token = json_decode($request->header('google-access-token'));
		return GoogleCalendar::updateEvent($request, $google_access_token);

	}

	public function createEvent (Request $request) {
		$google_access_token = json_decode($request->header('google-access-token'));
		return GoogleCalendar::createEvent($request, $google_access_token);

	}

	public function deleteEvent (Request $request) {
		$google_access_token = json_decode($request->header('google-access-token'));
		return GoogleCalendar::deleteEvent($request, $google_access_token);
	}





}