@extends('layouts.master')
@section('title')
    盤查建檢管理
@endsection
@section('css')
    <!-- choices css -->
    <link href="{{ URL::asset('build/libs/choices.js/public/assets/styles/choices.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- color picker css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/@simonwep/pickr/themes/classic.min.css') }}" /> <!-- 'classic' theme -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/@simonwep/pickr/themes/monolith.min.css') }}" /> <!-- 'monolith' theme -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/@simonwep/pickr/themes/nano.min.css') }}" /> <!-- 'nano' theme -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- dropzone css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}">
@endsection
@section('page-title')
    盤查建檢管理
@endsection
@section('body')

    <body data-layout="horizontal">
    @endsection
    @section('content')


        <div class="row">
            <div class="col-xxl-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="user-profile-img">
                            <img src="{{ URL::asset('build/images/pattern-bg.jpg') }}" class="profile-img profile-foreground-img rounded-top"
                                style="height: 120px;" alt="">
                            <div class="overlay-content rounded-top">
                                <div>
                                    <div class="user-nav p-3">
                                        <div class="d-flex justify-content-end">
                                            <div class="dropdown">
                                                <a class="text-muted dropdown-toggle font-size-16" href="#"
                                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="bx bx-dots-vertical text-white font-size-20"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end user-profile-img -->

                        <form id="data-submit-form">
                        @csrf
                        <div class="p-4 pt-0">

                            <div class="mt-n5 position-relative text-center border-bottom pb-3">
                                <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt=""
                                    class="avatar-xl rounded-circle img-thumbnail">

                                <div class="mt-3">
                                    <div class="col-md-12">
                                        <div class="mb-2">
                                            <h5 class="mb-2" id="company_name">企業名稱</h5>
                                            <select class="form-select"  id="customer_id" name="customer_id"  required >
                                                <option value="" selected>請選擇企業</option>
                                                @foreach($customers as $customer)
                                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-1">
                                            <select class="form-select"  id="branch_id" name="branch_id" required >
                                                <option value="" selected>請選擇分場</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="table-responsive mt-3 border-bottom pb-3">
                                <table
                                    class="table align-middle table-sm table-nowrap table-borderless table-centered mb-0">
                                    <tbody>
                                        <tr>
                                            <th class="fw-bold">
                                                聯絡人 :</th>
                                            <td class="text-muted" id="contact_name"></td>
                                        </tr>
                                        <tr>
                                            <th class="fw-bold">聯絡電話 :</th>
                                            <td class="text-muted" id="contact_phone"></td>
                                        </tr>
                                        <!-- end tr -->

                                        <tr>
                                            <th class="fw-bold">聯絡信箱 :</th>
                                            <td class="text-muted" id="contact_email"></td>
                                        </tr>
                                        <!-- end tr -->
                                        <tr>
                                            <th class="fw-bold">
                                                地址 :</th>
                                            <td class="text-muted" id="branch_address"></td>
                                        </tr>
                                        <!-- end tr -->
                                        <tr>
                                            <th class="fw-bold">
                                                統一編號 :</th>
                                            <td class="text-muted" id="business_registration_no"></td>
                                        </tr>
                                        <!-- end tr -->
                                        <tr>
                                            <th class="fw-bold">
                                                公司規模 :</th>
                                            <td class="text-muted" id="company_scale"></td>
                                        </tr>
                                        <!-- end tr -->
                                        <tr>
                                            <th class="fw-bold">
                                                上市櫃狀態 :</th>
                                            <td class="text-muted" id="stock_status"></td>
                                        </tr>
                                        <!-- end tr -->
                                        <tr>
                                            <th class="fw-bold">
                                                銷售方向 :</th>
                                            <td class="text-muted" id="sales_orientation"></td>
                                        </tr>
                                        <!-- end tr -->
                                        <tr>
                                            <th class="fw-bold">
                                                銷售方向 :</th>
                                            <td class="text-muted" id="sales_region"></td>
                                        </tr>
                                        <!-- end tr -->
                                    </tbody><!-- end tbody -->
                                </table>
                            </div>



                            {{-- <div class="p-3 mt-3">
                                <div class="row text-center">
                                    <div class="col-6 border-end">
                                        <div class="p-1">
                                            <h5 class="mb-1">1,269</h5>
                                            <p class="text-muted mb-0">Products</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-1">
                                            <h5 class="mb-1">5.2k</h5>
                                            <p class="text-muted mb-0">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-2 text-center border-bottom pb-4">
                                <a href="" class="btn btn-primary waves-effect waves-light btn-sm">Send Message <i
                                        class="bx bx-send ms-1 align-middle"></i></a>
                            </div>

                            <div class="mt-3 pt-1 text-center">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="javascript:void()"
                                            class="social-list-item bg-primary text-white border-primary">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                                            <i class="bx bxl-linkedin"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void()"
                                            class="social-list-item bg-danger text-white border-danger">
                                            <i class="bx bxl-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-9">
                    <input class="form-control mt-3" type="hidden" id="customber_id_text" name="customber_id_text" value="">
                    <input class="form-control mt-3" type="hidden" id="branch_id_text" name="branch_id_text" value="">
                    <div id="addproduct-accordion" class="custom-accordion">
                        <div class="card">
                            <a href="#addproduct-productinfo-collapse" class="text-dark" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="addproduct-productinfo-collapse">
                                <div class="p-4">

                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                    <h5 class="text-primary font-size-17 mb-0">01</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-16 mb-1">起始</h5>
                                            <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                        </div>

                                    </div>

                                </div>
                            </a>

                            <div id="addproduct-productinfo-collapse" class="collapse show"
                                data-bs-parent="#addproduct-accordion">
                                <div class="p-4 border-top">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label" for="year">盤查年度</label>
                                            <div class="col-md-10">
                                                <select class="form-select"  id="year" name="year" required >
                                                        <option value="" selected>請選擇...</option>
                                                        @foreach($years as $year)
                                                            <option value="{{ $year}}">{{ $year }}年</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">起始會議</label>
                                            <div class="col-md-10">
                                                <div id="Step1_inputGroupFile01-preview"></div>
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="Step1_inputGroupFile01" name="Step1_inputGroupFile01" aria-describedby="inputGroupFileAddon01" aria-label="Upload">
                                                    <button class="btn btn-primary" type="button" id="Step1_inputGroupFileAddon01">上傳</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">經營者/高階主管共同承諾日期</label>
                                            <div class="col-md-10">
                                                <input class="form-control mt-3" type="date" name="commitment_date" value="">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">推動成立組織</label>
                                            <div class="col-md-10">
                                                <div id="Step1_inputGroupFile02-preview"></div>
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="Step1_inputGroupFile02"
                                                        aria-describedby="Step1_inputGroupFileAddon02" name="Step1_inputGroupFile02" aria-label="Upload">
                                                    <button class="btn btn-primary" type="button"
                                                        id="Step1_inputGroupFileAddon02">上傳</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <a href="#addproduct-img-collapse" class="text-dark collapsed" data-bs-toggle="collapse"
                                aria-haspopup="true" aria-expanded="false" aria-haspopup="true"
                                aria-controls="addproduct-img-collapse">
                                <div class="p-4">

                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                    <h5 class="text-primary font-size-17 mb-0">02</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-16 mb-1">邊界設定</h5>
                                            <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                        </div>

                                    </div>

                                </div>
                            </a>

                            <div id="addproduct-img-collapse" class="collapse" data-bs-parent="#addproduct-accordion">
                                    <div class="p-4 border-top">
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">盤查使用標準</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="standard">
                                                        <option value="null" selected>請選擇</option>
                                                        <option value="0">使用ISO14064-1標準</option>
                                                        <option value="1">使用環保署標準</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">組織邊界設定</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="organizational_boundary_setting">
                                                        <option value="null" selected>請選擇</option>
                                                        <option value="0">營運控制權</option>
                                                        <option value="1">股權比例法</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">盤查邊界設定</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" id="boundary_setting" name="boundary_setting" placeholder="請輸入區域，EX：辦公室、廠區">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">盤查邊界地址</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text"  id="address" name="address" value="">
                                                </div>
                                            </div>
                                    </div>
                            </div>
                        </div>

                        <div class="card">
                            <a href="#addproduct-metadata-collapse" class="text-dark collapsed" data-bs-toggle="collapse"
                                aria-haspopup="true" aria-expanded="false" aria-haspopup="true"
                                aria-controls="addproduct-metadata-collapse">
                                <div class="p-4">

                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                    <h5 class="text-primary font-size-17 mb-0">03</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-16 mb-1">排放源鑑定</h5>
                                            <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                        </div>

                                    </div>

                                </div>
                            </a>

                            <div id="addproduct-metadata-collapse" class="collapse" data-bs-parent="#addproduct-accordion">
                                <div class="p-4 border-top">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">現場勘查與活動數據匯入</label>
                                            <div class="col-md-10">
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="Step3_excel_import"
                                                        aria-describedby="Step3_inputGroupExcelImport" name="Step3_excel_import" aria-label="Upload">
                                                    <button class="btn btn-primary" type="button"
                                                        id="Step3_inputGroupExcelImport">上傳</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="ExcelImportPreview" class="table-responsive">
                                            <table class="table">
                                                <!-- ... 其他部分如 <thead> ... -->
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                        {{-- <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">拍照收集</label>
                                            <div class="col-md-10">
                                                <form id="uploadForm">
                                                    <div class="form-group">
                                                        <label for="images" style="color: red;">可上傳多張照片並預覽</label>
                                                        <input type="file" class="form-control" id="images" name="images[]" multiple="multiple">
                                                    </div>
                                                </form>
                                                <div class="mt-3" id="preview"></div>
                                            </div>
                                        </div> --}}
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <a href="#addproduct-productinfo-collapse1" class="text-dark" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="addproduct-productinfo-collapse1">
                                <div class="p-4">

                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                    <h5 class="text-primary font-size-17 mb-0">04</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-16 mb-1">系統細算及清冊建立</h5>
                                            <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                        </div>

                                    </div>

                                </div>
                            </a>

                            <div id="addproduct-productinfo-collapse1" class="collapse"
                                data-bs-parent="#addproduct-accordion1">
                                <div class="p-4 border-top">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">建立排放量清冊</label>
                                            <div class="col-md-10">
                                                <div id="Step4_inputGroupFile01-preview"></div>
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="Step4_inputGroupFile01"
                                                        aria-describedby="Step4_inputGroupFileAddon01" aria-label="Upload">
                                                    <button class="btn btn-primary" type="button"
                                                        id="Step4_inputGroupFileAddon01">上傳</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">驗證單位審查</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="verification_unit_review" name="verification_unit_review" placeholder="請輸入驗證單位">
                                                <input class="form-control mt-3" type="date"  id="verification_unit_review_date" name="verification_unit_review_date">
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <a href="#addproduct-productinfo-collapse3" class="text-dark" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="addproduct-productinfo-collapse3">
                                <div class="p-4">

                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                    <h5 class="text-primary font-size-17 mb-0">05</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-16 mb-1">稽核備存查證</h5>
                                            <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                        </div>

                                    </div>

                                </div>
                            </a>

                            <div id="addproduct-productinfo-collapse3" class="collapse"
                                data-bs-parent="#addproduct-accordion3">
                                <div class="p-4 border-top">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">內部查證/外部稽核</label>
                                            <div class="col-md-10">
                                                <select class="form-select" name="internal_verification">
                                                    <option value="null" selected>請選擇</option>
                                                    <option value="0">內部</option>
                                                    <option value="1">外部</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">亞瑞仕國際驗證ISO14064-1證書</label>
                                            <div class="col-md-10">
                                                <div id="Step5_inputGroupFile01-preview"></div>
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="Step5_inputGroupFile01"
                                                        aria-describedby="Step5_inputGroupFileAddon01" aria-label="Upload">
                                                    <button class="btn btn-primary" type="button"
                                                        id="Step5_inputGroupFileAddon01">上傳</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">亞瑞仕國際驗證零碳證書</label>
                                            <div class="col-md-10">
                                                <div id="Step5_inputGroupFile02-preview"></div>
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="Step5_inputGroupFile02"
                                                        aria-describedby="Step5_inputGroupFileAddon02" aria-label="Upload">
                                                    <button class="btn btn-primary" type="button"
                                                        id="Step5_inputGroupFileAddon02">上傳</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">聯合國碳權證書</label>
                                            <div class="col-md-10">
                                                <div id="Step5_inputGroupFile03-preview"></div>
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="Step5_inputGroupFile03"
                                                        aria-describedby="Step5_inputGroupFileAddon03" aria-label="Upload">
                                                    <button class="btn btn-primary" type="button"
                                                        id="Step5_inputGroupFileAddon03">上傳</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">盤查清冊</label>
                                            <div class="col-md-10">
                                                <div id="Step5_inputGroupFile04-preview"></div>
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="Step5_inputGroupFile04"
                                                        aria-describedby="Step5_inputGroupFileAddon04" aria-label="Upload">
                                                    <button class="btn btn-primary" type="button"
                                                        id="Step5_inputGroupFileAddon04">上傳</button>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 mb-2">
                            <div class="col text-end">
                                <button class="btn btn-danger" onclick="history.go(-1)"><i class="bx bx-x me-1"></i> 取消 </button>
                                <button class="btn btn-success" type="submit" id="btn_submit"><i class=" bx bx-file me-1"></i> 保存 </button>
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                    </div>
                </div>
        </div>
        <!-- end row -->
    </form>


        
    @endsection
    @section('scripts')
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Leaflet JS -->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <script src="{{ URL::asset('build/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

        <!-- dropzone plugin -->
        <!-- init js -->
        <script src="{{ URL::asset('build/js/pages/form-advanced.init.js') }}"></script>
        <!-- init js -->
        <script src="{{ URL::asset('build/js/pages/ecommerce-choices.init.js') }}"></script>
        
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
        <script src="{{ URL::asset('build/libs/select2/select2.min.js') }}"></script>
        <script>
            $(document).ready(function(){
                setupAjaxFileUpload('#Step1_inputGroupFile01', '#Step1_inputGroupFileAddon01');
                setupAjaxFileUpload('#Step1_inputGroupFile02', '#Step1_inputGroupFileAddon02');
                setupAjaxFileUpload('#Step4_inputGroupFile01', '#Step4_inputGroupFileAddon01');
                setupAjaxFileUpload('#Step5_inputGroupFile01', '#Step5_inputGroupFileAddon01');
                setupAjaxFileUpload('#Step5_inputGroupFile02', '#Step5_inputGroupFileAddon02');
                setupAjaxFileUpload('#Step5_inputGroupFile03', '#Step5_inputGroupFileAddon03');
                setupAjaxFileUpload('#Step5_inputGroupFile04', '#Step5_inputGroupFileAddon04');
            });

            $('#btn_submit').click(function(e) {
                e.preventDefault();


                // 檢查 'customber_id_text' 和 'branch_id_text' 是否有值
                var customberId = $('#customber_id_text').val().trim();
                var branchId = $('#branch_id_text').val().trim();
                
                if (!customberId || !branchId) {
                    alert('請確保公司名稱和分行名稱都已填入。');
                    return;  // 返回並不進行後續的操作
                }

                var Step01_filename01 = $('#Step1_inputGroupFile01').val().split('\\').pop(); // 從完整的路徑名中提取檔名
                var Step01_filename02 = $('#Step1_inputGroupFile02').val().split('\\').pop(); // 從完整的路徑名中提取檔名
                var Step03_filename01 = $('#Step3_excel_import').val().split('\\').pop(); // 從完整的路徑名中提取檔名
                var Step04_filename01 = $("#Step4_inputGroupFile01").val().split('\\').pop(); 
                var Step05_filename01 = $("#Step5_inputGroupFile01").val().split('\\').pop();
                var Step05_filename02 = $("#Step5_inputGroupFile02").val().split('\\').pop(); 
                var Step05_filename03 = $("#Step5_inputGroupFile03").val().split('\\').pop(); 
                var Step05_filename04 = $("#Step5_inputGroupFile04").val().split('\\').pop(); 

                var formData = $('#data-submit-form').serializeArray(); // 獲取除文件外的其他表單數據
                formData.push({ name: "Step1_inputGroupFile01_filename", value: Step01_filename01 }); // 將檔名添加到數據中
                formData.push({ name: "Step1_inputGroupFile02_filename", value: Step01_filename02 }); // 將檔名添加到數據中
                formData.push({ name: "Step3_inputGroupFile01_filename", value: Step03_filename01 });
                formData.push({ name: "Step4_inputGroupFile01_filename", value: Step04_filename01 });
                formData.push({ name: "Step5_inputGroupFile01_filename", value: Step05_filename01 });
                formData.push({ name: "Step5_inputGroupFile02_filename", value: Step05_filename02 });
                formData.push({ name: "Step5_inputGroupFile03_filename", value: Step05_filename03 });
                formData.push({ name: "Step5_inputGroupFile04_filename", value: Step05_filename04 });
                console.log(formData);

                $.ajax({
                    url: '{{ route('inspection.store') }}',
                    method: 'POST',
                    data: $.param(formData),
                    success: function(response) {
                        alert('Data submitted successfully');
                        if (response.redirect_url) {
                            window.location.href = response.redirect_url;
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('There was an error submitting the data.');
                    }
                });
            });

            function setupAjaxFileUpload(inputSelector, buttonSelector){
                $(buttonSelector).on('click', function() {
                    var formData = new FormData();
                    var customerId = $('#customber_id_text').val();
                    var branchId = $('#branch_id_text').val();
                    var fileInput = $(inputSelector)[0];
                    if(fileInput.files.length === 0) {
                        alert('No file selected');
                        return;
                    }
                    // 檢查檔案名稱是否包含空白字符
                    var filename = fileInput.files[0].name;
                    if (filename.includes(' ')) {
                        alert('檔案名稱不能包含空白字符！');
                        return;
                    }
                    formData.append('file', fileInput.files[0]);
                    formData.append('_token', '{{ csrf_token() }}');
                    formData.append('customber_id_text', customerId);
                    formData.append('branch_id_text', branchId);

                    $.ajax({
                        url: '{{ route("upload") }}',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            alert('File uploaded successfully');
                            // 獲得返回的檔案URL
                            var fileUrl = response.url;

                            // 創建一個連結元素
                            var link = $('<a></a>').attr('href', fileUrl).text('預覽檔案').attr('target', '_blank');

                            // 將連結元素添加到HTML中的一個特定區域
                            var inputId = inputSelector.substring(1);
                            console.log(inputId);
                            $('#'+inputId+'-preview').append(link);
                        },
                        error: function(error) {
                            alert('File upload failed');
                        }
                    });
                });

                $('#customer_id').select2();
                $('#branch_id').select2();

                var Company = '';

                function updateCompany() {
                    if (Company_Name && Company_Branche) {
                        Company = Company_Name + '-' + Company_Branche;
                        $("#company_name").html(Company);
                    }
                }


                $("#customer_id").change(function() {
                    var value = $(this).val();
                    $.ajax({
                        type : 'get',
                        url : '{{ route('customer.data') }}',
                        data: {'cust_id': value},
                        success: function(data){
                            Company_Name = data['name'];
                            $("#customber_id_text").val(data['id']);
                            $('#customer_address').html(data['county']+data['district']+data['address']);
                            $("#business_registration_no").html(data['business_registration_no']);
                            $("#stock_status").html(data['stock_status']);
                            $("#company_scale").html(data['company_scale']);
                            $("#sales_orientation").html(data['sales_orientation']);
                            $("#sales_region").html(data['sales_region']);
                            $("#operational_status").html(data['operational_status']);
                            $.ajax({
                                type : 'get',
                                url : '{{ route('branch.datas') }}',
                                data: {'cust_id': value},
                                success: function(data){
                                    $('#branch_id').html(data);
                                    var branch_id = $("#branch_id").val();
                                    $.ajax({
                                        type : 'get',
                                        url : '{{ route('branch.data') }}',
                                        data: {'branch_id': branch_id},
                                        success: function(data){
                                            Company_Branche = data['name'];
                                            $("#branch_id_text").val(data['id']);
                                            $('#branch_address').html(data['address']);
                                            $("#address").val(data['address']);
                                            $('#contact_name').html(data['contact_name']);
                                            $('#contact_phone').html(data['contact_phone']);
                                            $('#contact_email').html(data['contact_email']);
                                            updateCompany();
                                        }
                                    });
                                }
                            });
                        }
                    });
                });



                $("#branch_id").change(function() {
                    var branch_id = $("#branch_id").val();
                    $.ajax({
                        type : 'get',
                        url : '{{ route('branch.data') }}',
                        data: {'branch_id': branch_id},
                        success: function(data){
                            Company_Branche = data['name'];
                            updateCompany();
                            $("#branch_id_text").val(data['id']);
                            $('#branch_address').html(data['address']);
                            $('#contact_name').html(data['contact_name']);
                            $('#contact_phone').html(data['contact_phone']);
                            $('#contact_email').html(data['contact_email']);
                        }
                    });
                });

                $("#images").on("change", function() {
                    var files = $(this)[0].files;
                    var allowedTypes = ["image/jpeg", "image/png", "image/gif", "image/jpg"];
                    var isValid = true;
                    var invalidFiles = [];

                    // 檢查每個選擇的檔案
                    for (var i = 0; i < files.length; i++) {
                        if (!allowedTypes.includes(files[i].type)) {
                            isValid = false;
                            invalidFiles.push(files[i].name);
                        }
                    }

                    if (!isValid) {
                        alert("不允許的檔案類型: " + invalidFiles.join(", "));
                        $(this).val(''); // 清除選擇
                        $(".custom-file-label").text("上傳檔案");
                        return;
                    }

                    if (files.length >= 2) {
                        $(".custom-file-label").text(files.length + " files selected");
                    } else {
                        let fileName = $(this).val().split("\\").pop();
                        $(".custom-file-label").text(fileName);
                    }

                    $('#preview').html(""); // to clear the previous images
                    var totalFile = document.getElementById("images").files.length;
                    for (var i = 0; i < totalFile; i++) {
                        $('#preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "' width='400' class='mr-2 mb-2'>");
                    }
                });


                $('#Step3_inputGroupExcelImport').off('click').click(function(e) {
                    e.preventDefault(); // 防止按鈕的預設動作

                    var year_check = $('#year').val().trim();
                    if (!year_check) {
                        alert('請確保邊界設定的盤查年度已選擇。');
                        return;  // 返回並不進行後續的操作
                    }
                    var formData = new FormData(); 
                    formData.append('excel', $('#Step3_excel_import')[0].files[0]); // 把文件加入到 FormData 中
                    // formData.append('excel', $('#Step3_excel_import')[0].files[0]);

                    var branch_id = $("#branch_id_text").val();
                    formData.append('branch_id', branch_id);

                    var year = $("#year").val();
                    formData.append('year', year);
                    
                    var customer_id = $("#customber_id_text").val();
                    console.log(customer_id);
                    var url = "{{ route('process_emission.import.data', ':id') }}";
                    url = url.replace(':id', customer_id);
                    
                    $.ajax({
                        url: url, // 路由地址
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: formData,
                        processData: false,  // 告訴 jQuery 不要處理 data
                        contentType: false,  // 告訴 jQuery 不要設定 contentType
                        success: function(response) {
                            $.ajax({
                                url: '/process_emission/' + customer_id + '/' + branch_id + '/' + year + '/data',
                                type: 'GET',
                                success: function(data) {
                                    var tbodyContent = '';
                                    $.each(data, function(index, row) {
                                        tbodyContent += '<tr>';
                                        tbodyContent += '<td>' + (index + 1) + '</td>';
                                        tbodyContent += '<td>' + row.process_code + '</td>';
                                        tbodyContent += '<td>' + row.equipment_code + '</td>';
                                        tbodyContent += '<td>' + row.fuel_name + '</td>';
                                        tbodyContent += '<td align="right">' + Number(row.single_source_emission_total).toFixed(4) + '</td>';
                                        tbodyContent += '<td align="right">' + (Number(row.single_source_percentage) * 100).toFixed(2) + '%' + '</td>';
                                        tbodyContent += '</tr>';
                                    });

                                    $('#ExcelImportPreview .table tbody').html(tbodyContent);
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    // 這裡是當請求失敗時的回調函數。
                                    console.error("AJAX error: " + textStatus + ' : ' + errorThrown);
                                }
                            });
                        },
                        error: function(error) {
                            // 上傳失敗時的錯誤處理
                            console.error("Error:", error);
                        }
                    });
                });
                
                
                $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
            }
        </script>
    @endsection
