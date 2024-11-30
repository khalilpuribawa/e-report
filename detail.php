<?php
$id = htmlspecialchars($_GET['id']);
$report = query("SELECT reports.*, users.name as user_name FROM reports
                     JOIN users ON reports.user_id = users.id
                     WHERE reports.id='$id'
                     ");
$report = $report[0];
?>

<div x-data="{ isOpen: true }" class="relative flex ">

    <div x-show="isOpen" x-transition:enter="transition duration-300 ease-out"
        x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100"
        x-transition:leave="transition duration-150 ease-in"
        x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100"
        x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
        class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                class="relative inline-block p-4 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl sm:max-w-sm rounded-xl dark:bg-gray-900 sm:my-8 sm:w-full sm:p-6">
                <div class="flex items-center justify-center mx-auto">
                    <?php if ($report['thumbnail']): ?>
                    <img class="h-full rounded-lg" src="<?= "../assets/upload/" . $report['thumbnail'] ?>"
                        alt="<?= $report['thumbnail'] ?>" />
                    <?php endif ?>
                </div>

                <div class="mt-5 text-center">
                    <h3 class="text-lg font-medium text-gray-800 dark:text-white" id="modal-title">
                        <?= $report['user_name'] ?>
                    </h3>
                    <h3 class="text-lg font-thin text-gray-800 dark:text-white" id="modal-title">
                        <?= $report['created_at'] ?>
                    </h3>

                    <p class="mt-2 text-gray-500 dark:text-gray-400">
                        <?= $report['title'] ?>
                    </p>
                    <h1 class="mb-3 font-normal text-white" fill="currentColor">
                        <?= html_entity_decode(html_entity_decode(strval($report['content']))) ?></h1>
                </div>


            </div>
        </div>
    </div>
</div>