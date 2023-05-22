@extends('adminlte::page')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Vítej v DomCMS</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4 text-center">
                                <div class="info-box">
                                    <span class="info-box-icon bg-info"><i class="fas fa-thumbtack"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Posts</span>
                                        <span class="info-box-number">12</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center">
                                <div class="info-box">
                                    <span class="info-box-icon bg-warning"><i class="fas fa-file-alt"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Pages</span>
                                        <span class="info-box-number">6</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center">
                                <div class="info-box">
                                    <span class="info-box-icon bg-danger"><i class="fas fa-comment"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Comments</span>
                                        <span class="info-box-number">8</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity Card -->
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Recent Activity</h3>
                    </div>
                    <div class="card-body p-0">
                        <ul class="products-list product-list-in-card pl-2 pr-2">
                            <!-- Add your recent activity items here -->
                            <li class="item">
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">John Doe
                                        <span class="badge badge-warning float-right">5 hours ago</span></a>
                                    <span class="product-description">
                                    Published a new post "Lorem ipsum dolor sit amet."
                                </span>
                                </div>
                            </li>
                            <!-- More items... -->
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <a href="javascript:void(0)" class="uppercase">View All Activity</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <!-- Quick Draft Card -->
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Quick Draft</h3>
                    </div>
                    <div class="card-body">
                        <!-- Add your quick draft form here -->
                        <form>
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label for="content">Content:</label>
                                <textarea class="form-control" id="content" rows="3" placeholder="Enter content"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Draft</button>
                        </form>
                    </div>
                </div>

                <!-- Site Health Card -->
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Site Health</h3>
                    </div>
                    <div class="card-body">
                        <div class="progress-group">
                            <span class="progress-text">Server Uptime</span>
                            <span class="float-right"><b>96%</b></span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success" style="width: 96%"></div>
                            </div>
                        </div>
                        <div class="progress-group">
                            <span class="progress-text">Database Size</span>
                            <span class="float-right"><b>70%</b></span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-warning" style="width:70%"></div>
                            </div>
                        </div>
                        <div class="progress-group">
                            <span class="progress-text">Disk Space Usage</span>
                            <span class="float-right"><b>50%</b></span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info" style="width: 50%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <!-- Add any necessary JavaScript here -->
@endsection
