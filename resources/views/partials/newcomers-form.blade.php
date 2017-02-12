<div class="r-form-1-bottom">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (Session::get('message'))
        <div class="alert alert-success">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif
    <form role="form" action="/newcomer/new" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="sr-only" for="name">Full name</label>
            <input type="text" name="name" placeholder="Name" class="form-control" id="name"
                   value="{{ isset($name) ? $name : "" }}">
        </div>
        <div class="form-group">
            <label class="sr-only" for="email">Email</label>
            <input type="text" name="email" placeholder="Email" class="form-control" id="email"
                   value="{{ isset($email) ? $email : "" }}">
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
            <label class="sr-only" for="message">What problem are you facing and need solved?</label>
                            <textarea name="message" placeholder="Message" class="form-control"
                                      id="message"></textarea>
        </div>
        <button type="submit" class="btn">Register for Beta</button>
        <p class="privacy">
            By registering for our Beta, you agree to our
            <a href="#" class="launch-modal" data-modal-id="modal-privacy">Privacy Policy</a>.
        </p>
    </form>
</div>