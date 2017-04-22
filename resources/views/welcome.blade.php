<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <div>
                <map name="malaysia_map">  <area class="trackable" data-event_type="link" data-event_name="Map" data-xtn2="1" data-page_name="Map: Perlis" data-click_type="N" shape="poly" coords="20,12,15,18,9,25,4,27,1,16,2,7,4,2,18,3,21,3" href="http://www.mudah.my/Perlis/for-sale" title="Perlis" onmouseover="map_over(1);" onmouseout="map_out(1);">  <area class="trackable" data-event_type="link" data-event_name="Map" data-xtn2="1" data-page_name="Map: Kedah" data-click_type="N" shape="poly" coords="21,12,16,19,12,23,8,27,7,27,9,33,11,44,14,56,17,60,23,60,25,62,25,64,25,80,29,78,34,72,35,71,37,70,38,69,39,67,40,64,43,63,43,56,45,52,46,49,49,45,56,37,56,28,43,19,33,13" href="http://www.mudah.my/Kedah/for-sale" title="Kedah" onmouseover="map_over(2);" onmouseout="map_out(2);">  <area class="trackable" data-event_type="link" data-event_name="Map" data-xtn2="1" data-page_name="Map: Penang" data-click_type="N" shape="poly" coords="14,59,5,60,3,69,6,75,14,78,18,80,24,80,24,75,24,66,24,63,24,61,22,61,19,61,18,61" href="http://www.mudah.my/Penang/for-sale" title="Penang" onmouseover="map_over(3);" onmouseout="map_out(3);">  <area class="trackable" data-event_type="link" data-event_name="Map" data-xtn2="1" data-page_name="Map: Kelantan" data-click_type="N" shape="poly" coords="79,51,78,60,78,62,80,65,81,67,80,70,79,72,77,72,75,72,76,72,72,71,71,77,70,80,69,84,67,86,67,94,66,97,64,99,64,103,64,106,68,106,70,104,73,106,75,107,80,104,81,103,82,99,84,98,86,100,86,104,88,105,90,103,90,98,98,98,100,102,111,102,113,98,115,98,118,100,122,99,122,96,118,93,116,91,116,81,111,77,111,74,112,72,111,68,111,55,118,48,112,32,99,27,95,27" href="http://www.mudah.my/Kelantan/for-sale" title="Kelantan" onmouseover="map_over(4);" onmouseout="map_out(4);">  <area class="trackable" data-event_type="link" data-event_name="Map" data-xtn2="1" data-page_name="Map: Terengganu" data-click_type="N" shape="poly" coords="118,48,112,55,112,69,113,71,112,76,114,78,117,81,117,91,123,96,125,101,131,102,133,102,133,104,132,110,133,111,139,111,140,114,139,118,134,127,135,129,141,127,144,132,150,135,151,136,152,134,152,128,155,126,159,125,161,120,161,106,158,92,150,74,140,63" href="http://www.mudah.my/Terengganu/for-sale" title="Terengganu" onmouseover="map_over(5);" onmouseout="map_out(5);">  <area class="trackable" data-event_type="link" data-event_name="Map" data-xtn2="1" data-page_name="Map: Perak" data-click_type="N" shape="poly" coords="46,49,45,55,44,57,44,62,44,64,41,64,40,66,40,68,39,69,37,71,35,72,33,75,30,79,26,81,16,81,15,83,18,91,22,125,30,141,40,140,43,143,48,144,57,149,59,149,60,146,60,143,64,143,66,147,68,150,70,148,71,146,71,129,69,128,68,128,66,123,65,116,62,115,61,114,61,110,63,108,63,99,66,94,66,85,69,82,69,78,72,71,74,71,77,72,79,70,80,65,77,62,77,55,79,48,75,41,68,43" href="http://www.mudah.my/Perak/for-sale" title="Perak" onmouseover="map_over(6);" onmouseout="map_out(6);">  <area class="trackable" data-event_type="link" data-event_name="Map" data-xtn2="1" data-page_name="Map: Pahang" data-click_type="N" shape="poly" coords="64,107,63,110,61,111,62,114,65,115,66,117,68,125,71,129,72,131,72,142,74,145,80,149,82,151,82,152,82,154,82,159,81,164,83,167,89,170,92,171,97,171,101,174,106,175,111,178,114,182,122,187,125,190,129,191,131,196,141,203,145,203,145,200,151,200,155,201,164,208,165,207,165,198,162,189,159,177,158,159,155,144,157,136,157,128,155,127,153,129,153,135,152,137,150,135,147,134,144,133,141,128,139,129,135,130,133,126,137,120,139,116,139,112,133,112,131,111,132,107,133,104,131,102,125,102,123,99,121,100,117,100,114,99,113,99,112,102,108,103,99,102,97,99,96,98,90,98,90,103,89,105,86,105,86,102,85,99,83,99,82,100,82,103,78,107,75,107,73,107,70,105,68,107,65,107,66,107" href="http://www.mudah.my/Pahang/for-sale" title="Pahang" onmouseover="map_over(7);" onmouseout="map_out(7);">  <area class="trackable" data-event_type="link" data-event_name="Map" data-xtn2="1" data-page_name="Map: Selangor" data-click_type="N" shape="poly" coords="33,141,38,141,39,141,43,143,45,144,48,145,58,150,59,148,60,147,60,143,63,144,64,144,67,150,68,150,69,150,71,148,72,144,78,148,82,152,82,159,80,163,82,167,84,168,87,169,91,172,91,175,84,186,79,186,79,199,77,202,70,202,64,199,62,195,62,192,83,178,83,172,78,169,74,171,57,174,45,163,36,152" href="http://www.mudah.my/Selangor/for-sale" title="Selangor" onmouseover="map_over(8);" onmouseout="map_out(8);">  <area class="trackable" data-event_type="link" data-event_name="Map" data-xtn2="1" data-page_name="Map: Kuala Lumpur" data-click_type="N" shape="poly" coords="77,170,75,171,70,172,58,174,54,175,48,175,30,175,17,187,18,201,31,211,46,207,57,196,63,191,82,178,83,174,82,172,81,171,78,170" href="http://www.mudah.my/Kuala-Lumpur/for-sale" title="Kuala Lumpur" onmouseover="map_over(9);" onmouseout="map_out(9);">  <area class="trackable" data-event_type="link" data-event_name="Map" data-xtn2="1" data-page_name="Map: N. Sembilan" data-click_type="N" shape="poly" coords="92,172,92,175,90,178,85,186,84,187,79,187,80,196,79,200,78,202,80,210,87,210,93,206,98,206,100,205,106,205,110,206,116,209,118,207,119,198,121,192,122,189,121,187,115,183,112,180,109,177,101,174,95,171" href="http://www.mudah.my/Negeri-Sembilan/for-sale" title="N. Sembilan" onmouseover="map_over(10);" onmouseout="map_out(10);">  <area class="trackable" data-event_type="link" data-event_name="Map" data-xtn2="1" data-page_name="Map: Melaka" data-click_type="N" shape="poly" coords="86,211,91,208,93,207,98,207,100,206,105,206,110,207,114,209,114,212,113,219,113,222,112,225,108,228,92,218,91,214" href="http://www.mudah.my/Melaka/for-sale" title="Melaka" onmouseover="map_over(11);" onmouseout="map_out(11);">  <area class="trackable" data-event_type="link" data-event_name="Map" data-xtn2="1" data-page_name="Map: Johor" data-click_type="N" shape="poly" coords="122,189,120,198,119,201,119,207,118,209,115,210,114,216,114,220,113,224,113,226,120,236,147,251,157,265,165,263,180,259,193,262,198,256,193,238,176,207,172,199,166,198,165,206,165,209,163,208,159,205,155,202,152,201,146,200,146,201,145,204,142,204,139,203,135,200,130,196,127,191" href="http://www.mudah.my/Johor/for-sale" title="Johor" onmouseover="map_over(12);" onmouseout="map_out(12);">  <area class="trackable" data-event_type="link" data-event_name="Map" data-xtn2="1" data-page_name="Map: Sarawak" data-click_type="N" shape="poly" coords="308,235,314,251,348,280,367,278,370,272,410,276,426,267,426,255,466,250,463,257,496,266,536,256,551,231,554,220,564,208,582,179,587,131,580,119,579,97,567,100,550,106,508,119,480,162,443,196,408,209,400,224,382,228,368,252,307,235" href="http://www.mudah.my/Sarawak/for-sale" title="Sarawak" onmouseover="map_over(13);" onmouseout="map_out(13);">  <area class="trackable" data-event_type="link" data-event_name="Map" data-xtn2="1" data-page_name="Map: Sabah" data-click_type="N" shape="poly" coords="579,96,582,102,582,120,591,133,663,127,673,136,722,125,723,120,721,101,753,89,750,75,729,75,693,51,683,31,659,11,637,9,626,29,606,51,597,72,580,72,572,84,582,88,580,97" href="http://www.mudah.my/Sabah/for-sale" title="Sabah" onmouseover="map_over(14);" onmouseout="map_out(14);">  <area class="trackable" data-event_type="link" data-event_name="Map" data-xtn2="1" data-page_name="Map: Putrajaya" data-click_type="N" shape="poly" coords="" href="http://www.mudah.my/Putrajaya/for-sale" title="Putrajaya" onmouseover="map_over(16);" onmouseout="map_out(16);">  <area class="trackable" data-event_type="link" data-event_name="Map" data-xtn2="1" data-page_name="Map: Labuan" data-click_type="N" shape="poly" coords="" href="http://www.mudah.my/Labuan/for-sale" title="Labuan" onmouseover="map_over(17);" onmouseout="map_out(17);">  </map>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
