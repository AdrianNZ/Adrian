<section id="contact">

    <div class="container">

        <h1 class="section-title scrollimation scale-in">Keep in <span>Touch</span> with me</h1>

        <div class="row">

            <div class="col-sm-5 contact-info scrollimation fade-right">

                <p>
                <h3>Why not say
                    <mark>hello?</mark>
                    <br>
                    There’s a handy contact form below, or send an email to
                </h3>
                <a href="mailto:{{$user->email}}"
                   style="text-decoration: underline; color:red; font-size: 2rem;">{{$user->email}}</a></p>

                <address>
                    {{$user->name}}<br>
                    {{$info[0]->address}}<br>
                    {{$info[0]->phone}}
                </address>

                <ul class="socials">
                    <li><a href="#{{$info[0]->linkto_twitter}}"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#{{$info[0]->linkto_facebook}}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#{{$info[0]->linkto_linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>

            </div>

            <form id="contact-form" class="col-sm-7 scrollimation fade-left" action="/contact" method="POST"
                  novalidate>
                {{csrf_field()}}

                <div class="form-group">
                    <label class="control-label" for="contact-name">Name</label>
                    <div class="controls">
                        <i class="fa fa-user"></i>
                        <input id="contact-name" name="contactName" placeholder="My name is..."
                               class="form-control input-lg requiredField" type="text"
                               data-error-empty="Please enter your name">
                    </div>
                </div><!-- End name input -->

                <div class="form-group">
                    <label class="control-label" for="contact-mail">Email</label>
                    <div class=" controls">
                        <i class="fa fa-envelope"></i>
                        <input id="contact-mail" name="email" placeholder="Please respond at..."
                               class="form-control input-lg requiredField" type="email"
                               data-error-empty="Please enter your email" data-error-invalid="Invalid email address">
                    </div>
                </div><!-- End email input -->

                <div class="form-group">
                    <label class="control-label" for="contact-message">Message</label>
                    <div class="controls">
                        <i class="fa fa-comment"></i>
                        <textarea id="contact-message" name="comments" placeholder="I wanna talk about..."
                                  class="form-control input-lg requiredField" rows="5"
                                  data-error-empty="Please enter your message"></textarea>
                    </div>
                </div><!-- End textarea -->

                <p>
                    <button name="submit" type="submit" class="btn btn-theme btn-lg" data-error-message="Error!"
                            data-sending-message="Sending..." data-ok-message="Message Sent"><i
                                class="fa fa-paper-plane"></i>Send Message
                    </button>
                </p>
                <input type="hidden" name="submitted" id="submitted" value="true"/>

            </form><!-- End contact-form -->

        </div><!-- End row -->

    </div><!-- End container -->

</section>