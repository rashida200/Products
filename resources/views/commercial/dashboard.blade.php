<x-app-layout>
    <div class="min-h-screen flex flex-col items-center justify-center bg-[#FAF5F1] text-[#292F36] p-6">
        <!-- Titre avec animation -->
        <h1 class="text-4xl font-bold animate-fadeIn text-[#292F36] mb-4">
            Hello Commercial 👋
        </h1>
        
        <!-- Paragraphe stylisé -->
        <p class="text-lg text-[#8F7A6E] animate-fadeIn delay-100">
            Bienvenue dans votre espace de travail.
        </p>

        <!-- Bouton d’action -->
        <a href="#" class="mt-6 px-6 py-3 bg-[#A41F13] text-[#FAF5F1] rounded-lg shadow-lg 
            transition-transform transform hover:scale-105 hover:bg-[#8F7A6E]">
            Accéder à mon espace
        </a>
    </div>

    <!-- Animation -->
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fadeIn {
            animation: fadeIn 1s ease-out;
        }
    </style>
</x-app-layout>
