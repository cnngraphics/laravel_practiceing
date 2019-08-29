@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row p-5">
        <div class="col-3 ">
            <img src="/svg/curriculum-diagram-full.jpg" style="height:150px;" class="rounded-circle" alt="">
        </div>
        <div class="col-9 ">
            <!-- <div><h1>{{ Auth::user()->username }}</h1></div> -->
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">codeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div> <a href="#">www.freecodecamp.org</a></div>
           
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <img src="https://scontent-mia3-2.cdninstagram.com/vp/c69486e5aa641d9f4fb389e74087fdfb/5E0FEA31/t51.2885-15/e35/c0.75.877.877a/s240x240/67524515_156209612234747_3747271840880064739_n.jpg?_nc_ht=scontent-mia3-2.cdninstagram.com" class="w-100 pt-4"alt="">
        </div>
        <div class="col-4"><img src="/svg/67888008_733296147101399_5156895999074572136_n.jpg" class="w-100 pt-4"alt=""></div>
        <div class="col-4"><img src="svg/69461407_170809170634599_1337765637046294646_n.jpg" class="w-100 pt-4"alt=""></div>
    </div>
</div>
@endsection
