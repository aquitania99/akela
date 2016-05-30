@extends('layouts.akela-dashboard.html.twig')

@section('page-header')
    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Invoices</span> - Grid</h4>

                <ul class="breadcrumb position-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="invoice_grid.html">Invoices</a></li>
                    <li class="active">Grid</li>
                </ul>
            </div>

            <div class="heading-elements">
                <a href="#" class="btn bg-blue btn-labeled heading-btn"><b><i class="icon-calculator"></i></b> Create invoice</a>
                <a href="#" class="btn btn-default btn-icon heading-btn"><i class="icon-gear"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->
@stop
@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Detached content -->
        <div class="container-detached">
            <div class="content-detached">

                <!-- Invoice grid options -->
                <div class="navbar navbar-default navbar-xs navbar-component">
                    <ul class="nav navbar-nav no-border visible-xs-block">
                        <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-filter"><i class="icon-menu7"></i></a></li>
                    </ul>

                    <div class="navbar-collapse collapse" id="navbar-filter">
                        <p class="navbar-text">Filter:</p>
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-sort-time-asc position-left"></i> By date <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Show all</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Today</a></li>
                                    <li><a href="#">Yesterday</a></li>
                                    <li><a href="#">This week</a></li>
                                    <li><a href="#">This month</a></li>
                                    <li><a href="#">This year</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-sort-amount-desc position-left"></i> By status <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Show all</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Open</a></li>
                                    <li><a href="#">On hold</a></li>
                                    <li><a href="#">Resolved</a></li>
                                    <li><a href="#">Closed</a></li>
                                    <li><a href="#">Dublicate</a></li>
                                    <li><a href="#">Invalid</a></li>
                                    <li><a href="#">Wontfix</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-sort-numeric-asc position-left"></i> By priority <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Show all</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Highest</a></li>
                                    <li><a href="#">High</a></li>
                                    <li><a href="#">Normal</a></li>
                                    <li><a href="#">Low</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="navbar-right">
                            <p class="navbar-text">Sorting:</p>
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#"><i class="icon-sort-alpha-asc position-left"></i> Asc</a></li>
                                <li><a href="#"><i class="icon-sort-alpha-desc position-left"></i> Desc</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /invoice grid options -->


                <!-- Invoice grid -->
                <div class="text-center content-group text-muted content-divider">
                    <span class="pt-10 pb-10">Today</span>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Leonardo Fellini</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0028</li>
                                            <li>Issued on: <span class="text-semibold">2015/01/25</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$8,750</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">SWIFT</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-danger-400 dropdown-toggle" data-toggle="dropdown">Overdue <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="active"><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-danger position-left"></span> Due: <span class="text-semibold">2015/02/25</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Rebecca Manes</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0027</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/24</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$5,100</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">Paypal</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-success-400 dropdown-toggle" data-toggle="dropdown">Paid <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li class="active"><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-success position-left"></span> Due: <span class="text-semibold">2015/03/24</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">James Alexander</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0026</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/23</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$12,500</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">SWIFT</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-blue dropdown-toggle" data-toggle="dropdown">Pending <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li class="active"><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-blue position-left"></span> Due: <span class="text-semibold">2015/03/23</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Jeremy Victorino</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0025</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/22</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$1,950</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">Skrill</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-grey-300 dropdown-toggle" data-toggle="dropdown">On hold <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li class="active"><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-grey-300 position-left"></span> Due: <span class="text-semibold">2015/03/22</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Margo Baker</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0024</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/21</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$2,000</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">Paypal</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-slate-400 dropdown-toggle" data-toggle="dropdown">Canceled <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li class="active"><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-slate position-left"></span> Due: <span class="text-semibold">2015/03/21</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Beatrix Diaz</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0023</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/20</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$750</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">Payoneer</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-danger-400 dropdown-toggle" data-toggle="dropdown">Overdue <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="active"><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-danger position-left"></span> Due: <span class="text-semibold">2015/03/20</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="text-center content-group text-muted content-divider">
                    <span class="pt-10 pb-10">Yesterday</span>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Richard Vango</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0022</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/19</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$6,120</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">Paypal</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-success-400 dropdown-toggle" data-toggle="dropdown">Paid <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li class="active"><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-success position-left"></span> Due: <span class="text-semibold">2015/03/19</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Will Baker</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0021</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/18</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$3,500</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">SWIFT</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-success-400 dropdown-toggle" data-toggle="dropdown">Paid <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li class="active"><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-success position-left"></span> Due: <span class="text-semibold">2015/03/18</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Joseph Mills</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0020</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/17</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$4,950</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">SWIFT</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-danger-400 dropdown-toggle" data-toggle="dropdown">Overdue <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="active"><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-danger position-left"></span> Due: <span class="text-semibold">2015/03/17</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Buzz Brenson</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0019</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/16</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$900</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">Skrill</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-blue dropdown-toggle" data-toggle="dropdown">Pending <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li class="active"><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-blue position-left"></span> Due: <span class="text-semibold">2015/03/16</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Zachary Willson</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0018</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/15</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$1,140</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">SWIFT</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-grey-300 dropdown-toggle" data-toggle="dropdown">On hold <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li class="active"><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-grey-300 position-left"></span> Due: <span class="text-semibold">2015/03/15</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Bastian Miller</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0017</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/14</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$7,500</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">Paypal</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-slate-400 dropdown-toggle" data-toggle="dropdown">Canceled <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li class="active"><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-slate position-left"></span> Due: <span class="text-semibold">2015/03/14</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">William Samuel</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0016</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/13</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$2,300</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">SWIFT</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-blue dropdown-toggle" data-toggle="dropdown">Pending <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li class="active"><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-blue position-left"></span> Due: <span class="text-semibold">2015/03/13</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Monica Smith</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0015</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/12</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$3,700</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">Payoneer</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-blue dropdown-toggle" data-toggle="dropdown">Pending <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li class="active"><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-blue position-left"></span> Due: <span class="text-semibold">2015/03/12</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="text-center content-group text-muted content-divider">
                    <span class="pt-10 pb-10">August 10, 2015</span>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Jordana Miles</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0014</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/11</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$5,000</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">Payoneer</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-danger-400 dropdown-toggle" data-toggle="dropdown">Overdue <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="active"><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-danger position-left"></span> Due: <span class="text-semibold">2015/03/11</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">John Craving</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0013</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/10</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$12,000</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">SWIFT</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-success-400 dropdown-toggle" data-toggle="dropdown">Paid <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li class="active"><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-success position-left"></span> Due: <span class="text-semibold">2015/03/10</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">James Basel</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0012</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/09</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$9,000</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">Paypal</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-grey-300 dropdown-toggle" data-toggle="dropdown">On hold <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li class="active"><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-grey-300 position-left"></span> Due: <span class="text-semibold">2015/03/09</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Lucy Johnson</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0011</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/08</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$21,000</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">Skrill</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-success-400 dropdown-toggle" data-toggle="dropdown">Paid <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li class="active"><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-success position-left"></span> Due: <span class="text-semibold">2015/03/08</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Kinga Wallace</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0010</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/07</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$1,900</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">Payoneer</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-danger-400 dropdown-toggle" data-toggle="dropdown">Overdue <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="active"><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-blue position-left"></span> Due: <span class="text-semibold">2015/03/07</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Anna Zuniga</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0009</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/06</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$18,200</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">SWIFT</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-blue dropdown-toggle" data-toggle="dropdown">Pending <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li class="active"><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-blue position-left"></span> Due: <span class="text-semibold">2015/03/06</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Nicolette Grey</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0008</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/05</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$2,600</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">SWIFT</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-slate-400 dropdown-toggle" data-toggle="dropdown">Canceled <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li class="active"><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-slate position-left"></span> Due: <span class="text-semibold">2015/03/05</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Vanessa Aurelius</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0007</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/04</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$10,800</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">SWIFT</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-grey-300 dropdown-toggle" data-toggle="dropdown">On hold <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li class="active"><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-blue position-left"></span> Due: <span class="text-semibold">2015/03/04</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="text-center content-group text-muted content-divider">
                    <span class="pt-10 pb-10">August 9, 2015</span>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Jordano Diressimo</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0004</li>
                                            <li>Issued on: <span class="text-semibold">2015/02/01</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$6,500</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">SWIFT</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-success-400 dropdown-toggle" data-toggle="dropdown">Paid <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li class="active"><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-success position-left"></span> Due: <span class="text-semibold">2015/03/01</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Patrick Muller</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0003</li>
                                            <li>Issued on: <span class="text-semibold">2015/01/28</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$12,700</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">Paypal</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-danger-400 dropdown-toggle" data-toggle="dropdown">Overdue <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="active"><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-danger position-left"></span> Due: <span class="text-semibold">2015/02/28</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Marta Stewings</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0002</li>
                                            <li>Issued on: <span class="text-semibold">2015/01/27</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$900</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">Skrill</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-success-400 dropdown-toggle" data-toggle="dropdown">Paid <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li class="active"><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-success position-left"></span> Due: <span class="text-semibold">2015/02/27</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel invoice-grid">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-semibold no-margin-top">Marko Bastic</h6>
                                        <ul class="list list-unstyled">
                                            <li>Invoice #: &nbsp;0001</li>
                                            <li>Issued on: <span class="text-semibold">2015/01/26</span></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="text-semibold text-right no-margin-top">$10,000</h6>
                                        <ul class="list list-unstyled text-right">
                                            <li>Method: <span class="text-semibold">Paypal</span></li>
                                            <li class="dropdown">
                                                Status: &nbsp;
                                                <a href="#" class="label bg-grey-300 dropdown-toggle" data-toggle="dropdown">On hold <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
                                                    <li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
                                                    <li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
                                                    <li class="divider"></li>
                                                    <li class="active"><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
                                                    <li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed">
                                <div class="heading-elements">
												<span class="heading-text">
													<span class="status-mark border-grey-300 position-left"></span> Due: <span class="text-semibold">2015/02/26</span>
												</span>

                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                        <li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
                                                <li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
                                                <li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /invoice grid -->


                <!-- Pagination -->
                <div class="text-center content-group-lg pt-20">
                    <ul class="pagination">
                        <li class="disabled"><a href="#"><i class="icon-arrow-small-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="icon-arrow-small-right"></i></a></li>
                    </ul>
                </div>
                <!-- /pagination -->


                <!-- Modal with invoice -->
                <div id="invoice" class="modal fade">
                    <div class="modal-dialog modal-full">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h5 class="modal-title">Invoice #49029</h5>
                            </div>

                            <div class="panel-body no-padding-bottom">
                                <div class="row">
                                    <div class="col-md-6 content-group">
                                        <img src="assets/images/logo_demo.png" class="content-group mt-10" alt="" style="width: 120px;">
                                        <ul class="list-condensed list-unstyled">
                                            <li>2269 Elba Lane</li>
                                            <li>Paris, France</li>
                                            <li>888-555-2311</li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6 content-group">
                                        <div class="invoice-details">
                                            <h5 class="text-uppercase text-semibold">Invoice #49029</h5>
                                            <ul class="list-condensed list-unstyled">
                                                <li>Date: <span class="text-semibold">January 12, 2015</span></li>
                                                <li>Due date: <span class="text-semibold">May 12, 2015</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-lg-9 content-group">
                                        <span class="text-muted">Invoice To:</span>
                                        <ul class="list-condensed list-unstyled">
                                            <li><h5>Rebecca Manes</h5></li>
                                            <li><span class="text-semibold">Normand axis LTD</span></li>
                                            <li>3 Goodman Street</li>
                                            <li>London E1 8BF</li>
                                            <li>United Kingdom</li>
                                            <li>888-555-2311</li>
                                            <li><a href="#">rebecca@normandaxis.ltd</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6 col-lg-3 content-group">
                                        <span class="text-muted">Payment Details:</span>
                                        <ul class="list-condensed list-unstyled invoice-payment-details">
                                            <li><h5>Total Due: <span class="text-right text-semibold">$8,750</span></h5></li>
                                            <li>Bank name: <span class="text-semibold">Profit Bank Europe</span></li>
                                            <li>Country: <span>United Kingdom</span></li>
                                            <li>City: <span>London E1 8BF</span></li>
                                            <li>Address: <span>3 Goodman Street</span></li>
                                            <li>IBAN: <span class="text-semibold">KFH37784028476740</span></li>
                                            <li>SWIFT code: <span class="text-semibold">BPT4E</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-lg">
                                    <thead>
                                    <tr>
                                        <th>Description</th>
                                        <th class="col-sm-1">Rate</th>
                                        <th class="col-sm-1">Hours</th>
                                        <th class="col-sm-1">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <h6 class="no-margin">Create UI design model</h6>
                                            <span class="text-muted">One morning, when Gregor Samsa woke from troubled.</span>
                                        </td>
                                        <td>$70</td>
                                        <td>57</td>
                                        <td><span class="text-semibold">$3,990</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="no-margin">Support tickets list doesn't support commas</h6>
                                            <span class="text-muted">I'd have gone up to the boss and told him just what i think.</span>
                                        </td>
                                        <td>$70</td>
                                        <td>12</td>
                                        <td><span class="text-semibold">$840</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="no-margin">Fix website issues on mobile</h6>
                                            <span class="text-muted">I am so happy, my dear friend, so absorbed in the exquisite.</span>
                                        </td>
                                        <td>$70</td>
                                        <td>31</td>
                                        <td><span class="text-semibold">$2,170</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="panel-body">
                                <div class="row invoice-payment">
                                    <div class="col-sm-7">
                                        <div class="content-group">
                                            <h6>Authorized person</h6>
                                            <div class="mb-15 mt-15">
                                                <img src="assets/images/signature.png" class="display-block" style="width: 150px;" alt="">
                                            </div>

                                            <ul class="list-condensed list-unstyled text-muted">
                                                <li>Eugene Kopyov</li>
                                                <li>2269 Elba Lane</li>
                                                <li>Paris, France</li>
                                                <li>888-555-2311</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-sm-5">
                                        <div class="content-group">
                                            <h6>Total due</h6>
                                            <div class="table-responsive no-border">
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th>Subtotal:</th>
                                                        <td class="text-right">$7,000</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tax: <span class="text-regular">(25%)</span></th>
                                                        <td class="text-right">$1,750</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total:</th>
                                                        <td class="text-right text-primary"><h5 class="text-semibold">$8,750</h5></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="text-right">
                                                <button type="button" class="btn btn-primary btn-labeled"><b><i class="icon-printer"></i></b> Print invoice</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h6>Other information</h6>
                                <p class="text-muted">Thank you for using Limitless. This invoice can be paid via PayPal, Bank transfer, Skrill or Payoneer. Payment is due within 30 days from the date of delivery. Late payment is possible, but with with a fee of 10% per month. Company registered in England and Wales #6893003, registered office: 3 Goodman Street, London E1 8BF, United Kingdom. Phone number: 888-555-2311</p>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /modal with invoice -->

            </div>
        </div>
        <!-- /detached content -->


        <!-- Detached sidebar -->
        <div class="sidebar-detached">
            <div class="sidebar sidebar-default">
                <div class="sidebar-content">

                    <!-- Actions -->
                    <div class="sidebar-category">
                        <div class="category-title">
                            <span>Actions</span>
                            <ul class="icons-list">
                                <li><a href="#" data-action="collapse"></a></li>
                            </ul>
                        </div>

                        <div class="category-content">
                            <div class="row row-condensed">
                                <div class="col-xs-6">
                                    <button type="button" class="btn bg-teal-400 btn-block btn-float btn-float-lg"><i class="icon-file-plus"></i> <span>New invoice</span></button>
                                    <button type="button" class="btn bg-purple-300 btn-block btn-float btn-float-lg"><i class="icon-archive"></i> <span>Archive</span></button>
                                </div>

                                <div class="col-xs-6">
                                    <button type="button" class="btn bg-warning-400 btn-block btn-float btn-float-lg"><i class="icon-stats-bars"></i> <span>Statistics</span></button>
                                    <button type="button" class="btn bg-blue btn-block btn-float btn-float-lg"><i class="icon-cog3"></i> <span>Settings</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /actions -->


                    <!-- Navigation -->
                    <div class="sidebar-category">
                        <div class="category-title">
                            <span>Navigation</span>
                            <ul class="icons-list">
                                <li><a href="#" data-action="collapse"></a></li>
                            </ul>
                        </div>

                        <div class="category-content no-padding">
                            <ul class="navigation navigation-alt navigation-accordion">
                                <li class="navigation-header">Actions</li>
                                <li><a href="#"><i class="icon-googleplus5"></i> Create invoice</a></li>
                                <li><a href="#"><i class="icon-compose"></i> Edit invoice</a></li>
                                <li><a href="#"><i class="icon-archive"></i> Archive <span class="badge badge-default">190</span></a></li>
                                <li class="navigation-header">Invoices</li>
                                <li><a href="#"><i class="icon-files-empty"></i> All invoices</a></li>
                                <li><a href="#"><i class="icon-file-plus"></i> Pending invoices <span class="badge badge-info">16</span></a></li>
                                <li><a href="#"><i class="icon-file-check"></i> Paid tasks <span class="badge badge-success">50</span></a></li>
                                <li class="navigation-divider"></li>
                                <li><a href="#"><i class="icon-cog3"></i> Settings</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /navigation -->


                    <!-- Filter -->
                    <div class="sidebar-category">
                        <div class="category-title">
                            <span>Filter invoices</span>
                            <ul class="icons-list">
                                <li><a href="#" data-action="collapse"></a></li>
                            </ul>
                        </div>

                        <div class="category-content">
                            <form action="#">
                                <div class="form-group">
                                    <label class="text-semibold">Amount range:</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled">
                                            $0 - $999
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled" checked="checked">
                                            $1,000 - $1,999
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled">
                                            $2,000 - $4,999
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled" checked="checked">
                                            $5,000 - $9,999
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled" checked="checked">
                                            $10,000 +
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="text-semibold">Payment method:</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled">
                                            Wire transfer
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled" checked="checked">
                                            Paypal
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled">
                                            Payoneer
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled" checked="checked">
                                            Skrill
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled" checked="checked">
                                            Cash
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="text-semibold">Invoice status:</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled">
                                            Overdue
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled" checked="checked">
                                            On hold
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled">
                                            Pending
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled" checked="checked">
                                            Paid
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled" checked="checked">
                                            Invalid
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled">
                                            Canceled
                                        </label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-6">
                                        <button type="reset" class="btn btn-default btn-block btn-xs">Reset</button>
                                    </div>

                                    <div class="col-xs-6">
                                        <button type="submit" class="btn btn-info btn-block btn-xs">Filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /filter -->


                    <!-- Latest updates -->
                    <div class="sidebar-category">
                        <div class="category-title">
                            <span>Latest updates</span>
                            <ul class="icons-list">
                                <li><a href="#" data-action="collapse"></a></li>
                            </ul>
                        </div>

                        <div class="category-content">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="media-left"><a href="#" class="btn border-success text-success btn-flat btn-icon btn-sm btn-rounded"><i class="icon-checkmark3"></i></a></div>
                                    <div class="media-body">
                                        <a href="#">Richard Vango</a> paid invoice #0020
                                        <div class="media-annotation">4 minutes ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left"><a href="#" class="btn border-slate text-slate btn-flat btn-icon btn-sm btn-rounded"><i class="icon-infinite"></i></a></div>
                                    <div class="media-body">
                                        Invoice #0029 status has been changed to "On hold"
                                        <div class="media-annotation">36 minutes ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left"><a href="#" class="btn border-success text-success btn-flat btn-icon btn-sm btn-rounded"><i class="icon-checkmark3"></i></a></div>
                                    <div class="media-body">
                                        <a href="#">Chris Arney</a> paid invoice #0031 with Paypal
                                        <div class="media-annotation">2 hours ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left"><a href="#" class="btn border-danger text-danger btn-flat btn-icon btn-sm btn-rounded"><i class="icon-cross2"></i></a></div>
                                    <div class="media-body">
                                        Invoice #0041 has been canceled
                                        <div class="media-annotation">Dec 18, 18:36</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left"><a href="#" class="btn border-primary text-primary btn-flat btn-icon btn-sm btn-rounded"><i class="icon-plus3"></i></a></div>
                                    <div class="media-body">
                                        New invoice #0029 has been sent to <a href="#">Beatrix Diaz</a>
                                        <div class="media-annotation">Dec 12, 05:46</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /latest updates -->

                </div>
            </div>
        </div>
        <!-- /detached sidebar -->


        <!-- Footer -->
        <div class="footer text-muted">
            &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
        </div>
        <!-- /footer -->

    </div>
    <!-- /content area -->

@endsection