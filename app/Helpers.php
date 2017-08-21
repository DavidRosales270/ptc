<?php

function getAnnounces($id, $color) {
    $user = Auth::user();
    $html = '';
    $announces = DB::table('announces')->where('type_announce', $id)->get();

    foreach($announces as $announce){
       $is_blocked = '';
        $matchThese = ['announce_id' => $announce->id, 'user_id' => $user->id];
        $announce_user = DB::table('announces_users')->where($matchThese)->get();

       if(count($announce_user)){
           $is_blocked = 'announce_disabled';
       }

       $html .= '<div class="announce '.$is_blocked.'" data-key="'.$announce->id.'" >
                    <div class="announce-head" style="background-color: '.$color.'">
                        <b> $ ' . $announce->price .'</b> - '. $announce->title.'
                    </div>
                    <div class="announce-body">
                        <svg height="20" width="20" data-key="'.$announce->id.'" style="display: none; position: absolute; z-index: 2;" class="pointer">
                            <a href="javascript:void(0);"  target="_blank">
                                <circle cx="10" cy="10" r="8" stroke="black" stroke-width="0.5" fill="red"  />
                            </a>
                        </svg>
                        '.$announce->description.'
                    </div>
                </div>';
    }

    return $html;

}