@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Support Chat Messages</div>

                <div class="panel-body" style="max-height: 300px;overflow: auto;">
                    <supportchatmessages :user="{{ auth()->user() }}"></supportchatmessages>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Send Message</div>
                <div class="panel-body">
                    <broadcastmessage-form
                        v-on:messagesent="addNewSupportChatMessage"
                        :user="{{ Auth::user() }}"
                    ></broadcastmessage-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection