<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php");
$reports = query("SELECT reports.*, users.name as user_name FROM reports 
                    JOIN users ON reports.user_id = users.id ORDER BY created_at ASC");
header('refresh:3;Content-Type: text/html; charset=UTF-8');

?>

<div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4 ">
    <!-- Main Content Cards (Left Side) -->
    <div class="col-span-3 grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Cek apakah ada data dalam reports -->
        <?php if (empty($reports)) : ?>
        <h1 class="font-bold text-3xl text-black">Data kosong</h1>
        <?php else : ?>
        <!-- Loop untuk menampilkan semua laporan -->
        <?php foreach ($reports as $report) : ?>
        <?php $report['content'] = html_entity_decode(html_entity_decode(strval($report['content']))); ?>


        <div class="p-4 w-full bg-white rounded-lg shadow-md dark:bg-gray-800">
            <!-- Thumbnail -->
            <?php if (!empty($report['thumbnail'])) : ?>
            <img class="h-40 w-full object-cover rounded-lg" src="<?= "../assets/upload/" . $report['thumbnail'] ?>"
                alt="<?= $report['thumbnail'] ?>">
            <?php endif; ?>

            <!-- Detail Laporan -->
            <div class="mt-4">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white">
                    <?= htmlspecialchars($report['title']) ?>
                </h2>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Oleh: <?= htmlspecialchars($report['user_name']) ?>
                </p>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Dibuat pada: <?= htmlspecialchars($report['created_at']) ?>
                </p>
                <h1 class="mt-2 text-gray-700 dark:text-gray-300">
                    <?= html_entity_decode($report['content']) ?>
                </h1>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>