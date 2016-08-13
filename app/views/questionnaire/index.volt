{{ content() }}

<div class="page-header">
    <h2>开始回答</h2>
</div>

{{ form('questionnaire', 'id': 'questionnaireForm', 'onbeforesubmit': 'return false') }}

    <fieldset>

        <div class="control-group">
            {{ form.label('name', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('name', ['class': 'form-control']) }}
                <p class="help-block">(required)</p>
                <div class="alert alert-warning" id="name_alert">
                    <strong>Warning!</strong> Please enter your full name
                </div>
            </div>
        </div>


        <div class="control-group">
            {{ form.label('email', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('email', ['class': 'form-control']) }}
                <p class="help-block">(required)</p>
                <div class="alert alert-warning" id="email_alert">
                    <strong>Warning!</strong> Please enter your email
                </div>
            </div>
        </div>


        <div class="control-group">
                <label>贞操控制</label>
        </div>

        <div class="control-group">
            <label class="radio-inline">
            {{ form.render('brand1') }}
            {{ form.label('brand1') }}
            </label>

            <label class="radio-inline">
            {{ form.render('brand2') }}
            {{ form.label('brand2') }}
            </label>
        </div>


        <div class="form-actions">
            {{ submit_button('查看调查结果', 'class': 'btn btn-primary', 'onclick': 'return SignUp.validate();') }}
            <p class="help-block">By signing up, you accept terms of use and privacy policy.</p>
        </div>

    </fieldset>
</form>
