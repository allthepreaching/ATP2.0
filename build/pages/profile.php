<?php include_once '../inc/inc.header.php'; ?>

<!-- Home Page -->
<div class="flex flex-col items-center justify-start fixed h-full bg-black translate-y-16 transition-all duration-500" :class="{ 'w-full': !open, 'w-[calc(100vw-289px)] translate-x-72': open }">

    <!-- Content -->
    <div class="max-w-[1440px] h-full flex flex-row items-center justify-center gap-2 bg-black text-white">

        <!-- Profile -->
        <div class="flex flex-col items-center justify-center gap-2">
            <div class="flex flex-col items-center justify-center gap-2">
                <img src="../assets/img/profile.png" class="w-[200px] h-[200px] rounded-full" alt="Profile">
                <h1 class="text-2xl font-bold">John Doe</h1>
                <h2 class="text-sm font-medium">
                    <span class="text-[#00ff41]">Online</span>
                    <span class="text-[#00ff41]">•</span>
                    <span>Playing Valorant</span>
                </h2>

            </div>
        </div>
        