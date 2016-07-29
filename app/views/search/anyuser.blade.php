@extends('layouts.main')

@section('title') any user @stop

@section('content')

  <div class="container alt1">


     <table>

       <tr>
           <td>
            <img src=" {{ URL::to('/uploads/avatars/' . $user->avatar ) }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right: 25px;">
           </td>
           <td>
                 <h2> {{  $user->username }} </h2>

                 <div class=""> Active since: <span class=""> {{ $user->created_at->diffForHumans()}}</span> </div>
           </td>



       </tr>
     </table>
  </div>


@endsection
