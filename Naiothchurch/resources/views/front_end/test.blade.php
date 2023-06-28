<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>CodePen - Windows Fluent  Design Calendar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./style.css">
    <style>
        * {
            outline: none;
            box-sizing: border-box;
        }

        html {
            font-size: 100%;
        }

        body {
            height: 100%;
            padding: 1rem;
            background-color: #f6f5f1;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            font-family: -apple-system, BlinkMacSystemFont, system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu, "Helvetica Neue", sans-serif;
            background-image: linear-gradient(45deg, #f86a6c 0%, #fd588a 100%);
        }
        @media screen and (min-width: 55em) {
            body {
                height: 100vh;
                margin: 0;
            }
        }

        h1, h2, h3, h4, h5, h6 {
            -webkit-font-smoothing: antialiased;
        }

        p, span, ul, li {
            color: #2d4338;
            font-weight: 100;
            -webkit-font-smoothing: subpixel-antialiased;
            font-size: 1rem;
        }

        .calendar-contain {
            position: relative;
            left: 0;
            right: 0;
            border-radius: 0;
            width: 100%;
            overflow: hidden;
            max-width: 1020px;
            min-width: 450px;
            margin: 1rem auto;
            background-color: #f5f7f6;
            box-shadow: 5px 5px 72px rgba(30, 46, 50, 0.5);
            color: #040605;
        }
        @media screen and (min-width: 55em) {
            .calendar-contain {
                margin: auto;
                top: 5%;
            }
        }

        .title-bar {
            position: relative;
            width: 100%;
            display: table;
            text-align: right;
            background: #f5f7f6;
            padding: 0.5rem;
            margin-bottom: 0;
        }
        .title-bar:after {
            display: table;
            clear: both;
        }

        .title-bar__burger {
            display: block;
            position: relative;
            float: left;
            overflow: hidden;
            margin: 0;
            padding: 0;
            width: 38px;
            height: 30px;
            font-size: 0;
            text-indent: -9999px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            box-shadow: none;
            border-radius: none;
            border: none;
            cursor: pointer;
            background: none;
        }
        .title-bar__burger:focus {
            outline: none;
        }

        .burger__lines {
            display: block;
            position: absolute;
            width: 18px;
            top: 15px;
            left: 0;
            right: 0;
            margin: auto;
            height: 1px;
            background: #040605;
        }
        .burger__lines:before, .burger__lines:after {
            position: absolute;
            display: block;
            left: 0;
            width: 100%;
            height: 1px;
            background-color: #040605;
            content: "";
        }
        .burger__lines:before {
            top: -5px;
        }
        .burger__lines:after {
            bottom: -5px;
        }

        .title-bar__year {
            display: block;
            position: relative;
            float: left;
            font-size: 1rem;
            line-height: 30px;
            width: 43%;
            padding: 0 0.5rem;
            text-align: left;
        }
        @media screen and (min-width: 55em) {
            .title-bar__year {
                width: 27%;
            }
        }

        .title-bar__month {
            position: relative;
            float: left;
            font-size: 1rem;
            line-height: 30px;
            width: 22%;
            padding: 0 0.5rem;
            text-align: left;
        }
        @media screen and (min-width: 55em) {
            .title-bar__month {
                width: 12%;
            }
        }
        .title-bar__month:after {
            content: "";
            display: inline;
            position: absolute;
            width: 10px;
            height: 10px;
            right: 0;
            top: 5px;
            margin: auto;
            border-top: 1px solid black;
            border-right: 1px solid black;
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg);
        }

        .title-bar__minimize,
        .title-bar__maximize,
        .title-bar__close {
            position: relative;
            float: left;
            width: 34px;
            height: 34px;
        }
        .title-bar__minimize:before, .title-bar__minimize:after,
        .title-bar__maximize:before,
        .title-bar__maximize:after,
        .title-bar__close:before,
        .title-bar__close:after {
            top: 30%;
            right: 30%;
            bottom: 30%;
            left: 30%;
            content: " ";
            position: absolute;
            border-color: #8e8e8e;
            border-style: solid;
            border-width: 0 0 2px 0;
        }

        .title-bar .title-bar__controls {
            display: inline-block;
            vertical-align: top;
            position: relative;
            float: right;
            width: auto;
        }
        .title-bar .title-bar__controls:before, .title-bar .title-bar__controls:after {
            content: none;
        }

        .title-bar .title-bar__minimize:before {
            border-bottom-width: 2px;
        }

        .title-bar .title-bar__maximize:before {
            border-width: 1px 1px 2px 1px;
        }

        .title-bar .title-bar__close:before,
        .title-bar .title-bar__close:after {
            bottom: 50%;
            top: 49.9%;
        }

        .title-bar .title-bar__close:before {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .title-bar .title-bar__close:after {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .calendar__sidebar {
            width: 100%;
            margin: 0 auto;
            float: none;
            background: linear-gradient(120deg, #eff3f3, #e1e7e8);
            padding-bottom: 0.7rem;
        }
        @media screen and (min-width: 55em) {
            .calendar__sidebar {
                position: absolute;
                height: 100%;
                width: 30%;
                float: left;
                margin-bottom: 0;
            }
        }

        .calendar__sidebar .content {
            padding: 2rem 1.5rem 2rem 4rem;
            color: #040605;
        }

        .sidebar__nav {
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: start;
            justify-content: flex-start;
            margin-bottom: 0.9rem;
            padding: 0.7rem 1rem;
            background-color: #f5f7f6;
        }

        .sidebar__nav-item {
            display: inline-block;
            width: 22px;
            margin-right: 23px;
            padding: 0;
            opacity: 0.8;
        }

        .sidebar__list {
            list-style: none;
            margin: 0;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .sidebar__list-item {
            margin: 1.2rem 0;
            color: #2d4338;
            font-weight: 100;
            font-size: 1rem;
        }

        .list-item__time {
            display: inline-block;
            width: 60px;
        }
        @media screen and (min-width: 55em) {
            .list-item__time {
                margin-right: 2rem;
            }
        }

        .sidebar__list-item--complete {
            color: rgba(4, 6, 5, 0.3);
        }
        .sidebar__list-item--complete .list-item__time {
            color: rgba(4, 6, 5, 0.3);
        }

        .sidebar__heading {
            font-size: 2.2rem;
            font-weight: bold;
            padding-left: 1rem;
            padding-right: 1rem;
            margin-bottom: 3rem;
            margin-top: 1rem;
        }
        .sidebar__heading span {
            float: right;
            font-weight: 300;
        }

        .calendar__heading-highlight {
            color: #2d444a;
            font-weight: 900;
        }

        .calendar__days {
            display: -webkit-box;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-flow: column wrap;
            -webkit-box-align: stretch;
            align-items: stretch;
            width: 100%;
            float: none;
            min-height: 580px;
            height: 100%;
            font-size: 12px;
            padding: 0.8rem 0 1rem 1rem;
            background: #f5f7f6;
        }
        @media screen and (min-width: 55em) {
            .calendar__days {
                width: 70%;
                float: right;
            }
        }

        .calendar__top-bar {
            display: -webkit-box;
            display: flex;
            -webkit-box-flex: 32px;
            flex: 32px 0 0;
        }

        .top-bar__days {
            width: 100%;
            padding: 0 5px;
            color: #2d4338;
            font-weight: 100;
            -webkit-font-smoothing: subpixel-antialiased;
            font-size: 1rem;
        }

        .calendar__week {
            display: -webkit-box;
            display: flex;
            -webkit-box-flex: 1;
            flex: 1 1 0;
        }

        .calendar__day {
            display: -webkit-box;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-flow: column wrap;
            -webkit-box-pack: justify;
            justify-content: space-between;
            width: 100%;
            padding: 1.9rem 0.2rem 0.2rem;
        }

        .calendar__date {
            color: #040605;
            font-size: 1.7rem;
            font-weight: 600;
            line-height: 0.7;
        }
        @media screen and (min-width: 55em) {
            .calendar__date {
                font-size: 2.3rem;
            }
        }

        .calendar__week .inactive .calendar__date,
        .calendar__week .inactive .task-count {
            color: #c6c6c6;
        }
        .calendar__week .today .calendar__date {
            color: #fd588a;
        }

        .calendar__task {
            color: #040605;
            display: -webkit-box;
            display: flex;
            font-size: 0.8rem;
        }
        @media screen and (min-width: 55em) {
            .calendar__task {
                font-size: 1rem;
            }
        }
        .calendar__task.calendar__task--today {
            color: #fd588a;
        }

    </style>

</head>
<body>
<!-- partial:index.partial.html -->
<main class="calendar-contain">



    <aside class="calendar__sidebar">

        <h2 class="sidebar__heading"> Upcoming Events<br></h2>
        <ul class="sidebar__list">
            <li class="sidebar__list-item"><span class="list-item__time">2.30</span> Design Review</li>
            <li class="sidebar__list-item"><span class="list-item__time">4.00</span> Get Groceries</li>
        </ul>
    </aside>


    <section class="calendar__days">
        <section class="calendar__top-bar">
            <span class="top-bar__days">Mon</span>
            <span class="top-bar__days">Tue</span>
            <span class="top-bar__days">Wed</span>
            <span class="top-bar__days">Thu</span>
            <span class="top-bar__days">Fri</span>
            <span class="top-bar__days">Sat</span>
            <span class="top-bar__days">Sun</span>
        </section>

        <section class="calendar__week">
            <div class="calendar__day inactive">
                <span class="calendar__date">30</span>

            </div>
            <div class="calendar__day inactive">
                <span class="calendar__date">31</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">1</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">2</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">3</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">4</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">5</span>

            </div>
        </section>

        <section class="calendar__week">
            <div class="calendar__day">
                <span class="calendar__date">6</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">7</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">8</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">9</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">10</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">11</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">12</span>

            </div>
        </section>

        <section class="calendar__week">
            <div class="calendar__day">
                <span class="calendar__date">13</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">14</span>

            </div>
            <div class="calendar__day today">
                <span class="calendar__date">15</span>
                <span class="calendar__task calendar__task--today">4 items</span>
            </div>
            <div class="calendar__day">
                <span class="calendar__date">16</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">17</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">18</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">19</span>

            </div>
        </section>

        <section class="calendar__week">
            <div class="calendar__day">
                <span class="calendar__date">20</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">21</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">22</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">23</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">24</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">25</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">26</span>

            </div>
        </section>

        <section class="calendar__week">
            <div class="calendar__day">
                <span class="calendar__date">27</span>

            </div>
            <div class="calendar__day">
                <span class="calendar__date">28</span>

            </div>
            <div class="calendar__day inactive">
                <span class="calendar__date">1</span>
             >
            </div>
            <div class="calendar__day inactive">
                <span class="calendar__date">2</span>

            </div>
            <div class="calendar__day inactive">
                <span class="calendar__date">3</span>

            </div>
            <div class="calendar__day inactive">
                <span class="calendar__date">4</span>

            </div>
            <div class="calendar__day inactive">
                <span class="calendar__date">5</span>

            </div>
        </section>
    </section>

</main>
<!-- partial -->

</body>
</html>
