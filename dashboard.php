<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php");
$report_unsolved = query("SELECT  COUNT(status) as status FROM reports WHERE status = 0");
$report_solved = query("SELECT COUNT(status) as status FROM reports WHERE status = 1");

?>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">

    <a href="#"
        class="flex  w-full h-full bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-blue-600 dark:border-blue-500 dark:hover:bg-blue-700">
        <svg class="w-[50px] h-[100px] ml-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
            fill="currentColor">
            <!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
                d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480l0-83.6c0-4 1.5-7.8 4.2-10.8L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z" />
        </svg>
        <div class="flex flex-col">
            <h5 class="mb-2 text-xl md:text-4xl ml-3 mt-5 font-bold tracking-tight text-gray-900 dark:text-white">
                <?= $report_unsolved[0]['status'] ?>
            </h5>
            <p class="font-normal text-gray-300 text-[20px] ml-4 -mt-2">
                Laporan masuk
            </p>
        </div>
    </a>

    <a href="#"
        class="flex  w-full h-full bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-blue-900 dark:border-blue-500 dark:hover:bg-blue-800 ">
        <svg class="w-[50px] h-[100px] ml-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
            fill="currentColor">
            <!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
                d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 38.6C310.1 219.5 256 287.4 256 368c0 59.1 29.1 111.3 73.7 143.3c-3.2 .5-6.4 .7-9.7 .7L64 512c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128zM288 368a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm211.3-43.3c-6.2-6.2-16.4-6.2-22.6 0L416 385.4l-28.7-28.7c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6l40 40c6.2 6.2 16.4 6.2 22.6 0l72-72c6.2-6.2 6.2-16.4 0-22.6z" />
        </svg>
        <div class="flex flex-col">
            <h5 class="mb-2 text-xl md:text-4xl ml-3 mt-5 font-bold tracking-tight text-gray-900 dark:text-white">
                <?= $report_solved[0]['status'] ?>
            </h5>
            <p class="font-normal text-gray-300 text-[20px] ml-4 -mt-2">
                Laporan Selesai
            </p>
        </div>
    </a>

</div>

</div>