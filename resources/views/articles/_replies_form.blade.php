<div class="row pt-3">
    <div class="col-lg-12">
        <div class="social-feed-box">
            <div class="social-body">
                @guest
                    <button class="btn btn-block btn-success" type="submit">登陆后发表评论，点击登陆</button>
                @else
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="写评论"></textarea>
                        </div>
                        <button class="btn btn-block btn-primary" type="submit">评论</button>
                    </form>
                @endguest
            </div>
        </div>
    </div>
</div>