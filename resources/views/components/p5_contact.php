<div class="container-fluid">
    <div class="row contact">
        <div id="thanks" class="text-center">
            <h3>Thank You for the message</h3>
            <p class="lead">We are going to answer your message as soon as possible</p>
        </div>
        <div id="form-container" class="form-container">
            <form action="#">
                <div class="form-group">
                    <label for="youremail">Email address</label>
                    <input type="email" class="form-control" id="youremail" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="yourname">Name</label>
                    <input type="text" class="form-control" id="yourname" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label for="yournumber">Telephone</label>
                    <input type="number" min="8" max="12" class="form-control" id="yournumber" placeholder="Your Name">
                </div>
                <div class="form-group"><label for="textinput">Message</label>
                    <textarea id="textinput" class="form-control" rows="3"></textarea>
                </div>
                <div class="checkbox">
                    <label id="checktext">
                        <input type="checkbox"> I would like to receive a call from you
                    </label>
                </div>
                <button type="submit" id="submit_message" class="btn btn-red btn-reda glyphicon glyphicon-envelope"><span><?php echo $lang[$la]['p1']['introbutton'];?></span></button>

            </form>
        </div>
    </div>
</div>