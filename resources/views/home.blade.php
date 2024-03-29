@extends('layouts.app')
@section('title','Admin Dashboard')
@section('content')

<div class="content">
    <!-- Top Statistics -->
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>$18,699</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right"
                            aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="sub-title">
                        <span class="mr-1">Sales of this year</span> |
                        <span class="mx-1">45%</span>
                        <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                        <div>
                            <div id="spline-area-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>$14,500</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right"
                            aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="sub-title">
                        <span class="mr-1">Expense of this year</span> |
                        <span class="mx-1">50%</span>
                        <i class="mdi mdi-arrow-down-bold text-danger"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                        <div>
                            <div id="spline-area-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>$4199</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right"
                            aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="sub-title">
                        <span class="mr-1">Profit of this year</span> |
                        <span class="mx-1">20%</span>
                        <i class="mdi mdi-arrow-down-bold text-danger"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                        <div>
                            <div id="spline-area-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>$20,199</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right"
                            aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="sub-title">
                        <span class="mr-1">Revenue of this year</span> |
                        <span class="mx-1">35%</span>
                        <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                        <div>
                            <div id="spline-area-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8">

            <!-- Income and Express -->
            <div class="card card-default">
                <div class="card-header">
                    <h2>Income And Expenses</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" data-display="static">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right"
                            aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                        <div id="mixed-chart-1"></div>
                    </div>
                </div>

            </div>


        </div>
        <div class="col-xl-4">
            <!-- Current Users  -->
            <div class="card card-default">
                <div class="card-header">
                    <h2>Current Users</h2>
                    <span>Realtime</span>
                </div>
                <div class="card-body">
                    <div id="barchartlg2"></div>
                </div>
                <div class="card-footer bg-white py-4">
                    <a href="#" class="text-uppercase">Current Users Overview</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <!-- Top Customers -->
            <div class="card card-default">
                <div class="card-header">
                    <h2>Top Customers</h2>
                </div>
                <div class="card-body">
                    <table class="table table-borderless table-thead-border">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th class="text-right">Income</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-dark font-weight-bold">Gunter Reich</td>
                                <td class="text-right">$2,560</td>
                            </tr>
                            <tr>
                                <td class="text-dark font-weight-bold">Anke Kirsch</td>
                                <td class="text-right">$1,720</td>
                            </tr>
                            <tr>
                                <td class="text-dark font-weight-bold">Karolina Beer</td>
                                <td class="text-right">$1,230</td>
                            </tr>
                            <tr>
                                <td class="text-dark font-weight-bold">Lucia Christ</td>
                                <td class="text-right">$875</td>
                            </tr>
                        </tbody>
                        <tfoot class="border-top">
                            <tr>
                                <td><a href="#" class="text-uppercase">See All</a></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
        <div class="col-xl-8">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Sales by Country</h2>
                    <div id="country-sales-range" class="date-range">
                        <i class="mdi mdi-calendar"></i>&nbsp;
                        <span class="date-holder"></span>
                        <i class="mdi mdi-menu-down"></i>
                    </div>
                </div>
                <div class="card-body py-0">
                    <div class="row pb-4">
                        <div class="col-lg-7 border-right-lg">
                            <div class="vec-map-wrapper">
                                <div id="home-world" style="height: 100%; width: 100%;"></div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="chart-wrapper">
                                <div id="horizontal-bar-chart"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Stock Modal -->
    <div class="modal fade modal-stock" id="modal-stock" aria-labelledby="modal-stock"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <form action="#">
                <div class="modal-content">
                    <div class="modal-header align-items-center p3 p-md-5">
                        <h2 class="modal-title" id="exampleModalGridTitle">Add Stock</h2>
                        <div>
                            <button type="button" class="btn btn-light btn-pill mr-1 mr-md-2"
                                data-dismiss="modal"> cancel </button>
                            <button type="submit" class="btn btn-primary  btn-pill"
                                data-dismiss="modal"> save </button>
                        </div>

                    </div>
                    <div class="modal-body p3 p-md-5">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3 class="h5 mb-5">Product Information</h3>
                                <div class="form-group mb-5">
                                    <label for="new-product">Product Title</label>
                                    <input type="text" class="form-control" id="new-product"
                                        placeholder="Add Product">
                                </div>
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <label for="price">Price</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                    id="basic-addon1">$</span>
                                            </div>
                                            <input type="text" class="form-control" id="price"
                                                placeholder="Price" aria-label="Price"
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="sale-price">Sale Price</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                    id="basic-addon1">$</span>
                                            </div>
                                            <input type="text" class="form-control" id="sale-price"
                                                placeholder="Sale Price" aria-label="SalePrice"
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <div class="product-type mb-3 ">
                                    <label class="d-block" for="sale-price">Product Type <i
                                            class="mdi mdi-help-circle-outline"></i> </label>
                                    <div>

                                        <div
                                            class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="customRadio1" name="customRadio"
                                                class="custom-control-input" checked="checked">
                                            <label class="custom-control-label"
                                                for="customRadio1">Physical Good</label>
                                        </div>

                                        <div
                                            class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="customRadio2" name="customRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label"
                                                for="customRadio2">Digital Good</label>
                                        </div>

                                        <div
                                            class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                            <input type="radio" id="customRadio3" name="customRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label"
                                                for="customRadio3">Service</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="editor">
                                    <label class="d-block" for="sale-price">Description <i
                                            class="mdi mdi-help-circle-outline"></i></label>
                                    <div id="standalone">
                                        <div id="toolbar">
                                            <span class="ql-formats">
                                                <select class="ql-font"></select>
                                                <select class="ql-size"></select>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-bold"></button>
                                                <button class="ql-italic"></button>
                                                <button class="ql-underline"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <select class="ql-color"></select>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-blockquote"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-list" value="ordered"></button>
                                                <button class="ql-list" value="bullet"></button>
                                                <button class="ql-indent" value="-1"></button>
                                                <button class="ql-indent" value="+1"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-direction" value="rtl"></button>
                                                <select class="ql-align"></select>
                                            </span>
                                        </div>
                                    </div>
                                    <div id="editor"></div>

                                    <div class="custom-control custom-checkbox d-inline-block mt-2">
                                        <input type="checkbox" class="custom-control-input"
                                            id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Hide
                                            product from published site</label>
                                    </div>

                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile"
                                        placeholder="please imgae here">
                                    <span class="upload-image">Click here to <span
                                            class="text-primary">add product image.</span> </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection