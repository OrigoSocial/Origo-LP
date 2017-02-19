<div class="section-container" id="early-access">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-push-3">
                <h2 class="text-center">Have an Early Access Code?</h2>
                <p class="medium-paragraph text-center">
                    Enter it below to get started on your profile and launchpad.
                </p>

                <div class="row">
                    <div class="col-sm-8 col-sm-push-2">
                        <form action="/early-access" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="early_access_code" class="sr-only">
                                    Got an Early Access Code? Enter it below.
                                </label>
                                <input type="text" name="early_access_code" id="early_access_code" class="form-control"
                                       placeholder="Early Access Code">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>