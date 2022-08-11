@extends('layouts.client.app')

    <!-- TITLE -->
@section('title', 'Jurusan')

@section('style')
        <!-- STYLES -->
        <link rel="stylesheet" href="{{ asset('assets/css/jurusan.css') }}">
@endsection

@section('content')
        <!-- CONTENT -->
        <!-- nav & tabs -->
        <!-- pills -->
        <ul class="nav nav-pills mt-4 flex-nowrap  justify-content-center animasi" id="pills-tab" role="tablist">
            <!-- pills jsains -->
            <li class="nav-item mx-auto animasi-nav" role="presentation">
                <button class="nav-link text-light active" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    <div class="row">
                        <svg class="jurusan-item-icon mx-auto" width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.51562 15.5417L8.2875 7.74948V2H14.5427V7.74948L18.301 15.5417" stroke="white" stroke-width="2.08333" stroke-linejoin="round"/>
                            <path d="M2.96197 22.663C2.55503 22.4661 2.243 22.1155 2.09454 21.6885C1.94607 21.2614 1.97332 20.7929 2.1703 20.386L4.51561 15.5417C4.51561 15.5417 8.27759 18.1459 11.4026 15.5417C14.5276 12.9375 18.3015 15.5417 18.3015 15.5417L20.6401 20.388C20.7655 20.648 20.8228 20.9354 20.8067 21.2236C20.7907 21.5117 20.7017 21.791 20.5482 22.0354C20.3948 22.2797 20.1817 22.4811 19.9292 22.6207C19.6766 22.7603 19.3927 22.8334 19.1042 22.8334H3.70467C3.44738 22.8334 3.19374 22.775 2.96197 22.663V22.663Z" stroke="white" stroke-width="2.08333" stroke-linejoin="round"/>
                            </svg>
                    </div>
                    <div class="row d-flex flex-wrap mx-auto my-auto">
                        Jurusan Sains
                    </div>
                </button>
            </li>
            <!-- pill jtip -->
            <li class="nav-item mx-auto animasi-nav" role="presentation">
                <button class="nav-link text-light" id="pills-contact-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                    aria-selected="false">
                    <div class="row">
                        <svg class="jurusan-item-icon mx-auto" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.5312 17.1875C19.1832 17.1891 18.8401 17.2692 18.5273 17.4219L15.168 14.0625H12.5V15.625H14.5203L17.4227 18.5273C17.2699 18.8401 17.1895 19.1832 17.1875 19.5313C17.1875 19.9948 17.325 20.4479 17.5825 20.8334C17.84 21.2188 18.2061 21.5192 18.6343 21.6966C19.0626 21.874 19.5339 21.9204 19.9885 21.83C20.4431 21.7395 20.8608 21.5163 21.1885 21.1885C21.5163 20.8608 21.7395 20.4431 21.83 19.9885C21.9204 19.5339 21.874 19.0626 21.6966 18.6343C21.5192 18.2061 21.2188 17.84 20.8334 17.5825C20.4479 17.325 19.9948 17.1875 19.5312 17.1875ZM19.5312 20.3125C19.3767 20.3125 19.2257 20.2667 19.0972 20.1808C18.9687 20.095 18.8686 19.973 18.8095 19.8302C18.7503 19.6875 18.7349 19.5304 18.765 19.3788C18.7952 19.2273 18.8696 19.0881 18.9788 18.9788C19.0881 18.8696 19.2273 18.7952 19.3788 18.765C19.5304 18.7349 19.6875 18.7503 19.8302 18.8095C19.973 18.8686 20.095 18.9687 20.1808 19.0972C20.2667 19.2257 20.3125 19.3767 20.3125 19.5313C20.3125 19.7385 20.2302 19.9372 20.0837 20.0837C19.9372 20.2302 19.7384 20.3125 19.5312 20.3125ZM19.5312 8.59375C19.0481 8.59519 18.5772 8.74615 18.1833 9.02592C17.7894 9.30569 17.4918 9.70054 17.3312 10.1563H12.5V11.7188H17.3312C17.4752 12.1228 17.7274 12.4795 18.0603 12.7499C18.3933 13.0203 18.7941 13.194 19.2191 13.252C19.6441 13.3099 20.0768 13.25 20.47 13.0787C20.8632 12.9074 21.2018 12.6313 21.4487 12.2805C21.6956 11.9298 21.8414 11.518 21.87 11.09C21.8987 10.6621 21.8092 10.2345 21.6113 9.85396C21.4134 9.47343 21.1147 9.15463 20.7479 8.93238C20.381 8.71013 19.9602 8.59299 19.5312 8.59375V8.59375ZM19.5312 11.7188C19.3767 11.7188 19.2257 11.6729 19.0972 11.5871C18.9687 11.5012 18.8686 11.3792 18.8095 11.2365C18.7503 11.0937 18.7349 10.9366 18.765 10.7851C18.7952 10.6335 18.8696 10.4943 18.9788 10.3851C19.0881 10.2758 19.2273 10.2014 19.3788 10.1713C19.5304 10.1411 19.6875 10.1566 19.8302 10.2157C19.973 10.2749 20.095 10.375 20.1808 10.5035C20.2667 10.6319 20.3125 10.783 20.3125 10.9375C20.3125 11.1447 20.2302 11.3434 20.0837 11.4899C19.9372 11.6364 19.7384 11.7188 19.5312 11.7188ZM19.5312 9.82645e-07C18.9098 0.000621463 18.3141 0.247751 17.8747 0.687155C17.4352 1.12656 17.1881 1.72234 17.1875 2.34375C17.1902 2.71801 17.2835 3.08606 17.4594 3.41641L14.5281 6.25H12.5V7.8125H15.1594L18.5969 4.49063C18.9162 4.62987 19.2625 4.69616 19.6107 4.68466C19.9589 4.67316 20.3001 4.58417 20.6096 4.42417C20.919 4.26416 21.1889 4.03717 21.3995 3.75971C21.6101 3.48225 21.7563 3.16131 21.8272 2.82025C21.8982 2.4792 21.8922 2.12661 21.8097 1.78816C21.7272 1.44971 21.5703 1.13391 21.3504 0.863752C21.1304 0.593598 20.853 0.375886 20.5383 0.226467C20.2237 0.077048 19.8796 -0.000318043 19.5312 9.82645e-07ZM19.5312 3.125C19.3767 3.125 19.2257 3.07918 19.0972 2.99334C18.9687 2.90749 18.8686 2.78548 18.8095 2.64272C18.7503 2.49997 18.7349 2.34288 18.765 2.19134C18.7952 2.03979 18.8696 1.90058 18.9788 1.79132C19.0881 1.68206 19.2273 1.60766 19.3788 1.57751C19.5304 1.54737 19.6875 1.56284 19.8302 1.62197C19.973 1.6811 20.095 1.78124 20.1808 1.90971C20.2667 2.03819 20.3125 2.18923 20.3125 2.34375C20.3125 2.55095 20.2302 2.74967 20.0837 2.89618C19.9372 3.04269 19.7384 3.125 19.5312 3.125Z" fill="white"/>
                            <path d="M12.5 3.125H14.0625V1.5625H12.5C12.0548 1.56399 11.6151 1.66117 11.2107 1.84745C10.8063 2.03373 10.4467 2.30477 10.1562 2.64219C9.86578 2.30477 9.50618 2.03373 9.1018 1.84745C8.69742 1.66117 8.25772 1.56399 7.8125 1.5625H7.03125C5.16708 1.56457 3.37986 2.30602 2.06169 3.62419C0.743522 4.94236 0.00206785 6.72958 0 8.59375V13.2812C0.00206785 15.1454 0.743522 16.9326 2.06169 18.2508C3.37986 19.569 5.16708 20.3104 7.03125 20.3125H7.8125C8.25772 20.311 8.69742 20.2138 9.1018 20.0276C9.50618 19.8413 9.86578 19.5702 10.1562 19.2328C10.4467 19.5702 10.8063 19.8413 11.2107 20.0276C11.6151 20.2138 12.0548 20.311 12.5 20.3125H14.0625V18.75H12.5C12.0857 18.7496 11.6885 18.5848 11.3956 18.2919C11.1027 17.999 10.9379 17.6018 10.9375 17.1875V4.6875C10.9379 4.27323 11.1027 3.87604 11.3956 3.5831C11.6885 3.29017 12.0857 3.12541 12.5 3.125V3.125ZM7.8125 18.75H7.03125C5.71753 18.7476 4.4485 18.2728 3.45592 17.4122C2.46335 16.5516 1.81348 15.3626 1.625 14.0625H3.125V12.5H1.5625V9.375H3.90625C4.52766 9.37438 5.12344 9.12725 5.56285 8.68785C6.00225 8.24844 6.24938 7.65266 6.25 7.03125V5.46875H4.6875V7.03125C4.6875 7.23845 4.60519 7.43716 4.45868 7.58368C4.31216 7.73019 4.11345 7.8125 3.90625 7.8125H1.625C1.81348 6.51237 2.46335 5.32342 3.45592 4.46281C4.4485 3.6022 5.71753 3.12735 7.03125 3.125H7.8125C8.22677 3.12541 8.62396 3.29017 8.9169 3.5831C9.20983 3.87604 9.37459 4.27323 9.375 4.6875V7.8125H7.8125V9.375H9.375V12.5H7.8125C7.19109 12.5006 6.59531 12.7477 6.1559 13.1872C5.7165 13.6266 5.46937 14.2223 5.46875 14.8438V16.4062H7.03125V14.8438C7.03125 14.6365 7.11356 14.4378 7.26007 14.2913C7.40659 14.1448 7.6053 14.0625 7.8125 14.0625H9.375V17.1875C9.37459 17.6018 9.20983 17.999 8.9169 18.2919C8.62396 18.5848 8.22677 18.7496 7.8125 18.75V18.75Z" fill="white"/>
                            </svg>
                    </div>
                    <div class="row d-flex flex-wrap mx-auto my-auto">
                        Jurusan JTPI
                    </div>
                </button>
            </li>
            <!-- pill jtik -->
            <li class="nav-item mx-auto animasi-nav" role="presentation">
                <button class="nav-link text-light" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                    aria-selected="false">
                    <div class="row"><svg class="jurusan-item-icon mx-auto" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0582 0L15.2102 3.02734L9.79023 0.683594L2.3793 1.17188L0 21.9727L7.66211 21.3215L16.1664 23.4375L23.4375 20.8008L21.0582 0ZM20.4109 1.21445L22.5914 20.2766L16.3164 22.552L16.2816 21.8199L21.8172 19.7301L19.9258 2.31094L15.4551 4.43125L15.4246 3.79609L15.5695 3.72148L20.4109 1.21445V1.21445ZM15.8652 13.066C15.952 12.8816 16.0371 12.6227 16.0777 12.2594C16.0777 12.2594 16.5082 12.2805 17.0379 13.4348C17.0379 13.4348 17.2691 13.4117 17.1539 12.6582C17.1539 12.6582 17.9809 12.325 17.5348 10.8598C17.5348 10.8598 18.2285 11.8152 17.998 10.573C17.998 10.573 18.759 9.64023 17.85 9.01992C17.85 9.01992 17.8812 8.33203 18.4277 8.42031C18.4277 8.42031 18.9738 7 18.7105 8.68633C18.7105 8.68633 18.7262 9.01992 19.0734 9.39609C19.0734 9.39609 19.223 8.8418 18.9578 8.24414C18.9578 8.24414 19.5043 7.22148 19.4543 6.33516C19.4543 6.33516 17.684 6.9918 15.7141 6.7957C15.7141 6.7957 15.8102 6.4293 15.541 6.22344L15.4859 5.06523L15.5328 5.04297L19.4328 3.19375L21.1859 19.3426L16.2527 21.2055L15.8652 13.066V13.066ZM15.1473 6.19336C14.9438 6.48359 14.3789 7.37617 14.7223 7.91055C14.7223 7.91055 14.5559 9.06797 14.3238 7.37969C14.3238 7.37969 13.9445 8.37617 13.4312 8.15391C13.4312 8.15391 13.2902 9.1625 12.9672 8.48672C12.9672 8.48672 13.2316 8.59805 13.2898 8.2875C13.2898 8.2875 12.5441 7.48867 12.0984 8.69648C12.0984 8.69648 11.7344 8.84141 11.8754 9.40781C11.8754 9.40781 12.1309 8.94062 12.2637 9.65195C12.2637 9.65195 12.4047 9.54102 12.4637 8.63047C12.4637 8.63047 12.8176 8.45391 12.5441 9.17344C12.5441 9.17344 13.3551 9.18633 12.0984 9.90547C12.0984 9.90547 12.0289 9.89375 11.9742 9.61797C11.9742 9.61797 11.784 10.282 11.3941 10.5176C11.3941 10.5176 11.4855 10.7828 11.1965 10.9047C11.1965 10.9047 11.0398 11.3156 11.4125 11.3156C11.4125 11.3156 11.7348 10.3281 12.3473 11.1051C12.3473 11.1051 12.4641 11.0609 12.2816 10.6723C12.2816 10.6723 12.6035 10.7957 12.7281 11.3047C12.7281 11.3047 12.927 11.2703 12.9586 10.8277C12.9586 10.8277 13.2082 10.2621 13.6141 10.9281C13.6141 10.9281 13.0754 10.7723 12.9355 11.3156C12.9355 11.3156 13.1902 11.2043 13.3488 11.3602C13.3488 11.3602 13.3648 11.6137 13.2023 11.7117C13.2727 11.8438 13.3488 11.9703 13.4551 12.0773C13.4847 12.1049 13.5039 12.1419 13.5093 12.1819C13.5148 12.222 13.5063 12.2628 13.4852 12.2973C13.7719 12.7879 14.3016 13.441 14.6723 12.3984C14.6723 12.3984 14.1762 12.6801 14.0102 11.9031C14.0102 11.9031 15.0113 12.0305 15.473 13.0348L15.8617 21.2176L8.07578 19.034L8.19258 17.8789C8.3543 18.2934 8.54375 18.4617 8.54375 18.4617C8.32383 16.659 9.62461 15.5039 9.62461 15.5039C9.87734 14.2664 9.23477 13.7109 8.63906 13.4609L8.94492 10.4344C9.06758 10.2816 9.13984 10.1797 9.13984 10.1797C9.0957 10.0277 9.05273 9.89453 9.01172 9.77266L9.3082 6.83594C9.55742 7.13945 9.58594 7.41523 9.51602 7.66602C9.19531 8.81953 9.60781 9.17305 9.60781 9.17305C9.8582 8.19883 10.7176 8.04336 10.7176 8.04336C10.6684 7.13242 11.1973 6.09687 11.1973 6.09687C10.6219 5.1082 9.79883 5.775 9.36758 6.24688L9.40117 5.91523C9.48945 5.80156 9.58164 5.67773 9.68125 5.53633C9.68125 5.53633 9.59883 5.47969 9.44922 5.43828L9.71172 2.83867L15.057 5.0543L15.0945 5.06992L15.1473 6.19336V6.19336ZM9.06055 5.39844C8.79414 5.41094 8.45313 5.50273 8.05195 5.78008C8.05195 5.78008 7.86133 7.53086 8.95586 6.43359L8.83359 7.64492C8.69063 7.1668 8.35156 7.00039 8.35156 7.00039C8.01953 7.20117 8.05273 7.4668 8.05273 7.4668C8.35391 7.51211 8.53789 7.87461 8.64609 8.21445C8.58516 8.30781 8.48086 8.41445 8.30078 8.43203C8.30078 8.43203 8.51055 8.74727 8.71367 8.83555L8.69141 9.05273C8.21875 8.34453 8.01406 9.76758 8.01406 9.76758C6.8457 8.46562 8.32422 7.81406 8.32422 7.81406C7.41914 7.43164 7 6.33555 7 6.33555C6.95586 7.01641 6.69063 6.98633 6.69063 6.98633C4.61641 5.77383 4.24297 7.72656 4.24297 7.72656C4.57227 8.76094 3.86641 8.8793 3.86641 8.8793C4.55 8.99727 4.90273 8.05078 4.90273 8.05078C6.31602 8.76094 5.56562 11.3051 5.56562 11.3051C6.1168 11.6293 6.27148 12.6953 6.27148 12.6953C6.65547 12.8117 7.04883 13.0469 7.32461 13.2332C7.37812 13.1852 7.4332 13.1395 7.49102 13.0969C6.84648 12.6414 6.84531 11.9039 6.84531 11.9039C7.43008 11.9039 8.05195 11.4 8.50078 10.9367L8.25859 13.3363C8.14959 13.3089 8.03913 13.2877 7.92773 13.2727C7.8236 13.3226 7.72578 13.3848 7.63633 13.4578L7.68398 13.4949C7.03398 14.7438 7.91289 15.2445 8.05859 15.3168L7.68555 19.0082L2.51523 19.4125L4.23984 3.07891L9.325 2.77969L9.06055 5.39844V5.39844ZM8.01602 19.6262L15.8906 21.8348L15.9258 22.5727L7.91953 20.5805L8.01602 19.6262ZM15.0336 3.80234L15.0633 4.42344L9.77344 2.23086L9.84141 1.55664L14.9 3.74453L15.0336 3.80234V3.80234ZM3.08164 1.90859L9.45547 1.48867L9.38477 2.18945L3.70938 2.52305L1.85898 20.052L7.62656 19.6L7.53047 20.5484L0.884766 21.1137L3.08164 1.90859Z" fill="white"/>
                        <path d="M11.7431 13.5223C11.7431 13.5223 12.572 13.6774 12.2404 15.2747C12.2404 15.2747 12.3728 16.5196 13.0997 16.4059C13.0997 16.4059 13.2982 14.6094 14.2251 13.2333C14.2251 13.2333 13.8494 13.6075 13.4232 12.3665C13.3587 12.4133 13.2712 12.4243 13.1982 12.3516C13.0146 12.1684 12.9037 11.9375 12.7841 11.7055C12.7672 11.6721 12.7602 11.6345 12.7642 11.5973C12.1611 11.3723 10.9396 11.1465 10.7665 12.9227C10.7669 12.9227 10.9978 14.1454 11.7431 13.5223V13.5223ZM11.3634 9.3731C11.4205 10.1731 11.5275 10.4161 11.6677 10.0836C11.8087 9.75395 11.3634 9.3731 11.3634 9.3731ZM11.113 10.1282C11.113 10.1282 11.3462 10.0938 11.2794 9.80044C11.2794 9.80044 11.113 9.81763 11.113 10.1282ZM11.0232 8.51997C11.0232 8.51997 10.4353 8.51997 10.6431 8.82036C10.8497 9.11997 11.0232 8.51997 11.0232 8.51997ZM13.9611 15.8079C13.9611 15.8079 14.1408 15.4415 14.1349 14.8766C14.1353 14.8766 13.5634 15.5297 13.9611 15.8079ZM17.6665 13.5118C17.6665 13.5118 17.2525 13.8895 17.3283 14.2336C17.4029 14.579 17.7662 14.1657 17.6665 13.5118ZM19.3224 14.7333C19.504 14.4153 18.3275 14.0215 18.3275 14.0215C18.5599 14.3661 19.1576 15.0168 19.3224 14.7333ZM18.0064 14.8012C18.2826 14.3286 17.1705 14.5547 17.1705 14.5547C17.1705 14.5547 17.899 14.9879 18.0064 14.8012ZM18.4435 14.8997C18.4435 14.8997 18.2208 15.3977 17.3935 15.6075C17.3935 15.6075 17.5681 16.0079 17.3935 16.7629C17.3935 16.7629 18.2287 15.6973 18.7099 17.2387C18.7099 17.2387 19.1228 17.4629 19.4122 16.0672C19.4122 16.0672 19.065 15.5645 18.9494 14.8497C18.9497 14.8493 18.8349 15.7653 18.4435 14.8997V14.8997ZM18.6068 10.3555C18.6595 10.3114 18.7005 10.2954 18.7005 10.2954C18.2955 9.64028 18.4435 10.5844 18.4435 10.5844C18.4697 10.5223 18.5005 10.4747 18.5322 10.4344C18.5537 10.7141 18.4865 11.1309 18.0497 11.527C18.0494 11.527 18.9861 11.1739 18.6068 10.3555ZM11.458 5.45122C11.6622 4.97231 11.0201 4.427 11.0201 4.427C11.1025 5.57817 11.2552 5.92974 11.458 5.45122ZM10.6595 5.51411C10.6595 5.51411 10.9919 5.46489 10.8978 5.0438C10.8978 5.0438 10.6595 5.06763 10.6595 5.51411Z" fill="white"/>
                        </svg></div>
                    <div class="row d-flex flex-wrap mx-auto my-auto">
                        Jurusan JTIK
                    </div>
                </button>
            </li>

        </ul>
        <!-- tabs -->
        <div class="tab-content mt-3 text-light" id="pills-tabContent">

            <!-- tabs Jurusan Sains -->
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="container p-4">
                    <div class="row justify-content-around mb-4">
                        <div class="col-lg-6 col-md-10 mb-4">
                            <img class="gambar-1 img-fluid" src="../assets/jurusan-poster1.webp" alt="" srcset="">
                        </div>
                        <div class="col-lg-6 col-md-10 my-auto gerak">
                            <h2 class="mt-lg-5 mt-md-4"><strong>Kepala Jurusan</strong></h2>
                            <h5>{{ $JS->kepalaJurusan }}</h5>
                            <h2 class="mt-lg-5 mt-md-4"><strong>Alamat Kantor</strong></h2>
                            <h5>{{ $JS->ruangJurusan }}</h5>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="container text-center">
                            <h2><strong>Visi</strong></h2>
                            <h6>{{ $JS->visi }}</h6>
                            <h2><strong>Misi</strong></h2>
                            <h6>
                                {!!nl2br(e($JTPI->misi)) !!}
                            </h6>
                        </div>
                    </div>
                    <!-- nama prodi -->
                    <div class="row justify-content-center" id="terakhir">
                        <div class="col-12 text-center">
                            <h2><strong>Program Studi</strong></h2>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <h6 class="text-md-end">Program Studi Fisika </h6>
                            <h6 class="text-md-end">Program Studi Matematika </h6>
                            <h6 class="text-md-end">Program Studi Biologi </h6>
                            <h6 class="text-md-end">Program Studi Kimia</h6>
                            <h6 class="text-md-end">Program Studi Farmasi</h6>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <h6 class="">Program Studi Atmosfer dan Keplanetan</h6>
                            <h6 class="">Program Studi Sains Aktuaria</h6>
                            <h6 class="">Program Studi Sains Lingkungan Kelautan</h6>
                            <h6 class="">Program Studi Sains Data</h6>
                        </div>
                    </div>
                </div>
            </div>

            <!-- tabs jurusan JTIK -->
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <div class="container p-4">
                    <div class="row justify-content-around mb-4">
                        <div class="col-lg-6 col-md-10 mb-4">
                            <img class="gambar-1 img-fluid" src="../assets/jurusan-poster3.webp" alt="" srcset="">
                        </div>
                        <div class="col-lg-6 col-md-10 my-auto">
                            <h2 class="mt-lg-5 mt-md-4"><strong>Kepala Jurusan</strong></h2>
                            <h5>{{ $JTIK->kepalaJurusan }}</h5>
                            <h2 class="mt-lg-5 mt-md-4"><strong>Alamat Kantor</strong></h2>
                            <h5>{{ $JTIK->ruangJurusan }}
                            </h5>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="container text-center">
                            <h2><strong>Visi</strong></h2>
                            <h6>{{ $JTIK->visi }}</h6>
                            <h2><strong>Misi</strong></h2>
                            <h6>
                                {!!nl2br(e($JTPI->misi)) !!}
                            </h6>
                        </div>
                    </div>
                    <!-- nama prodi -->
                    <div class="row justify-content-center" id="terakhir">
                        <div class="col-12 text-center">
                            <h2><strong>Program Studi</strong></h2>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <h6 class="text-md-end">Program Studi Perencanaan Wilayah dan Kota</h6>
                            <h6 class="text-md-end">Program Studi Teknik Geomatika</h6>
                            <h6 class="text-md-end">Program Studi Teknik Sipil</h6>
                            <h6 class="text-md-end">Program Studi Arsitektur</h6>
                            <h6 class="text-md-end">Program Studi Teknik Lingkungan</h6>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <h6>Program Studi Teknik Kelautan</h6>
                            <h6>Program Studi Desain Komunikasi Visual</h6>
                            <h6>Program Arsitektur Lanskap</h6>
                            <h6>Program Teknik Perkeretaapian</h6>
                            <h6>Rekayasa Tata Kelola Air Terpadu</h6>
                        </div>
                    </div>
                </div>
            </div>

            <!-- jurusan JTPI -->
            <div class=" tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                <div class="container p-4">
                    <!-- gambar dan deskripsi jurusan JTPI -->
                    <div class="row justify-content-around mb-4">
                        <div class="col-lg-6 col-md-10 mb-4">
                            <img class="gambar-1 img-fluid" src="../assets/jurusan-poster2.webp" alt="" srcset="">
                        </div>
                        <div class="col-lg-6 col-md-10 my-auto">
                            <h2 class="mt-lg-5 mt-md-4"><strong>Kepala Jurusan</strong></h2>
                            <h5>{{ $JTPI->kepalaJurusan }}</h5>
                            <h2 class="mt-lg-5 mt-md-4"><strong>Alamat Kantor</strong></h2>
                            <h5>{{ $JTPI->ruangJurusan }}</h5>
                        </div>
                    </div>

                    <!-- visi dan misi -->
                    <div class="row justify-content-around mb-4">
                        <div class="container text-center">
                            <h2><strong>Visi</strong></h2>
                            <h6>{{ $JTPI->visi }}</h6>
                            <h2><strong>Misi</strong></h2>
                            <h6>
                                {!!nl2br(e($JTPI->misi)) !!}
                            </h6>
                        </div>
                    </div>

                    <!-- nama prodi -->
                    <div class="row justify-content-center " id="terakhir">
                        <div class="col-12 text-center">
                            <h2><strong>Program Studi</strong></h2>
                        </div>
                        <div class="col-lg-6 col-md-10 ">
                            <h6 class="text-md-end">Program Studi Teknik Elektro</h6>
                            <h6 class="text-md-end">Program Studi Teknik Fisika</h6>
                            <h6 class="text-md-end">Program Studi Teknik Informatika</h6>
                            <h6 class="text-md-end">Program Studi Teknik Geologi</h6>
                            <h6 class="text-md-end">Program Studi Teknik Geofisika</h6>
                            <h6 class="text-md-end">Program Studi Teknik Mesin</h6>
                            <h6 class="text-md-end">Program Studi Teknik Kimia</h6>
                            <h6 class="text-md-end">Program Studi Teknik Material</h6>
                            <h6 class="text-md-end">Program Studi Teknik Sistem Energi</h6>
                            <h6 class="text-md-end">Program Studi Teknik Industri</h6>
                        </div>
                        <div class="col-lg-6 col-md-10 ">
                            <h6>Program Studi Teknik Telekomunikasi</h6>
                            <h6>Program Studi Teknik Pertambangan</h6>
                            <h6>Program Studi Teknik Biosistem</h6>
                            <h6>Program Studi Teknik Biomedik</h6>
                            <h6>Program Studi Teknologi Pangan</h6>
                            <h6>Program Studi Teknologi Industri Pertanian</h6>
                            <h6>Program Studi Rekayasa Kehutanan</h6>
                            <h6>Program Studi Rekayasa Kosmetik</h6>
                            <h6>Program Studi Rekayasa Minyak dan Gas</h6>
                            <h6>Program Studi Instrumentasi dan Automasi</h6>
                        </div>
                    </div>
                </div>

            </div>

        </div>
@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection
