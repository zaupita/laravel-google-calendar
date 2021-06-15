<?php 

namespace zaupita\GoogleCalendar\Controllers;

use Illuminate\Http\Request;
use GoogleCalendar;
use App\Http\Controllers\Controller;


class GoogleCalendarController extends Controller
{

	public function listCalendars (Request $request) {

		return GoogleCalendar::listCalendars($request->access_token);

	}

	public function listEvents (Request $request) {

		return GoogleCalendar::listEvents(
			$request->calendar,
			$request->access_token,
			$request->start,
			$request->end,
			$request->timezone
		);

	}

	public function updateEvent (Request $request) {

		return GoogleCalendar::updateEvent($request, $request->access_token);

	}

	public function createEvent (Request $request) {

		return GoogleCalendar::createEvent($request, $request->access_token);

	}

	public function deleteEvent (Request $request) {

		return GoogleCalendar::deleteEvent($request, $request->access_token);

	}





}