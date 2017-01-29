<div id="slide-out-left" class="side-nav">
    <div class="top-left-nav ninobold">
        გამარჯობა {{ Auth::user()->firstname }} !
    </div>
    <div id="main-menu" class="ninobold">
        <ul>
            <li><a href="/"><i class="fa fa-home"></i> მთავარი</a></li>
            <li><a href="/categories"><i class="fa fa-list-alt"></i> კატეგორიები</a></li>
            <li><a  onclick=" document.getElementById('logout_form').submit()" ><i class="fa fa-sign-out"></i> გამოსვლა</a></li>
        </ul>
    </div>
</div>