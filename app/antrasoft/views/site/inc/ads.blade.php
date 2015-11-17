
    @foreach($ads as $ad)
    <style>
        #ads, #ads>div{
            padding: 4px;
            padding-top:4px;
            margin-bottom: 0px;
        }
        #ads h1,#ads h2,#ads h3,#ads h4
        {
            margin-top: 0px;

        }
    </style>
    <div id="ads" class="image-box" style="margin-bottom: 7px">
        <div class="image-box-body">
            <div>
                 {!!$ad->main_text!!}
            </div>
        </div>
    </div>

    @endforeach


