<div class="featured-box featured-box-secundary" style="height: 343px;">
    <div class="box-content">
        <h4>Find a supplier</h4>

        <p>Enter your postcode below to find your nearest provider.</p>
        {{ Form::open() }}
        <div class="input-group">
            {{ Form::input('number', 'postcode', null, array('class' => 'form-control')) }}
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Search!</button>
            </span>
        </div>
        {{ Form::close() }}
    </div>
</div>