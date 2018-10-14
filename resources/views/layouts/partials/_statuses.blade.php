@foreach($statuses as $status)
    <option value="{{$status->name}}" {{ !empty($ticket) && $ticket->status == $status->name?'selected':''}}>{{$status->name}}</option>
@endforeach