<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="google-site-verification" content="rG1PyYzDUE8rwHK3EvqgEaOt38GDi7gndeKLdQr0W_E"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {!! seo()->for($webseting) !!}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
{{--    <title>滑肌師工作室</title>--}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- 从 CDN 引入 wow.js -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>


    <link rel="stylesheet" href="{{ asset('main/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('calendar/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('calendar/fullcalendar/packages/core/main.css') }}">
    <link rel="stylesheet" href="{{ asset('calendar/fullcalendar/packages/daygrid/main.css') }}">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('calendar/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('calendar/css/style.css') }}">

    <script src="{{ asset('calendar/js/popper.min.js') }}"></script>
    <script src="{{ asset('main/js/main.js') }}"></script>
    {{--非預設樣式引入--}}
    <link rel="stylesheet" href="{{ asset('calendar/self_element.css') }}">

    {{--<script src="../../../spcTest/js/bootstrap.min.js"></script>--}}

    <script src="{{ asset('calendar/fullcalendar/packages/core/main.js') }}"></script>
    <script src="{{ asset('calendar/fullcalendar/packages/interaction/main.js') }}"></script>
    <script src="{{ asset('calendar/fullcalendar/packages/daygrid/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>

<div class="content">
    <div id='calendar'>
    </div>
</div>

{{--<x-head.tinymce-config/>--}}
{{--<script src='path/to/fullcalendar/locales/zh-tw.js'></script>--}}


{{--<script src="{{ asset('calendar/js/main.js') }}"></script>--}}


<!-- 發文 Start -->
<div class="container-xxl py-1">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            {{--            <h6 class="text-primary">最新消息</h6>--}}
            <h1 class="mb-1">最新資訊</h1>
        </div>
        <div class="row g-4 portfolio-container wow fadeInUp justify-content-center" data-wow-delay="0.5s">
            @foreach($pPost as $Post)
                <div class="col-lg-4 col-md-6 portfolio-item ">
                    <div class=" rounded overflow-hidden post_detail" data-post="{{$Post['id']}}">
                        <img class="img-fluid " src="{{ asset('storage/'.$Post['image_path']) }}" alt="">

                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">{{$Post['title']}}</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">{{$Post['subtitle']}}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-body footer mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-4">
        <div class="row g-5">
            <div class="col-12 text-center ">
                <h5 class="text-white mb-4">滑肌師工作室-聯絡資訊</h5>
                <div class="">
                    <a class="btn btn-square btn-outline-light btn-social" target="_blank"
                       href="https://x.com/ZrAi970662068?t=4bjlltMUWh4hr0FUcP3XMw&s=06"><i
                            class="fab fa-twitter"></i></a>
                    {{--                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>--}}
                    <a class="btn btn-square btn-outline-light btn-social" target="_blank" href="https://Lin.ee/r75pCdi"><img
                            src="{{ asset("storage") }}/LINE_pic.png"
                            style="justify-items: center; width: 16px;height: 16px ; filter: grayscale(100%);"></a>
                    <a class="btn btn-square btn-outline-light btn-social" target="_blank"
                       href="https://www.instagram.com/yushun1991?igsh=N2FkaXJybmk5eDA="><i
                            class="fab fa-instagram"></i></a>
                    {{--                    <a class="btn btn-square btn-outline-light btn-social" href=""><i--}}
                    {{--                            class="fab fa-linkedin-in"></i></a>--}}
                </div>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><a>106台北市大安區信義路二段198巷6號,台灣</a></p>
                {{--                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>--}}
                {{--                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>--}}
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.0303038663565!2d121.52781907595623!3d25.03304563832893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a9823d91e5f1%3A0x492ccfd3c6d857b8!2zMTA25Y-w5YyX5biC5aSn5a6J5Y2A5L-h576p6Lev5LqM5q61MTk45be3NuiZnw!5e0!3m2!1szh-TW!2stw!4v1705572689649!5m2!1szh-TW!2stw"
                    width="300" height="225" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<style>
    .content {
        padding: 3rem 0 !important;
    }


    .fc-toolbar.fc-header-toolbar {
        margin-left: 20px;
        margin-right: 20px;
    }

    .post_image {
        width: 100%;
    }

    .post_content {
        margin-top: 10px;
        margin-bottom: 10px;
        text-align: left;
    }

    .custom-height-popup {
        /*height: 300px;  !* 指定您想要的高度 *!*/
        margin: 20px;
    }

    .fc-scroller.fc-day-grid-container {
        /*強制行事曆轉高度*/
        height: auto !important;
    }
</style>
<!-- Projects End -->
<script>
    $(function () {
        var holidayAry = {!! json_encode($holidayAry) !!};//休假日宣告
        var count_time = {!! json_encode($count_time) !!};

        $(document).on('click', '.post_detail', function (e) {
            var post_id = $(this).data('post');
            // console.log(post_id)
            var pPost_json = {!! json_encode($pPost) !!};
            var post = pPost_json[post_id];
            var h =
                `<img class="post_image" src="{{ asset("storage") }}/` + post['image_path'] + `" alt="Custom Icon"><div class="post_content">` + post['content'] + `</div>`;
            // console.log(post)
            Swal.fire({
                width: 480,
                customClass: {
                    heightAuto: false,  // 預防 SweetAlert 自動計算高度
                    popup: 'custom-height-popup'  // 指定 CSS 類名
                },
                title: post['title'],
                html: h,
                showCancelButton: false,
                showConfirmButton: false,  // 將確定按鈕隱藏
            }).then((result) => {
                if (result.isConfirmed) {
                    // 用户点击了确认按钮
                    Swal.fire('Deleted!', 'Your file has been deleted.', 'success');
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    // 用户点击了取消按钮
                    Swal.fire('Cancelled', 'Your file is safe :)', 'error');
                }
            });
        });
        $(document).on('click', '.detail_data', function (e) {
            var container = $('.fc-scroller.fc-day-grid-container');

            // 檢查是否已經有了 .add_height 類別
            if (!container.hasClass('add_height')) {
                // 添加 .add_height 類別
                container.addClass('add_height');

                // // 增加高度
                // container.css('height', 'auto');
            } else {
                container.removeClass('add_height');
                update_height()
                $('.detail_data').removeClass('active');
            }

            // $('.fc-scroller.fc-day-grid-container.add_height').removeClass('add_height');
        });

        $(document).on('click', '[name="week"]', function (e) {
            var week = $(this).attr('week');

            var container = $('.fc-scroller.fc-day-grid-container');

            // 檢查是否已經有了 .add_height 類別
            if (!container.hasClass('add_height')) {
                // 添加 .add_height 類別
                container.addClass('add_height');
                $('.detail_data.detail-' + week).addClass('active');
            } else {
                container.removeClass('add_height');
                $('.detail_data').removeClass('active');
            }
        });

        $(document).on('click', '.fc-right', function (e) {

            updateCalendar();

        });
        $(document).on('click', '.fi-btn-label', function (e) {

            // 找到最接近的表单元素
            var form = $(this).closest('form');

            // 获取表单中所有数据
            var formData = form.serializeArray();

            // 打印数据到控制台（你可以根据需要进行其他处理）
            alert(formData)
            // console.log();

        });

        $(document).ready(function () {

            initializeCalendar(holidayAry, count_time);
            $('.fc-dayGrid-view').prepend({!! json_encode($note[0]) !!});//標頭備註
            updateCalendar(holidayAry, count_time);

        });
    });

    function update_height() {
        //20231229棄用 改直接在STYLE宣告
        var container = $('.fc-scroller.fc-day-grid-container');
        container.css('height', 'auto');
    }

    function updateCalendar(holidayAry, count_time) {
        var weekElements = $('.fc-row.fc-week.fc-widget-content.fc-rigid');
        var ptime_json = {!! json_encode($pReserve) !!};

        weekElements.each(function (index, weekElement) {
            $(weekElement).attr('week', index + 1); // 先把週打進去

            var array_data = $(`[week="${index + 1}"] .fc-content-skeleton .fc-day-top`);

            // 這裡你可以對每一周的元素進行操作
            var detail_data = `
            <div class="detail_data detail detail-${index + 1}">
              @foreach($ptime as $time)
            <div style=" background-color: {{ ($time['id'] % 2 !== 0) ? '#D1D7DF56' : '#9abcd256' }}">
                    <table>
                        <a style="width: 85px" class="time_title fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable">
                            <div class="fc-content">
                                <span class="">{{ $time['time']}}</span>
                            </div>
                            <div class="fc-resizer fc-end-resizer"></div>
                        </a>
                        <tbody>
                            <tr>
                                ${array_data.map(function (innerIndex, element) {
                var data = $(element).attr('data-date');
                var cleanedData = data.replace(/-/g, '');
                var time = "{{str_replace(['-', ':'], '', $time['time'])}}";//加雙引號0才不會被吃掉
                var concatenatedString = cleanedData + time;
                var textValue = (ptime_json[concatenatedString] ? ptime_json[concatenatedString].text : '-');
                var data_color = ptime_json[concatenatedString] ? 'background-color:' + ptime_json[concatenatedString].bcolor + '; color:' + ptime_json[concatenatedString].tcolor : '';
                return `<td class="td-ass" ><div class="circle-td" style=" ${data_color}" data="${data}">${textValue ?? ' '}</div></td>`;
            }).get().join('')}
                            </tr>
                        </tbody>
                    </table>
                </div>
                @endforeach
            </div>
`;

            // 將超連結添加到元素中
            $(weekElement).attr('name', 'week');
            $(weekElement).after(detail_data);
        });
        $('.fc-right>button').text('今天');
    }

    function initializeCalendar(holidayAry, count_time) {
        var calendarEl = $('#calendar');
        var events = [];

        for (var date in holidayAry) {
            var timePeriods = holidayAry[date];
            6
            for (var i = 0; i < timePeriods.length; i++) {
                if (i === count_time - 1) {
                    var eventObject = {
                        title: '公休日',
                        start: date,
                        backgroundColor: '#777888',
                    };
                    events.push(eventObject);
                }
            }
        }

        var calendar = new FullCalendar.Calendar(calendarEl[0], {
            plugins: ['interaction', 'dayGrid'],
            defaultDate: new Date(),
            editable: false,
            eventLimit: true,
            locale: 'zh-tw',
            events: events,
        });

        calendar.render();
    }


</script>
<style>
    {{--    td的樣式--}}
    .td-ass {

    }

    {{--    td裡的樣式--}}
    .circle-td {
        padding: 0px 5px 0px 5px;
        /*margin-left: 38%;*/
        /*background-color: #777888;*/
        /*color: #fff; !* 設置文字顏色為白色 *!*/
        border-radius: 10px; /* 設置半徑為50%，使其呈現圓形 */
        /*width: auto; !* 指定元素寬度 *!*/
        height: auto; /* 指定元素高度 */
    }
</style>
