@extends('main')

@section('content')

  <div class="container">
    <div class="jumbotron" style="background-color: #ffffff;">
      <p style="font-size: 1rem; line-height: 22px;">Let me know everything you wish you could do during quarantine. What problems are you facing? Remember, this is a team effort to make our lives better in this situation and sharing your problems with me would enable me to make something which you will love and hopefully make your life easier. That could be an app, website, software you name it. I'll make it for free with effort to help many!</p>
      <form action="{{ route('covid19issue.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <textarea class="form-control" name="issue" id="exampleFormControlTextarea1" placeholder="issue" rows="3"></textarea>
          <div><p style="font-size: 1rem; line-height: 22px; color: #eb4034;">{{ $errors->first('issue') }}</p></div>
        </div>
        <p style="font-size: 1rem; line-height: 22px;">It's not essential to privide your email address, however it would definitelly help me a lot if i need more information regarding your issue.</p>
        <div class="form-group">
          <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
          <div><p style="font-size: 1rem; line-height: 22px; color: #eb4034;">{{ $errors->first('email') }}</p></div>
        </div>
        <p style="font-size: 1rem; line-height: 22px; color: #eb4034; text-transform: uppercase">I promise none of your data (email and issue provided) will be shared with anybody unless I have your permission.</p>
        <button type="submit">Send</button>
      </form>
    </div>
  </div>

@endsection