@extends('layouts.admin.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<hr class="">
<div class="container target">
    <div class="row">
        <div class="col-sm-10">
           <h1 class="">Starfox221</h1>

           <button type="button" class="btn btn-success">Book me!</button>  <button type="button" class="btn btn-info">Send me a message</button>
           <br>
       </div>
       <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.rlsandbox.com/img/profile.jpg"></a>

       </div>
   </div>
   <br>
   <div class="row">
    <div class="col-sm-3">
        <!--left col-->
        <ul class="list-group">
            <li class="list-group-item text-muted" contenteditable="false">Profile</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span> 2.13.2014</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span> Yesterday</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Real name</strong></span> Joseph
                Doe</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Role: </strong></span> Pet Sitter

                </li>
            </ul>
            <div class="panel panel-default">
               <div class="panel-heading">Insured / Bonded?

               </div>
               <div class="panel-body"><i style="color:green" class="fa fa-check-square"></i> Yes, I am insured and bonded.

               </div>
           </div>
           <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i>

            </div>
            <div class="panel-body"><a href="http://bootply.com" class="">bootply.com</a>

            </div>
        </div>

        <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i>

            </li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Shares</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Likes</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Posts</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Followers</strong></span> 78</li>
        </ul>
    </div>
    <!--/col-3-->
    <div class="col-sm-9" style="" contenteditable="false">
        <div class="panel panel-default">
            <div class="panel-heading">Starfox221's Bio</div>
            <div class="panel-body"> A long description about me.

            </div>
        </div>
        <div class="panel panel-default target">
            <div class="panel-heading" contenteditable="false">Pets I Own</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img alt="300x200" src="http://lorempixel.com/600/200/people">
                        <div class="caption">
                            <h3>
                                Rover
                            </h3>
                            <p>
                                Cocker Spaniel who loves treats.
                            </p>
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img alt="300x200" src="http://lorempixel.com/600/200/city">
                        <div class="caption">
                            <h3>
                                Marmaduke
                            </h3>
                            <p>
                                Is just another friendly dog.
                            </p>
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img alt="300x200" src="http://lorempixel.com/600/200/sports">
                        <div class="caption">
                            <h3>
                                Rocky
                            </h3>
                            <p>
                                Loves catnip and naps. Not fond of children.
                            </p>
                            <p>

                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <div class="panel panel-default">
        <div class="panel-heading">Starfox221's Bio</div>
        <div class="panel-body"> A long description about me.

        </div>
    </div></div>


    <div id="push"></div>
</div>

<script src="/plugins/bootstrap-select.min.js"></script>
<script src="/codemirror/jquery.codemirror.js"></script>
<script src="/beautifier.js"></script>

<div id="completeLoginModal" class="modal hide">
    <div class="modal-header">
        <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
        <h3>Do you want to proceed?</h3>
    </div>
    <div class="modal-body">
        <p>This page must be refreshed to complete your login.</p>
        <p>You will lose any unsaved work once the page is refreshed.</p>
        <br><br>
        <p>Click "No" to cancel the login process.</p>
        <p>Click "Yes" to continue...</p>
    </div>
    <div class="modal-footer">
      <a href="#" id="btnYes" class="btn danger">Yes, complete login</a>
      <a href="#" data-dismiss="modal" aria-hidden="true" class="btn secondary">No</a>
  </div>
</div>
<div id="forgotPasswordModal" class="modal hide">
    <div class="modal-header">
        <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
        <h3>Password Lookup</h3>
    </div>
    <div class="modal-body">
      <form class="form form-horizontal" id="formForgotPassword">    
          <div class="control-group">
              <label class="control-label" for="inputEmail">Email</label>
              <div class="controls">
                  <input name="_csrf" id="token" value="CkMEALL0JBMf5KSrOvu9izzMXCXtFQ/Hs6QUY=" type="hidden">
                  <input name="email" id="inputEmail" placeholder="you@youremail.com" required="" type="email">
                  <span class="help-block"><small>Enter the email address you used to sign-up.</small></span>
              </div>
          </div>
      </form>
  </div>
  <div class="modal-footer pull-center">
    <a href="#" data-dismiss="modal" aria-hidden="true" class="btn">Cancel</a>  
    <a href="#" data-dismiss="modal" id="btnForgotPassword" class="btn btn-success">Reset Password</a>
</div>

</div>
<div id="upgradeModal" class="modal hide">
    <div class="modal-header">
        <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
        <h4>Would you like to upgrade?</h4>
    </div>
    <div class="modal-body">
      <p class="text-center"><strong></strong></p>
      <h1 class="text-center">$4<small>/mo</small></h1>
      <p class="text-center"><small>Unlimited plys. Unlimited downloads. No Ads.</small></p>
      <p class="text-center"><img src="/assets/i_visa.png" alt="visa" width="50"> <img src="/assets/i_mc.png" alt="mastercard" width="50"> <img src="/assets/i_amex.png" alt="amex" width="50"> <img src="/assets/i_discover.png" alt="discover" width="50"> <img src="/assets/i_paypal.png" alt="paypal" width="50"></p>
  </div>
  <div class="modal-footer pull-center">
    <a href="/upgrade" class="btn btn-block btn-huge btn-success"><strong>Upgrade Now</strong></a>
    <a href="#" data-dismiss="modal" class="btn btn-block btn-huge">No Thanks, Maybe Later</a>
</div>
</div>
<div id="contactModal" class="modal hide">
    <div class="modal-header">
        <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
        <h3>Contact Us</h3>
        <p>suggestions, questions or feedback</p>
    </div>
    <div class="modal-body">
      <form class="form form-horizontal" id="formContact">
          <input name="_csrf" id="token" value="CkMEALL0JBMf5KSrOvu9izzMXCXtFQ/Hs6QUY=" type="hidden">
          <div class="control-group">
              <label class="control-label" for="inputSender">Name</label>
              <div class="controls">
                  <input name="sender" id="inputSender" class="input-large" placeholder="Your name" type="text">
              </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="inputMessage">Message</label>
              <div class="controls">
                  <textarea name="notes" rows="5" id="inputMessage" class="input-large" placeholder="Type your message here"></textarea>
              </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="inputEmail">Email</label>
              <div class="controls">
                  <input name="email" id="inputEmail" class="input-large" placeholder="you@youremail.com (for reply)" required="" type="text">
              </div>
          </div>
      </form>
  </div>
  <div class="modal-footer pull-center">
    <a href="#" data-dismiss="modal" aria-hidden="true" class="btn">Cancel</a>     
    <a href="#" data-dismiss="modal" aria-hidden="true" id="btnContact" role="button" class="btn btn-success">Send</a>
</div>
</div>




<script src="/plugins/bootstrap-pager.js"></script>
</div>

@endsection
