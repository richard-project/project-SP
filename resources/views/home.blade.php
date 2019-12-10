@extends('template.template')
@section('content')
<!-- Widgets  -->
<div class="main-body">
    <div class="page-wrapper">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!--[ daily sales section ] start-->
            <div class="col-md-6 col-xl-4">
                <div class="card daily-sales">
                    <div class="card-block">
                        <h6 class="mb-4">Daily Sales</h6>
                        <div class="row d-flex align-items-center">
                            <div class="col-9">
                                <h3 class="f-w-300 d-flex align-items-center m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>$ 249.95</h3>
                            </div>

                            <div class="col-3 text-right">
                                <p class="m-b-0">67%</p>
                            </div>
                        </div>
                        <div class="progress m-t-30" style="height: 7px;">
                            <div class="progress-bar progress-c-theme" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--[ daily sales section ] end-->
            <!--[ Monthly  sales section ] starts-->
            <div class="col-md-6 col-xl-4">
                <div class="card Monthly-sales">
                    <div class="card-block">
                        <h6 class="mb-4">Monthly Sales</h6>
                        <div class="row d-flex align-items-center">
                            <div class="col-9">
                                <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-down text-c-red f-30 m-r-10"></i>$ 2.942.32</h3>
                            </div>
                            <div class="col-3 text-right">
                                <p class="m-b-0">36%</p>
                            </div>
                        </div>
                        <div class="progress m-t-30" style="height: 7px;">
                            <div class="progress-bar progress-c-theme2" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--[ Monthly  sales section ] end-->
            <!--[ year  sales section ] starts-->
            <div class="col-md-12 col-xl-4">
                <div class="card yearly-sales">
                    <div class="card-block">
                        <h6 class="mb-4">Yearly Sales</h6>
                        <div class="row d-flex align-items-center">
                            <div class="col-9">
                                <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>$ 8.638.32</h3>
                            </div>
                            <div class="col-3 text-right">
                                <p class="m-b-0">80%</p>
                            </div>
                        </div>
                        <div class="progress m-t-30" style="height: 7px;">
                            <div class="progress-bar progress-c-theme" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--[ year  sales section ] end-->
            <!--[ Recent Users ] start-->
            <div class="col-xl-8 col-md-6">
                <div class="card Recent-Users">
                    <div class="card-header">
                        <h5>Recent Users</h5>
                    </div>
                    <div class="card-block px-0 py-3">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    <tr class="unread">
                                        <td><img class="rounded-circle" style="width:40px;" src="images/user/avatar-1.jpg" alt="activity-user"></td>
                                        <td>
                                            <h6 class="mb-1">Isabella Christensen</h6>
                                            <p class="m-0">Lorem Ipsum is simply…</p>
                                        </td>
                                        <td>
                                            <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>11 MAY 12:56</h6>
                                        </td>
                                        <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                                    </tr>
                                    <tr class="unread">
                                        <td><img class="rounded-circle" style="width:40px;" src="images/user/avatar-2.jpg" alt="activity-user"></td>
                                        <td>
                                            <h6 class="mb-1">Mathilde Andersen</h6>
                                            <p class="m-0">Lorem Ipsum is simply text of…</p>
                                        </td>
                                        <td>
                                            <h6 class="text-muted"><i class="fas fa-circle text-c-red f-10 m-r-15"></i>11 MAY 10:35</h6>
                                        </td>
                                        <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                                    </tr>
                                    <tr class="unread">
                                        <td><img class="rounded-circle" style="width:40px;" src="images/user/avatar-3.jpg" alt="activity-user"></td>
                                        <td>
                                            <h6 class="mb-1">Karla Sorensen</h6>
                                            <p class="m-0">Lorem Ipsum is simply…</p>
                                        </td>
                                        <td>
                                            <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>9 MAY 17:38</h6>
                                        </td>
                                        <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                                    </tr>
                                    <tr class="unread">
                                        <td><img class="rounded-circle" style="width:40px;" src="images/user/avatar-1.jpg" alt="activity-user"></td>
                                        <td>
                                            <h6 class="mb-1">Ida Jorgensen</h6>
                                            <p class="m-0">Lorem Ipsum is simply text of…</p>
                                        </td>
                                        <td>
                                            <h6 class="text-muted f-w-300"><i class="fas fa-circle text-c-red f-10 m-r-15"></i>19 MAY 12:56</h6>
                                        </td>
                                        <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                                    </tr>
                                    <tr class="unread">
                                        <td><img class="rounded-circle" style="width:40px;" src="images/user/avatar-2.jpg" alt="activity-user"></td>
                                        <td>
                                            <h6 class="mb-1">Albert Andersen</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy…</p>
                                        </td>
                                        <td>
                                            <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>21 July 12:56</h6>
                                        </td>
                                        <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--[ Recent Users ] end-->

            <!-- [ statistics year chart ] start -->
            <div class="col-xl-4 col-md-6">
                <div class="card card-event">
                    <div class="card-block">
                        <div class="row align-items-center justify-content-center">
                            <div class="col">
                                <h5 class="m-0">Upcoming Event</h5>
                            </div>
                            <div class="col-auto">
                                <label class="label theme-bg2 text-white f-14 f-w-400 float-right">34%</label>
                            </div>
                        </div>
                        <h2 class="mt-3 f-w-300">45<sub class="text-muted f-14">Competitors</sub></h2>
                        <h6 class="text-muted mt-4 mb-0">You can participate in event </h6>
                        <i class="fab fa-angellist text-c-purple f-50"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-block border-bottom">
                        <div class="row d-flex align-items-center">
                            <div class="col-auto">
                                <i class="feather icon-zap f-30 text-c-green"></i>
                            </div>
                            <div class="col">
                                <h3 class="f-w-300">235</h3>
                                <span class="d-block text-uppercase">TOTAL IDEAS</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="row d-flex align-items-center">
                            <div class="col-auto">
                                <i class="feather icon-map-pin f-30 text-c-blue"></i>
                            </div>
                            <div class="col">
                                <h3 class="f-w-300">26</h3>
                                <span class="d-block text-uppercase">TOTAL LOCATIONS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ statistics year chart ] end -->
            <!--[social-media section] start-->
            <div class="col-md-12 col-xl-4">
                <div class="card card-social">
                    <div class="card-block border-bottom">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-auto">
                                <i class="fab fa-facebook-f text-primary f-36"></i>
                            </div>
                            <div class="col text-right">
                                <h3>12,281</h3>
                                <h5 class="text-c-green mb-0">+7.2% <span class="text-muted">Total Likes</span></h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="row align-items-center justify-content-center card-active">
                            <div class="col-6">
                                <h6 class="text-center m-b-10"><span class="text-muted m-r-5">Target:</span>35,098</h6>
                                <div class="progress">
                                    <div class="progress-bar progress-c-theme" role="progressbar" style="width:60%;height:6px;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h6 class="text-center  m-b-10"><span class="text-muted m-r-5">Duration:</span>3,539</h6>
                                <div class="progress">
                                    <div class="progress-bar progress-c-theme2" role="progressbar" style="width:45%;height:6px;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-social">
                    <div class="card-block border-bottom">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-auto">
                                <i class="fab fa-twitter text-c-blue f-36"></i>
                            </div>
                            <div class="col text-right">
                                <h3>11,200</h3>
                                <h5 class="text-c-purple mb-0">+6.2% <span class="text-muted">Total Likes</span></h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="row align-items-center justify-content-center card-active">
                            <div class="col-6">
                                <h6 class="text-center m-b-10"><span class="text-muted m-r-5">Target:</span>34,185</h6>
                                <div class="progress">
                                    <div class="progress-bar progress-c-green" role="progressbar" style="width:40%;height:6px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h6 class="text-center  m-b-10"><span class="text-muted m-r-5">Duration:</span>4,567</h6>
                                <div class="progress">
                                    <div class="progress-bar progress-c-blue" role="progressbar" style="width:70%;height:6px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-social">
                    <div class="card-block border-bottom">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-auto">
                                <i class="fab fa-google-plus-g text-c-red f-36"></i>
                            </div>
                            <div class="col text-right">
                                <h3>10,500</h3>
                                <h5 class="text-c-blue mb-0">+5.9% <span class="text-muted">Total Likes</span></h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="row align-items-center justify-content-center card-active">
                            <div class="col-6">
                                <h6 class="text-center m-b-10"><span class="text-muted m-r-5">Target:</span>25,998</h6>
                                <div class="progress">
                                    <div class="progress-bar progress-c-theme" role="progressbar" style="width:80%;height:6px;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h6 class="text-center  m-b-10"><span class="text-muted m-r-5">Duration:</span>7,753</h6>
                                <div class="progress">
                                    <div class="progress-bar progress-c-theme2" role="progressbar" style="width:50%;height:6px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--[social-media section] end-->
            <!-- [ rating list ] starts-->
            <div class="col-xl-4 col-md-6">
                <div class="card user-list">
                    <div class="card-header">
                        <h5>Rating</h5>
                    </div>
                    <div class="card-block">
                        <div class="row align-items-center justify-content-center m-b-20">
                            <div class="col-6">
                                <h2 class="f-w-300 d-flex align-items-center float-left m-0">4.7 <i class="fas fa-star f-10 m-l-10 text-c-yellow"></i></h2>
                            </div>
                            <div class="col-6">
                                <h6 class="d-flex  align-items-center float-right m-0">0.4 <i class="fas fa-caret-up text-c-green f-22 m-l-10"></i></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <h6 class="align-items-center float-left"><i class="fas fa-star f-10 m-r-10 text-c-yellow"></i>5</h6>
                                <h6 class="align-items-center float-right">384</h6>
                                <div class="progress m-t-30 m-b-20" style="height: 6px;">
                                    <div class="progress-bar progress-c-theme" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <h6 class="align-items-center float-left"><i class="fas fa-star f-10 m-r-10 text-c-yellow"></i>4</h6>
                                <h6 class="align-items-center float-right">145</h6>
                                <div class="progress m-t-30  m-b-20" style="height: 6px;">
                                    <div class="progress-bar progress-c-theme" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <h6 class="align-items-center float-left"><i class="fas fa-star f-10 m-r-10 text-c-yellow"></i>3</h6>
                                <h6 class="align-items-center float-right">24</h6>
                                <div class="progress m-t-30  m-b-20" style="height: 6px;">
                                    <div class="progress-bar progress-c-theme" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <h6 class="align-items-center float-left"><i class="fas fa-star f-10 m-r-10 text-c-yellow"></i>2</h6>
                                <h6 class="align-items-center float-right">1</h6>
                                <div class="progress m-t-30  m-b-20" style="height: 6px;">
                                    <div class="progress-bar progress-c-theme" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <h6 class="align-items-center float-left"><i class="fas fa-star f-10 m-r-10 text-c-yellow"></i>1</h6>
                                <h6 class="align-items-center float-right">0</h6>
                                <div class="progress m-t-30  m-b-20" style="height: 6px;">
                                    <div class="progress-bar" role="progressbar" style="width:0;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ rating list ] end-->
            <div class="col-xl-8 col-md-12 m-b-30">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Today</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active show" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">This Week</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">All</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Activity</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th class="text-right"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h6 class="m-0"><img class="rounded-circle m-r-10" style="width:40px;" src="images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">The quick brown fox</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">3:28 PM</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0 text-c-green">Done</h6>
                                    </td>
                                    <td class="text-right"><i class="fas fa-circle text-c-green f-10"></i></td>
                                </tr>

                                <tr>
                                    <td>
                                        <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="images/user/avatar-2.jpg" alt="activity-user">Albert Andersen</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">Jumps over the lazy</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">2:37 PM</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0 text-c-red">Missed</h6>
                                    </td>
                                    <td class="text-right"><i class="fas fa-circle text-c-red f-10"></i></td>
                                </tr>

                                <tr>
                                    <td>
                                        <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="images/user/avatar-3.jpg" alt="activity-user">Silje Larsen</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">Dog the quick brown</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">10:23 AM</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0 text-c-purple">Delayed</h6>
                                    </td>
                                    <td class="text-right"><i class="fas fa-circle text-c-purple f-10"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">The quick brown fox</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">4:28 PM</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0 text-c-green">Done</h6>
                                    </td>
                                    <td class="text-right"><i class="fas fa-circle text-c-green f-10"></i></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Activity</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th class="text-right"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="images/user/avatar-2.jpg" alt="activity-user">Albert Andersen</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">Jumps over the lazy</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">2:37 PM</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0 text-c-red">Missed</h6>
                                    </td>
                                    <td class="text-right"><i class="fas fa-circle text-c-red f-10"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="m-0"><img class="rounded-circle m-r-10" style="width:40px;" src="images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">The quick brown fox</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">3:28 PM</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0 text-c-green">Done</h6>
                                    </td>
                                    <td class="text-right"><i class="fas fa-circle text-c-green f-10"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">The quick brown fox</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">4:28 PM</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0 text-c-green">Done</h6>
                                    </td>
                                    <td class="text-right"><i class="fas fa-circle text-c-green f-10"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="images/user/avatar-3.jpg" alt="activity-user">Silje Larsen</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">Dog the quick brown</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">10:23 AM</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0 text-c-purple">Delayed</h6>
                                    </td>
                                    <td class="text-right"><i class="fas fa-circle text-c-purple f-10"></i></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Activity</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th class="text-right"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="images/user/avatar-3.jpg" alt="activity-user">Silje Larsen</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">Dog the quick brown</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">10:23 AM</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0 text-c-purple">Delayed</h6>
                                    </td>
                                    <td class="text-right"><i class="fas fa-circle text-c-purple f-10"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="m-0"><img class="rounded-circle m-r-10" style="width:40px;" src="images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">The quick brown fox</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">3:28 PM</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0 text-c-green">Done</h6>
                                    </td>
                                    <td class="text-right"><i class="fas fa-circle text-c-green f-10"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="images/user/avatar-2.jpg" alt="activity-user">Albert Andersen</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">Jumps over the lazy</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">2:37 PM</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0 text-c-red">Missed</h6>
                                    </td>
                                    <td class="text-right"><i class="fas fa-circle text-c-red f-10"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="images/user/avatar-1.jpg" alt="activity-user">Ida Jorgensen</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">The quick brown fox</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0">4:28 PM</h6>
                                    </td>
                                    <td>
                                        <h6 class="m-0 text-c-green">Done</h6>
                                    </td>
                                    <td class="text-right"><i class="fas fa-circle text-c-green f-10"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
        jQuery(document).ready(function($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [
                { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
                { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
                { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2/3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [
                { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
                { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

            var plot = $.plot($('#flotLine5'),[{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                  series: [
                  [0, 18000, 35000,  25000,  22000,  0],
                  [0, 33000, 15000,  20000,  15000,  300],
                  [0, 15000, 28000,  15000,  30000,  5000]
                  ]
              }, {
                  low: 0,
                  showArea: true,
                  showLine: false,
                  showPoint: false,
                  fullWidth: true,
                  axisX: {
                    showGrid: true
                }
            });

                chart.on('draw', function(data) {
                    if(data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById( "TrafficChart" );
                ctx.height = 150;
                var myChart = new Chart( ctx, {
                    type: 'line',
                    data: {
                        labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
                        datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
                        }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                } );
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });
    </script>
@stop

