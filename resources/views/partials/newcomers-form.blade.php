<div class="newcomer-form-container">
    <div class="form-one">
        <h1 class="tossing">start here.</h1>
        <p>Enter your email to be the first to know when Origo launches</p>

        <form role="form" action="/newcomer/new" method="POST">
            {{ csrf_field() }}
            <div class="form-group" style="overflow: hidden">
                <label class="sr-only" for="email">Email</label>
                <div class="input-group">
                    <input type="text" name="email" placeholder="Email" class="form-control" id="email"
                           value="{{ isset($email) ? $email : "" }}">
                    <div class="input-group-btn">
                        <button type="submit">
                            <i class="fa fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <p class="privacy">
                By registering for the Beta, you agree to our
                <a href="#" class="launch-modal" data-modal-id="modal-privacy">Privacy Policy</a>.
            </p>
        </form>
    </div>
    <div class="form-two">
        <h1>Almost done!</h1>

        <form role="form" action="/newcomer/update" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="sr-only" for="name">Full name</label>
                <input type="text" name="name" placeholder="Name" class="form-control" id="name"
                       value="{{ isset($name) ? $name : "" }}">
            </div>
            <div class="form-group">
                <label class="sr-only" for="industry">Industry</label>
                <select class="form-control" name="industry" id="industry">
                    <option value="" disabled selected>Choose your industry</option>
                    <option value="Clothing">Clothing</option>
                    <option value="Graphics/Design">Graphics/Design</option>
                    <option value="Fashion">Fashion</option>
                    <option value="Technology">Technology</option>
                    <option value="Education">Education</option>
                    <option value="Food">Food</option>
                    <option value="Music">Music</option>
                    <option value="Video">Video</option>
                    <option value="eCommerce">eCommerce</option>
                    <option value="Finance">Finance</option>
                    <option value="Green">Green</option>
                    <option value="Health and Fitness">Health and Fitness</option>
                    <option value="Virtual/Artificial Reality">Virtual/Artificial Reality</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label class="sr-only" for="message">How can Origo help you??</label>
                <textarea name="message" placeholder="How can Origo help you?" class="form-control"
                          id="message"></textarea>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
    <div class="thank-you">
        <h1>Thank you!</h1>
        <p>
            You will be notified as soon as the Beta goes live! In the mean time,
            check out our social media below for daily updates.

        </p>
    </div>
</div>