<div id="contactForm" class="container-fluid">
    <div class="row contact">
        <div id="thanks" class="text-center">
            <h3 class="successMessage"><?php echo $lang[$la]['p5']['thanktitle'];?></h3>
            <p class="lead successMessage"><?php echo $lang[$la]['p5']['thanktext'];?></p>
            <h3 class="errorMessage"><?php echo $lang[$la]['p5']['thanktitleFail'];?></h3>
            <p class="lead errorMessage"><?php echo $lang[$la]['p5']['thanktextFail'];?></p>
        </div>
        <div id="form-container" class="form-container">
            <form action="#">
                <div class="form-group req-field">
                    <label for="youremail"><?php echo $lang[$la]['p5']['formemail'];?></label>
                    <input type="email" class="form-control" id="youremail" placeholder="<?php echo $lang[$la]['p5']['formemailplaceholder'];?>">
                </div>
                <div class="form-group req-field">
                    <label for="yourname"><?php echo $lang[$la]['p5']['formname'];?></label>
                    <input type="text" class="form-control" id="yourname" placeholder="<?php echo $lang[$la]['p5']['formnameplaceholder'];?>">
                </div>
                <div class="form-group">
                    <label for="yournumber"><?php echo $lang[$la]['p5']['formphone'];?></label>
                    <input type="number" min="8" max="12" class="form-control" id="yournumber" placeholder="<?php echo $lang[$la]['p5']['formphoneplaceholder'];?>">
                </div>
                <div class="form-group"><label for="textinput"><?php echo $lang[$la]['p5']['formmessage'];?></label>
                    <textarea id="textinput" class="form-control" rows="3" placeholder="<?php echo $lang[$la]['p5']['formmessageplaceholder'];?>"></textarea>
                </div>
                <div class="checkbox">
                    <label id="checktext">
                        <input id="callme" type="checkbox"><?php echo $lang[$la]['p5']['formcheckbox'];?>
                    </label>
                </div>
                <button type="submit" id="submit_message" class="btn btn-red btn-reda glyphicon glyphicon-envelope"><span><?php echo $lang[$la]['p5']['formsubmit'];?></span></button>

            </form>
        </div>
    </div>
</div>