<?php

namespace App\Http\Controllers;
use BigBlueButton\Parameters\CreateMeetingParameters;

use Illuminate\Http\Request;

class BBB extends Controller
{
    public function index() {
        // $meeting = \Bigbluebutton::create([
        //     'meetingID' => 'tamku',
        //     'meetingName' => 'test meeting',
        //     'attendeePW' => 'attendee',
        //     'moderatorPW' => 'moderator',

        // ]);

    //   $meeting = \Bigbluebutton::create([
    //         'meetingID' => 'tamku2',
    //         'meetingName' => 'test meeting2',
    //         'attendeePW' => 'moderatorPassword',
    //         'moderatorPW' => 'attendeePassword'
    //     ]);

        $meetingParams = new CreateMeetingParameters('tamku', 'test meeting');
        $meetingParams->setModeratorPW('moderatorPassword');
        $meetingParams->setAttendeePW('attendeePassword');

        $meeting = \Bigbluebutton::create($meetingParams);

        return $meeting;
    }

    public function joinRoom() {
        $meeting = \Bigbluebutton::join([
            'meetingID' => 'tamku',
            'userName' => 'mervin',
            'password' => 'attendeePassword' //which user role want to join set password here
        ]);

        return $meeting;

    }
}
